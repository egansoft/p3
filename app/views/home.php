<?php
	$currentUrl = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>P3: Developer's Best Friend</title>
	</head>
	<body>
		<h1>P3: Developer's Best Friend</h1>
		
		<h2>Lorem Ipsum Generator</h2>
		<p>
			To generate random text from the lorem ipsum generator, add loremimpsum/amt to the end of this url
			in order to generate [amt] paragraphs of lorem impsum text. For example, you can go to 
			<a href="<?=$currentUrl . 'loremipsum/5'?>"><?=$currentUrl . 'loremipsum/5'?></a> to generate
			5 paragraphs of lorem impsum text, or go to <a href="<?=$currentUrl . 'loremipsum'?>">
			<?=$currentUrl . 'loremipsum'?></a> to generate the default of 1 paragraph of lorem impsum text.
		</p>
		
		<h2>Random User Generator</h2>
		<p>
			To generate random users from the random user generator, which includes their name, address, 
			phone number, and birth date, add users/amt to the end of this url
			in order to generate [amt] paragraphs of lorem impsum text. For example, you can go to 
			<a href="<?=$currentUrl . 'users/5'?>"><?=$currentUrl . 'users/5'?></a> to generate
			5 users, or go to <a href="<?=$currentUrl . 'users'?>">
			<?=$currentUrl . 'users'?></a> to generate the default of 1 random user.
		</p>
	</body>
</html>