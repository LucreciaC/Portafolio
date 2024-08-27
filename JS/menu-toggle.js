function toggleMenu() {
    const menuIcon = document.querySelector('.menuIcon');
    const navbarMobile = document.querySelector('.navbarMobile');

    // Alterna la clase activa en el ícono del menú
    menuIcon.classList.toggle('active');

    // Alterna la visibilidad del menú móvil
    navbarMobile.classList.toggle('active');
}




