/*

H
E L L
O

*/

console.log("H" + '\n' + "E L L" + '\n' + "O");

// Make SVG follow cursor

$(document).bind('mousemove', function(e){
    $('#cursor').css({
        top: e.pageY - $("#cursor").height()/2,
        left: e.pageX - $("#cursor").width()/2
    });
});

// Control burger menu states / Control Cursor States

$(document).ready(function(){
    
    var burgerActive = false;

    $("#burger-button").hover(function(){
        if (!burgerActive) {
            $(this).css({ fill: "var(--grey)" });
            $("#cursor").toggleClass("cursor-south");
        }

        if(burgerActive){
            $(this).css({ fill: "var(--black)" });
            $("#cursor").toggleClass("cursor-north");
        }
    }, function(){
        if (!burgerActive) {
            $(this).css({ fill: "var(--black)" });
            $("#cursor").removeClass("cursor-south");
            $("#cursor").removeClass("cursor-north");
        }

        if(burgerActive){
            $(this).css({ fill: "var(--grey)" });
            $("#cursor").removeClass("cursor-south");
            $("#cursor").removeClass("cursor-north");
        }
    });    

    $("#burger-button").click(function(){
        if (!burgerActive) {
            $("nav").toggleClass("nav-open");
            burgerActive = true;
        } else {
            $("nav").toggleClass("nav-open");
            burgerActive = false;
        }
    });
    
    $("a").hover(function(){
        $("#cursor").toggleClass("cursor-east");
    });
});