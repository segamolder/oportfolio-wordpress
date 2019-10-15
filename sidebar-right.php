<div class="col-lg-4 sidebar ftco-animate bg-light">
    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Категории</h3>
        <? $categories = get_categories() ?>
        <ul class="categories">
            <? foreach ($categories as $category) { ?>
                <li><a href="#"><? echo $category->cat_name ?> <span><? echo $category->category_count ?></span></a>
                </li>
            <? } ?>
        </ul>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Просматриваемые посты</h3>
        <? $args = array(
            'meta_query' => array(
                'meta_value_num' => array(
                    'key' => 'views'
                ),
            ),
            'orderby' => 'meta_value_num',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'order' => 'DESC'
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4"
                   style="background-image: url(<? echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'thumbnail') ?>);"></a>
                <div class="text">
                    <h3 class="heading"><a href="#"><? echo get_the_title() ?></a>
                    </h3>
                    <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> <? echo get_the_date() ?></a></div>
                        <div><a href="#"><span class="icon-person"></span> <? echo get_the_author() ?></a></div>
                        <div><a href="#"><span class="icon-chat"></span> <? echo get_comments_number(get_the_ID()) ?>
                            </a></div>
                    </div>
                </div>
            </div>
        <? endwhile; ?>
    </div>

    <div class="sidebar-box ftco-animate">
        <?
        $tags = get_tags(array(
            'number' => 8,
            'orderby' => 'count',
            'order' => 'DESC'
        ));
        ?>
        <h3 class="sidebar-heading">Облако тегов</h3>
        <ul class="tagcloud">
            <? foreach ($tags as $tag) { ?>
                <a href="<? echo get_site_url().'/blog?tag='.$tag->name ?>" class="tag-cloud-link"><? echo $tag->name ?></a>
            <? } ?>
        </ul>
    </div>

</div><!-- END COL -->
