
const Drop = document.getElementById('drop');
const item = document.getElementById('browse1');
const Cross = document.getElementById('cross');
const Menu = document.getElementById('more');
const list = document.getElementById('list');

Drop.addEventListener('click', () => {
  Menu.style.marginTop = "0";
  Menu.style.transition = "0.6s all ease";
})

Cross.addEventListener('click', () => {
  document.getElementById('more').style.marginTop = "-600px";
  Cross.style.transition="0.3s all ease";
})

Cross.addEventListener('click', () => {
  if (list.style.backgroundColor == "aqua") {
    list.style.backgroundColor = "transparent";
  }
  else{
    list.style.backgroundColor = "transparent";
    Drop.style.color="white";
  }
})
list.addEventListener('mouseenter', function (mouseenter) {
  list.style.backgroundColor = "aqua";
    Drop.style.color="#060152";
})
list.addEventListener('mouseleave', function (mouseleave) {
  list.style.backgroundColor = "transparent";
    Drop.style.color="#fff";
})
