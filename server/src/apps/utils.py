import math
import requests
from django.core.management.base import BaseCommand
from src.apps.solar_system_api.models import Planet, Moon
from skyfield.api import load

planets = load('de421.bsp')

planet_names = {
    'Mercury': 'mercury',
    'Venus': 'venus',
    'Earth': 'earth',
    'Mars': 'mars',
    'Jupiter': 'jupiter barycenter',
    'Saturn': 'saturn barycenter',
    'Uranus': 'uranus barycenter',
    'Neptune': 'neptune barycenter'
}

ts = load.timescale()
t = ts.now()

sun = planets['sun']

PLANET_URLS = [
    'https://api.le-systeme-solaire.net/rest/bodies/mercury',
    'https://api.le-systeme-solaire.net/rest/bodies/venus',
    'https://api.le-systeme-solaire.net/rest/bodies/earth',
    'https://api.le-systeme-solaire.net/rest/bodies/mars',
    'https://api.le-systeme-solaire.net/rest/bodies/jupiter',
    'https://api.le-systeme-solaire.net/rest/bodies/saturn',
    'https://api.le-systeme-solaire.net/rest/bodies/uranus',
    'https://api.le-systeme-solaire.net/rest/bodies/neptune'
]

class UpdatePlanetData(BaseCommand):
    help = 'Fetch planets data from the Solar System API and update the database.'

    def handle(self, *args, **kwargs):
        for url in PLANET_URLS:
            response = requests.get(url)
            if response.status_code == 200:
                data = response.json()
                self.update_or_create_planet(data)
            else:
                self.stdout.write(self.style.ERROR(f"Failed to fetch data from {url}"))

    def update_or_create_planet(self, data):
        planet_id = planet_names.get(data['englishName'], None)
        if planet_id:
            planet_skyfield = planets[planet_id]
            astrometric = sun.at(t).observe(planet_skyfield)
            ecliptic = astrometric.ecliptic_position()
            x, y, z = ecliptic.m
            distance = math.sqrt(x**2 + y**2 + z**2)

            planet, created = Planet.objects.update_or_create(
                id=data['id'],
                defaults={
                    'name': data['name'],
                    'english_name': data['englishName'],
                    'is_planet': data['isPlanet'],
                    'semimajor_axis': data['semimajorAxis'],
                    'perihelion': data['perihelion'],
                    'aphelion': data['aphelion'],
                    'eccentricity': data['eccentricity'],
                    'inclination': data['inclination'],
                    'mass_value': data['mass']['massValue'],
                    'mass_exponent': data['mass']['massExponent'],
                    'vol_value': data['vol']['volValue'],
                    'vol_exponent': data['vol']['volExponent'],
                    'density': data['density'],
                    'gravity': data['gravity'],
                    'escape_velocity': data['escape'],
                    'mean_radius': data['meanRadius'],
                    'equatorial_radius': data.get('equatorialRadius', 0),
                    'polar_radius': data.get('polarRadius', 0),
                    'flattening': data.get('flattening', 0),
                    'sideral_orbit': data.get('sideralOrbit'),
                    'sideral_rotation': data.get('sideralRotation'),
                    'axial_tilt': data.get('axialTilt', 0),
                    'average_temperature': data.get('avgTemp', 0),
                    'main_anomaly': data.get('mainAnomaly', 0),
                    'arg_periapsis': data.get('argPeriapsis', 0),
                    'long_asc_node': data.get('longAscNode', 0),
                    'body_type': data.get('bodyType', 0),
                    'x': x,
                    'y': y,
                    'z': z
                }
            )

            moons_data = data.get('moons', [])
            if moons_data:
                for moon_data in moons_data:
                    moon, _ = Moon.objects.get_or_create(name=moon_data['moon'], defaults={'url': moon_data['rel']})
                    planet.moons.add(moon)

            planet.save()
            self.stdout.write(self.style.SUCCESS(f"Successfully {'created' if created else 'updated'} planet {planet.name}"))
