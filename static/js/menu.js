$(document).ready(function(){
    $("#menu").click(function(){
        $("#dropdownmenu").slideDown(103.1);
        $("#exit").fadeIn("fast");
        $("#menu").hide();
    });
    
    $("#exit").click(function(){
        $("#dropdownmenu").slideUp();
        $("#menu").show();
        $("#exit").hide();
    });
    
    $("#women").click(function(){
        $(".wrapper").fadeOut("slow");
        $("#women-menu").fadeIn("slow");
    });
    
    $("#women-shoes").click(function(){
        $("#women-menu").fadeOut("slow");
        $("#women-shoes-menu").fadeIn("fast");
    });
});