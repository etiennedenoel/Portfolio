    <?php wp_footer(); ?>
        <div class="push"></div>
        <footer id="footer">
            <div id="footin">
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="./html/portfolio.html">Portfolio</a></li>
                    <li><a class="contact-link" href="./html/contact.html">Contact</a></li>
                </ul>
                <p class="copyright"> © 2012 Etienne Denoel. Tous droits réservés</p>
            </div>
        </footer>
    </div>


        <script src="<?php echo get_bloginfo('template_directory') ;?>/js/main.js"></script>

        <script type="text/javascript">
             $(window).load(function() {
                 $('#featured').orbit();
             });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
