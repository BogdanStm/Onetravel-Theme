window.onload = () => {
    const mobileToggleOpen = document.getElementById('mobile-toggle--open');
    const mobileToggleClose = document.getElementById('mobile-toggle--close');
    const mobileMenu = document.getElementById('menu-mobile');

    mobileToggleClose.style.display='none';
    
    mobileToggleOpen.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        mobileToggleClose.style.display='block';
    });

    mobileToggleClose.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        mobileToggleClose.style.display='none';
    });
}