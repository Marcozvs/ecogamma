//Adicionando animação quando usar o scroll

//Selecionando elementos com atributo anime
const target = document.querySelectorAll('[data-anime]');

//Armazenando string para o JavaScript usar como classe para realizar a animação
const animationClass = 'animate';

function animeScroll(){
    const windowTop = window.pageYOffset + (window.innerHeight * 3) / 4;
    target.forEach(function(element){
        if((windowTop) > element.offsetTop){
            element.classList.add(animationClass);
        }else{
            element.classList.remove(animationClass);
        }
    })
}

animeScroll();

if(target.length){
    window.addEventListener('scroll', function(){
        animeScroll();
    })
}