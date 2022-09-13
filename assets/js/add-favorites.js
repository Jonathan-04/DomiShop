$(document).on('click', '.add-favorite', function () {
    // your function here
   let id = this.id;

   $.ajax({
        
        url: 'dataBase/add-favorito.php',
        type: 'POST',
        data: {id:id},
        dataType: 'json',

        success:function(data){
          let icon = data['icon'];
          $('#add_'+id).html(icon);
        }
   });
});