// Humberger menu animation

// Animation class
class Menu{

  // Getting all the selectors
  constructor(){
    this.ham = ham
    this.menuTop = menuTop;
    this.menuMiddle = menuMiddle;
    this.menuBottom = menuBottom;
  }

  init(){
    this.bindUIactions();
  }

  bindUIactions(){
    this.ham.addEventListener('click', event =>{
      event.preventDefault();
      this.activateMenu(event);
      console.log({Menu});
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

const menu = new Menu(ham, menuTop, menuMiddle, menuBottom);
menu.init();
