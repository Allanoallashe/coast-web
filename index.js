
const dropDown = document.getElementById('drop-down');
const subMenu = document.getElementById('sub-menu');


dropDown.addEventListener('click',() => {
  
  if (subMenu.style.opacity =='1') {
        subMenu.style.opacity='0';
  }
  else {
    subMenu.style.opacity='1';
  }

})

