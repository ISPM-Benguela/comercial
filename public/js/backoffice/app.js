$(document).ready(function(){
    $('.produto').owlCarousel({
        loop: true,
        autoplay: true,
        nav: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    $('.slide').owlCarousel({
        loop: true,
        autoplay: true,
        animateOut: 'fadeOut',
        items: 1,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('.owl-f').owlCarousel({
        loop: true,
        autoplay: true,
        nav: true,
        animateOut: 'fadeOut',
        
    });
    
});

