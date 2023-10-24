<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <?php include "../include/head.php" ?>

</head>
<body class="gray"> 
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" role="main">
        <div class="intro__inner bmStyle container">
            <div class="intro__img main">
                <img srcset="../assets/img/intro01.jpg, ../assets/img/intro01@2x.jpg, ../assets/img/intro01@3x.jpg"  alt="소개 이미지">
            </div>
            <div class="intro__text">
                어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                신입의 열정과 도전정신을 깊숙히 새기며 배움에 있어 겸손함을 
                유지하며 세부적인 곳까지 파고드는 개발자가 되겠습니다.
            </div>
        </div>
        <!-- intro__inner -->
        <section class="card__wrap bmStyle2 container">
            <h2>javascript topic</h2>
            <div class="card__inner column4">
                <div>
                    <figure>
                        <img srcset="../assets/img/blog01.jpg 1x, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>개발을 잘 하는 방법!</span></h3>
                        <p class="line3">보통 개발을 할 때 가장 필요한 스킬은 검색이다. 검색 키워드에 따라 해결 방안들이 다르고, 결과도 다를 수 있다.</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog02.jpg 1x, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog03.jpg 1x, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>프론트앤드 개발자란?</span></h3>
                        <p class="line3">프론트엔드 개발자는 웹 및 모바일 애플리케이션 사용자가 상호 작용하는 부분을 개발하는 컴퓨터 프로그래머 또는 엔지니어를 가리킵니다</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog04.jpg 1x, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>프론트앤드 개발자란?</span></h3>
                        <p class="line3">사용자 인터페이스(UI) 및 사용자 경험(UX)을 디자인하고 구현하여 웹 사이트 및 애플리케이션의 시각적 및 상호 작용 요소를 만듭니다. </p>
                    </div>
                </div>
            </div>
            <a href="#" class="card__more"><span class="ir">더보기</span></a>
        </section>
        <!-- //card__wrap -->

        <section class="card__wrap bmStyle2 container">
            <h2>react topic</h2>
            <div class="card__inner column3">
                <div>
                    <figure>
                        <img srcset="../assets/img/blog08.jpg 1x, ../assets/img/blog08@2x.jpg 2x, ../assets/img/blog08@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>개발을 잘 하는 방법!</span></h3>
                        <p class="line3">보통 개발을 할 때 가장 필요한 스킬은 검색이다. 검색 키워드에 따라 해결 방안들이 다르고, 결과도 다를 수 있다.</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog07.jpg 1x, ../assets/img/blog07@2x.jpg 2x, ../assets/img/blog07@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog06.jpg 1x, ../assets/img/blog06@2x.jpg 2x, ../assets/img/blog06@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>프론트앤드 개발자란?</span></h3>
                        <p class="line3">프론트엔드 개발자는 웹 및 모바일 애플리케이션 사용자가 상호 작용하는 부분을 개발하는 컴퓨터 프로그래머 또는 엔지니어를 가리킵니다</p>
                    </div>
                </div>
            </div>
            <a href="#" class="card__more"><span class="ir">더보기</span></a>
        </section>
        <!-- //card__wrap -->

        <section class="card__wrap bmStyle2 container">
            <h2>react topic</h2>
            <div class="card__inner column2">
                <div>
                    <figure>
                        <img srcset="../assets/img/blog01.jpg 1x, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>개발을 잘 하는 방법!</span></h3>
                        <p class="line3">보통 개발을 할 때 가장 필요한 스킬은 검색이다. 검색 키워드에 따라 해결 방안들이 다르고, 결과도 다를 수 있다.</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog06.jpg 1x, ../assets/img/blog06@2x.jpg 2x, ../assets/img/blog06@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
            </div>
            <a href="#" class="card__more"><span class="ir">더보기</span></a>
        </section>
        <!-- //card__wrap -->

        <section class="card__wrap bmStyle2 container">
            <h2>react topic</h2>
            <div class="card__inner column6">
                <div>
                    <figure>
                        <img srcset="../assets/img/blog01.jpg 1x, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>개발을 잘 하는 방법!</span></h3>
                        <p class="line3">보통 개발을 할 때 가장 필요한 스킬은 검색이다. 검색 키워드에 따라 해결 방안들이 다르고, 결과도 다를 수 있다.</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog02.jpg 1x, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog08.jpg 1x, ../assets/img/blog08@2x.jpg 2x, ../assets/img/blog08@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유! 디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog07.jpg 1x, ../assets/img/blog07@2x.jpg 2x, ../assets/img/blog07@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog06.jpg 1x, ../assets/img/blog06@2x.jpg 2x, ../assets/img/blog06@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog05.jpg 1x, ../assets/img/blog05@2x.jpg 2x, ../assets/img/blog05@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
            </div>
            <a href="#" class="card__more"><span class="ir">더보기</span></a>
        </section>
        <!-- //card__wrap -->

        <section class="card__wrap container">
            <h2>react topic</h2>
            <div class="card__inner column1">
                <div>
                    <figure>
                        <img srcset="../assets/img/blog01.jpg 1x, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>개발을 잘 하는 방법!</span></h3>
                        <p class="line3">보통 개발을 할 때 가장 필요한 스킬은 검색이다. 검색 키워드에 따라 해결 방안들이 다르고, 결과도 다를 수 있다. 오늘은 제가 한동안 염두에 두고 있던 이미지 슬라이드쇼 전환의 작은 컬렉션을 공유하고 싶습니다.</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog02.jpg 1x, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog08.jpg 1x, ../assets/img/blog08@2x.jpg 2x, ../assets/img/blog08@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유! 디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog07.jpg 1x, ../assets/img/blog07@2x.jpg 2x, ../assets/img/blog07@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog06.jpg 1x, ../assets/img/blog06@2x.jpg 2x, ../assets/img/blog06@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img srcset="../assets/img/blog05.jpg 1x, ../assets/img/blog05@2x.jpg 2x, ../assets/img/blog05@3x.jpg 3x" alt="blog">
                        <a href="#" class="go" title="콘텐츠 바로가기">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"></path>
                            </svg>
                        </a>
                    </figure>
                    <div>
                        <h3><span>디자인보다 개발이 좋은 이유!</span></h3>
                        <p class="line3">디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가! 디자인보다 개발이 좋은 이유는 딱 정해져 있다. 연봉이 높다. 그게 이유다 다른 이유가 필요한가!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- //card__wrap -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //foter -->
</body>
</html>