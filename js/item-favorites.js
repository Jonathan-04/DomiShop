
    let btnFavorites = document.getElementById('icon-favorite')
    let favorites = document.getElementById('items-my-favorites')

    let btnCarrito = document.getElementById('icon-carrito')
    let carrito = document.getElementById('items-my-cart')

    btnFavorites.addEventListener('click', function(){

        if(favorites.style.display === 'block'){
            favorites.style.display = 'none'
        }else{
            favorites.style.display = 'block'
        }

    })

    btnCarrito.addEventListener('click', function(){

        if(carrito.style.display === 'block'){
            carrito.style.display = 'none'
        }else{
            carrito.style.display = 'block'
        }
            
    })
