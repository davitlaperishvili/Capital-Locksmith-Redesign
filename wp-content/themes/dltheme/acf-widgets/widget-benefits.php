
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_text = get_sub_field('section_text'); 
        $section_list = get_sub_field('section_list');
        $benefits_list = get_sub_field('benefits_list');
        $section_button_text = get_sub_field('section_button_text');
        $section_button_url = get_sub_field('section_button_url');
        $rowIndex = get_row_index();
    ?>
    <section class="benefits" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="section_wrap">
                <div class="section_left">
                    <h2 class="section_title"><?php echo $section_title ?></h2>
                    <div class="subtitle"><?php echo $section_subtitle ?></div>
                    <div class="section_text"><?php echo $section_text ?></div>
                    <div class="section_list with_line">
                        <ul>
                            <?php 
                                foreach($section_list as $item){
                                    ?>
                                        <li><?php echo $item['item_text'] ?></li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <?php 
                        if($section_button_url){
                            ?>
                                <div class="section_buttons">
                                    <div class="theme_button oblique_right">
                                        <a href="<?php echo $section_button_url ?>">
                                            <i class="ri-phone-fill"></i>
                                            <span><?php echo $section_button_text ?></span>
                                        </a>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
                <div class="section_right">
                    <div class="benefits_list">
                        <?php 
                            foreach($benefits_list as $benefit) {
                                ?>
                                    <div class="benefit_item">
                                        <div class="benefit_title">
                                            <img src="<?php echo $benefit['benefit_icon']['url'] ?>" alt="<?php echo $benefit['benefit_icon']['alt'] ?>">
                                            <span><?php echo $benefit['benefit_title'] ?></span>
                                        </div>
                                        <div class="benefit_text"><?php echo $benefit['benefit_text'] ?></div>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

