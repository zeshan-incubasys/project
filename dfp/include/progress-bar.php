<h2>Checkout Progress</h2>
<div class="tabs-area">
	  <span class="line"></span>
	  <ul class="tab-items">
			<li <?=(strpos($_SERVER['PHP_SELF'], 'login.php') != false)?'class="active"':''?>>Login</li>
			<li <?=(strpos($_SERVER['PHP_SELF'], 'billing.php') != false)?'class="active"':''?>>Billing Address</li>
			<li<?=(strpos($_SERVER['PHP_SELF'], 'payment.php') != false)?'class="active"':''?> >Payment Method</li>
			<li <?=(strpos($_SERVER['PHP_SELF'], 'order.php') != false)?'class="active"':''?> >Order Review</li>
	  </ul>
</div>