<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Space fynd</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo IMAGE_URL?>favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo CSS_URL?>customize.css" media="all" type="text/css">
	<link rel="stylesheet" href="<?php echo CSS_URL?>about.css" media="all" type="text/css">
	<link rel="stylesheet" href="<?php echo CSS_URL?>jquery-ui-1.10.4.custom.css" media="all" type="text/css">
	<script type="text/javascript">
			var base_url="<?=BASE_URL?>";
	</script>
	<script type="text/javascript" src="<?=JS_URL?>jquery-1.11.1.min.js"></script>
	  <script src="<?php echo JS_URL?>jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL?>jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL?>customize.js"></script>
	
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script>
		 $(function() {
			$( ".budget-slider" ).slider({
				range: true,
				min: 0,
				max: 500,
				values: [ 75, 300 ],
				slide: function( event, ui ) {
					$( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				}
			});
			$( "#amount" ).html( "$" + $( ".budget-slider" ).slider( "values", 0 ) +
			" - $" + $( ".budget-slider" ).slider( "values", 1 ) );
		}); 
	</script>
</head>
