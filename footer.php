<div class="clear"></div>
</div>
<div id="footer">
<span class="text">
<?php
$blog_name = '<a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a>';
printf(__('Copyright %s %s %s &middot; Powered by %s <br/> Lightword Theme by %s &middot; presented by %s.', 'lightword'),'&copy;',date('Y'),$blog_name,'<a href="http://www.wordpress.org" title="Wordpress" target="_blank" ref="nofollow">Wordpress</a>','<a title="Andrei Luca" target="_blank" href="http://www.andreiwebdesign.com/">Andrei Luca</a>','<a title="Kinder-Blog" target="_blank" href="http://www.kinder-blog.com">Kinder Blog</a>');
?>
</em>

<a title="<?php _e('Go to top','lightword'); ?>" class="top" href="#top"><?php _e('Go to top','lightword'); ?> &uarr;</a>

</span>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>

<?php wp_footer(); ?>
</div>
</body>
</html>