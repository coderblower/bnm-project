// Owl carould setup 

$('.owl-carousel').owlCarousel({
    items:1,
    loop:true,
    margin:10,
    nav:true,
    stagePadding:30,
    smartSpeed:1350,
    margin: 40,
    dots:false,
    autoHeight:true,
    responsive:{
        0:{
            items:2
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