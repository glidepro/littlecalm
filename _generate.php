<?php
$saySomething = "";
if (isset($_GET["say"])) {
	$saySomething = strtoupper($_GET["say"]);
	$saySomething = str_replace(" ", "<br/>", $saySomething);
	$saySomething = str_replace("-", " ", $saySomething);
}
?>
<!DOCTYPE>
<html>
	<head>
		<title></title>
		<style>
		body {
			margin:0;
			padding:0;
		}
		.oi-oi{/*bruv*/}
		.keep-calm-and-print-this {
			position: relative;
			width: 384px;
			height: 800px;
			background-image:url(http://glidepro.net/new-things/littleprinter/littlecalm/keep-calm-and.png);
		}
		.keep-calm-and-show-us-a {
			position: fixed;
			display:block;
			width: 384px;
			height: 1px;
			border-bottom: 1px solid black;
		}
		.i-can-see-you{/*over there*/}
		.keep-calm-and-show-us-a.thin.top-border {
			top: 45px;
		}
		.keep-calm-and-show-us-a.thick.top-border {
			top: 50px;
			border-bottom: 3px solid black;
		}
		.looking-at-this-code{/*now get top side and*/}
		.keep-calm-and-show-us-a.thick.bottom-border {
			bottom: 50px;
			border-bottom: 3px solid black;
		}
		.keep-calm-and-show-us-a.thin.bottom-border {
			bottom: 45px;
		}
		.enjoy-it{/*!!!*/}
		#and-what-come-on-say-something-witty {
			position: fixed;
			top: 440px;
			height: 250px;
			width: 384px;
			font-size: 54px;
			text-align: center;
			font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
			word-break: break-word;
		}
		</style>
	</head>
	<body>
		<div class="keep-calm-and-print-this">
			<div class="keep-calm-and-show-us-a thin top-border"></div>
			<div class="keep-calm-and-show-us-a thick top-border"></div>
			<div id="and-what-come-on-say-something-witty"><?php echo $saySomething; ?></div>
		</div>
	</body>
</html>
