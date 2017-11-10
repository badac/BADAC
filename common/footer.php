</div><!-- end content -->

<footer role="contentinfo">

    <div id="footer-content" class="center-div">
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
         <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <nav><?php echo public_nav_main()->setMaxDepth(0); ?></nav>


         <div id="social">
        <div class="socialicon">

       <?php
      echo "<a href='https://www.instagram.com/arteuniversidadandes/' target='_blank'><i class='fa fa-instagram fa-5' aria-hidden='true'></i> </a>";
       ?>


           </div>
             <div class="socialicon">
        <?php
      echo "<a href='https://vimeo.com/arteuandes' target='_blank'> <i class='fa fa-vimeo fa-5' aria-hidden='true'></i> </a>";
       ?></div>
                  <div class="socialicon">
         <?php
      echo "<a href='https://www.facebook.com/Banco-de-Archivos-Digitales-de-Arte-en-Colombia-BADAC-1405168193033232/' target='_blank'> <i class='fa fa-facebook' aria-hidden='true'></i> </a>";
       ?></div>
            </div>



        <div id="tecomeka"><?php echo __('Tecnología de <a href="http://omeka.org" target="_blank">Omeka</a>.'); ?></div>

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu();
        Berlin.dropDown();
    });
</script>

</body>

</html>
