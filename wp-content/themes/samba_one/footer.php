<footer>
    <?php wp_footer(); ?>

    <nav class="menu-navigation">
        <?php wp_nav_menu(array(
            'theme_location' => 'menu-navigation',
            'menu_class' => 'register-menu'
        )) ?>
        
        <ul class="navigation navigation-social">
            <li>
                <a href="http://">
                    <i class="fa fa-github" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="http://">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>

            </li>
            <li>
                <a href="http://">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>

            </li>
        </ul>
        <p>&copy; Samba 2024</p>

    </nav>
   
    
</footer>
</body>

</html>