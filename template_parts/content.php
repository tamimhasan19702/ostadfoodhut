<?php 

if(is_single()) :

?>


<div class="col-md-12 my-3 my-md-0">
    <a href="#" class="card bg-transparent border">
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>"
            class="rounded-0 card-img-top mg-responsive">

        <div class="card-body">
            <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">
                    <?php echo get_field('pricing'); ?></a></h1>
            <h4 class="pt20 pb20"><?php the_title(); ?> </h4>
            <p class="text-white"><?php the_content(); ?> </p>
        </div>
    </a>
</div>

<?php else:?>


<div class="col-md-4 my-3 my-md-0">
    <a href="<?php the_permalink(); ?>" class="card bg-transparent border">
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>"
            class="rounded-0 card-img-top mg-responsive">

        <div class="card-body">
            <h1 class="text-center mb-4"><a href="<?php the_permalink(); ?>" class="badge badge-primary">
                    <?php echo get_field('pricing'); ?></a></h1>
            <h4 class="pt20 pb20"><?php the_title(); ?> </h4>
            <p class="text-white"><?php the_excerpt(); ?> </p>
        </div>
    </a>
</div>

<?php endif;?>