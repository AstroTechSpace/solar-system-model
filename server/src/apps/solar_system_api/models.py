from django.db import models


class Moon(models.Model):
    name = models.CharField(max_length=100)
    url = models.URLField()

    def __str__(self):
        return self.name


class Planet(models.Model):
    id = models.CharField(max_length=100, primary_key=True)  # Идентификатор планеты
    name = models.CharField(max_length=100)  # Имя планеты
    english_name = models.CharField(max_length=100)  # Имя на английском
    is_planet = models.BooleanField(default=True)  # Планета или нет
    moons = models.ManyToManyField(Moon, blank=True)  # Связь с моделью спутников
    semimajor_axis = models.BigIntegerField()  # Большая полуось орбиты (км)
    perihelion = models.BigIntegerField()  # Перигелий (км)
    aphelion = models.BigIntegerField()  # Афелий (км)
    eccentricity = models.FloatField()  # Эксцентриситет
    inclination = models.FloatField()  # Наклонение (градусы)
    mass_value = models.FloatField()  # Значение массы
    mass_exponent = models.IntegerField()  # Экспонента массы
    vol_value = models.FloatField()  # Значение объема
    vol_exponent = models.IntegerField()  # Экспонента объема
    density = models.FloatField()  # Плотность (г/см^3)
    gravity = models.FloatField()  # Гравитация (м/с^2)
    escape_velocity = models.IntegerField()  # Скорость убегания (м/с)
    mean_radius = models.FloatField()  # Средний радиус (км)
    equatorial_radius = models.FloatField()  # Экваториальный радиус (км)
    polar_radius = models.FloatField()  # Полярный радиус (км)
    flattening = models.FloatField()  # Сплюснутость
    sideral_orbit = models.FloatField()  # Сидерический период орбиты (дни)
    sideral_rotation = models.FloatField()  # Сидерический период вращения (часы)
    axial_tilt = models.FloatField()  # Наклон оси (градусы)
    average_temperature = models.IntegerField()  # Средняя температура (К)
    main_anomaly = models.FloatField()  # Главная аномалия (градусы)
    arg_periapsis = models.FloatField()  # Аргумент перицентра (градусы)
    long_asc_node = models.FloatField()  # Долгота восходящего узла (градусы)
    body_type = models.CharField(max_length=50, default="Planet")  # Тип тела (например, планета)
    x = models.IntegerField(verbose_name="Высота")
    y = models.IntegerField(verbose_name="Длина")
    z = models.IntegerField(verbose_name="Ширина")
    

    def __str__(self):
        return self.name

