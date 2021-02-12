<?php get_header(); ?>
<!-- ===================================================
                        Main Body Start
=====================================================-->
<section id="main_body">
    <div class="container">
        <div class="row">
            <div class="col-8 pl-0">
                <div class="main_body_banner">                    
                    <img src="<?php echo esc_url( get_theme_mod( 'single_banner_setting' ) ); ?>" alt="not found single banner setting">
                </div>
                <div class="main_body_marque_one">
                    <h2>
                        <marquee behavior="" direction="left">
                            <?=get_theme_mod('news_ticker_setting_one')?>
                        </marquee>
                    </h2>
                </div>
                <div class="main_body_marque_two pt-2 pb-2">
                    <h6 class="text-danger font-weight-bold">
                        <marquee behavior="" direction="left" scrollamount="12">
                            <?=get_theme_mod('news_ticker_setting_two')?>
                        </marquee>
                    </h6>
                </div>
                <div class="slick_slider">
                    <?php 
                        $args = array( 'post_type' => 'sliders', 'posts_per_page' => 10 );
                        $the_query = new WP_Query( $args ); 
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>                
                        <div>
                            <img src="<?=get_the_post_thumbnail_url();?> " alt="not found">
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="custom_tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>                
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab-<?=get_the_ID()?>" data-toggle="tab" href="#home-<?=get_the_ID()?>" role="tab" aria-controls="home-<?=get_the_ID()?>" aria-selected="true"><?=the_title()?></a>
                                </li>
                            <?php endwhile;
                            wp_reset_postdata(); ?>                            
                        <?php endif; ?>                            
                    </ul>
                    <div class="tab-content" id="myTabContent">
                            <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>                
                                <div class="tab-pane fade" id="home-<?=get_the_ID()?>" role="tabpanel" aria-labelledby="home-tab-<?=get_the_ID()?>">
                                    <img src="<?=get_the_post_thumbnail_url();?> " alt="not found" style="width: 100%">
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>                            
                            <?php endif; ?>                                                                                                    
                    </div>
                </div>
                <div class="initiative">
                    <h4 class="purple_header">উদ্যোগ</h4>
                    <ul>
                        <li>
                            <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                        </li>
                        <li>
                            <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                        </li>
                        <li>
                            <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                        </li>
                        <li>
                            <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                        </li>
                        <li>
                            <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                        </li>
                        <li>
                            <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                        </li>
                    </ul>
                </div>
                <div class="links">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?=get_template_directory_uri()?>/assets/images/link1.png" alt="">
                        </div>
                        <div class="col-4">
                            <img src="<?=get_template_directory_uri()?>/assets/images/link2.png" alt="">
                        </div>
                        <div class="col-4">
                            <img src="<?=get_template_directory_uri()?>/assets/images/link3.png" alt="">
                        </div>
                        <div class="col-4">
                            <img src="<?=get_template_directory_uri()?>/assets/images/link4.png" alt="">
                        </div>
                        <div class="col-4">
                            <img src="<?=get_template_directory_uri()?>/assets/images/link5.png" alt="">
                        </div>
                        <div class="col-4">
                            <img src="<?=get_template_directory_uri()?>/assets/images/link6.png" alt="">
                        </div>
                        <div class="col-4">
                            <img src="<?=get_template_directory_uri()?>/assets/images/link7.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="popular">
                    <h4 class="purple_header">জনপ্রিয়</h4>
                    <div class="row">
                        <div class="col-4">
                            <h6>সেবাসমূহ</h6>
                            <?php dynamic_sidebar('link-sidebar')?>
                        </div>
                        <div class="col-4">
                            <h6>পাতাসমূহ</h6>
                            <?php dynamic_sidebar('link-sidebar')?>
                        </div>
                        <div class="col-4">
                            <h6>পোর্টালসমূহ</h6>
                            <?php dynamic_sidebar('link-sidebar')?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 pr-0 right_bar">
                <?=get_sidebar()?>
            </div>                
        </div>
    </div>
</section>
<!-- ===================================================
                        Main Body End
=====================================================-->
<!-- ===================================================
                        Footer End
=====================================================-->
<section id="footer_part">
    <div class="container footer_artwork">
        <img src="<?=get_template_directory_uri()?>/assets/images/footer_top_bg.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="container nav_container">            
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-5 pt-3">
                <small>
                    পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি                    
                </small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-7 pt-3 pb-3">
                <small>
                    সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২১-০১-৩০ ০৫:১৯:৪৬
                </small>
            </div>
            <div class="col-5">
                <small>
                    কারিগরি সহায়তায়: CBT&A
                </small>
            </div>
        </div>
    </div>
</section>
<!-- ===================================================
                        Footer End
=====================================================-->
<?php get_footer(); ?>