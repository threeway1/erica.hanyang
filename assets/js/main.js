(function($){
    $(document).ready(function(){
        $('.jumbotron > ul').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 6000,
        });
    });
    $('.jumbotron > ul').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active').addClass('action'); 
        });
    });
    $('.jumbotron > ul').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active').addClass('action'); 
        });
    });

    $(document).ready(function(){
        $('.notice ul').slick({
            dots: false,
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<button type="button" class="slick-prev"><i class="icon-left-open"><span class="sr-only">이전으로 이동</span></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="icon-right-open"><span class="sr-only">다음으로 이동</span></i></button>',
            responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1
                }
            }
            ]
        });
    });
})(jQuery);