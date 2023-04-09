
const Drop = document.getElementById('drop');
const item1 = document.querySelector('.item1');
const item2 = document.querySelector('.item2');
const item3 = document.querySelector('.item3');
const item4 = document.querySelector('.item4');
const item5 = document.querySelector('.item5');
const item6 = document.querySelector('.item6');
const Cross = document.getElementById('cross');
const Menu = document.getElementById('more');
const list = document.getElementById('list');


item1.addEventListener('click', () => {
  Menu.style.marginTop = "-600px";
  list.style.backgroundColor = "transparent";
    Drop.style.color="#fff";
})
item2.addEventListener('click', () => {
  Menu.style.marginTop = "-600px";
})
item3.addEventListener('click', () => {
  Menu.style.marginTop = "-600px";
})
item4.addEventListener('click', () => {
  Menu.style.marginTop = "-600px";
})
item5.addEventListener('click', () => {
  Menu.style.marginTop = "-600px";
})
item6.addEventListener('click', () => {
  Menu.style.marginTop = "-600px";
})

Drop.addEventListener('click', () => {
  Menu.style.marginTop = "0";
  Menu.style.transition = "0.6s all ease";
})

Cross.addEventListener('click', () => {
  document.getElementById('more').style.marginTop = "-600px";
  Cross.style.transition="0.3s all ease";
})

Cross.addEventListener('click', () => {
  if (list.style.backgroundColor == "#caffed") {
    list.style.backgroundColor = "transparent";
  }
  else{
    list.style.backgroundColor = "transparent";
    Drop.style.color="white";
  }
})
list.addEventListener('mouseenter', function (mouseenter) {
  list.style.backgroundColor = "#caffed";
    Drop.style.color="#060152";
})
list.addEventListener('mouseleave', function (mouseleave) {
  list.style.backgroundColor = "transparent";
    Drop.style.color="#fff";
})


// $(document).ready(function(){$("img").click(function(){this.requestFullscreen()})});
