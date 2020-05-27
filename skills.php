<?php /* Template Name: Skills */ ?>
<? get_header() ?>
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <? get_sidebar(); ?>
    <div id="colorlib-main">
        <section class="ftco-section ftco-bread background-blog-image">
            <div class="container">
                <div class="row no-gutters slider-text justify-content-center align-items-center">
                    <div class="col-md-8 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="<? echo get_site_url() ?>">Главная</a></span><span class="mr-2"><a href="/blog">Blog</a></span><span style="text-decoration:underline">Skills</span>
                        </p>
                        <h1 class="bread">Skills</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <h2>Основы</h2>
                <hr>
                <div class="row">
                    <div class="col-4 d-flex justify-items-center align-items-center" style="border-right: 1px solid black;">
                        <img class="skill-image" src="<?php bloginfo('template_url'); ?>/images/skills/html.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="grid-skills">
                            <div class="skill-item">
                                <?php $tag = get_term_by('slug', 'syntax','post_tag'); $tag_id = $tag->term_id;?>
                                <a class="skills-item-link" href="<?=get_tag_link($tag_id)?>">
                                    <img src="<?php bloginfo('template_url'); ?>/images/skills/syntax.svg" alt="">
                                    <p class="d-flex align-items-center"><img class="checked mr-1" src="<?php bloginfo('template_url'); ?>/images/skills/checked.png" alt="">  Синтаксис (<?=$tag->count?>)</p>
                                </a>
                            </div>
                            <div class="skill-item"></div>
                            <div class="skill-item"></div>
                            <div class="skill-item"></div>
                            <div class="skill-item"></div>
                            <div class="skill-item"></div>
                            <div class="skill-item"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

<? get_footer() ?>

</body>
</html>
