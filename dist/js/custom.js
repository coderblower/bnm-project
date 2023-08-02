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


    
  
      var sync1 = $(".ff2"), // variable declaration
        //   $sync2 = $(".single-gallery-carousel-thumbnail-box"),
          flag = false,
          duration = 500;
  
          sync1.owlCarousel({ //function for preview carousel
              items: 1,
              margin: 10,
              nav: true,
              dots: false,
              touchDrag  : false,
              mouseDrag  : false,
              loop:true,
            
              autoplay:true,
              autoplayTimeout:1500,
              autoplayHoverPause:true,
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
          .on('changed.owl.carousel', function (e) {
              //var currentItem = e.item.index;
              //alert(currentItem);
              if (!flag) {
                  flag = true;
                  // $sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
                  flag = false;
              }
          });
          $('.ff2').on('click',function(){
            sync1.trigger('stop.owl.autoplay')
        })
          function hasClass(element, className) {
            return (' ' + element.className + ' ').indexOf(' ' + className+ ' ') > -1;
        }
  
          $('.single-gallery-carousel-content-box').magnificPopup({ //function for magnific popup
              type: 'image',
              delegate: '.owl-item:not(.cloned) a',
              closeOnContentClick: false,
            //   removalDelay: 500,
              
              callbacks: {
                  beforeOpen: function() {
                       this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                       this.st.mainClass = this.st.el.attr('data-effect');
                  },
                  elementParse: function(item) {
                    let videoEnabled = hasClass(item.el[0], 'video-link')
                    // the class name
                    // console.log(item)
                    if(videoEnabled) {
                      item.type = 'iframe';
                    } else {
                      item.type = 'image';
                    }
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
    new Vue({
        el: "#app",
        data: {
            categories: [
              'cat1',
              'cat2',
              'cat3'
          ],
          previews: [
            {cat: 'cat1', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat1', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat1', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat2', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat2', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat2', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat2', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat3', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat3', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat3', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat3', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat3', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat3', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
            {cat: 'cat3', url:'https://placehold.co/600x400', cap:'lorem ispsum loarem ipsum loream '},
          ],
          selectedCat: 'all',
        },
        methods: {
            filter(selection) {
              this.selectedCat = selection;
          }
        },
        mounted() {
            this.previews = _.shuffle(this.previews);
        }
      })



    let yourNavigation = $(".menu");
    let stickyDiv = " sticky";
    var elm = $('#photo-filter');
    let mounted = false;
    let elmoffset = elm.offset().top;
    
    
    


$(window).scroll(function() {
  // console.log($(this).scrollTop(), yourHeader)
  
  // console.log($(this).scrollTop(), elmoffset)
  console.log(mounted, elmoffset, $(this).scrollTop())

  if(mounted && ($(this).scrollTop() < elmoffset || $(this).scrollTop() >  elmoffset+300)) {
    yourNavigation.removeClass(stickyDiv);
    mounted = false;
    return
  }

  if(!mounted && $(this).scrollTop()>elmoffset && $(this).scrollTop()<elmoffset+300){
    yourNavigation.addClass(stickyDiv);
    mounted = true;
  }
    
  

});
  

  
