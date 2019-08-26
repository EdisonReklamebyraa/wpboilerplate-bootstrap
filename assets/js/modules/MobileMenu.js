class MobileMenu {

  constructor() {
    this.menu = document.getElementById('hamburger');
    this.events();
  }

  events() {
    this.menu.addEventListener('click', (ev) => {
      console.log(ev.target);
    });
  }
}

export default MobileMenu;