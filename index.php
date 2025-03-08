<?php get_header(); ?>

<div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
    <h2 class="section-title py-5"><?php the_title(); ?></h2>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">

                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                        <div class="col-md-4 my-3 my-md-0">
                            <a href="#" class="card bg-transparent border">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>"
                                    class="rounded-0 card-img-top mg-responsive">
                                <div class="card-body">
                                    <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$
                                            <?php echo get_field('pricing'); ?></a></h1>
                                    <h4 class="pt20 pb20"><?php the_title(); ?> </h4>
                                    <p class="text-white"><?php the_excerpt(); ?> </p>
                                </div>
                            </a>
                        </div>

                    <?php endwhile; endif; ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>