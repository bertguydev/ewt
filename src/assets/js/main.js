$( function(){

    $('.hero').slick({
        slidesToShow: 1
    });

     // Footer Copyright Year
     var today = new Date;
     var theYear = today.getFullYear();
     document.getElementById('thisYear').innerHTML = theYear;

});