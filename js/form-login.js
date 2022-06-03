$(document).ready(function(){

    let btnLogin = document.getElementById('icon-login')
    let bgLogin = document.getElementById('bg-form-login')
    let formLogin = document.getElementById('form-login')
    let btnCerrarLogin = document.getElementById('btn-cerrar-login')

    btnLogin.addEventListener('click', function(){

        bgLogin.style.display = 'block'
        document.body.style.overflow = 'hidden'
        formLogin.style.right = '0px'

    });

    bgLogin.addEventListener('click', function(){

        bgLogin.style.display = 'none'
        document.body.style.overflow = 'unset'
        formLogin.style.right = '-600px'
    });

    btnCerrarLogin.addEventListener('click', function(){

        bgLogin.style.display = 'none'
        document.body.style.overflow = 'unset'
        formLogin.style.right = '-600px'
    });

})