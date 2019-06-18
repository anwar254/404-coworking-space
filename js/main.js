// Humberger menu animation

// Animation class
class Menu{

  // Getting all the selectors
  constructor(){
    this.ham = ham
    this.menuTop = menuTop;
    this.menuMiddle = menuMiddle;
    this.menuBottom = menuBottom;
    this.drawer = drawer;
  }

  init(){
    this.bindUIactions();
  }

  bindUIactions(){
    this.ham.addEventListener('click', event =>{
      event.preventDefault();
      this.activateMenu(event);
      if (this.drawer.classList == 'open'){
        this.drawer.classList.remove('open');
      }else{
        this.drawer.classList.toggle('open');
      }
    })
  }

  // Adding classes
  activateMenu(){
    this.menuTop.classList.toggle('menu-top-click');
    this.menuMiddle.classList.toggle('menu-middle-click');
    this.menuBottom.classList.toggle('menu-bottom-click');
  }
}

const ham = document.querySelector('.menu');
const menuTop = document.querySelector('.menu-top');
const menuMiddle = document.querySelector('.menu-middle');
const menuBottom = document.querySelector('.menu-bottom');
const drawer = document.querySelector('.co-menu-drower');
const menu = new Menu();
menu.init();
