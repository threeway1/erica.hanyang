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
        <section class="vision">
            <div class="container">
                <div class="section-header">
                    <h3>비전</h3>
                </div>
                <div class="section-content">
                    <nav class="tab-menu">
                        <ul>
                            <li class="active"><a href="/introduction/vision.php">비전</a></li>
                            <li><a href="/introduction/target.php">연차별 목표</a></li>
                        </ul>
                    </nav>
                    <figure class="vision-img">
                        <img src="/comm/images/introduction/img_xs_vision.jpg" class="img-fluid d-lg-none" alt="비전">
                        <img src="/comm/images/introduction/img_xl_vision.jpg" class="img-fluid d-none d-lg-block d-xl-block" alt="비전">
                    </figure>
                    <div class="divide-content">
                        <ul class="row">
                            <li class="col-12 col-md-6">
                                <div class="details">
                                    <h5>신산업 소프트웨어 융햡전공 신설</h5>
                                    <figure>
                                        <img src="/comm/images/introduction/img_converge.jpg" class="img-fluid" alt="신산업 소프트웨어 융햡전공 신설">
                                    </figure>
                                    <div class="summary">
                                        <dl>
                                            <dt>인문/사회/예체능 전공 + SW기술 (융합전공)</dt>
                                            <dd>
                                                <ul class="check-list">
                                                    <li>단과대학별 맞춤형 SW융합교육 플랫폼</li>
                                                    <li>SW융합 프로젝트 교과 필수</li>
                                                    <li>전담교수 밀착 멘토링</li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </li>
                            <li class="col-12 col-md-6">
                                <div class="details">
                                    <h5>전교생 SW교육</h5>
                                    <figure>
                                        <img src="/comm/images/introduction/img_sw_edu.jpg" class="img-fluid" alt="전교생 SW교육">
                                    </figure>
                                    <div class="summary">
                                        <dl>
                                            <dt class="light">계열별 맞춤형 SW교육</dt>
                                            <dd>
                                                <ul class="check-list light">
                                                    <li>예비 대학생 SW교육</li>
                                                    <li>전교생 SW기초교육</li>
                                                    <li>계열별 진로맞춤 SW코스</li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <figure class="procedure-img">
                        <img src="/comm/images/introduction/img_xs_procedure.jpg" class="img-fluid d-lg-none" alt="교육과정">
                        <img src="/comm/images/introduction/img_xl_procedure.jpg" class="img-fluid d-none d-lg-block d-xl-block" alt="교육과정">
                    </figure>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>