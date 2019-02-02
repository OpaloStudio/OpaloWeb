<script>

function animateCss(element, animationName, callback) {
        const node = document.querySelector(element)
        node.classList.add('animated', animationName)

        function handleAnimationEnd() {
            node.classList.remove('animated', animationName)
            node.removeEventListener('animationend', handleAnimationEnd)

            if (typeof callback === 'function') callback()
        }

        node.addEventListener('animationend', handleAnimationEnd)
    }

function myFunction() {
    $('.hamburger-menu').toggleClass('animate');
    $('.barra').toggleClass('red');
    $('.menu').toggleClass('abierto');
    $('.info').toggleClass('desaparecer');
    //document.getElementById("barrita").style.backgroundColor = "blue";
}
</script>