<?php 
get_header();
get_template_part( 'template-parts/hero');
?>
<?php while(have_posts()): the_post();?>
<div class="posts">
    <div class="post" <?php post_class(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><?php echo the_title(); ?></h2>
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
                   
                   <?php 
                    if(is_active_sidebar('sidebar-left')){
                        dynamic_sidebar('sidebar-left');
                    }
                    ?>
                </div>
                <div class="col-md-8">
                    <p>
                        <?php if(has_post_thumbnail()): 
                        echo the_post_thumbnail('large',array('class'=>'img-fluid')) ?>
                        <?php endif ?>
                    </p>
                    <p><?php echo the_content()?></p>
                    <?php 
                    if (comments_open()){
                        comments_template();
                    }
                    ?>
                </div>
                <?php 
                
                    echo  '<span class="">'.get_previous_post_link().'</span>';
                    echo '<span class="">'.get_next_post_link().'</span>';
                ?>
            </div>

            

        </div>
    </div>
</div>
<?php endwhile ?>
<?php get_footer() ?>