const slides = document.querySelectorAll('.slide');
const next = document.querySelector('#avancar');
const prev = document.querySelector('#recuar');
const auto = true;
const intervalTime = 5000;
let slideInterval;

const nextSlide = () => {
  // Buscar a class presente//
  const current = document.querySelector('.presente');
  // Remove a próxima class//
  current.classList.remove('presente');
  // Procurar o próximo slide//
  if (current.nextElementSibling) {
    // Adicionar o próximo slide se for possível//
    current.nextElementSibling.classList.add('presente');
  } else {
    // Volta ao primeiro slide//
    slides[0].classList.add('presente');
  }
  setTimeout(() => current.classList.remove('presente'));
};

const prevSlide = () => {
  const current = document.querySelector('.presente');
  current.classList.remove('presente');
  if (current.previousElementSibling) {
    current.previousElementSibling.classList.add('presente');
  } else {
    slides[slides.length - 1].classList.add('presente');
  }
  setTimeout(() => current.classList.remove('presente'));
};

//Botões//

next.addEventListener('click', e => {
  nextSlide();
  //Dar reset ao tempo caso se clique no botão//
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

prev.addEventListener('click', e => {
  prevSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});


if (auto) {
  slideInterval = setInterval(nextSlide, intervalTime);
}
