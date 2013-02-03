    <?php wp_footer(); ?>
        <div class="push"></div>
        <footer id="footer">
            <div id="footin">
                <ul>
                    <li><h3>Plan du site</h3></li>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="./html/portfolio.html">Portfolio</a></li>
                    <li><a class="contact-link" href="./html/contact.html">Contact</a></li>
                </ul>
                <!-- Begin MailChimp Signup Form -->

                <div id="mc_embed_signup">
                    <form action="http://etiennedenoel.us6.list-manage.com/subscribe/post?u=777d391103234bbf688e005b6&amp;id=007421df05" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <label for="mce-EMAIL">Newsletter</label>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </form>
                </div>

                <!--End mc_embed_signup-->
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
