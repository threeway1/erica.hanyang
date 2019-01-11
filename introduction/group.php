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
        <section class="group">
            <div class="container">
                <div class="section-header">
                    <h3>조직도</h3>
                </div>
                <div class="section-content">
                    <nav class="tab-menu">
                        <ul>
                            <li class="active"><a href="/introduction/group.php">조직도</a></li>
                            <li><a href="/introduction/job_assignment.php">업무분장</a></li>
                        </ul>
                    </nav>
                    <figure>
                        <img src="/comm/images/introduction/img_xs_group.jpg" class="img-fluid d-lg-none d-xl-none" alt="조직도">
                        <img src="/comm/images/introduction/img_xl_group.jpg" class="img-fluid d-none d-lg-block d-xl-block" alt="조직도">
                        <figcaption class="sr-only">
                            <ol>
                                <li>
                                    <h1>소프트웨어 융합원 (소프트웨어 융합원장)</h1>
                                    <h2>소프트웨어 교육센터 (소프트웨어 교육센터장)</h2>
                                    <ul>
                                        <li>특임교수</li>
                                        <li>교육전담교수</li>
                                        <li>행정직원</li>
                                        <li>사무직원</li>
                                    </ul>
                                </li>
                            </ol>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>