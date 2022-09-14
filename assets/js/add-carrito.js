$(document).on('click', '.add-car', function () {

    let id = this.id;
 
    $.ajax({
         
         url: 'dataBase/add-carrito.php',
         type: 'POST',
         data: {id:id},
         dataType: 'json',
 
         success:function(data){
 
           let response = data['responseCarrito'];
 
           if(response === 'error'){
             alert("Tienes que iniciar sesión para poder agregarlo al carrito");
           }else{
             let icon = data['icon'];
             $('#addCar_'+id).html(icon);
           }
         }
    });
 });