<?php if (isset($_POST['submit'])) : ?>
	<?php
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
		$res = $conf['database']->prepare("select username, password from admin where username = '$username'");
		$res->execute();
		$out = $res->fetchAll();
		$test = login::verifyLogin([
			'out'=>$out,
			'userpass'=>$password
		]);
		if ($test) {
			echo "success.";
		}
	?>
	<?php require 'webpages/const/header.php' ?>
		<h1>ha</h1>
	<?php require 'webpages/const/footer.php' ?>
<?php else : ?>
	<?php header("Location: /"); ?>
<?php endif; ?>
