

document.querySelector('#pope').onclick = () => {
  document.querySelector('.view').style.marginLeft="0%";
  document.querySelector('.view').style.transition="all linear 0.3s";
}

document.querySelector('.view span').onclick = () => {
  document.querySelector('.view').style.marginLeft="-100%";
  document.querySelector('.view').style.transition="all linear 0.3s";
}

document.querySelectorAll('.view li').forEach(li => {
  li.onclick = () => {
       document.querySelector('.view').style.marginLeft="-100%";
       document.querySelector('.view').style.transition="all linear 0.3s";
  }
});



document.querySelector('#sign').onclick = () => {
  document.querySelector('.proceed').style.display="flex";
  document.querySelector('.proceed').style.transition="all 0.2s ease";
  document.querySelector('.proceed').style.zIndex = "2";
  document.querySelector('.direct').style.display="none";

}

  // password view
document.querySelector('#hide').onclick = () => {
  document.querySelector('#view').style.display="contents";
  document.querySelector('#hide').style.display = "none";
  document.querySelector('#password').type="text";
}
document.querySelector('#view').onclick = () => {
  document.querySelector('#view').style.display="none";
  document.querySelector('#hide').style.display = "contents";
  document.querySelector('#password').setAttribute("type", "password");
}



