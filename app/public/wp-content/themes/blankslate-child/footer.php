</main>
        <?php get_sidebar(); ?>
        </div>
                <footer id="footer" role="contentinfo">
                    <div id="copyright">
                        <ul>
                        <li><a href="/accueil/">Mentions légales</a></li>
                        </ul>
                    &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                    </div>
                </footer>
        </div>
        <?php wp_footer(); ?>
</body>
</html>