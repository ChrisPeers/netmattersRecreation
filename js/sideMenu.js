const website = $('.website'); 
const menuBtn = $('#head-button')
const homepage = $('.home'); 

homepage.on('click', function (event) {
    if  ( event.target.classList.contains('main-button') && !website.hasClass('active') ) {   
        website.addClass('active');
        $( 'html' ).css('overflow', 'hidden');

    } else if ( event.target.classList.contains('website') && website.hasClass('active') ) {
        website.removeClass('active');
        $( 'html' ).css('overflow', 'auto');
    };
});