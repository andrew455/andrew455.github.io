<?php
require('/wp/wp-blog-header.php');
?>

<?php
include 'header.php';
?>

<div class='auspic projects-pic'>
    <!--<img src="img/header.jpg" alt="ausplay" />-->
</div>


<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>
    <?php the_date(); echo "<br />"; ?>
    <?php the_title(); ?>
    <?php the_excerpt(); ?>
    <img src="<?php the_field('main_picture'); ?>" />
    <?php
endforeach;
?>

<?php
include 'footer.php';
?>