$(document).on('click', '.add-favorite', function () {

   let id = this.id;

   $.ajax({
        
        url: 'dataBase/add-favorito.php',
        type: 'POST',
        data: {id:id},
        dataType: 'json',

        success:function(data){

          let response = data['response'];

          if(response === 'error'){
            alert("Tienes que iniciar sesión para poder agregarlo a favoritos");
          }else{
            let icon = data['icon'];
            $('#add_'+id).html(icon);
          }
        }
   });
});