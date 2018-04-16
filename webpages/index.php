<?php require 'webpages/const/header.php' ?>
<script type="text/javascript">
$(document).ready(function()
{
	$('#Table').mouseover(function()
	{
		$('#test').html('testing');
	});
	$('#Table').mouseout(function()
	{
		$('#test').html('');
	});
});
</script>
<body>
	<header>Welcome to our family business!</header>
	<h1>We sell and deliver goods same day for a small fee of $5.00 to all residents of London, ON.</h1>
	<p>For orders outside of London please reference the table <a href="#" id="Table">here</a></p>
	<div id="test"></div>

</body>
<?php require 'webpages/const/footer.php' ?>
