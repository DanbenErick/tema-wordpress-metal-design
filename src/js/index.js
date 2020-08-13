
const swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
});

const modal = document.querySelector(".modal")
// modalContenedor
cerrarModal.addEventListener('click', _ => {
    modal.style.display = "none"
})
abrirModal.addEventListener('click', () => {
    modal.style.display = "flex"
})