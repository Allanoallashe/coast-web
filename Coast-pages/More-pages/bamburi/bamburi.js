

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



const map = document.getElementById('mapi');
const bright = document.getElementById('sun');
const dark = document.getElementById('moon');


dark.addEventListener('click', () => {
  map.style.filter= 'invert(100%)';
})
bright.addEventListener('click', () => {
  map.style.filter="invert(0%)";
})



const zip = document.getElementById('zip');
const poper = document.getElementById('pope')
const display = document.getElementById('display');
const lister = document.getElementById('lister');
document.querySelectorAll('.closer a').forEach(close => {
  li.onclick = () => {
      display.style.marginLeft="100%";
    }
});

poper.addEventListener('mousedown', () => {
  display.style.marginLeft = "0%";
  display.style.transition="all 0.3s linear";
});
zip.addEventListener('mousedown', () => {
  display.style.marginLeft = "-100%";
  display.style.transition="all 0.3s linear";
});


document.querySelectorAll('.main img').forEach(Image => {
  Image.onclick = () => {
    document.querySelector('.popup-image').style.display = "block";
    document.querySelector('.popup-image img').src = Image.getAttribute('src');
  }
});
document.querySelector('.popup-image span').onclick = () => {
  document.querySelector('.popup-image').style.display = "none";
}


