$( function(){

    $('.hero').slick({
        slidesToShow: 1
    });

     // Footer Copyright Year
     var today = new Date;
     var theYear = today.getFullYear();
     document.getElementById('thisYear').innerHTML = theYear;

    $(window).scroll(function(){
        if($(window).scrollTop() > 60){
            $('header').addClass('fixed-header');
        }else{
            $('header').removeClass('fixed-header');
        }
    });


    if( $(window).scrollTop() > 60 ){
        $('header').addClass('fixed-header');
    }else{
        $('header').removeClass('fixed-header');
    }

});