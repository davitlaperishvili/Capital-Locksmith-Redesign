
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_text = get_sub_field('section_text'); 
        $section_list = get_sub_field('section_list');
        $contact_us_title = get_sub_field('contact_us_title');
        $contact_us_text = get_sub_field('contact_us_text');
        $contact_us_form_shortcode = get_sub_field('contact_us_form_shortcode');
        $rowIndex = get_row_index();
    ?>
    <section class="all_services" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="section_left">
                <h2 class="section_title"><?php echo $section_title ?></h2>
                <h3 class="subtitle"><?php echo $section_subtitle ?></h3>
                <div class="section_text"><?php echo $$section_text ?></div>
                <div class="section_list">
                    <ul>
                        <?php 
                            foreach($section_list as $item) {
                                ?>
                                <li>
                                    <a href="<?php echo $item['item_url'] ?>">
                                        <i class="ri-check-line"></i>
                                        <span><?php echo $item['item_text'] ?></span>
                                    </a>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="section_right">
                <div class="contact_form">
                    <h2 class="contact_title"><?php echo $contact_us_title ?></h2>
                    <div class="section_text"><?php echo $contact_us_text ?></div>
                    <div class="contact_form_wrap">
                        <div class="wpforms_form">
                            <?php echo do_shortcode($contact_us_form_shortcode) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

