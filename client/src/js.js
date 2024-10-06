let isPaused = false;

const start = document.getElementById('start-button');
const pauseButton = document.getElementById('pause-button');
let bot = document.getElementById('bot');
let bgT = document.getElementById('bgT');
let close = document.getElementById('close');
const infoDiv = document.getElementById('info');
const infoDiv1 = document.getElementById('info1');
const infoDiv2 = document.getElementById('info2');
const infoDiv3 = document.getElementById('info3');
const infoDiv4 = document.getElementById('info4');
const infoDiv5 = document.getElementById('info5');
const infoDiv6 = document.getElementById('info6');
const infoDiv7 = document.getElementById('info7');

start.addEventListener('click', () => {
  isPaused = !isPaused;
  pauseButton.src = isPaused ? 'img/play.svg' : 'img/pause.svg';
  bot.style.display = 'none'
});

pauseButton.addEventListener('click', () => {
  isPaused = !isPaused;
  pauseButton.src = isPaused ? 'img/play.svg' : 'img/pause.svg';
});

setTimeout(() => {
  isPaused = true;
  pauseButton.src = 'img/play.svg'
}, 10);

// Анимация для Меркурия
const mercury = document.getElementById('mercury');
const mercuryRadiusX = 190;
const mercuryRadiusY = 65;
const mercuryCenterX = 43;
const mercuryCenterY = 45;
let mercuryAngle = Math.random() * 2 * Math.PI;

function animateMercury() {
  if (!isPaused) {
    mercuryAngle -= 0.009;
    const x = mercuryCenterX + mercuryRadiusX * Math.cos(mercuryAngle);
    const y = mercuryCenterY + mercuryRadiusY * Math.sin(mercuryAngle);

    mercury.style.transform = `translate(${x}px, ${y}px)`;
  }

  requestAnimationFrame(animateMercury);
}

animateMercury();

mercury.addEventListener('mouseenter', () => {
  isPaused = true;
  pauseButton.style.display = 'none'
  mercury.style.transform += ' scale(3)';
  bgT.classList.remove('hidden', 'hide');
  bgT.classList.add('show');
  close.classList.remove('hidden', 'hide');
  close.classList.add('show');
  infoDiv1.classList.remove('hidden', 'hide');
  infoDiv1.classList.add('show');
});

close.addEventListener('click', () => {
  close.classList.add('hide');
  infoDiv1.classList.add('hide');
  bgT.classList.add('hide');
  isPaused = false;
  pauseButton.src = 'img/pause.svg'

  setTimeout(() => {
    infoDiv1.classList.remove('show');
    infoDiv1.classList.add('hidden');
    close.classList.remove('show');
    close.classList.add('hidden');
    bgT.classList.remove('show');
    bgT.classList.add('hidden');
    pauseButton.style.display = 'block'
  }, 800);

  mercury.style.transform = mercury.style.transform.replace(/ scale\(3\)/, '');
});

// Анимация для Венеры
const venus = document.getElementById('venus');
const venusRadiusX = 240;
const venusRadiusY = 92;
const venusCenterX = 35;
const venusCenterY = 38;
let venusAngle = Math.random() * 2 * Math.PI;

function animateVenus() {
  if (!isPaused) {
    venusAngle -= 0.008;
    const x = venusCenterX + venusRadiusX * Math.cos(venusAngle);
    const y = venusCenterY + venusRadiusY * Math.sin(venusAngle);

    venus.style.transform = `translate(${x}px, ${y}px)`;
  }

  requestAnimationFrame(animateVenus);
}

animateVenus();

venus.addEventListener('mouseenter', () => {
  isPaused = true;
  pauseButton.style.display = 'none'
  venus.style.transform += ' scale(2)';
  bgT.classList.remove('hidden', 'hide');
  bgT.classList.add('show');
  close.classList.remove('hidden', 'hide');
  close.classList.add('show');
  infoDiv2.classList.remove('hidden', 'hide');
  infoDiv2.classList.add('show');
});

close.addEventListener('click', () => {
  close.classList.add('hide');
  infoDiv2.classList.add('hide');
  bgT.classList.add('hide');
  isPaused = false;
  pauseButton.src = 'img/pause.svg'

  setTimeout(() => {
    infoDiv2.classList.remove('show');
    infoDiv2.classList.add('hidden');
    close.classList.remove('show');
    close.classList.add('hidden');
    bgT.classList.remove('show');
    bgT.classList.add('hidden');
    pauseButton.style.display = 'block'
  }, 800);

  venus.style.transform = venus.style.transform.replace(/ scale\(2\)/, '');
});

// Анимация для Земли
const earth = document.getElementById('earth');
const earthRadiusX = 290;
const earthRadiusY = 125;
const earthCenterX = 35;
const earthCenterY = 35;
let earthAngle = Math.random() * 2 * Math.PI;

function animateEarth() {
  if (!isPaused) {
    earthAngle -= 0.006;
    const x = earthCenterX + earthRadiusX * Math.cos(earthAngle);
    const y = earthCenterY + earthRadiusY * Math.sin(earthAngle);

    earth.style.transform = `translate(${x}px, ${y}px)`;
  }

  requestAnimationFrame(animateEarth);
}

animateEarth();

earth.addEventListener('mouseenter', () => {
  isPaused = true;
  pauseButton.style.display = 'none'
  earth.style.transform += ' scale(1.5)';
  bgT.classList.remove('hidden', 'hide');
  bgT.classList.add('show');
  close.classList.remove('hidden', 'hide');
  close.classList.add('show');
  infoDiv.classList.remove('hidden', 'hide');
  infoDiv.classList.add('show');
});

close.addEventListener('click', () => {
  close.classList.add('hide');
  infoDiv.classList.add('hide');
  bgT.classList.add('hide');
  isPaused = false;
  pauseButton.src = 'img/pause.svg'

  setTimeout(() => {
    infoDiv.classList.remove('show');
    infoDiv.classList.add('hidden');
    close.classList.remove('show');
    close.classList.add('hidden');
    bgT.classList.remove('show');
    bgT.classList.add('hidden');
    pauseButton.style.display = 'block'
  }, 800);

  earth.style.transform = earth.style.transform.replace(/ scale\(1\.5\)/, '');
});

// Анимация для Луны
const moon = document.getElementById('moon');
const moonRadiusX = 22;
const moonRadiusY = 22;
const moonCenterX = 9;
const moonCenterY = 10;
let moonAngle = Math.random() * 2 * Math.PI;

function animateMoon() {
  if (!isPaused) {
    moonAngle -= 0.1;
    const x = moonCenterX + moonRadiusX * Math.cos(moonAngle);
    const y = moonCenterY + moonRadiusY * Math.sin(moonAngle);

    moon.style.transform = `translate(${x}px, ${y}px)`;
  }

  requestAnimationFrame(animateMoon);
}

animateMoon();

// Анимация для Марса
const mars = document.getElementById('mars');
const marsRadiusX = 340;
const marsRadiusY = 150;
const marsCenterX = 40;
const marsCenterY = 40;
let marsAngle = Math.random() * 2 * Math.PI;

function animateMars() {
  if (!isPaused) {
    marsAngle -= 0.004;
    const x = marsCenterX + marsRadiusX * Math.cos(marsAngle);
    const y = marsCenterY + marsRadiusY * Math.sin(marsAngle);

    mars.style.transform = `translate(${x}px, ${y}px)`;
  }

  requestAnimationFrame(animateMars);
}

animateMars();

mars.addEventListener('mouseenter', () => {
  isPaused = true;
  pauseButton.style.display = 'none'
  mars.style.transform += ' scale(2)';
  bgT.classList.remove('hidden', 'hide');
  bgT.classList.add('show');
  close.classList.remove('hidden', 'hide');
  close.classList.add('show');
  infoDiv3.classList.remove('hidden', 'hide');
  infoDiv3.classList.add('show');
});

close.addEventListener('click', () => {
  close.classList.add('hide');
  infoDiv3.classList.add('hide');
  bgT.classList.add('hide');
  isPaused = false;
  pauseButton.src = 'img/pause.svg'

  setTimeout(() => {
    infoDiv3.classList.remove('show');
    infoDiv3.classList.add('hidden');
    close.classList.remove('show');
    close.classList.add('hidden');
    bgT.classList.remove('show');
    bgT.classList.add('hidden');
    pauseButton.style.display = 'block'
  }, 800);

  mars.style.transform = mars.style.transform.replace(/ scale\(2\)/, '');
});

// Анимация для Юпитера
const jupiter = document.getElementById('jupiter');
const jupiterRadiusX = 395;
const jupiterRadiusY = 180;
const jupiterCenterX = 28;
const jupiterCenterY = 30;
let jupiterAngle = Math.random() * 2 * Math.PI;

function animateJupiter() {
  if (!isPaused) {
    jupiterAngle -= 0.001;
    const x = jupiterCenterX + jupiterRadiusX * Math.cos(jupiterAngle);
    const y = jupiterCenterY + jupiterRadiusY * Math.sin(jupiterAngle);

    jupiter.style.transform = `translate(${x}px, ${y}px)`;
  }

  requestAnimationFrame(animateJupiter);
}

animateJupiter();

jupiter.addEventListener('mouseenter', () => {
  isPaused = true;
  pauseButton.style.display = 'none'
  jupiter.style.transform += ' scale(1.5)';
  bgT.classList.remove('hidden', 'hide');
  bgT.classList.add('show');
  close.classList.remove('hidden', 'hide');
  close.classList.add('show');
  infoDiv4.classList.remove('hidden', 'hide');
  infoDiv4.classList.add('show');
});

close.addEventListener('click', () => {
  close.classList.add('hide');
  infoDiv4.classList.add('hide');
  bgT.classList.add('hide');
  isPaused = false;
  pauseButton.src = 'img/pause.svg'

  setTimeout(() => {
    infoDiv4.classList.remove('show');
    infoDiv4.classList.add('hidden');
    close.classList.remove('show');
    close.classList.add('hidden');
    bgT.classList.remove('show');
    bgT.classList.add('hidden');
    pauseButton.style.display = 'block'
  }, 800);

  jupiter.style.transform = jupiter.style.transform.replace(/ scale\(1\.5\)/, '');
});

// Анимация для Сатурна
const saturn = document.getElementById('saturn');
const saturnRadiusX = 475;
const saturnRadiusY = 235;
const saturnCenterX = 35;
const saturnCenterY = 35;
let saturnAngle = Math.random() * 2 * Math.PI;

function animateSaturn() {
  if (!isPaused) {
    saturnAngle -= 0.0008;
    const x = saturnCenterX + saturnRadiusX * Math.cos(saturnAngle);
    const y = saturnCenterY + saturnRadiusY * Math.sin(saturnAngle);

    saturn.style.transform = `translate(${x}px, ${y}px)`;
  }

  requestAnimationFrame(animateSaturn);
}

animateSaturn();

saturn.addEventListener('mouseenter', () => {
  isPaused = true;
  pauseButton.style.display = 'none'
  saturn.style.transform += ' scale(1.5)';
  bgT.classList.remove('hidden', 'hide');
  bgT.classList.add('show');
  close.classList.remove('hidden', 'hide');
  close.classList.add('show');
  infoDiv5.classList.remove('hidden', 'hide');
  infoDiv5.classList.add('show');
});

close.addEventListener('click', () => {
  close.classList.add('hide');
  infoDiv5.classList.add('hide');
  bgT.classList.add('hide');
  isPaused = false;
  pauseButton.src = 'img/pause.svg'

  setTimeout(() => {
    infoDiv5.classList.remove('show');
    infoDiv5.classList.add('hidden');
    close.classList.remove('show');
    close.classList.add('hidden');
    bgT.classList.remove('show');
    bgT.classList.add('hidden');
    pauseButton.style.display = 'block'
  }, 800);

  saturn.style.transform = saturn.style.transform.replace(/ scale\(1\.5\)/, '');
});

// Анимация для Урана
const uranus = document.getElementById('uranus');
const uranusRadiusX = 545;
const uranusRadiusY = 285;
const uranusCenterX = 35;
const uranusCenterY = 35;
let uranusAngle = Math.random() * 2 * Math.PI;

function animateUranus() {
  if (!isPaused) {
    uranusAngle -= 0.0004;
    const x = uranusCenterX + uranusRadiusX * Math.cos(uranusAngle);
    const y = uranusCenterY + uranusRadiusY * Math.sin(uranusAngle);

    uranus.style.transform = `translate(${x}px, ${y}px)`;
  }

  requestAnimationFrame(animateUranus);
}

animateUranus();

uranus.addEventListener('mouseenter', () => {
  isPaused = true;
  pauseButton.style.display = 'none'
  uranus.style.transform += 'scale(2)';
  bgT.classList.remove('hidden', 'hide');
  bgT.classList.add('show');
  close.classList.remove('hidden', 'hide');
  close.classList.add('show');
  infoDiv6.classList.remove('hidden', 'hide');
  infoDiv6.classList.add('show');
});

close.addEventListener('click', () => {
  close.classList.add('hide');
  infoDiv6.classList.add('hide');
  bgT.classList.add('hide');
  isPaused = false;
  pauseButton.src = 'img/pause.svg'

  setTimeout(() => {
    infoDiv6.classList.remove('show');
    infoDiv6.classList.add('hidden');
    close.classList.remove('show');
    close.classList.add('hidden');
    bgT.classList.remove('show');
    bgT.classList.add('hidden');
    pauseButton.style.display = 'block'
  }, 800);

  uranus.style.transform = uranus.style.transform.replace(/scale\(2\)/, '');
});

// Анимация для Нептуна
let neptuneScale = 1;
const neptune = document.getElementById('neptune');
const neptuneRadiusX = 600;
const neptuneRadiusY = 325;
const neptuneCenterX = 38;
const neptuneCenterY = 38;
let neptuneAngle = Math.random() * 2 * Math.PI;

function animateNeptune() {
  if (!isPaused) {
    neptuneAngle -= 0.0001;
    const x = neptuneCenterX + neptuneRadiusX * Math.cos(neptuneAngle);
    const y = neptuneCenterY + neptuneRadiusY * Math.sin(neptuneAngle);

    neptune.style.transform = `translate(${x}px, ${y}px) scale(${neptuneScale})`;
  }

  requestAnimationFrame(animateNeptune);
}

animateNeptune();

neptune.addEventListener('mouseenter', () => {
  isPaused = true;
  pauseButton.style.display = 'none'
  neptune.style.transform += 'scale(2)';
  bgT.classList.remove('hidden', 'hide');
  bgT.classList.add('show');
  close.classList.remove('hidden', 'hide');
  close.classList.add('show');
  infoDiv7.classList.remove('hidden', 'hide');
  infoDiv7.classList.add('show');
});

close.addEventListener('click', () => {
  close.classList.add('hide');
  infoDiv7.classList.add('hide');
  bgT.classList.add('hide');
  isPaused = false;
  pauseButton.src = 'img/pause.svg'

  setTimeout(() => {
    infoDiv7.classList.remove('show');
    infoDiv7.classList.add('hidden');
    close.classList.remove('show');
    close.classList.add('hidden');
    bgT.classList.remove('show');
    bgT.classList.add('hidden');
    pauseButton.style.display = 'block'
  }, 800);

  neptune.style.transform = neptune.style.transform.replace(/scale\(2\)/, '');
});