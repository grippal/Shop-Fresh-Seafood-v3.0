<?php include 'lib/structure/header.php'; ?>
<div class="fixed-header-gap">
</div>

<main class="order container">
    <form class="" action="index.html" method="post">
        <div class="row row1 title">
            <h3 class="row">Place Order</h3>
            <p class="row">Orders must be placed by &nbsp<strong>Tuesday at 9:00 pm.</strong></p>
        </div>
        <section class="row section1">
            <div class="column column-left">
                <h3 class="row">Delivery Instructions</h3>
                <p class="row">Double check your information to ensure delivery is accurate and on-time.</p>
            </div>
            <div class="column column-right order-info">
                <label for="">Name: </label>
                <input type="text" id="" name="" placeholder="First">
                <input type="text" id="" name="" placeholder="Last">

                <label for="">Street Address: </label>
                <input type="text" id="" name="" placeholder="123 Lake St.">

                <label for="">Town: </label>
                <select id="" name="">
                    <option value="upper-saddle-river">Upper Saddle River</option>
                    <option value="saddle-river">Saddle River</option>
                </select>

                <label for="">E-mail: </label>
                <input type="email" id="" name="" placeholder="JohnDoe@gmail.com">

                <label for="">Phone Number: </label>
                <input type="tel" id="" name="" placeholder="(201) 123-4567">

                <label for="">Preferred Delivery Date: </label>
                <div class="radio-buttons">
                    <input type="radio" class="sr-only" id="thursday" name="delivery-date" value="thursday">
                    <label for="thursday">
                        <h4>Thursday</h4>
                        <p>11:00 am - 1:00 pm</p>
                        <p>$5.00/order</p>
                    </label>
                    <input type="radio" class="sr-only" id="friday" name="delivery-date" value="friday">
                    <label for="friday">
                        <h4>Friday</h4>
                        <p>11:00 am - 1:00 pm</p>
                        <p>$5.00/order</p>
                    </label>
                </div>
            </div>
        </section>
        <section class="row section2">
            <div class="row row1">
                <h3 class="row">Fresh Product</h3>
                <p class="row">All fresh product must be refrigerated and is best
                    eaten as soon as possible.</p>
            </div>
            <div class="row row2 fresh-product">
                <p class="item col1 head"></p>
                <p class="item col2 head"></p>
                <p class="item col3 head">price</p>
                <p class="item col4 head">quantity</p>
                <p class="item col5 head">subtotal</p>

                <p class="item col1">Atlantic Salmon Filet</p>
                <p class="item col2">approx. 3 lb. filets</p>
                <p class="item col3">$8.50 lb.</p>
                <p class="item col4"><label class="sr-only" for="">Quantity in
                    pounds of .</label> <input type="number" id=""
                    name="" placeholder="0.0 lbs."></p>
                <p class="item col5">$0.00</p>

                <p class="item col1">Tilapia Filet</p>
                <p class="item col2"> approx. 8 oz. filets, 2 lb. minimum</p>
                <p class="item col3">$6.50 lb.</p>
                <p class="item col4"><label class="sr-only" for="">Quantity in
                    pounds of .</label> <input type="number" id=""
                    name="" placeholder="0.0 lbs."></p>
                <p class="item col5">$0.00</p>

                <p class="item col1">Super Lump Crab Meat</p>
                <p class="item col2">16 oz. cans</p>
                <p class="item col3">$25.99 lb.</p>
                <p class="item col4"><label class="sr-only" for="">Quantity in
                    pounds of .</label> <input type="number" id=""
                    name="" placeholder="0.0 lbs."></p>
                <p class="item col5">$0.00</p>

                <p class="item col1">Colossal Crab Meat</p>
                <p class="item col2">16 oz. cans</p>
                <p class="item col3">$34.99 lb.</p>
                <p class="item col4"><label class="sr-only" for="">Quantity in
                    pounds of .</label> <input type="number" id=""
                    name="" placeholder="0.0 lbs."></p>
                <p class="item col5">$0.00</p>

                <p class="item col1">Sea Scallops</p>
                <p class="item col2">1 lb. minimum</p>
                <p class="item col3">$16.99 lb.</p>
                <p class="item col4"><label class="sr-only" for="">Quantity in
                    pounds of .</label> <input type="number" id=""
                    name="" placeholder="0.0 lbs."></p>
                <p class="item col5">$0.00</p>

                <p class="item col1">Smoked Salmon</p>
                <p class="item col2">3 lb. package</p>
                <p class="item col3">$12.99 lb.</p>
                <p class="item col4"><label class="sr-only" for="">Quantity in
                    pounds of .</label> <input type="number" id=""
                    name="" placeholder="0.0 lbs."></p>
                <p class="item col5">$0.00</p>

                <p class="item col1">Smoked Salmon</p>
                <p class="item col2">4 oz. package</p>
                <p class="item col3">$6.99 pkg.</p>
                <p class="item col4"><label class="sr-only" for="">Quantity in
                    pounds of .</label> <input type="number" id=""
                    name="" placeholder="0.0 lbs."></p>
                <p class="item col5">$0.00</p>

                <p class="item col1 footer bottom-left">Fresh Product Subtotal</p>
                <p class="item col2 footer"></p>
                <p class="item col3 footer"></p>
                <p class="item col4 footer"></p>
                <p class="item col5 footer bottom-right">$123.99</p>
            </div>
        </section>
        <section class="row section3">
            <div class="row row1">
                <h3 class="row">Frozen Product</h3>
                <p class="row">All frozen product must be kept in a freezer and can
                    be eaten immediately or stored for later consumption.</p>
                </div>
                <div class="row row2 frozen-product">

                </div>
            </section>
            <section class="row section4">
                <div class="row row1">
                    <h3 class="row">Overview</h3>
                    <p class="row">Once your order is placed you will receive a
                        confirmation e-mail.</p>
                </div>
                <div class="row row2 order-overview">
                    <p class="item col1 head">Fresh Product Subtotal</p>
                    <p class="item col2 head">$123.45</p>

                    <p class="item col1">Frozen Product Subtotal</p>
                    <p class="item col2">$123.45</p>

                    <p class="item col1">Delivery and Handling</p>
                    <p class="item col2">$5.00</p>

                    <p class="item col1 footer bottom-left">Order Total</p>
                    <p class="item col2 footer bottom-right">$123.45</p>
                </div>
                <div class="row row3">
                    <ul>
                        <li>On Wednesday you will receive another e-mail
                            detailing what day your order will be delivered.</li>
                    </ul>
                    <button type="button" name="button">Place Order</button>
                </div>
            </section>


        </form>
    </main>

    <?php include 'lib/structure/footer.php'; ?>
