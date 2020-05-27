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
        <div id="content" role="main">
        <div class="col-lg-8">
                        <div class="row">
                            <?php
                            $btpgid = get_queried_object_id();
                    
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        
                            $args = array('posts_per_page' => 5,
                                'paged' => $paged, 'post_type' => 'post', 'tag'=>single_tag_title('', false), 's'=>$search);
                            $postslist = new WP_Query($args);

                            if ($postslist->have_posts()) :
                            while ($postslist->have_posts()) : $postslist->the_post();
                                $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
                                ?>
                                <div class="col-md-12">
                                    <div class="blog-entry ftco-animate d-md-flex">
                                        <a href="<? echo get_post_permalink(get_the_ID()) ?>" class="img img-2"
                                           style="background-image: url('<?
                                           echo $image ?>');"></a>
                                        <div class="text text-2 px-4">
                                            <h3 class="mb-2"><a
                                                        href="<? echo get_post_permalink(get_the_ID()) ?>"><? echo the_title(); ?></a>
                                            </h3>
                                            <div class="meta-wrap">
                                                <p class="meta">
                                                    <span><? echo get_the_date('d.m.Y', get_the_ID()) ?></span>
                                                    <span><? foreach (get_the_category(get_the_ID()) as $category) {
                                                            ?>
                                                            <a href="<? echo get_site_url().'/blog?category='.$category->cat_name ?>">
                                                               <? echo $category->cat_name; ?>
                                                            </a>
                                                        <? } ?></span>
                                                    <span><? echo get_comments_number(get_the_ID()) ?> <span
                                                                class="icon-comments-o"></span></span>
                                                </p>
                                            </div>
                                            <? echo the_excerpt() ?>
                                        </div>
                                    </div>
                                </div>

                            <? endwhile;
                            ?>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="block-27">
                                    <ul>
                                        <li><? previous_posts_link('&lt;') ?></li>
                                        <? if($postslist->max_num_pages > 1) { ?>
                                        <? for ($i = 1; $i < $postslist->max_num_pages + 1; $i++) {
                                            ?>
                                            <li><a href="<? echo get_site_url() . '/blog/page/' . $i ?>"><?
                                                    echo $i ?></a></li>
                                            <?
                                        } ?>
                                        <? } ?>
                                        <li><? next_posts_link('&gt;', $postslist->max_num_pages); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?
                        wp_reset_postdata();

                        endif;
                        ?>
                        <!-- END-->
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
