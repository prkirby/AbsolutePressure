<?php
/**
 * Template: Footer.php
 *
 * @package EvoLve
 * @subpackage Template
 */
?>
<!--END #content-->
</div>
<!--END .container-->
</div>
<!--END .content-->
</div>
<!--BEGIN .content-bottom-->
<div class="content-bottom">
    <!--END .content-bottom-->
</div>
<!--BEGIN .footer-->
<div class="footer">
    <!--BEGIN .container-->
    <div class="container container-footer">
        <div class="angies-list-footer">
            <div class="angies-list-web-badge" id = "angies-list-web-badge" style = "max-width:159px"><iframe src="http://www.angieslist.com/al-web-badge/2098172/93416" id="badge-iframe" frameborder="0" scrolling="no" style="width:100%; height: 160px; margin: 0;display: block;"></iframe></div>
            <div class="angies-list-web-badge" id = "angies-list-web-badge" style = "max-width:265px"><iframe src="http://www.angieslist.com/al-web-badge/2098172/93431" id="badge-iframe" frameborder="0" scrolling="no" style="width:100%; height: 83px; margin: 0;display: block;"></iframe> <p style = "margin: 2px 0; line-height: 10px;"><a style = "color: #888; font-size: 10px; text-decoration: none; font-family: helvetica;" title = "We Have Reviews for Pressure Washing Services in Charlotte" href="http://www.angieslist.com/companylist/charlotte/pressure-washing.htm">We Have Reviews for Pressure Washing Services in Charlotte</a></p></div>
        </div>
        <?php
        $evolve_widgets_footer = evolve_get_option('evl_widgets_num', 'disable');
        // if Footer widgets exist
        if (($evolve_widgets_footer == "") || ($evolve_widgets_footer == "disable")) {

        } else {
            ?>
            <?php
            $evolve_footer_css = '';
            if ($evolve_widgets_footer == "one") {
                $evolve_footer_css = 'widget-one-column col-sm-6';
            }
            if ($evolve_widgets_footer == "two") {
                $evolve_footer_css = 'col-sm-6 col-md-6';
            }
            if ($evolve_widgets_footer == "three") {
                $evolve_footer_css = 'col-sm-6 col-md-4';
            }
            if ($evolve_widgets_footer == "four") {
                $evolve_footer_css = 'col-sm-6 col-md-3';
            }
            ?>
            <div class="footer-widgets">
			<div class="widgets-back-inside row">
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-1')) : ?>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-2')) : ?>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-3')) : ?>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-4')) : ?>
                    <?php endif; ?>
                </div>
            </div>
			</div>
        <?php } ?>
        <div class="clearfix"></div>
        <?php
        $footer_content = evolve_get_option('evl_footer_content', '<p id=\"copyright\"><span class=\"credits\"><a href=\"http://theme4press.com/evolve-multipurpose-wordpress-theme/\">evolve</a> theme by Theme4Press&nbsp;&nbsp;&bull;&nbsp;&nbsp;Powered by <a href=\"http://wordpress.org\">WordPress</a></span></p>');
        if ($footer_content === false)
            $footer_content = '';
        echo do_shortcode($footer_content);
        ?>
        <!-- Theme Hook -->
        <?php evolve_footer_hooks(); ?>
        <!--END .container-->
    </div>
    <!--END .footer-->
</div>
<!--END body-->
<?php
$evolve_pos_button = evolve_get_option('evl_pos_button', 'right');
if ($evolve_pos_button == "disable" || $evolve_pos_button == "") {
    ?>
<?php } else { ?>
    <a href="#top" id="top-link"><div id="backtotop"></div></a>
    <?php } ?>
    <?php
    $evolve_custom_background = evolve_get_option('evl_custom_background', '0');
    if ($evolve_custom_background == "1") {
        ?>
    </div>
<?php } ?>
<?php wp_footer(); ?>
</body>
<!--END html(kthxbye)-->
</html>
