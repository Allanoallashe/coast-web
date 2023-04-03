
const dropDown = document.getElementById('drop-down');
const subMenu = document.getElementById('sub-menu');
const Browse = document.getElementById('browse');



dropDown.addEventListener('click', () => {
  
  if (subMenu.style.opacity =='1') {
    subMenu.style.opacity = '0';
  }
  else {
    subMenu.style.opacity = '1';
  }

})

Browse.addEventListener('click', () => {
  subMenu.style.opacity='0';
})



const menu = document.getElementById('menu');
const close = document.getElementById('cross');
const list = document.getElementById('list');


menu.addEventListener('click', () => {

    close.style.display = 'contents';
    menu.style.display = 'none';
    list.style.marginTop='0';
})

close.addEventListener('click', () => {

    close.style.display = 'none';
    menu.style.display='contents';
    list.style.marginTop='-500px';
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


