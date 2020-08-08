class MobileMenu {

  constructor() {
    this.hamburger = document.querySelector('#hamburger');
    this.nav = document.querySelector('.navigation');
    this.events();
  }

  events() {
    this.hamburger.addEventListener('click', (ev) => {
      document.body.classList.toggle('overflow-hidden');
      document.querySelector('footer').classList.toggle('visually-hidden');
      this.nav.classList.toggle('navigation--open');
      this.hamburger.classList.toggle('hamburger--toggled');
    });
  }
}

export default MobileMenu;


