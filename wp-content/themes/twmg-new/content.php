<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="bg-primary single-header">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="breadcrumbs">
                        <span class="breadcrumb-title"><a href="">Home</a></span>
                        <span class="breadcrumb-title"><a href="">Case Studies</a></span>
                        <span class="last"><a href="">
                                <?php echo get_the_title(); ?>
                            </a></span>
                    </div>
                    <h1>
                        <?php echo get_the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section class="floating-section">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="entry-meta">
                        <?php
                        $categories = get_the_category(get_the_ID());
                        $arrcat = array();
                        foreach ($categories as $value) {
                            array_push($arrcat, $value->name);
                        }
                        // var_dump($arrcat);
                        ?>
                        <small><b>Written by:</b>
                            <?php echo get_the_author(); ?>
                        </small><br>
                        <small><b>Last checked and updated on</b>
                            <?php echo get_the_modified_date(); ?>
                        </small><br>
                        <small><b>Read time:</b>
                            <?php echo reading_time(); ?>
                        </small><br>
                        <small><b>Categories:</b>
                            <?php echo join(", ", $arrcat); ?>
                        </small><br>
                    </div>
                    <div class="main-wrapper">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100" />
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="floating-item">
                        <div class="row">
                            <div class="col-12">
                                <div class="card bg-white">
                                    <h2>Key Takeaways</h2>
                                    <p>2,000% increase in monthly traffic</p>
                                    <p>312% increase in monthly leads</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card bg-orange text-center">
                                    <h2>Finding it difficult to convert leads into paying customers?</h2>
                                    <p>Receive a complimentary website and marketing review by our experienced digital
                                        marketing team, valued at over $299.</p>
                                    <a href="" class="highlight-button primary-button">Get a Free Digital Marketing
                                        Audit</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card bg-outline nav-card">
                                    <h2>Navigation</h2>
                                    <ul>
                                        <li class="active"><a href="">Introduction</a></li>
                                        <li><a href="">What is Youtube?</a></li>
                                        <li><a href="">What are the best strategies for growing on Youtube?</a></li>
                                        <li><a href="">What is Youtube?</a></li>
                                        <li><a href="">What are the best strategies for growing on Youtube?</a></li>
                                        <li><a href="">Conclusion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="container">
            <div class="w-75 bg-primary mx-auto text-center section-wrapper">
                <h2>A Digital Marketing Agency You Can Trust Really</h2>
                <p>We build relationships with our clients based on trust. We're an honest digital marketing
                    agency and with us, you'll never be in the dark. Let's work together to make your business a
                    success
                </p>
                <a href="" class="highlight-button">Get a Free Digital Marketing Audit</a>
            </div>
        </div>
    </section>
</article><!-- #post -->