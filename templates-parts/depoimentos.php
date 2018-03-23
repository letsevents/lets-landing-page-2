<?php
$args = array(
    'post_type' => 'depoimento',
    'posts_per_page' => 10,
    'order' => 'DESC',
    'orderby' => 'menu_order',
);

$the_query = new WP_Query($args);
?>

<div id="carousel-depoimentos" class="carousel slide" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner" role="listbox">
        <?php
        // The Loop
        $count = 0;
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <?php include 'depoimento/item.php'; ?>
                <?php
                $count++;
            endwhile;
        endif;
        ?>
    </div><!-- carousel-inner -->
    
    <ol class="carousel-indicators">
        <?php
        $count = 0;
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <li data-target="#carousel-depoimentos" 
                    data-slide-to="<?php echo $count ?>" 
                    class="<?php echo ($count == 0) ? 'active' : ''; ?>"
                    ></li>
                    <?php
                    $count++;
                endwhile;
            endif;
            ?>
    </ol>
</div>

<?php wp_reset_postdata(); ?>