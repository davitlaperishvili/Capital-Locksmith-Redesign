<?php 
    //Template Name: Front Page
?>
<?php get_header(); ?>
<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$workingHours = get_field('workingHours', 'option');
	$address = get_field('address', 'option');
	
?>
<main class="home_page">
    <?php 
        if( have_rows('sections') ):

            // Loop through rows.
            while ( have_rows('sections') ) : the_row();
        
                // Case: Paragraph layout.
                if( get_row_layout() == 'hero' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-hero.php');
                
                elseif( get_row_layout() == 'about_us' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-about_us.php');
                
                elseif( get_row_layout() == 'services' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-services.php');
                
                elseif( get_row_layout() == 'benefits' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-benefits.php');
                    
                
                elseif( get_row_layout() == 'reviews' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-reviews.php');

                endif;
            endwhile;
        
        else :
        endif;
    ?>
</main>
<main class="main_wrapper">
    <section class="hero">
        <figure class="section_bg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero_bg.jpg" alt="">
        </figure>
        <div class="container">
            <div class="hero_wrap">
                <div class="hero_text">
                    <div class="text_wrap">
                        <h1 class="page_title">Capital Locksmith in Seattle</h1>
                        <div class="page_subtitle">24 HOUR & MOBILE SEATTLE LOCKSMITH</div>
                        <div class="section_text center">Insured, Bonded, Licensed</div>
                        <div class="section_buttons center">
                            <div class="theme_button oblique_both gray">
                                <a href="tel:<?php echo $phone ?>">Call Us</a>
                            </div>
                            <div class="theme_button text black">
                                <a href="tel:<?php echo $phone ?>">
                                    <i class="ri-arrow-right-line"></i>
                                    <span>Get a free quote</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="car">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/car.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="about_us">
        <div class="container">
            <div class="about_wrap">
                <div class="about_left">
                    <div class="about_slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/about_us.jpg" alt="">
                                    <figcaption>Lock Installation</figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/service1.jpg" alt="">
                                    <figcaption>Auto Locksmith</figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/service2.jpg" alt="">
                                    <figcaption>Commercial Locksmith</figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="swiper_natigation">
                            <div class="swiper-button-prev swiper_arrow"></div>
                            <div class="swiper-button-next swiper_arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="about_right">
                    <h2 class="section_title">About Us</h2>
                    <h3 class="subtitle">Your Trusted Local Seattle Locksmith Company.</h3>
                    <div class="section_text">
						<p >If you need a locksmith, look no further than Capital Locksmith.</p>
                        <p >We are a trusted local and mobile locksmith provider in Seattle WA and the surrounding area.</p>
                        <p>Our mobile locksmith services are available 24 hours a day, 7 days a week, so we are always here when you need us.</p>
                        <p>We offer <a href="https://capital-locksmith.net/residential-locksmith/"><strong>Residential locksmith</strong></a>, <a href="https://capital-locksmith.net/commercial-locksmith/"><strong>Commercial locksmith</strong></a>, and <a href="https://capital-locksmith.net/auto-locksmith/"><strong>Auto locksmiths</strong></a>, as well as <a href="https://capital-locksmith.net/emergency-locksmith/"><strong>24 Hour emergency locksmith service</strong></a>.</p>
                        <p>We have years of experience in the locksmith industry and can handle any situation that comes our way.</p>
					</div>
                    <div class="section_list">
                        <ul>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                        </ul>
                    </div>
                    <div class="section_buttons">
                        <div class="theme_button black">
                            <a href="tel:<?php echo $phone ?>">
                                <i class="ri-time-fill"></i>
                                <span>SCHEDULE AN APPOINTMENT</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="section_wrap">
                <h2 class="section_title center">Services</h2>
                <h3 class="subtitle white center">All services we provide</h3>
                <div class="services_list">
                    <div class="service_item">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service1.jpg" alt="">
                        </figure>
                        <div class="service_title">EMERGENCY</div>
                        <div class="service_desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias repudiandae rem, nulla totam corrupti amet perspiciatis similique, impedit sint voluptate voluptates, quas harum saepe? Aliquid quam dicta temporibus illum voluptate.</div>
                    </div>
                    <div class="service_item">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service2.jpg" alt="">
                        </figure>
                        <div class="service_title">Residential</div>
                        <div class="service_desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias repudiandae rem, nulla totam corrupti amet perspiciatis similique, impedit sint voluptate voluptates, quas harum saepe? Aliquid quam dicta temporibus illum voluptate.</div>
                    </div>
                    <div class="service_item">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service3.jpg" alt="">
                        </figure>
                        <div class="service_title">Commercial</div>
                        <div class="service_desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias repudiandae rem, nulla totam corrupti amet perspiciatis similique, impedit sint voluptate voluptates, quas harum saepe? Aliquid quam dicta temporibus illum voluptate.</div>
                    </div>
                    <div class="service_item">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service4.jpg" alt="">
                        </figure>
                        <div class="service_title">Automotive</div>
                        <div class="service_desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias repudiandae rem, nulla totam corrupti amet perspiciatis similique, impedit sint voluptate voluptates, quas harum saepe? Aliquid quam dicta temporibus illum voluptate.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits">
        <div class="container">
            <div class="section_wrap">
                <div class="section_left">
                    <h2 class="section_title">Benefits</h2>
                    <div class="subtitle">Why Our Locksmith?</div>
                    <div class="section_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis possimus dolorum quos accusantium quibusdam, consectetur unde consequuntur reiciendis, necessitatibus, eveniet voluptatum maiores architecto? Numquam, ullam quibusdam ipsum commodi corporis cupiditate.</div>
                    <div class="section_list with_line">
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </li>
                            <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </li>
                            <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </li>
                            <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </li>
                        </ul>
                    </div>
                    <div class="section_buttons">
                        <div class="theme_button oblique_right">
                            <a href="tel:<?php echo $phone ?>">
                                <i class="ri-phone-fill"></i>
                                <span>(206) 208-6786</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section_right">
                    <div class="benefits_list">
                        <div class="benefit_item">
                            <div class="benefit_title">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/benefit1.png" alt="">
                                <span>Works 24/7</span>
                            </div>
                            <div class="benefit_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aliquid voluptate dolorem cumque, molestias optio.`</div>
                        </div>
                        <div class="benefit_item">
                            <div class="benefit_title">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/benefit2.png" alt="">
                                <span>Great prices</span>
                            </div>
                            <div class="benefit_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aliquid voluptate dolorem cumque, molestias optio.`</div>
                        </div>
                        <div class="benefit_item">
                            <div class="benefit_title">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/benefit3.png" alt="">
                                <span>Fully mobile</span>
                            </div>
                            <div class="benefit_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aliquid voluptate dolorem cumque, molestias optio.`</div>
                        </div>
                        <div class="benefit_item">
                            <div class="benefit_title">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/benefit4.png" alt="">
                                <span>Emergency</span>
                            </div>
                            <div class="benefit_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aliquid voluptate dolorem cumque, molestias optio.`</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/reviews.jpg" alt="">
        </figure>
        <div class="section_right">
            <h2 class="section_title">Reviews</h2>
            <div class="subtitle">What they say <br> about locksmith?</div>
            <div class="reviews_list">
                <div class="reviews_slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review_item">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                    <footer>
                                        <cite class="author_name">W.White1</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review_item">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                    <footer>
                                        <cite class="author_name">W.White2</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review_item">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                    <footer>
                                        <cite class="author_name">W.White3</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review_item">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                    <footer>
                                        <cite class="author_name">W.White4</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review_item">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                    <footer>
                                        <cite class="author_name">W.White5</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review_item">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                    <footer>
                                        <cite class="author_name">W.White6</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="areas">
        <div class="container">
            <div class="section_left">
                <h2 class="section_title">Areas</h2>
                <div class="subtitle">SERVE AREAS</div>
                <div class="section_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex reprehenderit esse ab molestias, tempore optio dolores eveniet sequi! Veritatis, distinctio?</div>
            </div>
            <div class="section_right">
                <ul>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Seattle</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Everett</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Redmond</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Tacoma</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Bellevue</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Renton</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Washington</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Kirkland</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Lake City</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                            <span>Bothell</span>
                        </a>
                    </li>
                </ul>
            </div>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="">
            </figure>
        </div>
    </section>
    <section class="all_services">
        <div class="container">
            <div class="section_left">
                <h2 class="section_title">Services</h2>
                <h3 class="subtitle">All services we provide</h3>
                <div class="section_text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
                <div class="section_list">
                    <ul>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-check-line"></i>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section_right">
                <div class="contact_form">
                    <h2 class="contact_title">Request A Quote</h2>
                    <div class="section_text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi accusantium labore laborum soluta?</div>
                    <div class="contact_form_wrap">
                        <div class="wpforms_form">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
        </figure>
        <div class="container">
            <h3 class="banner_title">Professionals with 15 years of experience</h3>
            <div class="section_text center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quaerat pariatur tenetur ipsum eveniet cum explicabo nobis excepturi cupiditate nisi!</div>
            <div class="section_buttons center">
                <div class="theme_button black oblique_right">
                    <a href="tel:<?php echo $phone ?>">Call NOW</a>
                </div>
                <div class="theme_button text">
                    <a href="tel:<?php echo $phone ?>">
                        <i class="ri-arrow-right-line"></i>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>