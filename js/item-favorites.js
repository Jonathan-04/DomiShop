$(document).ready(function(){

    let btnFavorites = document.getElementById('icon-favorite')
    let favorites = document.getElementById('items-my-favorites')

    btnFavorites.addEventListener('click', function(){

        if(favorites.style.display === 'block'){
            favorites.style.display = 'none'
        }else{
            favorites.style.display = 'block'
        }

    })


})