<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2038">
    <div class="swiper-container">
        <!--SLIDER-->
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/banner1.jpg" class="img-responsive">
            </div>
            <div class="swiper-slide">
                <img src="images/banner2.jpg" class="img-responsive">
            </div>
            <div class="swiper-slide">
                <img src="images/banner3.jpg" class="img-responsive">
            </div>
            <div class="swiper-slide">
                <img src="images/banner4.jpg" class="img-responsive">
            </div>
        </div>
        <!--/END SLIDER-->

        <!--PAGINATION-->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
            <span class="swiper-pagination-bullet swiper-pagination-bullet-active">-</span>
            <span class="swiper-pagination-bullet">-</span>
            <span class="swiper-pagination-bullet">-</span>
            <span class="swiper-pagination-bullet">-</span>
        </div>
        <!--/END PAGINATION-->
    </div>

    <!--NEWS LETTERS-->
    <div class="newsletters">
        <h1>Start 30-Day free trial today.</h1>
        <h4>Search for online courses on Web development, Yoga, Guitar lessons, or anything else.</h4>
        <div class="subscribe">
            <input type="text" class="input-block-level">
            <button>Subscribe</button>
        </div>
    </div>
    <!--/END NEWS LETTERS-->

</div>