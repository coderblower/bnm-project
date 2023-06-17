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

function singleGalleryCarousel () {
    
  
      var $sync1 = $(".single-gallery-carousel-content-box"), // variable declaration
        //   $sync2 = $(".single-gallery-carousel-thumbnail-box"),
          flag = false,
          duration = 500;
  
          $sync1.owlCarousel({ //function for preview carousel
              items: 1,
              margin: 0,
              nav: false,
              dots: false,
              touchDrag  : false,
              mouseDrag  : false,
              
              
          })
          .on('changed.owl.carousel', function (e) {
              //var currentItem = e.item.index;
              //alert(currentItem);
              if (!flag) {
                  flag = true;
                  $sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
                  flag = false;
              }
          });
  
          $('.single-gallery-carousel-content-box').magnificPopup({ //function for magnific popup
              type: 'image',
              delegate: '.owl-item:not(.cloned) a',
              closeOnContentClick: false,
            //   removalDelay: 500,
              
              callbacks: {
                  beforeOpen: function() {
                       this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                       this.st.mainClass = this.st.el.attr('data-effect');
                  }
              },
              tLoading: 'Loading image #%curr%...',
              mainClass: 'mfp-zoom-in mfp-img-mobile',
              gallery: {
                  enabled: true,
                  navigateByImgClick: true,
                  preload: [0,1]
              },
              zoom: {
                  enabled: true,
                  duration: 300
              },
              image: {
                  tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                  titleSrc: function(item) {
                        console.log(item.el[0])
                      return item.el.attr('title') + '<small></small>';
                  }
              }
          });
      
        //   $sync2.owlCarousel({ //function for thumbnails carousel
        //       margin: 1,
        //       items: 7,
        //       nav: true,
        //       dots: false,
        //       navText:false,
        //       center: false,
        //       responsive: {
        //           0:{
        //               items:2,
        //               autoWidth: false
        //           },
        //           400:{
        //               items:3,
        //               autoWidth: false
        //           },
        //           768:{
        //               items:4,
        //               autoWidth: false
        //           }
        //       },
        //   })
        //   .on('click', '.owl-item', function () {
        //       $sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
        //   })
        //   .on('changed.owl.carousel', function (e) {
        //       if (!flag) {
        //           flag = true;    
        //           $sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
        //           flag = false;
        //       }
        //   });
    //   console.log('fired')
  }
  singleGalleryCarousel (); //FUNCTION CALLED HERE

  $(document).ready(function(){
         
    var heroSlider = $('.hero_carosel');
 
 
    heroSlider.on('initialized.owl.carousel changed.owl.carousel', function(e) {
        if (!e.namespace)  {
          return;
        }
        var carousel = e.relatedTarget;
        $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
      }).owlCarousel({   
       animateOut: 'fadeOut',
          animateIn: 'fadeIn',
          autoplay: true,
          loop:true,
          margin:0,
          nav: true,
          dots: true,
          autoHeight: false,
          mouseDrag: false,
       autoplayHoverPause:true,
          items: 1,
          navText: [
             "<i class=' owl-direction'><</i>",
             "<i class='owl-direction'>></i>"
          ]
       });
 
 
 
 
        $(".owl-item.active .tag").addClass('animated fadeInUp delay-1');
      $(".owl-item.active h2").addClass('animated fadeInUp delay-2');
      $(".owl-item.active .carsl_cnt").addClass('animated fadeInUp delay-3');
      $(".owl-item.active .carsl_btn").addClass('animated fadeInUp delay-4');
 
 
        $(".hero_carosel").on('change.owl.carousel', function(event) {
          
          var item = event.item.index-2;
          
        
          $('.tag').removeClass('animated fadeInUp delay-1');
          $('h2').removeClass('animated fadeInUp delay-2');
          $('.carsl_cnt').removeClass('animated fadeInUp delay-3');
          $('.carsl_btn').removeClass('animated fadeInUp delay-4');
          $('.owl-item').not('.cloned').eq(item).find('.tag').addClass('animated fadeInUp delay-1');
          $('.owl-item').not('.cloned').eq(item).find('h2').addClass('animated fadeInUp delay-2');
          $('.owl-item').not('.cloned').eq(item).find('.carsl_cnt').addClass('animated fadeInUp delay-3');
          $('.owl-item').not('.cloned').eq(item).find('.carsl_btn').addClass('animated fadeInUp delay-4');
 
 
 
          
       });
 
      
 });
 vb 