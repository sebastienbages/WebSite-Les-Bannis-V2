const loader = document.querySelector('.loader');
const content = document.querySelector('.content');

window.addEventListener('load', () => {
    loader.classList.add('fondu-out');
    content.classList.remove('load-content');
})