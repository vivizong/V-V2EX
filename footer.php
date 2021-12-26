<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    <div>
        <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
        All Rights Reserved. 
    </div>
    <p><span> ♥ </span>Do have faith in what you're doing.</p>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script>
    var OriginTitile = document.title;
    var titleTime;  
    document.addEventListener('visibilitychange', function () {
     if (document.hidden) {
        //  $('[rel="icon"]').attr('href', "/img/TEP.ico");
         document.title = ' 页面炸啦💥 ~ ';
         clearTimeout(titleTime);
     }
     else {
        //  $('[rel="icon"]').attr('href', "/favicon.ico");
         document.title = ' 嘿嘿嘿😋 ~' + OriginTitile;
         titleTime = setTimeout(function () {
             document.title = OriginTitile;
         }, 2000);
     }
 });    
</script>
</body>
</html>
