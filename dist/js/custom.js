// Owl carould setup 
$('.ff').owlCarousel({
    items:1,
    loop:true,
    // margin:10,
    nav:true,
    // stagePadding:30,
    smartSpeed:1350,
    
    dots:false,
    autoHeight:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:1
        }
    }
})

// end wol carusol setup 


    
  
      var $sync1 = $(".ff2"), // variable declaration
        //   $sync2 = $(".single-gallery-carousel-thumbnail-box"),
          flag = false,
          duration = 500;
  
          $sync1.owlCarousel({ //function for preview carousel
              items: 1,
              margin: 10,
              nav: true,
              dots: false,
              touchDrag  : false,
              mouseDrag  : false,
              Infinity:true,
              responsive:{
                0:{
                    items:5
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
              
              
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
  
  

  
