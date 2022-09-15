
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_image = get_sub_field('section_image'); 
        $reviews_list = get_sub_field('reviews_list');
        $rowIndex = get_row_index();
    ?>
    <section class="reviews" id="content<?php echo $rowIndex ?>">
        <figure>
            <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
        </figure>
        <div class="section_right">
            <h2 class="section_title"><?php echo $section_title ?></h2>
            <div class="subtitle"><?php echo $section_subtitle ?></div>
            <div class="reviews_list">
                <div class="reviews_slider swiper">
                    <div class="swiper-wrapper">
                        <?php 
                            foreach($reviews_list as $review) {
                                ?>
                                    <div class="swiper-slide">
                                        <div class="review_item">
                                            <blockquote>
                                                <?php echo $review['text'] ?>
                                                <footer>
                                                    <cite class="author_name"><?php echo $review['author'] ?></cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

