function handleMenuClick() {
    const eleClass = document.getElementById('hamburger-wrap').classList;
    const menuClass = document.getElementById('burger-menu');

    // Check if 'open' already in class of the hamburger-wrap
    if (eleClass.contains('open')) {
        // if yes, meaning the burger menu is opened, then close it.
        eleClass.remove('open');
        menuClass.style.display = 'none';
        menuClass.style.opacity = 0;
    } else {
        // if not, meaing the burger menu is not opened, then open it.
        eleClass.add('open');
        menuClass.style.display = 'flex';
        menuClass.style.opacity = 1;
    }

}