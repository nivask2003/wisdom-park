$('.wisdom-life-carousel').owlCarousel({

    loop:true,
    margin:20,
    nav:true,
    dots:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    smartSpeed:900,

    responsive:{

        0:{
            items:1
        },

        600:{
            items:2
        },

        992:{
            items:3
        },

        1200:{
            items:4
        }
    }

});