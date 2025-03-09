<?php get_header(); ?>

<div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
    <h2 class="section-title py-5"><?php the_title(); ?></h2>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">

                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                <?php get_template_part('template_parts/content',get_post_format() ); ?>

                <?php endwhile; endif; ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>