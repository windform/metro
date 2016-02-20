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
<div class="bg-darkTeal">
    <div class="container">
        <form action="" method="post">
        <div class="grid">
            <div class="row cells3">
                <div class="cell">
                    <div class="input-control text" style="width:100%">
                        <span class="mif-user prepend-icon"></span>
                        <input type="text" placeholder="你的称呼">
                    </div>
                </div>
                <div class="cell">
                    <div class="input-control text" style="width:100%">
                        <span class="mif-mail prepend-icon"></span>
                        <input type="email" placeholder="你的邮箱">
                    </div>
                </div>
                <div class="cell">
                    <div class="input-control text" style="width:100%">
                        <span class="mif-vpn-publ prepend-icon"></span>
                        <input type="url" placeholder="你的个人网址或社交网站">
                    </div>
                </div>
            </div>
            <div class="row cell">
                <div class="cell">
                    <div class="input-control textarea" data-role="input" data-text-auto-resize="true" data-text-max-height="200" style="width:100%">
                        <textarea placeholder="有什么想说的吗？"></textarea>
                    </div>
                </div>
            </div>
        </div>     
        </form>
    </div>
</div>

<?php get_footer(); ?>

</body>
</html>