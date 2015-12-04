<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!-- Begin Navigation -->
<div class="navigationitems">
<nav id="mainnav" class="main">
<ul>
<li <?php if($page == 'flowers.php') { echo 'class="current"'; } ?>><a href="flowers.php">Flowers</a></li>
<li <?php if ($page == 'delivery.php') { echo 'class="current"'; } ?>><a href="delivery.php">Delivery</a></li>
<li <?php if ($page == 'payments.php') { echo 'class="current"'; } ?>><a href="payments.php">Payments</a></li>
<li <?php if ($page == 'blog.php') { echo 'class="current"'; } ?>><a href="blog.php">Blog</a></li>
<li <?php if ($page == 'contact.php') { echo 'class="current"'; } ?>><a href="contact.php">Contact Us</a></li>
</ul>
</nav>
</div>
</header>
</div>
<!-- closed navigation -->
