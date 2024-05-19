const sidebar = document.getElementById('sidebar');
const menuPlaceholder = document.getElementById('menu-placeholder');
const openMenuBTN = document.getElementById('openMenuBTN');
const closeMenuBtn = document.getElementById('closeMenuBtn');


menuPlaceholder.addEventListener('mouseenter', () => {
    sidebar.classList.add('show');
    menuPlaceholder.classList.add('hide');
});

sidebar.addEventListener('mouseleave', () => {
    sidebar.classList.remove('show');
    menuPlaceholder.classList.remove('hide');
});

openMenuBTN.addEventListener('click', () => {
    toggleMenu();
});
closeMenuBtn.addEventListener('click', () => {
    toggleMenu();
});

function toggleMenu() {
    sidebar.classList.toggle('show');
};
