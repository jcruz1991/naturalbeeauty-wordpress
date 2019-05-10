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
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-md-7 col-sm-12">
                        <div class="banner">
                            <div class="banner-container">
                                <div class="banner-container-fill">
                                    <div class="banner-image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="landing-text">
                            <div class="landing-text-wrapper">
                                <h1>Natural Beeauty</h1>
                                <p>Experience the power for honey. Our all natural honey face wash is infused with salt, royal jelly, collagen and liquid oxygen to help clear acne, hydrate skin, and keep skin looking healthy and youthful!</p>
                                <a href="product/honey-cleanser-exfoliator/">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .landing-hero -->
        <section class="front-section">
            <div class="front-section-product">
                <div class="product">
                    <?php
                    $id = '93'; // 93 or 11
                    $product = wc_get_product($id);
                    $product_name = $product->name;
                    $product_price = $product->price;
                    $product_short_description = $product->short_description;
                    // Get Product Images
                    $product_image = get_the_post_thumbnail_url($product->get_id(), 'large');
                    ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="product-image">
                                    <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="product-text">
                                    <h3><?php echo $product_name ?></h3>
                                    <div class="divider"></div>
                                    <p class="front-product-description"><?php echo $product_short_description ?></p>
                                    <p class="front-product-price">&#36;<?php echo $product_price ?></p>
                                    <a href="https://naturalbeeauty.com/product/honey-cleanser-exfoliator/"><button class="front-product-button">View Product</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="front-page-single-product-wrapper">
                <h2 class="text-center">Our Product</h2>
                <?php
                $id = '93'; // 93 or 11
                $product = wc_get_product($id);
                $product_name = $product->name;
                $product_price = $product->price;
                $product_short_description = $product->short_description;
                // Get Product Images
                $product_image = get_the_post_thumbnail_url($product->get_id(), 'medium');
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
            </div> -->
        </section><!-- END OF SECTION -->
        <!--START OF SECTION -->
        <section class="front-section">
            <div class="benefits-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h2>Learn more about the <br> benefits of our ingredients</h2>
                            <div class="divider"></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt atque sed nemo laboriosam itaque et rem pariatur fugit nobis aliquam sunt praesentium tempore natus labore, ex sit commodi magni. Quam.</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus voluptatum totam, numquam consectetur adipisci omnis! Necessitatibus eaque nihil impedit molestias omnis fuga, veniam voluptate corrupti illum, voluptatem explicabo aperiam eos!</p>

                            <button>Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END OF SECTION -->
        <!--START OF SECTION -->
        <section class="front-section">
            <div class="benefits-container">
                <div class="container-fluid">
                    <div class="cards">
                        <div class="card">
                            <div class="card-body">
                                <h2>Experience the power of honey</h2>
                                <p>Learn more about our ingredients.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END OF SECTION -->
</div>
<!--END OF DIVIDER -->
<!--START OF SECTION -->
<section class="front-section">
    <!-- <div class="container">
        <a href="/wordpress/faq">
            <div class="faq-box">
                <img src="https://naturalbeeauty.com/wp-content/uploads/2019/02/DSC7716.jpg" alt="FAQ Image">
                <h2>FAQ</h2>
            </div>
        </a>
    </div> -->
</section><!-- END OF SECTION -->
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>