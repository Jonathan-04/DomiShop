//Creditos video tutorial a: https://youtu.be/_hlepJa-L7U | ITIC Tutoriales

$(function(){

    get_productos();

    $(".check-filter").on("click", function(){
        
        get_productos();

    });

});

function get_productos(){

    let form = $("#form-check-filters");

    $.ajax({

        type: "POST",
        url: "dataBase/filtro.php",
        data: form.serialize(),
        success: function(data){

            $("#products").html("");

            $.each(JSON.parse(data), function(key, Productos){
                
                let row = ""+
                "<article class='cards'>"+
                        "<a class='container-cards-img' href='detalles-producto.php?referencia="+Productos.referencia+"'>"+
                            "<img src=dataBase/imagen_productos/"+Productos.imagen1+' class="img-front" alt="img-product" />'+
                            "<img src='' class='img-back' alt='img-product' />"+
                        "</a>"+
                        "<h3>"+Productos.titulo+"</h3>"+
                        "<p>$ "+Productos.precio+"</p>"+
                    "<div class='options-cards'>"+
                        "<p id='add-favorite'><span><img src='assets/icons/favorite.svg' alt='favorite-item' /> </span></p>"+
                        "<p><span><img src='assets/icons/shopping_cart.svg' alt='shopping_cart-item' /> </span></p>"+
                    "</div>"+
                "</article>"               
                
                $("#products").append(row);
            });


        }
    })
}

