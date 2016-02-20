<?php get_header();?>
<div class="bg-darkBlue">
	<?php get_template_part('sections/section','header-introduce') ;?>
</div>
<?php get_template_part('sections/section','header-front');?>
<div class="bg-white">
	<?php get_template_part('sections/section','header-articles') ;?>
</div>
<div class="clear-float"></div>
<?php get_template_part('sections/section','header-back') ;?>
<div class="bg-white">
    <?php get_template_part('sections/section','header-photos') ;?>
</div>
<div class="clear-float"></div>
<div class="bg-grayLighter">
    <?php get_template_part('sections/section','header-word');?>
</div>
<?php get_footer(); ?>
</body>
</html>