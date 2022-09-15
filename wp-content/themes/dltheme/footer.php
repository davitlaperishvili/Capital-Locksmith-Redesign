<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$workingHours = get_field('workingHours', 'option');
	$address = get_field('address', 'option');
	
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
            <div class="column">
                <div class="footer_text">
                    <div class="text_title">About Us</div>
                    <div class="text_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam labore, nihil numquam quidem molestiae earum sit odit! Cupiditate neque blanditiis illo doloribus distinctio dignissimos nesciunt debitis maxime nihil enim, amet perspiciatis modi ipsa, nemo, tenetur mollitia maiores voluptas officiis molestias?</div>
                </div>
            </div>
        </div>
        <div class="footer_full_width_block">
            <div class="footer_menu">
                <ul>
                    <li>
                        <a href="">About us</a>
                    </li>
                    <li>
                        <a href="">Services</a>
                    </li>
                    <li>
                        <a href="">Contact us</a>
                    </li>
                    <li>
                        <a href="">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer_full_width_block">
            <div class="copyright">Copyright © capital-locksmith.net. All rights reserved.</div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>