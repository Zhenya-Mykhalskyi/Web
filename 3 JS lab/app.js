$(document).ready(function(){
    let box = $('.circle');

    box.css('background-color', 'black');

    box.delay(3000).animate({
        'width' : '50px',
        'height': '50px'
    }, 1000);

    box.addClass("red-box");


    box.delay(1000).animate({
        'top' : '300px',
        'left' : '500'
    }, 1000);

    box.delay(1000).hide(2000);

    $('#btn-next').onclick()
    

})