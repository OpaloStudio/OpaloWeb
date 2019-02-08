<script>
/*
function animateCss(element, animationName, callback) {
    const node = document.querySelector(element)
    node.classList.add('animated', animationName)

    function handleAnimationEnd() {
        node.classList.remove('animated', animationName)
        node.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }

    node.addEventListener('animationend', handleAnimationEnd)
}*/


var pag = -1;

$(function() {
pag = pag + 1;
console.log(pag);

$('.tile1').show();
animateCss('.tile1', 'fadeInRight');
    
       
});


function mostrarVideo(){
//$('.videin').toggleClass('grande');
$('.barra').toggleClass('quitar');
$('.info').toggleClass('quitar');
}

function sumarVideo(){
    
    if (pag < 2){
        pag = pag + 1;

        switch (pag) {
    case 0:
     animateCss('.tile3', 'fadeOutLeft', function(){
        $('.tile3').hide();
        $('.tile1').show();
        animateCss('.tile1', 'fadeInRight');
     });
     
     
    console.log(pag);
    break;

    case 1:
    animateCss('.tile1', 'fadeOutLeft', function(){
        $('.tile1').hide();
        $('.tile2').show();
        animateCss('.tile2', 'fadeInRight');
     });
    
    console.log(pag);
    break;

    case 2:
    animateCss('.tile2', 'fadeOutLeft', function(){
        $('.tile2').hide();
        $('.tile3').show();
        animateCss('.tile3', 'fadeInRight');
     });
    console.log(pag);
    break;

    
}


    } else {
        pag = -1;
        console.log("aqui paso");
        sumarVideo();
    }
}  






</script>