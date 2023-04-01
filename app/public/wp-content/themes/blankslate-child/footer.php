</main>
        </div>
                <footer id="footer" role="contentinfo">
<?php
 if ( has_nav_menu( 'footer-menu' ) ) : ?>
 <?php 
 wp_nav_menu ( array (
 'theme_location' => 'footer-menu' ,
 'menu_class' => 'my-footer-menu', // classe CSS pour customiser mon menu
 ) ); ?>
 <?php endif;
 ?>
                </footer>
        </div>
        <?php wp_footer(); ?>
</body>
</html>