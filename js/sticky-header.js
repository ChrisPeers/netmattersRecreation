$(document).ready(function() {
    var previousScroll = 0,
        headerOrgOffset = $('#sticky-head').offset().top + 195;
    
    // $('#header-wrap').height($('#header').height());

    $(window).scroll(function() {
        var currentScroll = $(this).scrollTop();
        console.log(currentScroll + " and " + previousScroll + " and " + headerOrgOffset);
        if(currentScroll > headerOrgOffset) {
            if (currentScroll > previousScroll) {
                $('#sticky-head').slideUp();
            } else {
                $('#sticky-head').slideDown();
                $('#sticky-head').addClass('fixed');
            }
        } else {
             $('#sticky-head').removeClass('fixed');   
        }
        previousScroll = currentScroll;
    });
    
});