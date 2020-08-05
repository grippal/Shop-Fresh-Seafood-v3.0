<?php
    /**
     * HTML skeleton for the main content of the webpage.
     *
     * @package ShopFreshSeafood
     * @since   1.0.0
     * @author  Luke Grippa
     * @link    https://github.com/grippal?tab=repositories
     * @license GNU General Public License 2.0+
     */

    namespace ShopFreshSeafood;

    ?>

<?php
    include 'lib/structure/header.php';
    ?>
<div class="fixed-header-gap">
</div>

<main class="about container">


    <section class="row section1">
        <img src="./assets/images/fish_bucket_full.jpg" class="fish-bucket" alt="">
        <div class="column column-left">
            <h1>The freshest fish</h1>
            <h1>delivered weekly</h1>
        </div>
        <div class="column column-right">
            <h4>Now delivering to:</h4>
            <h6>Upper Saddle River</h6>
            <h6>Saddle River</h6>
            <h5><a href="order.php" class="button">Order Now!</a></h5>
        </div>

    </section>
    <section class="row section2">
        <div class="row row1">
            <h2>from the Fulton Fish Market</h2>
        </div>
        <article class="row row2">
            <div class="column">
                <p>located in the <strong> Bronx, NY</strong>, the
                    Fulton Fish Market, is the second largest fish market
                    <strong>worldwide</strong> and supplies NYC’s finest
                    restaurants with the freshest available fish.</p>
                <p><strong>millions</strong> of pounds of seafood flow
                    through the market daily and annual sales exceed
                    <strong>one billion dollars</strong>.</p>
            </div>
            <div class="column">
                <img src="./assets/images/fulton_fish_market.png" alt="">
            </div>
        </article>
        <div class="row row3">
            <a href="blog.php" class="button">Learn about where our
                fish comes from!</a>
        </div>
    </section>
    <section class="row section3">
        <div class="column testimonials">
            <p><strong>“</strong> I’ve tried fish from all of my local supermarkets and
                this is by far the best seafood I have ever eaten. <strong>”</strong></p>
            <div class="customers">
                <img src="./assets/images/anthony_ceccon.jpg" alt="">
                <div class="customer-names">
                    <p>Anthony Ceccon</p>
                    <p>Saddle River Resident</p>
                </div>
            </div>
        </div>
        <div class="column testimonials">
            <p><strong>“</strong> I always thought fish was supposed to taste fishy until
                I ordered from you Shop Fresh Seafood. <strong>”</strong></p>
            <div class="customers">
                <img src="./assets/images/lisa_tantillo.jpg" alt="">
                <div class="customer-names">
                    <p>Lisa Tantillo</p>
                    <p>USR Resident</p>
                </div>
            </div>
        </div>
    </section>
    <section class="row section4">
        <img src="./assets/images/cook_salmon.png" alt="">
        <h1>to your home</h1>

    </section>

    <?php
    include 'lib/structure/footer.php';
    ?>
