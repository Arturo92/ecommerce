$(document).ready(function(){
    $("#filter-id").click(function(){
        $("#filter").slideDown();
    });
    
    $("#filter-back").click(function(){
        $("#filter").slideUp();
    });
    
   $("#filter-apply").click(function(){
        $("#listview").hide();
        });
});