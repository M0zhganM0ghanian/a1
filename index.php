<?php

$quotes = [
	[
		'quote' => 'Enjoy life now. This is not rehearsal! ',
		'author' => 'Unknown'
	],
	[
		'quote' => 'It is not what you do once in a while; It is what you do day in and day out that makes the difference.',
		'author' => 'Jenny Craig'
	],
	[
		'quote' => 'H.O.P.E : Hold on, pain ends',
		'author' => 'Unknown'
	],
	[
		'quote' => 'You get what you settle for',
		'author' => 'Unknown'
	],
	[
		'quote' => 'Happiness is when what you think, what you say, and what you do are in harmony',
		'author' => 'Mahatma Gandhi '
	],
];

$selectedQuote = $quotes[rand(0, count($quotes) - 1)];
$quoteString = $selectedQuote['quote'];
$quoteSource = $selectedQuote['author'];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Mozhgan Moghanian</title>
		<link rel="stylesheet" href="a1.css.css" type="text/css">
	</head>
	<body>
		<div class="container">
			<h1>Mozhgan Moghanian</h1>
			<div class="circle"></div>
			<div class="empty"></div>
			<div class="quote">
				<h2>Random Quote</h2>
				<blockquote>
					<h3><?php echo $quoteString; ?></h3>
					<strong><?php echo $quoteSource; ?></strong>
				</blockquote>
			</div>
			<div class="about">
				<h3>About me</h3>
				<p class="blue-white-red">I'm Mozhgan Moghanian 26 years old live in Vancouver, Canada with my lovely husband. I graduated in 2013 with
        a B.Sc. in Engineering. As a fun I started to learn programming languages during my bachelor degree and I found myself crazy about that.
        I keep learning by myself and during my very first job as a programmer, and still have passion for it which leads to study the master degree
         in software at Harvard. On the other side of my life I am a math teacher (hope to find a relevant job soon), I play violin, no kids yet, love
         my family...
        </p>
			</div>
		</div>
	</body>
</html>
