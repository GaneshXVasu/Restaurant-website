
//---------------------------
/*Card Animation*/
//---------------------------

let content = document.querySelectorAll('.box');

let boxes=()=>{

    let screenPosition = window.innerHeight/5*4;
    content.forEach(card=>{
        
        let contentTop = card.getBoundingClientRect().top;
    
    if(contentTop < screenPosition){
        card.classList.add('active');
    
    }else{
        card.classList.remove('active');
    }
  })
}

boxes();
window.addEventListener('scroll',boxes);


//---------------------------
/*Nav Animation*/
//---------------------------

let nav = document.querySelector('.Nav');

let fixNav=()=>{
    if(window.scrollY>nav.offsetHeight+150){
        nav.classList.add('stickNav');
    }else{
        nav.classList.remove('stickNav');
    }
}
fixNav();

window.addEventListener('scroll',fixNav);

//---------------------------
/*gotop Animation*/
//---------------------------

const goTop =document.querySelector('.gotop');

window.addEventListener('scroll',()=>{
    if(window.scrollY > 60){
        goTop.classList.add('gotopshow');
      }else{
        goTop.classList.remove('gotopshow');
      } 
})































