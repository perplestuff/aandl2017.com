<?php require 'webpages/const/header.php' ?>
<link rel="stylesheet" href="webpages/const/css/index.css" type="text/css">
<script type="text/javascript">
$(document).ready(function()
{
	$('#test').hide();
	$('#Table').click(function()
	{
		$('#test').toggle();
	});
});
</script>
<body>
	<?php include_once 'webpages/const/left.html'; ?>
	<center id="intro">
		<header>Welcome to our family business!</header>
		<h3>
			We sell and deliver goods same day for a small<br/> fee of $5.00 to all residents of London, ON.<br/><br/>
			<em>Spend $50.00 or more...delivery is <u style="color:red;">free</u>.</em>
		</h3>
		<p>For order information please click <button id="Table">here</button></p>
		<div id="test"><?php include_once 'webpages/const/deliveryinfo.html'; ?></div>
	</center>
	<br/>
	<center>
		<h1><u>Recommended Products</u></h1>
		<div id="products">
			<?php
			$res = $conf['database']->prepare('select * from products');
			$res->execute();
			$out = $res->fetchAll();
			?>
			<?php foreach($out as $res) : ?>
				<img src="img/prod/<?= $res->img ?>"/>
				<h2><?= $res->name; ?></h2>
				<small>Product ID# <?= $res->productID; ?></small>
				<p><?= $res->description; ?></p>
				<?php if($res->warning) : ?>
					<u style="color:red;">MUST BE 19 YEARS OR AGE OR OLDER TO PURCHASE</u>
				<?php endif; ?>
				<h3><?= $res->price; ?></h3>
			<?php endforeach; ?>
		</div>
	</center>
</body>
<?php require 'webpages/const/footer.php' ?>
