<?php echo get_header() ?>
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
            </div>

            

        </div>
    </div>
</div>
<?php echo get_footer() ?>