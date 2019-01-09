<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link rel="stylesheet" href="/comm/css/main.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>

    <div id="visual" class="jumbotron">
        <ul>
            <li class="first">
                <div class="details">
                    <div class="slogan">
                        <small>HANYANG UNIVERSITY ERICA</small>
                        <h2>소프트웨어 교육센터</h2>
                        <p>
                            미래 신산업을 주도할 SW융합형 인재 양성 및<br>
                            SW중심사회를 이끌어 나갈 능력자를 양성합니다.
                        </p>
                    </div>
                    <div class="btn-area d-none d-lg-block">
                        <p>
                            <a href="#" class="btn btn-lg" role="button">센터소개바로가기</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="second">
                <div class="details">
                    <div class="slogan">
                        <small>HANYANG UNIVERSITY ERICA</small>
                        <h2>소프트웨어 교육센터</h2>
                        <p>
                            미래 신산업을 주도할 SW융합형 인재 양성 및<br>
                            SW중심사회를 이끌어 나갈 능력자를 양성합니다.
                        </p>
                    </div>
                    <div class="btn-area d-none d-lg-block">
                        <p>
                            <a href="#" class="btn btn-lg" role="button">센터소개바로가기</a>
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <main id="content-wrap">
        <article class="program">
            <div class="backdrop"></div>
            <ol>
                <li class="quality-education">
                    <div class="container">
                        <figure>
                            <img src="/comm/images/main/img_xs_program01.jpg" class="img-fluid d-xl-none" alt="소프트웨어 소양교육">
                            <img src="/comm/images/main/img_xl_program01.jpg" class="img-fluid d-none d-xl-block" alt="소프트웨어 소양교육">
                            <figcaption>01</figcaption>
                        </figure>
                        <div class="details">
                            <h3><span>SW</span> 소양교육</h3>
                            <p>
                                SW특성화대학 사업을 추진하면서 예비 대학생을 대상으로 한 SW기초교육을 2015년 1월부터 실시하고 있으며, SW중심대학 사업을 통해 확대 실시할 계획입니다.
                            </p>
                            <div class="btn-area">
                                <a href="#" class="btn btn-more" role="button">자세히 보기</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="value-spread">
                    <div class="container">
                        <div class="details">
                            <h3><span>SW</span> 소양교육</h3>
                            <p>
                                4차 산업혁명 시대에 맞는 인재 양성의 일환으로 인공지능, 빅데이터처리, 보안, 정보검색 등 다양한 분야의 전문가를 초청하여 현재 SW분야의 동향 파악을 목적으로 합니다.
                            </p>
                            <div class="btn-area">
                                <a href="#" class="btn btn-more" role="button">자세히 보기</a>
                            </div>
                        </div>
                        <figure>
                            <img src="/comm/images/main/img_xs_program02.jpg" class="img-fluid d-xl-none" alt="소프트웨어 가치확산">
                            <img src="/comm/images/main/img_xl_program02.jpg" class="img-fluid d-none d-xl-block" alt="소프트웨어 가치확산">
                            <figcaption>02</figcaption>
                        </figure>
                    </div>
                </li>
            </ol>
        </article>
        <article class="notice">
            <div class="container">
                <ul class="notice-list">
                    <li>
                        <div class="content">
                            <div class="notice-img">
                                <img src="/comm/images/main/img_notice01.jpg" class="img-fluid" alt="공지사항 이미지">
                            </div>
                            <div class="details">
                                <strong>NOTICE</strong>
                                <p>소프트웨어 교육센터 공지사항 입니다.</p>
                                <span class="date">2018-12-01</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <div class="notice-img">
                                <img src="/comm/images/main/img_notice02.jpg" class="img-fluid" alt="공지사항 이미지">
                            </div>
                            <div class="details">
                                <strong>NOTICE</strong>
                                <p>소프트웨어 교육센터 공지사항 입니다.</p>
                                <span class="date">2018-12-01</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <div class="notice-img">
                                <img src="/comm/images/main/img_notice03.jpg" class="img-fluid" alt="공지사항 이미지">
                            </div>
                            <div class="details">
                                <strong>NOTICE</strong>
                                <p>소프트웨어 교육센터 공지사항 입니다.</p>
                                <span class="date">2018-12-01</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
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
                $('.notice-list').slick({
                    dots: false,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
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
    </script>
</body>
</html>