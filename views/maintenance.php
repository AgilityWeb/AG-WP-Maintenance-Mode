<?php
/**
 * Maintenance mode template that's shown to logged out users.
 *
 * @package   maintenance-mode
 * @copyright Copyright (c) 2015, Ashley Evans
 * @license   GPL2+
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo plugins_url( 'views/maintenance.css', dirname( __FILE__ ) ); ?>">

	<title>Down for Maintenance | Bourgeon</title>
</head>

<body>

<header>

</header>

<main>
	<div id="logo">
		<img data-shadow="none" data-shadow-direction="middle" class="img-with-animation  animated-in" data-delay="0" height="64" width="169" data-animation="fade-in" src="http://www.bourgeon.co.uk/wp-content/uploads/2014/04/bourgeonlogo.gif" srcset="" alt="" style="opacity: 1;">
	</div>
	<div id="message">
		<h2>Our website is currently undergoing maintenance.</h2>
		<h2>For further information please <a href="mailto:info@bourgeon.co.uk">email</a> or phone us on 0333 335 0601.</h2>
	</div>
</main>

</body>
</html>