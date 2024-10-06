document.querySelector('.circle').addEventListener('click', function() {
  const circle = document.querySelector('.circle');
  if (circle.style.animationPlayState === 'paused') {
      circle.style.animationPlayState = 'running';
  } else {
      circle.style.animationPlayState = 'paused';
  }
});
