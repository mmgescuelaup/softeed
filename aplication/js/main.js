$(document).ready(function(){
    
    $("header .container .left nav .navigation .nav").hover(function(){
        $(this).find("a").toggleClass("selected");
    });
    
});