
const dropDown = document.getElementById('drop-down');
const subMenu = document.getElementById('sub-menu');
const Browse = document.getElementById('browse');



dropDown.addEventListener('click', () => {
  
  if (subMenu.style.marginTop =='-600px') {
    subMenu.style.marginTop = '0';
    subMenu.style.transition = 'all 0.3s ease';
  }
  else {
    subMenu.style.marginTop = '-600px';
    subMenu.style.transition = 'all 0.3s ease';
  }

})

Browse.addEventListener('click', () => {
  subMenu.style.marginTop = '-600px';
  subMenu.style.transition = 'all 0.3s ease';
})



const menu = document.getElementById('menu');
const closer = document.getElementById('cross');
const list = document.getElementById('list');


menu.addEventListener('click', () => {

    closer.style.display = 'contents';
    menu.style.display = 'none';
    list.style.marginTop = '0';
    document.getElementById('list').style.transition = 'all 0.5s ease';
})

closer.addEventListener('click', () => {

    closer.style.display = 'none';
    menu.style.display='contents';
    list.style.marginTop = '-600px';
    document.getElementById('list').style.transition = 'all 0.5s ease';
})

list.addEventListener('click', () => {
  list.style.marginTop = '-500px';
  menu.style.display='contents';
  closer.style.display = 'none';
  document.getElementById('list').style.transition = 'all 0.6s ease';
})

const popOne = document.getElementById('fun1');
const popTwo = document.getElementById('fun2');
const pop = document.getElementById('fun');
  
popOne.addEventListener('click', () => {
    alert('Register first to proceed');
})
popTwo.addEventListener('click', () => {
    alert('Register first to proceed ');
})
  

var x = window.matchMedia("(min-width: 1089px)");
myFunction(x)
x.addListener(myFunction) 

function myFunction(x) {
  if (x.matches) { 
    menu.style.display = 'none';
    list.style.marginTop = '-600px';
    list.style.display = 'none';
    closer.style.display = 'none';
  } else {
    closer.style.display = 'none';
    menu.style.display = 'contents';
  }
  
}

// var y = window.matchMedia("(min-width: 1090px)");
// myFunction2(y)
// y.addListener(myFunction2)

// function myFunction2(y) {
//   if (y.matches) {
//     list.style.display='contents';
//   } else {
//     list.style.marginTop='-600px';
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





