<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php echo bloginfo( 'description' ); ?></h3>
                <h1 class="align-self-center display-1 text-center heading"><?php echo bloginfo( 'title' ); ?></h1>
            </div>
        </div>
    </div>
</div>