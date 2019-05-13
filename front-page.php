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

<?php
$id = '93'; // 93 or 11
$product = wc_get_product($id);
$product_name = $product->name;
$product_price = $product->price;
$product_short_description = $product->short_description;
$url = get_permalink($id);
// Get Product Images
$product_image = get_the_post_thumbnail_url($product->get_id(), 'large');
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
                                <a href="<?php echo $url; ?>">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .landing-hero -->
        <section class="front-section">
            <div class="front-section-product">
                <div class="product">
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
                                    <a href="<?php echo $url; ?>"><button class="front-product-button">View Product</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END OF SECTION -->
        <!--START OF SECTION -->
        <section class="front-section">
            <div class="benefits-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h2>Learn more about the <br> benefits of our ingredients</h2>
                            <div class="divider"></div>
                            <p>Our Organic Honey Face Scrub contains a perfect blend of honey, salt, royal jelly, collagen and liquid oxygen to help fight against acne and damaged skiin!</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p>Honey antibacterial and anti-inflammatory properties help reduce skin redness,nourish damaged skin, helping to fight against scars and overall swelling of pimples.</p>
                            <p>Salt contains antiseptic qualities which help kill bacteria and reduce inflammation. In addition, scrubbing with salt helps improve circulation around the skin, removes bacteria and unclog pores.</p>
                            <a href="<?php echo get_page_link(get_page_by_title('benefits')->ID); ?>">
                                <button>Read More</button>
                            </a>
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
                        <a href="<?php echo $url; ?>">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Experience the power of honey</h2>
                                    <p>Learn more about our all natural, handmade honey facial scrub!</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo get_page_link(get_page_by_title('faq')->ID); ?>">
                            <div class="card">
                                <div class="card-body">
                                    <h2>FAQ</h2>
                                    <p>Take a look at some of our most frequently ask questions.</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo get_page_link(get_page_by_title('contact')->ID); ?>">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Contact Us</h2>
                                    <p>Have any questions? Feel free to get in touch with us about any questions you may have!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section><!-- END OF SECTION -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>