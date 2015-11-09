<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<?php get_header(); ?>
<div class="front-top">
<div class="front-tag">
<h1>Baked to Perfection</h1>
</div>
</div>
<div class="posts-products">
<div class="front-product">
<?php    $taxonomy = 'product_type'; ?>
    <?php    $terms = get_terms($taxonomy); ?>
    <?php    if ($terms): ?>
    <?php    foreach($terms as $term): ?>
      
            <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/>
            <p class="iamtootired"><?php echo $term->name;?> </p>
             <?php   echo $term->description;?>
                    <a href="<?php echo get_term_link($term); ?>">See More...</a>
             </li>     
             <?php endforeach; ?>
         <?php endif; ?>
</div>


<section class="call-to-action clearfix">
        <p>
          <span>
              All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.

          </span>
      
          <a href="http://localhost:8888/redBread/products/" class="btn">See Our Products</a>
      </p>
    </section>





<section class="latestnews">
            <h2> Our Latest News </h2>
            <div class="container">
                <hr class="decorative"::after></hr>
                <ul class="post-page">
                <?php
                $args = array( 'posts_per_page' => 4);
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <li>
                        <div class="postthumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div> 
                        <div class="post-info">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></br>
                            <?php the_time('d M Y'); ?>
                            <?php comments_number(__('/ 0 Comments'), __(' / 1 Comments'), __(' / % Comments')) ?>
                        </div>
                    </li>
            <?php endforeach; 
            wp_reset_postdata();?>

                </ul>
                <section class="latestnews">
            <h2> Our Latest News </h2>
            <hr class="decorative"::after></hr>

            <div class="testimonial-container">
                
                <div class="box box1">
                  <section class="omgiamreallytired">
                    <img class="round-img" src="wp-content/themes/fooUP/Images/testimonial-headshots/dr-dosist-headshot.png"/> 
                      <p> Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!
                      <br><br>
                      <strong> Dr. Dosist</strong><br>
                      Nutritionist – Health Time Clinic
                      </p>
                  </section>
                </div>
                 <div class="box box2">
                <section class="omgiamreallytired">
                    <img class="round-img" src="wp-content/themes/fooUP/Images/testimonial-headshots/maxi-milli-headshot.png"/> 
                      <p>Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!
                      <br><br>
                      <strong> Maxi Milli</strong><br>
                      Chef – Sailor Spoon
                      </p>
                  </section>
                </div>
                 <div class="box box3">
                <section class="omgiamreallytired">
                    <img class="round-img" src="wp-content/themes/fooUP/Images/testimonial-headshots/ana-vandana-headshot.png"/> 
                      <p>Do you like bread? Seriously, who doesn’t? You have to check Le Red Bread’s lovely loaves. Fresh flavours every day…need I say more?
                      <br><br>
                      <strong> Anna Vandana</strong><br>
                       Author – Food Is Great Magazine
                      </p>
                  </section>
                </div>
                 <div class="box box4">
                <section class="omgiamreallytired">
                    <img class="round-img" src="wp-content/themes/fooUP/Images/testimonial-headshots/martha-m-masters-headshot.png"/> 
                      <p>Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!
                      <br><br>
                      <strong> Martha M. Masters</strong><br>
                      Food Critic – WikiTravel
                      </p>
                  </section>
                </div>


          </div>

          </div>
        </div>
        </section>

<?php get_footer(); ?>