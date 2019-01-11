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
    
    <main id="content-wrap" class="introduction">
        <section class="job-assignment">
            <div class="container">
                <div class="section-header">
                    <h3>업무분장</h3>
                </div>
                <div class="section-content">
                    <nav class="tab-menu">
                        <ul>
                            <li><a href="/introduction/group.php">조직도</a></li>
                            <li class="active"><a href="/introduction/job_assignment.php">업무분장</a></li>
                        </ul>
                    </nav>
                    <div class="table-responsive">
                        <table class="table" summary="조직 및 직급 정보에 관한 표">
                            <caption class="sr-only">조직도 정보</caption>
                            <thead>
                                <tr>
                                    <th colspan="2">조직</th>
                                    <th>직급</th>
                                    <th>이름</th>
                                    <th>주요업무</th>
                                    <th>전화번호</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="6">소프트웨어<br>융합원</td>
                                    <td rowspan="6">SW<br>교육센터</td>
                                    <td>소프트웨어융합원장<br>(SW교육센터장 겸직)</td>
                                    <td>이동호</td>
                                    <td>센터업무총괄</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>특임교수</td>
                                    <td>최기환</td>
                                    <td>
                                        <ul>
                                            <li>SW가치확산</li>
                                            <li>프로그램 개발 및 관리</li>
                                            <li>핵심교양강의</li>
                                            <li>기초필수강의</li>
                                        </ul>
                                    </td>
                                    <td><a href="tel:0314004882">031-400-4882</a></td>
                                </tr>
                                <tr>
                                    <td>교육전담교수</td>
                                    <td>조상욱</td>
                                    <td>
                                        <ul>
                                            <li>SW가치확산</li>
                                            <li>프로그램 개발 및 관리</li>
                                            <li>핵심교양강의</li>
                                            <li>기초필수강의</li>
                                        </ul>
                                    </td>
                                    <td><a href="tel:0314001095">031-400-1095</a></td>
                                </tr>
                                <tr>
                                    <td>교육전담교수</td>
                                    <td>이신희</td>
                                    <td>
                                        <ul>
                                            <li>SW가치확산</li>
                                            <li>프로그램 개발 및 관리</li>
                                            <li>핵심교양강의</li>
                                            <li>기초필수강의</li>
                                        </ul>
                                    </td>
                                    <td><a href="tel:0314001093">031-400-1093</a></td>
                                </tr>
                                <tr>
                                    <td>행정직원</td>
                                    <td>박연진</td>
                                    <td>
                                        <ul>
                                            <li>행정업무</li>
                                            <li>예산관리</li>
                                        </ul>
                                    </td>
                                    <td><a href="tel:0314004881">031-400-4881</a></td>
                                </tr>
                                <tr>
                                    <td>사무직원</td>
                                    <td>박정수</td>
                                    <td>PC실 관리 및 대여</td>
                                    <td><a href="tel:0314004881">031-400-4881</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>