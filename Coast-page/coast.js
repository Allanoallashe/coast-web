
const drop = document.getElementById('list');
const item = document.getElementById('browse1');
const cross = document.getElementById('cross');
const menu = document.getElementsByClassName('more');

drop.addEventListener('click', () => {
  if (menu.style.top == "-600px") {
    menu.style.top="-60px";
  }
  else {
    menu.style.top="-600px";
  }
})
