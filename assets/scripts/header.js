$(window).scroll(() => {
    if($(window).scrollTop() != 0) {
        $('header').css('border-bottom', '1px solid #DFE6EF');
    } else {
        $('header').css('border-bottom', '0');
    }
});