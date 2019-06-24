<script src="<?php echo get_template_directory_uri(); ?>/jquery/jquery-3.4.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.js"></script>
<?php
    if (get_locale() == "vi") {
        get_template_part( 'template-parts/vi/footer');
    } else {
        get_template_part( 'template-parts/footer');
    }

    wp_footer();
?>
</body>
</html>