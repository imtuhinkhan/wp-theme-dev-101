<?php 
get_header();
get_template_part( 'template-parts/hero');
?>

<div class="posts">
<?php while(have_posts()): 
    the_post(); ?>
    <div class="post" <?php post_class(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <a href='<?php echo the_permalink(); ?>'> <h2 class="post-title"><?php echo the_title(); ?></h2></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php echo the_author(); ?></strong><br/>
                        <?php echo get_the_date('jS F Y') ?>
                    </p>
                    <?php echo get_the_tag_list('<ul class="list-unstyled">
                        <li>','</li><li>','</li></ul>') ?>
                    
                </div>
                <div class="col-md-8">
                    <p>
                        <?php if(has_post_thumbnail()): 
                        echo the_post_thumbnail('large',array('class'=>'img-fluid')) ?>
                        <?php endif ?>
                    </p>
                    <p><?php echo the_excerpt()?></p>
                </div>
            </div>

        </div>
    </div>
<?php endwhile ?>
</div> 
<div class='container'>
    <div class='row'>
        <div class='col-sm-4'>

        </div>
        <div class='col-sm-8'>
                <?php echo the_posts_pagination( array('screen_reader_text'=>'' )); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>