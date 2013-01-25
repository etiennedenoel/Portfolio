        </div>
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


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <script src="<?php bloginfo('template_directory') ?>/js/plugins.js"></script>

        <script src="<?php echo get_bloginfo('template_directory') ;?>/js/main.js"></script>

        <script src="<?php bloginfo('template_directory') ?>/js/vendor/orbit.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <script type="text/javascript">
             $(window).load(function() {
                 $('#featured').orbit();
             });
        </script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDvPpy1_HR2zeap8wNNboUm2uQl9q1PiFY&sensor=false"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
