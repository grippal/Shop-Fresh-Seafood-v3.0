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

        <main class="about">
            <div class="from-boat">
                <h1>from the boat</h1>
                <img src="assets/images/man_holding_fish.png" alt="man on a boat holding a fish">
            </div>
            <div class="to-fulton-content">
                <div class="to-fulton-text">
                    <h3>to the Fulton Fish Market</h3>
                    <p>located in the Hunts Point section of the <strong>Bronx</strong>, <strong>NY</strong>, the Fulton
                        Fish Market, is second in size <strong>worldwide</strong> only to Tokyo’s Tsukiji wholesale seafood market.</p>
                    <p><strong>millions</strong> of pounds of seafood flow through the market daily and annual sales
                        exceed <strong>one billion dollars</strong>.</p>
                </div>
                <div class="to-fulton-image">
                    <img src="assets/images/fulton_fish_market.png" alt="the Fulton Fish Market">
                </div>
            </div>
            <div class="to-fulton-dishes">
                <img class="fish-bucket" src="assets/images/fish_bucket.png" alt="seafood in a bucket">
                <img class="lobster-dish" src="assets/images/lobster_plate.png" alt="cooked lobster in a plate">
                <img class="fish-dish" src="assets/images/fish_bowl.png" alt="whole fish in a dish">
            </div>

            <div class="to-home">
                <img src="assets/images/cook_salmon.png" alt="salmon cook prep">
                <div class="to-home-text">
                    <h3>to your home</h3>
                    <p>Now delivering to:</p>
                    <p>Upper Saddle River</p>
                    <p>Saddle River</p>
                    <a href="" class="to-home-button">
                            <p>Order Now</p>
                    </a>

                </div>
            </div>
        </main>


		<?php
	include 'lib/structure/footer.php';
	?>