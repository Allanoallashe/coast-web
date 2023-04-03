
const dropDown = document.getElementById('drop-down');
const subMenu = document.getElementById('sub-menu');
const Browse = document.getElementById('browse');



dropDown.addEventListener('click', () => {
  
  if (subMenu.style.marginTop =='-500px') {
    subMenu.style.marginTop = '0';
    subMenu.style.transition = 'all 0.3s ease';
  }
  else {
    subMenu.style.marginTop = '-500px';
    subMenu.style.transition = 'all 0.3s ease';
  }

})

Browse.addEventListener('click', () => {
  subMenu.style.marginTop = '-500px';
  subMenu.style.transition = 'all 0.3s ease';
})



const menu = document.getElementById('menu');
const close = document.getElementById('cross');
const list = document.getElementById('list');


menu.addEventListener('click', () => {

    close.style.display = 'contents';
    menu.style.display = 'none';
  list.style.marginTop = '0';
  document.getElementById('list').style.transition = 'all 0.6s ease';
})

close.addEventListener('click', () => {

    close.style.display = 'none';
    menu.style.display='contents';
  list.style.marginTop = '-500px';
  document.getElementById('list').style.transition = 'all 0.6s ease';
})



var x = window.matchMedia("(max-width: 1089px)");
myFunction(x)
x.addListener(myFunction) 

function myFunction(x) {
  if (x.matches) { 
    menu.style.display = 'contents';
    list.style.marginTop='-500px';
  } else {
    close.style.display = 'none';
    menu.style.display = 'none';
  }
  
}

// var y = window.matchMedia("(min-width: 1090px)");
// myFunction2(y)
// y.addListener(myFunction2)

// function myFunction2(y) {
//   if (y.matches) {
//     list.style.display='contents';
//   } else {
//     list.style.marginTop='-500px';
//   }
// }





const view = document.getElementById('view');
const slash = document.getElementById('slash');
const field = document.getElementById('passwordNewUser');

view.addEventListener('click', () => {
    view.style.display = 'none';
    slash.style.display='contents';
    document.getElementById('passwordNewUser').type='text';
    field.style.fontSize='16px';
})
slash.addEventListener('click', () => {
    view.style.display = 'contents';
    slash.style.display='none';
  document.getElementById('passwordNewUser').type = 'password';
  field.style.fontSize='25px';
})


list.addEventListener('click', () => {
  list.style.marginTop = '-500px';
  menu.style.display='contents';
  close.style.display = 'none';
  document.getElementById('list').style.transition = 'all 0.6s ease';
})


