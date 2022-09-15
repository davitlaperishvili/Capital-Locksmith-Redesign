<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$workingHours = get_field('workingHours', 'option');
	$address = get_field('address', 'option');
	$copyright = get_field('copyright', 'option');
	$footer_text = get_field('footer_text', 'option');
	$footer_menu = get_field('footer_menu', 'option');
	
?>
<footer class="trans-all-4 site_footer">
    <div class="container">
        <div class="footer_columns footer_full_width_block">
            <div class="column">
                <div class="logo">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_footer.png" alt="">
                    </a>
                </div>
                <div class="footer_contact_info">
                    <ul>
                        <li>
                            <a href="tel:<?php echo $phone ?>">
                                <i class="ri-smartphone-fill"></i>
                                <span><?php echo $phoneVisible ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo $email ?>">
                                <i class="ri-mail-fill"></i>
                                <span><?php echo $email ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="ri-map-pin-fill"></i>
                                <span><?php echo $address ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="column">
                <div class="footer_links">
                    <ul>
                        <li>
                            <a href=""></a>
                            <div class="submenu"></div>
                        </li>
                    </ul>
                </div>
            </div> -->
            <?php 
                if($footer_text['text']){
                    ?>
                        <div class="column">
                            <div class="footer_text">
                                <div class="text_title"><?php echo $footer_text['title'] ?></div>
                                <div class="text_content"><?php echo $footer_text['text'] ?></div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
        <?php 
            if($footer_menu) {
                ?>
                    <div class="footer_full_width_block">
                        <div class="footer_menu">
                            <ul>
                                <?php 
                                    foreach($footer_menu as $item) {
                                        ?>  
                                            <li>
                                                <a href="<?php echo $item['menu_item_url'] ?>"><?php echo $item['menu_item_text'] ?></a>
                                            </li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php
            }
        ?>
        <div class="footer_full_width_block">
            <div class="copyright"><?php echo $copyright ?></div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>