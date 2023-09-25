//current-year
const currentYear = new Date().getFullYear();
const yearElement = document.getElementById('currentYear');
yearElement.textContent = currentYear;

//mobile-burger
const burgerIcon = document.querySelector('.burger-icon');
const menu = document.querySelector('.mobile-menu');
const menuBackdrop =document.querySelector('.menu-backdrop');

burgerIcon.addEventListener('click', () => {
    burgerIcon.classList.toggle('animate');
    menu.classList.toggle('show-menu');
    menuBackdrop.classList.toggle('menu-backdrop--show')
});
function closeMenuAndReset() {
    burgerIcon.classList.remove('animate');
    menu.classList.remove('show-menu');
    menuBackdrop.classList.remove('menu-backdrop--show');
}
document.addEventListener('click', (event) => {
    // Проверяем, был ли клик вне элемента .mobile-menu и бургер-иконки
    if (!menu.contains(event.target) && !burgerIcon.contains(event.target)) {
        closeMenuAndReset(); // Закрываем меню и снимаем анимацию
    }
});

//mobile-submenu

const menuItems = document.querySelectorAll('.header-menu .menu-item');

menuItems.forEach((menuItem) => {
    const subMenu = menuItem.querySelector('.sub-menu');
    if (subMenu) {
        menuItem.classList.add('menu-item--arrow');
    }
});

