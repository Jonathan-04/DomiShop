$(document).ready(function(){

    let filtro = document.getElementById('container-filtro')
    let bgFilter = document.getElementById('bg-filter')
    let showFilter = document.getElementById('show-filter')

    showFilter.addEventListener('click', function(){
        
        if(filtro.style.display === 'block'){
            document.body.style.overflow = 'unset'
            filtro.style.display = 'none'
            bgFilter.style.display = 'none'
            
        }else{
            document.body.style.overflow = 'hidden'
            filtro.style.display = 'block'
            filtro.style.overflow = 'scroll'
            bgFilter.style.display = 'block'
            
        }
    })

    bgFilter.addEventListener('click',function(){
        document.body.style.overflow = 'unset'
        filtro.style.display = 'none'
        bgFilter.style.display = 'none'
    })

})