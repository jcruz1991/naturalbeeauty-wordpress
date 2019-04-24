<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 * @package NaturalBeeauty
 */
get_header(); 
?>

    <div id="primary" class="content-area font-primary">
        <main id="landing-main" class="site-main">
            <div class="landing-hero">
                <div class="landing-text-wrap">
                    <h1>Beauty lies skin deep</h1>
                    <p>Discover the power of honey with Natural Beeauty</p>
                    <button><a href="https://naturalbeeauty.com/product/honey-cleanser-exfoliator/">BUY NOW</a></button>
            </div>
            </div><!-- .landing-hero -->
            <section class="front-section">
                <div class="front-page-single-product-wrapper">
                    <h2 class="text-center">Our Product</h2>
                    <?php
                        $id= '11'; // 93 or 11
                        $product = wc_get_product( $id );
                        $product_name = $product->name;
                        $product_price = $product->price;
                        $product_short_description = $product->short_description;
                        // Get Product Images
                       $product_image = get_the_post_thumbnail_url( $product->get_id(), 'medium' );
                    ?>
                    <div class="container">
                        <div class="front-product-container flex flex-center flex-row">
                            <div class="front-product-image">
                                <img src=<?php echo $product_image ?> alt="Product Image">
                            </div>
                            <div class="front-product-info">
                                <h3><?php echo $product_name ?></h3>
                                <p class="front-product-description"><?php echo $product_short_description ?></p>
                                <p class="front-product-price">&#36;<?php echo $product_price ?></p>
                               <a href="https://naturalbeeauty.com/product/honey-cleanser-exfoliator/"><button class="front-product-button">View Product</button></a>
                            </div>
                        </div>
                    </div>
                </div>                
            </section><!-- END OF SECTION -->
            <!--START OF DIVIDER -->
            <div class="container divider-wrapper">
                    <div class="divider"></div>
                </div>
            </div><!--END OF DIVIDER -->
            <!--START OF SECTION -->
            <section class="front-section">
                <div class="container">
                    <div class="front-card-container">
                        <div class="cards-wrapper flex flex-center">
                            <div class="custom-card"></div>
                            <div class="custom-card"></div>
                        </div>
                        <div class="benefits-text text-center">
                            <p>Why Honey?</p>
                            <h3>Learn About The Benefit Of Our Ingredients</h3>
                            <p>Honey contains antibacterial and anti-inflammatory properties that help fight acne, keeping your skin hydrated and healthy.</p>
                            <a href="/benefits">Learn More</a>
                        </div>
                    </div>
                </div>
            </section><!-- END OF SECTION -->
            <div class="container divider-wrapper">
                    <div class="divider"></div>
            </div>
            </div><!--END OF DIVIDER -->
            <!--START OF SECTION -->
            <section class="front-section">
                <div class="container">
                    <a href="/wordpress/faq">
                        <div class="faq-box">
                            <img src="https://naturalbeeauty.com/wp-content/uploads/2019/02/DSC7716.jpg" alt="FAQ Image">
                            <h2>FAQ</h2>
                        </div>
                    </a>
                </div>            
            </section><!-- END OF SECTION -->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>
