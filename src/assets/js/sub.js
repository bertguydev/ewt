window.addEventListener('DOMContentLoaded', (event) => {

    // Footer Copyright Year
    var today = new Date;
    var theYear = today.getFullYear();
    document.getElementById('thisYear').innerHTML = theYear;

    window.addEventListener('scroll', function(){
        // Scroll Functionality
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        var headerElement = document.getElementsByTagName('header');
        if(scrollTop > 60){
            headerElement[0].classList.add('fixed-header');
        }else {
            headerElement[0].classList.remove('fixed-header');
        }
    });

});