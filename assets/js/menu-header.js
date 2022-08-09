$(document).ready(function(){

    let scrollTop = 0;
    $(window).scroll(function(){
       let scroll = $(this).scrollTop();

       if (scroll === 0){
            document.getElementById("header-items").style.bottom = "0px"

       } else if(scroll > scrollTop) {
            document.getElementById("header-items").style.bottom = "-150px"

       }else{
            document.getElementById("header-items").style.bottom = "0px"

       }
       scrollTop = scroll;
    });

})