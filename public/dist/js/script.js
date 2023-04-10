document.addEventListener('DOMContentLoaded', function () {
  new Splide('#slider1', {
    perPage: 4,
    pagenation: false
  }).mount();

  new Splide('#slider2', {
    perPage: 4,
    pagenation: false
  }).mount();
});