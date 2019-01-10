<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link rel="stylesheet" href="/comm/css/sub.css">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    
    <div class="page-header">
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
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            센터소개
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="#">센터소개</a>
                            <a href="#">SW소양교육</a>
                            <a href="#">SW가치확산</a>
                            <a href="#">커뮤니티</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown lnb-menu">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            비전&amp;목표
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
    
    <main id="content-wrap">
        <section class="">
            <div class="container">
                <div class="section-header">
                    <h3>비전&amp;목표 </h3>
                </div>
                <div class="section-content">
                    <!-- tab-menu -->
                    <nav class="tab-menu">
                        <ul>
                            <li class="active"><a href="#">조직도</a></li>
                            <li><a href="#">업무분장</a></li>
                        </ul>
                    </nav>
                    
                    <br><br>
                    
                    <!-- table -->
                    <div class="table-responsive">
                        <table class="table" summary="summary">
                            <caption class="sr-only">caption</caption>
                            <thead>
                                <tr>
                                    <th>연도</th>
                                    <th>운영목표</th>
                                    <th>주요 내용</th>
                                    <th>예상 성과</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2018년</td>
                                    <td>SW중심대학 개시</td>
                                    <td>전교생 SW융합교육 12과목 운영</td>
                                    <td>융합교육 기반의 SW융합형 인재 양성</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <br><br>
                    
                    <!-- article-header -->
                    <div class="article-header">
                        <h4>비전공자 SW특화교육</h4>
                    </div>
                    
                    <br><br>
                    
                    <!-- sub-title -->
                    <h5 class="sub-title">인터랙티브 코딩 실습교육</h5>
                    
                    <br><br>
                    
                    <!-- dot-list -->
                    <ul class="dot-list">
                        <li>온라인 개방 시행</li>
                        <li>비전공자 대상 Level2 교과목(3개) mooc 개발</li>
                        <li>전공자 대상 Level3 교과목(2개) mooc 개발</li>
                        <li>고교생 대상으로 공개 후 고교·대학 연계 심화과정(up)으로 운영</li>
                    </ul>
                    
                    <br><br>
                    
                    <ul class="check-list">
                        <li>전공 계열별 특성을 고려한 SW기초교육 의무화</li>
                        <li>소프트웨어의 이해(공통)</li>
                        <li>컴퓨팅 사고와 문제해결 (인문/사회/예체능)</li>
                        <li>이공학프로그래밍 기초(과학기술/공학)</li>
                    </ul>
                    <ul class="check-list light">
                        <li>전공 계열별 특성을 고려한 SW기초교육 의무화</li>
                        <li>소프트웨어의 이해(공통)</li>
                        <li>컴퓨팅 사고와 문제해결 (인문/사회/예체능)</li>
                        <li>이공학프로그래밍 기초(과학기술/공학)</li>
                    </ul>
                    
                    <br><br>
                    
                    <ol class="circle-list">
                        <li>수강생별 코딩 환경 설치와 구성 어려움</li>
                        <li>전용 실습실 외의 공간에서 수업 어려움</li>
                        <li>수강생별 관리(진도, 시험, 채점) 어려움</li>
                    </ol>
                    
                    <br><br>
                    
                    <ol class="circle-list light">
                        <li>수강생별 코딩 환경 설치와 구성 어려움</li>
                        <li>전용 실습실 외의 공간에서 수업 어려움</li>
                        <li>수강생별 관리(진도, 시험, 채점) 어려움</li>
                    </ol>
                    
                    <br><br>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>