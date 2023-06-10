// Owl carould setup 

$('.owl-carousel').owlCarousel({
    animateOut: 'fadeOut',
    items:1,
    loop:true,
    margin:10,
    nav:true,
    stagePadding:30,
    smartSpeed:1350,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

// end wol carusol setup 