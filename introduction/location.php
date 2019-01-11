<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link rel="stylesheet" href="/comm/css/sub.css">
<link rel="stylesheet" href="/comm/css/introduction.css">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    
    <div class="page-header introduction">
        <div class="page-intro">
            <div class="container">
                <small>HANYANG UNIVERSITY ERICA</small>
                <h2>센터소개</h2>
            </div>
        </div>
        <nav class="snb-nav">
            <ol>
                <li class="home">
                    <a href="/"><i class="icon-home"><span class="sr-only">메인으로이동</span></i></a>
                </li>
                <li>
                    <div class="dropdown snb-menu">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            센터소개
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-1">
                            <a href="#">센터소개</a>
                            <a href="#">SW소양교육</a>
                            <a href="#">SW가치확산</a>
                            <a href="#">커뮤니티</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown lnb-menu">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            비전&amp;목표
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-2">
                            <a href="#">비전&amp;목표</a>
                            <a href="#">조직구성</a>
                            <a href="#">연혁</a>
                            <a href="#">찾아오시는 길</a>
                        </div>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    
    <main id="content-wrap" class="introduction">
        <section class="location">
            <div class="container">
                <div class="section-header">
                    <h3>찾아오시는길</h3>
                </div>
                <div class="section-content">
                    <figure>
                        <img src="/comm/images/introduction/img_xs_location.jpg" class="img-fluid d-lg-none" alt="약도">
                        <img src="/comm/images/introduction/img_xl_location.jpg" class="img-fluid d-none d-lg-block" alt="약도">
                    </figure>
                    <article class="location-guide">
                        <div class="article-header">
                            <h4>위치안내</h4>
                        </div>
                        <ul class="dot-list">
                            <li>
                                <dl>
                                    <dt>주 소</dt>
                                    <dd>
                                        <address>(15588) 경기 안산시 상록구 한양대학로 55 한양대학교 컨퍼런스홀 지하1층 소프트웨어교육센터</address>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>전 화 번 호</dt>
                                    <dd><a href="tel:0314004881">031-400-4881</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>팩 스 번 호</dt>
                                    <dd>031-400-1009</dd>
                                </dl>
                            </li>
                        </ul>
                    </article>
                    <article class="directions">
                        <div class="article-header">
                            <h4>오시는 방법</h4>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="information">
                                    <h5 class="sub-title">버스 이용 시</h5>
                                    <figure class="d-none d-md-block ico-bus">
                                        <img src="/comm/images/introduction/ico_bus.png" alt="버스 아이콘">
                                    </figure>
                                    <div class="details">
                                        <h6>한양대 정문 앞</h6>
                                        <dl class="bus">
                                            <dt class="blue-bus">간선</dt>
                                            <dd>
                                                <ul>
                                                    <li>간선121번</li>
                                                    <li>302번</li>
                                                    <li>N62(심야)</li>
                                                </ul>
                                            </dd>
                                            <dt class="green-bus">지선</dt>
                                            <dd>
                                                <ul>
                                                    <li>지선2012번</li>
                                                    <li>2014번</li>
                                                    <li>2016번</li>
                                                    <li>2222번</li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="information space">
                                    <h5 class="sub-title">지하철 이용 시</h5>
                                    <figure class="d-none d-md-block ico-subway">
                                        <img src="/comm/images/introduction/ico_subway.png" alt="지하철 아이콘">
                                    </figure>
                                    <div class="details">
                                        <dl class="subway">
                                            <dt class="line-two">2호선</dt>
                                            <dd>2호선 한양대역 2번 출구 / 2호선 용답역</dd>
                                            <dt class="bundang-line">분당선</dt>
                                            <dd>분당선 왕십리역</dd>
                                            <dt class="gyeongui-line">경의선</dt>
                                            <dd>경의선 왕십리역</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>