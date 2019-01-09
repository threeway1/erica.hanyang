(function($){
    // mobile gnb 관련
    $(document).on('click', '.btn-nav', function(){
        $(this).addClass('btn-nav-close');
        $('body').addClass('opened');
    });
    $(document).on('click', '.btn-nav-close', function(){
        $(this).removeClass('btn-nav-close');
        $('body').removeClass('opened');
    });
    $(document).on('click', '#nav > ul > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });
    $(document).on('click', '#nav > ul > li > ul > .has-child > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });

    // web gnb 관련
    $(document).on('mouseenter focus', '#gnb-nav > ul > li', function(){
        $('body').addClass('gnb-opened');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $(document).on('mouseleave','#header', function(){
        $('body').removeClass('gnb-opened');
        $('#gnb-nav > ul > li').removeClass('active');
    });
})(jQuery);