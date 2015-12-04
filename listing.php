<?php include('includes/header.php'); ?>
<div id="breadcrumb"><a href="index.php">Home</a> > <a href="flowers.php">Flowers</a> > <a href="bouquets.php">Bouquets</a> > <a href="listing.php">Listing</a>
</div>
<div id="listing">
<div class="list1">
<img src="images/22.jpg" width="340px" height="397px" alt="Tulip Town" class="listt"/>
<div class="descriptionText">
<h5>Summer Kiss</h5>
<h2 clas="descript">Description</h2>
<p>All the Summer Kiss is feminine and full of color. This sophisticated combination of multi-hued pink roses and pink alstroemeria are contrasted with green Fuji mums. It's the perfect gift for someone who deserves all the frills.</p>
</div>
</div>
<div class="list2">
<div class="prodItem">
<p class="prodHeader">1. Please select your bouquet size</p>
<div class="radioButtons">
<label for="standart">
<div class="form_row">
<span class="radio">
<input type="radio" name="size" value="standart" checked>
</span>
<em>Standart</em>
<span class="text">
<s>$15.00</s>
$10.00
</span>
</div>
</label>
<label for="deluxe">
<div class="form_row">
<span class="radio">
<input type="radio" name="size" value="standart">
</span>
<em>Deluxe</em>
<span class="text">
<s>$15.00</s>
$10.00
</span>
</div>
</label>
<label for="Premium">
<div class="form_row">
<span class="radio">
<input type="radio" name="size" value="standart">
</span>
<em>Premium</em>
<span class="text">
<s>$15.00</s>
$10.00
</span>
</div>
</label>
</div>
</div>
<div class="prodItem">
<p class="prodHeader">2. Add a little something extra</p>
<div class="radioButtons">
<label for="balloons">
<div class="form_row">
<span class="radio">
<input type="radio" name="extra" value="1balloon" checked>
</span>
<em>1 Balloon</em>
<span class="text">
$10.00
</span>
</div>
</label>
<label for="balloons">
<div class="form_row">
<span class="radio">
<input type="radio" name="extra" value="3balloon">
</span>
<em>3 Balloons</em>
<span class="text">
$10.00
</span>
</div>
</label>
<label for="balloons">
<div class="form_row">
<span class="radio">
<input type="radio" name="extra" value="5balloon">
</span>
<em>5 Balloons</em>
<span class="text">
$10.00
</span>
</div>
</label>
</div>
</div>

<div class="prodItem">
<p class="prodHeader">3. Recipient Zip</p>
<div id="delivery_row">
<label class="zip">Enter Recipient's Zip Code: </label>
<input id="zip_code" type="text" maxlength="10" value="" name="zip">
</div>
</div>
<div class="prodItem">
<p class="prodHeader">4. Select Delivery Date</p>
<div id="delivery_row">
<input id="zip_code" type="text" maxlength="10" value="" name="zip">
<button type="button" id="proceed">
<a href="#">Continue</a>
</button>
</div>
</div>
</div>
</div>
<div id="widgets">
<h1>Recently Viewed Products</h1>
<section class="widget-item">
<a href="index.html"><img src="images/popular1.jpg" width="197" height="190" alt="Tulip Town" /></a>
<dl>
<dt>Item Name</dt>
<dd>$10.00</dd>
</dl>
</section>
<section class="widget-item">
<a href="index.html"><img src="images/popular2.jpg" width="197" height="190" alt="Tulip Town" /></a>
<dl>
<dt>Item Name</dt>
<dd>$10.00</dd>
</dl>
</section>
<section class="widget-item">
<a href="index.html"><img src="images/popular3.jpg" width="197" height="190" alt="Tulip Town" /></a>
<dl>
<dt>Item Name</dt>
<dd>$10.00</dd>
</dl>
</section>
<section class="widget-item">
<a href="index.html"><img src="images/popular4.jpg" width="197" height="190" alt="Tulip Town" /></a>
<dl>
<dt>Item Name</dt>
<dd>$10.00</dd>
</dl>
</section>
</div><!--closed widgets -->

</div>

<div class="clear">&nbsp;</div>
<div id="social">
<h5>Follow Us</h5>
<div id="social_list">
<a href="index.html"><img class="col4" src="images/facebook.png" width="67" height="62" alt="Tulip Town" /></a>
<a href="index.html"><img class="col4" src="images/instagram.png" width="67" height="62" alt="Tulip Town" /></a>
<a href="index.html"><img class="col4" src="images/google.png" width="67" height="62" alt="Tulip Town" /></a>
<?php include('includes/footer.php'); ?>