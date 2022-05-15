$(window).scroll(() => { 
    if($(window).scrollTop() != 0) {
        $('header').css('background-color', '#284c80');
    } else {
        $('header').css('background-color', 'transparent');
    }
});