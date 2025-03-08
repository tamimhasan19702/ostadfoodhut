<nav id="primary-nav" class="dropdown cf">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'menu_class' => 'dropdown menu',
        'walker' => new Venue_walker_menu(),
    ));
    ?>
</nav>



<!-- 
<nav id="primary-nav" class="dropdown cf">
    <ul class="dropdown menu">
        <li class='active'><a href="#">Popular</a></li>
        <li><a href="#">Most Visited</a>
            <ul class="sub-menu">
                <li><a href="#">Most Visited 1</a>
                </li>
                <li><a href="#">Most Visited 2</a>
                </li>
                <li><a href="#">Most Visited 3</a>
                </li>
            </ul>
        </li>
        <li><a class="scrollTo" data-scrollTo="blog" href="#">Blog Entries</a></li>
        <li><a class="scrollTo" data-scrollTo="services" href="#">Our Services</a></li>
        <li><a class="scrollTo" data-scrollTo="contact" href="#">Contact Us</a></li>
    </ul>
</nav> -->