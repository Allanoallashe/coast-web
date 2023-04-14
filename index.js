
  //  media query using js
// var x = window.matchMedia("(min-width: 1089px)");
// myFunction(x)
// x.addListener(myFunction) 

// function myFunction(x) {
//   if (x.matches) { 
//     menu.style.display = 'none';
//     list.style.marginTop = '-600px';
//     list.style.display = 'none';
//     closer.style.display = 'none';
//   } else {
//     closer.style.display = 'none';
//     menu.style.display = 'contents';
//   }
// }



  // the password input

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





