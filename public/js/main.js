const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

  // const nav= document.querySelector('#navbar');
  // const main=document.querySelector('#about');
  // const foto=document.querySelector('#pict');

  // main.addEventListener('mousemove',(e)=>{
  //   var moveX =(e.clientX/-9);
  //   var moveY =(e.clientY/-9);

  //   main.style.backgorundPosition = moveX+'px'+moveY+'px';
  // });