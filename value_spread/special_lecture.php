<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link rel="stylesheet" href="/comm/css/sub.css">
<link rel="stylesheet" href="/comm/css/value_spread.css">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    
    <div class="page-header value-spread">
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
    
    <main id="content-wrap" class="courtesy-training">
        <section class="special-lecture">
            <div class="container">
                <div class="section-header">
                    <h3>SW특강</h3>
                </div>
                <div class="section-content">
                    <article>
                        <div class="article-header">
                            <h4>SW특강</h4>
                            <p>4차 산업혁명 시대에 맞는 인재 양성의 일환으로 인공지능, 빅데이터처리, 보안, 정보검색 등 다양한 분야의 전문가를 초청하여 현재 SW분야의 동향 파악을 목적으로 함</p>
                        </div>
                        <figure>
                            <img src="/comm/images/value_spread/img_xs_special.jpg" class="img-fluid d-lg-none" alt="SW특강">
                            <img src="/comm/images/value_spread/img_xl_special.jpg" class="img-fluid d-none d-lg-block" alt="SW특강">
                        </figure>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>