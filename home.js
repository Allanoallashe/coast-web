

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
