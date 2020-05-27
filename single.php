<? $post = get_post(get_the_ID()) ?>
<?php setPostViews(get_the_ID()); ?>
<? get_header() ?>
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <? get_sidebar() ?>
    <div id="colorlib-main">
        <section class="ftco-section ftco-bread">
            <div class="container">
                <div class="row no-gutters slider-text justify-content-center align-items-center">
                    <div class="col-md-8 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="<? echo get_site_url() ?>">Home</a></span> <span
                                    class="mr-2"><a href="<? echo get_site_url().'/blog' ?>">Blog</a></span> <span>Blog Post</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ftco-animate">
                        <h2 class="mb-3 font-weight-bold"><? echo $post->post_title ?></h2>
                        <h6><? echo $post->post_date ?></h6>
                        <h6><? echo getPostViews(get_the_ID()).' просмотров' ?></h6>
                        <br/>
                        <? echo $post->post_content ?>
                        <? $tags = get_tags(get_the_ID()) ?>
                        <div class="tag-widget post-tag-container mb-5 mt-5">
                            <div class="tagcloud">
                                <? foreach ($tags as $tag) { ?>
                                <a href="<? echo get_site_url().'/blog?tag='.$tag->name ?>" class="tag-cloud-link"><? echo $tag->name ?></a>
                                <? } ?>
                            </div>
                        </div>

                        <div class="pt-5 mt-5">
                            <h3 class="mb-5 font-weight-bold"><span
                                        class="icon-comments"></span> <? echo get_comments_number(get_the_ID()) ?></h3>
                            <ul class="comment-list">
                                <? $comments = get_comments(['orderby' => 'comment_date', 'order' => 'DESC']) ?>
                                <? foreach ($comments as $comment) { ?>
                                    <li class="comment">
                                        <div class="comment-body">
                                            <h3><? echo $comment->comment_author ?></h3>
                                            <div class="meta"><? echo $comment->comment_date ?></div>
                                            <p><? echo $comment->comment_content ?></p>
                                        </div>
                                    </li>
                                <? } ?>
                            </ul>
                            <!-- END comment-list -->
                        </div>
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Оставьте комментарий</h3>
                            <form action="<?php echo get_option('siteurl') . '/wp-comments-post.php' ?>" method="post"
                                  class="p-3 p-md-5 bg-light">
                                <div class="form-group">
                                    <label for="name">Имя *</label>
                                    <input type="text" class="form-control" id="name" name="author">
                                </div>
                                <div class="form-group">
                                    <label for="message">Комментарий</label>
                                    <textarea name="comment" id="message" cols="30" rows="10"
                                              class="form-control"></textarea>
                                </div>
                                <input type="hidden" name="comment_post_ID" value="<?php the_ID(); ?>"/>
                                <?php comment_id_fields(); ?>
                                <div class="form-group">
                                    <input type="submit" value="Отправить" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>
                    <? get_sidebar('right') ?>
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


