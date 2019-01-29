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
        <main id="main" class="site-main">
            <div class="landing-hero">
                <div class="container">
                    <div class="row">
                        <div class="landing-text-wrap" style="display: none;">
                            <h1>inspired by the beauty rituals of previous generations</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button><a href="">Learn More</a></button>
                        </div>
                    </div>
                </div>
            </div><!-- .landing-hero -->
            <section class="front-section">
                <div class="fluid-container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="image-container">
                                <img src="https://res.cloudinary.com/dd67kwah2/image/upload/c_scale,h_500/v1548707331/imageedit_1_7552720446_qvsdar.png" alt="Honey">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 text-left">
                        <div class="font-container">
                                <h2>Benefits of Honey</h2>
                                <p>To learn more about the benefits of honey for your skin.</p>
                                <button>Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="front-section">
                <div class="fluid-container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="image"></div>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div class="image"></div>
                        </div>
                    </div>
                
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>