<?php

$quotes = [
	[
		'quote' => 'Enjoy life now. This is not rehearsal! ',
		'author' => ' 66666666'
	],
	[
		'quote' => 'It is not what you do once in a while; It is what you do day in and day out that makes the difference.',
		'author' => 'Jenny Craig'
	],
	[
		'quote' => 'H.O.P.E : Hold on, pain ends',
		'author' => ' 5555555555555'
	],
	[
		'quote' => 'You get what you settle for',
		'author' => '22222222222 '
	],
	[
		'quote' => 'A head full of fears has no space for dreams',
		'author' => '11111111111 '
	],
];

$selectedQuote = $quotes[rand(0, count($quotes) - 1)];
$quoteString = $selectedQuote['quote'];
$quoteSource = $selectedQuote['author'];

?>

<html>
	<head>
		<title>Mozhgan Moghanian</title>
		<link rel="stylesheet" href="a1.css" type="text/css">
	</head>
	<body>
		<div class="container">
			<h1>Mozhgan Moghanian</h1>
			<!--
			<div class="pic">
				<img src="sima.JPG" alt="Sima's beautiful photo">
			</div>
				-->
			<div class="circle"></div>
			<div class="empty"></div>
			<div class="quote">
				<?php require 'a1.php';?>
				<h2>Random Quote</h2>
				<blockquote>
					<h2><?php echo $quoteString; ?></h2>
					<strong><?php echo $quoteSource; ?></strong>
				</blockquote>
			</div>
			<div class="about">
				<h3>About me</h3>
				<p class="blue-white-blue">The length of a biography depends on the type
           of information that should be included. The length will determine the
            nature of information and how extensively it will explain the life
             of a person. For instance, if you are to write a short paragraph
              about a person it will mostly capture the important details that</p>
			</div>
		</div>
	</body>
</html>
