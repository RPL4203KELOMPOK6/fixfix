// Inisialisasi carousel hero (pertama/diatas)
$('#carousel-hero').owlCarousel({
   loop:true,
   margin:10,
   nav:true,
   navText : ['<i class="fa fa-angle-left carousel-nav-icon" aria-hidden="true"></i>','<i class="fa fa-angle-right carousel-nav-icon" aria-hidden="true"></i>'],
   dots: true,
   lazyLoad: true,
   autoplayTimeout: 7000,
 smartSpeed: 800,
   responsive:{
       0:{
           items:1
       },
   }
})
// Inisialisasi carousel quality (fade transition/tengah)

$('#carousel-review').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    navText : ['<i class="fas fa-arrow-left review-nav-icon" aria-hidden="true"></i>','<i class="fas fa-arrow-right review-nav-icon" aria-hidden="true"></i>'],
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
// Inisialisasi Carousel Produk
$('#product-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText : ['<i class="fa fa-angle-left product-nav-icon" aria-hidden="true"></i>','<i class="fa fa-angle-right product-nav-icon" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
  // INPUT NUMBER
  $('.btn-plus, .btn-minus').on('click', function(e) {
    const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
    const input = $(e.target).closest('.d-flex').find('input');
    if (input.is('input')) {
      input[0][isNegative ? 'stepDown' : 'stepUp']()
    }
  })
// MEMBUKA DROPDOWN PILIH KEMASAN DI NAVBAR
$(window).on("load resize", function() {
 if (this.matchMedia("(min-width: 768px)").matches) {
   $('.profile-nav.dropdown').hover(
       function() {
           $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
       },
       function() {
           $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
       }
   );

   $('.profile-nav.dropdown').find('.dropdown-menu').hover(
       function() {
           $(this).stop(true, true);
       },
       function() {
           $(this).stop(true, true).delay(200).fadeOut();
       }
   );
 }
});
$('#alamatbaru').click(function(){
    $('#alamatbaruform').removeAttr('disabled');;
});
$('#alamatutamaa').click(function(){
    $('#alamatbaruform').attr('disabled','disabled');
    $('#alamatbaruform').val('');
});

//VISIBILLITY SIGN IN PASSWORD TOGGLE
$( ".visibility-icon" ).click(function() {
    var inputField = $("#password-input");
    var type = $(inputField).attr("type"); 

    if( type === 'password' ){
        $(inputField).attr("type", "text");
      }else{
        $(inputField).attr("type", "password");
      } 
});

//COPY REKENING
$( ".copyrekening" ).click(function() {
   
    navigator.clipboard.writeText( $("#rekening").text()).then(function () {
        alert('Teks Berhasil di Copy')
    }, function () {
        alert('Teks Gagal di Copy')
    });
});