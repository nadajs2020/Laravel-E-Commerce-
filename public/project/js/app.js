const bar = document.getElementById('bar');
const navbar = document.getElementById('navbar');
const myClose = document.getElementById('close');

if (bar) {
    bar.addEventListener('click', () => {
        navbar.classList.add('active')
    })
}
if (myClose) {
    myClose.addEventListener('click', () => {
        navbar.classList.remove('active')
    })
}