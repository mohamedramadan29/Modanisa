<?php
ob_start();
session_start();
include 'init.php';
?>
<!-- START HERO SECTION -->
<div class="hero_section">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="uploads/slider1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="uploads/slider2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="uploads/slider3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- END HERO SECTION -->
<!-- START BANNER 1 -->
<div class="banner1">
    <div class="container">
        <div class="data">
            <img src="uploads/en-mostwanted-Z3-20220825.png" alt="">
        </div>
    </div>
</div>
<!-- END BANNER 1 -->




<?php
//include $tem . 'footer_section.php';
include $tem . 'footer.php';


?>