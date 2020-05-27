<?php get_header() ?>
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <? get_sidebar(); ?>
    <div id="colorlib-main">
        <section class="ftco-section-no-padding bg-light">
            <div class="hero-wrap">
                <div class="overlay"></div>
                <div class="d-flex align-items-center js-fullheight">
                    <div class="author-image text img d-flex">
                        <section class="home-slider js-fullheight owl-carousel">
                            <div class="slider-item js-fullheight" style="background-image: url(<?echo get_template_directory_uri().'/images/author.jpg'?>);">
                            </div>

                            <div class="slider-item js-fullheight" style="background-image:url(<?echo get_template_directory_uri().'/images/author-2.jpg'?>);">
                            </div>
                        </section>
                    </div>
                    <div class="author-info text p-3 p-md-5">
                        <div class="desc">
                            <span class="subheading">Hello! I'm</span>
                            <h1 class="big-letter">Sergey Molderov</h1>
                            <h1 class="mb-4"><span>Sergey Molderov</span><br/>
                                I'm a programmer</h1>
                            <p class="mb-4">I am a programmer from Cheboksary. My experience as a junior C # programmer is about one year. I am currently working, but I am in search of work related to website development.
                            </p>
                            <h3 class="signature h1">Sergey Molderov</h3>
                            <ul class="ftco-social mt-3">
                                <li class="ftco-animate"><a href="//github.com/segamolder" target="_blank"><span class="icon-github"></span></a></li>
                                <li class="ftco-animate"><a href="//vk.com/segamolder" target="_blank"><span class="icon-vk"></span></a></li>
                                <li class="ftco-animate"><a href="//instagram.com/segamolder" target="_blank"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section instagram">
            <div class="container">
                <div class="row justify-content-center mb-2 pb-3">
                    <div class="col-md-7 heading-section heading-section-2 text-center ftco-animate">
                        <h2 class="mb-4">Rate me on Github</h2>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="<?echo get_template_directory_uri().'/images/github_1.png'?>" class="insta-img image-popup custom-github-image" style="background-image: url(<?echo get_template_directory_uri().'/images/github_1.png'?>);">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-github align-self-center"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="<?echo get_template_directory_uri().'/images/github_2.png'?>" class="insta-img image-popup custom-github-image" style="background-image: url(<?echo get_template_directory_uri().'/images/github_2.png'?>);">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-github align-self-center"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="<?echo get_template_directory_uri().'/images/github_3.png'?>" class="insta-img image-popup custom-github-image" style="background-image: url(<?echo get_template_directory_uri().'/images/github_3.png'?>);">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-github align-self-center"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="<?echo get_template_directory_uri().'/images/github_4.png'?>" class="insta-img image-popup custom-github-image" style="background-image: url(<?echo get_template_directory_uri().'/images/github_4.png'?>);">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-github align-self-center"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="<?echo get_template_directory_uri().'/images/github_5.png'?>" class="insta-img image-popup custom-github-image" style="background-image: url(<?echo get_template_directory_uri().'/images/github_5.png'?>);">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-github align-self-center"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

 loader
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<? get_footer() ?>

</body>
</html>
