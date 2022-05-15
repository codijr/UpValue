$(window).scroll(() => { 
    if($(window).scrollTop() != 0) {
        $('header').css('background-color', '#284c80');
        $('header').css('border-bottom', '1px solid #DFE6EF');
    } else {
        $('header').css('background-color', 'transparent');
        $('header').css('border-bottom', '0');
    }
});

$('.navbar-toggler').click(() => {
    if($('.navbar-toggler').attr('aria-expanded') == 'true') {
        $('header').css('background-color', '#284c80');
    }
    console.log('ok');
})

$('.navbar-toggler').click(() => {
    if($('.navbar-toggler').attr('aria-expanded') == 'false') {
        $('header').css('background-color', 'transparent');
    }
})