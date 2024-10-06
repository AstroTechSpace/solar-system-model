<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <div class="bot" id="bot">
        <img class="start" id="start-button" src="img/play.svg" />
        <img class="valli" src="img/valli.png" alt="" srcset="">
        <div class="info-valli">
            <p class="text-one">Hi, user! I'm Wall-E, you may already know me. I'm here to help you navigate this site. Let's start!</p>
            <p class="text-one">Click the "Play" button to start the animation, and hover over the planets to see more information.</p>
        </div>
    </div>

    <div class="back">
        <img class="pause" id="pause-button" src="img/pause.svg" />
        <img class="close hidden" id="close" src="img/close.svg" />
        <a href="./3dmain.html"><img class="view-3d" src="img/3D.png" /></a>
        <div class="gradient">
            <div class="sun" id="sun">
                <div class="mercury" id="mercury"></div>
                <div class="venus" id="venus"></div>
                <div class="earth" id="earth">
                    <div class="moon" id="moon"></div>
                </div>
                <div class="mars" id="mars"></div>
                <div class="jupiter" id="jupiter"></div>
                <div class="saturn" id="saturn">
                    <div class="ring"></div>
                </div>
                <div class="uranus" id="uranus"></div>
                <div class="neptune" id="neptune"></div>
            </div>

            <div class="trajectory-mercury"></div>
            <div class="trajectory-venus"></div>
            <div class="trajectory-earth"></div>
            <div class="trajectory-mars"></div>
            <div class="trajectory-jupiter"></div>
            <div class="trajectory-saturn"></div>
            <div class="trajectory-uranus"></div>
            <div class="trajectory-neptune"></div>

            <div class="bgT hidden" id="bgT">
                <div class="container hidden" id="info">
                    <div class="earth-img">
                        <img class="earth-large" src="img/earthLarge.jpg">
                        <div class="infoEarth">
                            <p class="text-one">Earth</p>
                            <p class="text-two">The Earth is the third planet from the Sun, the densest and largest of the terrestrial planets (Mercury, Venus, Mars). It is the only body in the Universe known to man that is inhabited by living organisms. The Earth was formed about 4.54 billion years ago, and soon it acquired a natural satellite, the Moon.</p>
                            <p class="text-two">Life is believed to have originated on Earth about 4.25 billion years ago. The biosphere changed the atmosphere, created the ozone layer, which, together with the magnetic field, protects the Earth from solar radiation. 70.8% of the surface is occupied by the World Ocean, and the rest is continents and islands. Water, necessary for life, exists only on Earth.</p>
                            <p class="text-two">The Earth has an active internal structure: a mantle, a liquid outer core, and a solid inner core. The planet interacts with other objects in space, including the Moon and the Sun. The Earth revolves around the Sun in 365.26 days, the tilt of the axis of rotation of 23.44° causes the change of seasons. The Moon stabilizes the axis and causes the tides.</p>
                            <p class="text-two">Humanity has divided the Earth into 193 UN member states and several other political entities.</p>
                        </div>
                    </div>
                    <div class="moon-large">
                        <div class="moon-info">
                            <p class="text-one">Moon </p>
                            <p class="text-two">The Moon is the only natural satellite of the Earth. It is the closest satellite of the planet to the Sun, since the closest planets to the Sun (Mercury and Venus) do not have satellites. The second brightest object in the Earth's sky after the Sun and the fifth largest natural satellite of a planet in the Solar System. The average distance between the centers of the Earth and the Moon is 384,467 km (0.00257 AU, ~30 Earth diameters)</p>
                            <p class="text-two">The Moon appeared about 4.5 billion years ago, a little later than the Earth. The most popular hypothesis is that the Moon was formed from fragments left after the "Giant Collision" between the Earth and Theia, a planet similar in size to Mars.</p>
                            <p class="text-two">To date, the Moon is the only extraterrestrial astronomical object that has been visited by humans.</p>
                        </div>
                    </div>
                    <div class="asteroidBennu">
                        <div class="infoBennu">
                            <p class="text-one">Asteroid (101955) Bennu</p>
                            <p class="text-two">(101955) Bennu (Latin: Bennu; originally — 1999 RQ36) is a small near-Earth asteroid from the Apollo group. It was discovered as part of the LINEAR asteroid search project at the Socorro Observatory and on April 25, 2013, it was named in honor of the ancient Egyptian deity — the Bennu bird, a symbol of the resurrection of Osiris.</p>
                            <p class="text-two">According to the results of the initial calculations for 100 years ahead, the chances of a collision with Earth were very small. A group of scientists led by Oscar Arratia from the University of Valladolid made repeated, more accurate calculations, taking into account, among other things, the Yarkovsky effect. According to their data, the probability of an asteroid falling on Earth is 1/4000, and the date of a possible fall is between 2169 and 2199. When falling to Earth, its speed will be 12.86 km / s. NASA called this asteroid the most potentially dangerous object for Earth.</p>
                        </div>
                    </div>
                    <div class="asteroid1950">
                        <div class="info1950">
                            <p class="text-one">Asteroid (29075) 1950 DA</p>
                            <p class="text-two">Asteroid (29075) 1950 DA is a near-Earth asteroid from the Apollo group, crossing the orbits of Earth and Mars. It was discovered on February 22, 1950 by astronomer Karl Wirtanen at the Lick Observatory. At the moment, it is considered one of the most dangerous asteroids for Earth. The probability of its collision with Earth on March 16, 2880 is 1 in 300, but this is most likely due to observational errors. In the event of an impact, the consequences will be catastrophic, with changes in the biosphere and climate of the planet.</p>
                        </div>
                    </div>
                </div>
                <div class="container1 hidden" id="info1">
                    <div class="mercury-img">
                        <img class="mercury-large" src="img/mercury.jpg">
                        <div class="info-mercury">
                            <p class="text-one">Mercury</p>
                            <p class="text-two">Mercury is the smallest planet in the Solar System and the closest to the Sun. It is named after the Roman god Mercury, as it moves across the sky faster than any other planet. Its orbital period around the Sun is 87.97 Earth days, the shortest among the planets.</p>
                            <p class="text-two">Mercury never moves more than 28° away from the Sun, so it is only visible during twilight. Like Venus and the Moon, it shows phases, with a period of about 116 days.</p>
                            <p class="text-two">Its axial tilt is the smallest of all the planets, but its orbit is the most elongated. At perihelion, its distance from the Sun is 66% of the distance at aphelion. The surface is covered with craters, similar to the Moon, indicating no geological activity in recent billions of years. Temperatures range from −173 °C at night to +427 °C during the day, while the polar regions remain cold. Mercury has no moons.</p>
                            <p class="text-two">It was explored by the Mariner 10 spacecraft in 1974–1975 and MESSENGER in 2008–2015. In 2025, the BepiColombo mission is scheduled to arrive at Mercury.</p>
                        </div>
                    </div>
                </div>

                <div class="container2 hidden" id="info2">
                    <div class="venus-img">
                        <img class="venus-large" src="img/venus.jpg">
                        <div class="info-venus">
                            <p class="text-one">Venus</p>
                            <p class="text-two">Venus is the second planet from the Sun and the sixth largest in the Solar System, belonging to the terrestrial planet family along with Mercury, Earth, and Mars. It is named after the ancient Roman goddess of love. In terms of mass and size, Venus is considered Earth's "sister." A year on Venus lasts 224.7 Earth days, and its rotation period is about 243 Earth days, making it the planet with the longest rotation period in the Solar System. Venus rotates in the opposite direction to most planets.</p>
                            <p class="text-two">Venus has no natural satellites and is the third brightest object in the sky after the Sun and the Moon, reaching an apparent magnitude of −4.6m.</p>
                            <p class="text-two">Venus has a dense atmosphere composed of over 96% carbon dioxide, with surface pressure 92 times greater than that of Earth. The average surface temperature is 735 K (462 °C), making it the hottest planet in the Solar System, despite Mercury being closer to the Sun. Thick clouds of sulfuric acid obscure the surface, creating a greenhouse effect.</p>
                            <p class="text-two">As one of the brightest objects in the sky, Venus has been an important element in human culture. It was the first planet recorded in the early second millennium BC and was the primary target for early interplanetary exploration. The first spacecraft to reach its vicinity was Mariner 2 in 1962, and Venus 7 was the first mission to land on its surface in 1970. Detailed maps of the surface emerged from the radar survey conducted by the Magellan spacecraft in 1991. There are ongoing projects to explore Venus using rovers, but harsh surface conditions pose challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="container3 hidden" id="info3">
                    <div class="mars-img">
                        <img class="mars-large" src="img/mars.jpg">
                        <div class="info-mars">
                            <p class="text-one">Mars</p>
                            <p class="text-two">Mars is the fourth planet from the Sun and the seventh largest in the Solar System, belonging to the terrestrial planet family along with Mercury, Venus, and Earth. Named after the Roman god of war, Mars is known as the Red Planet due to its reddish surface, which is rich in the mineral maghemite.</p>
                            <p class="text-two">Mars is visible to the naked eye from Earth, with a maximum apparent magnitude of −2.94. It has two small irregularly shaped moons, Phobos and Deimos, named after the Greek terms for "fear" and "terror." Mars has a mass about 10.7% that of Earth and a diameter roughly half of Earth’s. A Martian year lasts 687 Earth days, and it experiences seasons similar to Earth, but their lengths vary due to its elliptical orbit.</p>
                            <p class="text-two">The Martian atmosphere is thin, with surface pressure about 160 times less than Earth's. Dust storms occur frequently, significantly impacting temperature distribution. The average temperature is approximately 210 K (−63 °C), with daily temperatures ranging from 184 K to 242 K (−89 to −31 °C).</p>
                            <p class="text-two">Mars features various geological formations, including impact craters, volcanoes, valleys, deserts, and polar ice caps. Evidence of past water flow, such as dry riverbeds and certain minerals, suggests that liquid water existed on the planet in significant geological periods.</p>
                        </div>
                    </div>
                </div>
                <div class="container4 hidden" id="info4">
                    <div class="jupiter-img">
                        <img class="jupiter-large" src="img/jupiter.jpg">
                        <div class="info-jupiter">
                            <p class="text-one">Jupiter</p>
                            <p class="text-two">Jupiter is the largest planet in the Solar System and the fifth from the Sun, classified as a gas giant alongside Saturn. Known since ancient times, Jupiter is named after the chief god of ancient Roman mythology.</p>
                            <p class="text-two">The planet exhibits significant atmospheric phenomena, including storms, lightning, and auroras, with scales far exceeding those on Earth. A notable feature is the Great Red Spot, a giant storm observed since the 17th century.</p>
                            <p class="text-two">Jupiter has at least 95 moons, with the four largest—Io, Europa, Ganymede, and Callisto—discovered by Galileo Galilei in 1610.</p>
                            <p class="text-two">Jupiter has been studied using ground-based and orbital telescopes, as well as eight NASA spacecraft since the 1970s, including Pioneer, Voyager, Galileo, and Juno.</p>
                            <p class="text-two">Visible to the naked eye as one of the brightest objects in the night sky, Jupiter is a popular target for amateur astronomers, who have made significant discoveries such as the Shoemaker-Levy 9 comet collision in 1994.</p>
                            <p class="text-two">Additionally, Jupiter’s strong gravitational field helps protect Earth from impacts by large celestial bodies.</p>
                        </div>
                    </div>
                </div>
                <div class="container5 hidden" id="info5">
                    <div class="saturn-img">
                        <img class="saturn-large" src="img/saturn1.png">
                        <div class="info-saturn">
                            <p class="text-one">Saturn</p>
                            <p class="text-two">Saturn is the sixth planet from the Sun and the second-largest in the Solar System, classified as a gas giant. Named after the Roman god of agriculture, Saturn's symbol is ♄.</p>
                            <p class="text-two">The planet is primarily composed of hydrogen, with helium and trace amounts of water, methane, ammonia, and heavy elements. Its internal structure includes a small core of iron, nickel, and ice, surrounded by layers of metallic and gaseous hydrogen. Saturn's atmosphere appears calm from space but can experience wind speeds of up to 1,800 km/h, surpassing those on Jupiter. It has a planetary magnetic field, which is weaker than Jupiter's but extends about 1 million kilometers toward the Sun.</p>
                            <p class="text-two">Saturn is renowned for its prominent ring system, primarily made of ice particles and dust. It has 146 known moons, with Titan being the largest, surpassing Mercury in size and possessing a dense atmosphere and methane lakes.</p>
                            <p class="text-two">The Cassini spacecraft, launched in 1997, studied Saturn's rings, atmosphere, and magnetosphere, completing its mission in September 2017 by entering the planet's atmosphere.</p>
                        </div>
                    </div>
                </div>
                <div class="container6 hidden" id="info6">
                    <div class="uranus-img">
                        <img class="uranus-large" src="img/uranus1.png">
                        <div class="info-uranus">
                            <p class="text-one">Uranus</p>
                            <p class="text-two">Uranus is the seventh planet from the Sun, the third largest by diameter, and the fourth by mass. Discovered by William Herschel in 1781, it was the first planet identified with a telescope.</p>
                            <p class="text-two">Unlike the gas giants Jupiter and Saturn, Uranus, along with Neptune, is categorized as an "ice giant," primarily composed of water ice and other volatile substances rather than metallic hydrogen. Its atmosphere consists mainly of hydrogen and helium, with traces of methane, resulting in the coldest planetary atmosphere in the Solar System, reaching temperatures as low as 49 K (−224 °C). Uranus features a layered cloud structure, with water at the bottom and methane at the top.</p>
                            <p class="text-two">Uranus has a ring system, a magnetic field, and 28 known moons. Its unique axial tilt causes it to rotate on its side, alternating its exposure to the Sun.</p>
                            <p class="text-two">In 1986, the Voyager 2 spacecraft provided close-up images of Uranus, revealing a relatively bland appearance without the storm activity seen on other gas giants. Recent ground observations have indicated seasonal changes and increased weather activity as Uranus approaches its equinox, with wind speeds reaching up to 250 m/s (900 km/h).</p>
                        </div>
                    </div>
                </div>
                <div class="container7 hidden" id="info7">
                    <div class="neptune-img">
                        <img class="neptune-large" src="img/neptune.jpg">
                        <div class="info-neptune">
                            <p class="text-one">Neptune</p>
                            <p class="text-two">Neptune is the eighth and farthest planet from the Sun in the Solar System, with a mass exceeding that of Earth by 17.2 times. It was discovered on September 23, 1846, through mathematical calculations, and its largest moon is Triton. Neptune, along with Uranus, is classified as an "ice giant," distinct from the gas giants Jupiter and Saturn. Its atmosphere primarily consists of hydrogen and helium, with a high content of water, ammonia, and methane, giving the planet its blue color.</p>
                            <p class="text-two">Neptune's atmosphere experiences the strongest winds in the Solar System, reaching speeds of up to 600 m/s, while surface temperatures can drop to −220 °C. The internal temperature of the planet can reach 5000–7100 °C. Neptune has a faint ring system, confirmed by Voyager 2 in 1989. On July 12, 2011, one Neptunian year had elapsed since the planet's discovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js.js" defer></script>

</body>

</html>
