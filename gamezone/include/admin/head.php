<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>GameZone</title>

	<link rel="stylesheet" href="<?=CSS_URL?>bootstrap.min.css" media="all" type="text/css">
	<link rel="stylesheet" href="<?=CSS_URL?>custom_reset.css" media="all" type="text/css">
	<!--<link rel="stylesheet" href="<?=CSS_URL?>customize.css" media="all" type="text/css">-->
	<link rel="stylesheet" href="<?=CSS_URL?>admin/admin.css" media="all" type="text/css">
	<!--<link rel="stylesheet" href="<?=CSS_URL?>login/login.css" media="all" type="text/css"> -->
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css" media="all" type="text/css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script src="<?=JS_URL?>jquery-1.11.1.min.js"><\/script>')</script>
	<script type="text/javascript" src="<?=JS_URL?>jquery.main.js"></script>
	<script type="text/javascript" src="<?=JS_URL?>bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=JS_URL?>customize.js"></script>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker" ).datepicker(),
			$( "#datepicker1" ).datepicker();
			$( "#datepicker2" ).datepicker();
			$('#sample-table-2').DataTable(),
		    $('#sample-table-3').DataTable(),
		    $('#sample-table-4').DataTable(),
		    $('#sample-table-5').DataTable();

		     /*$(".scroll").scroll_absolute({arrows:true})*/
		    
		    $('#sidebar').hover(
		    	function()
		    	{
		    		console.log($('#sidebar').is(':animated'));
		    		if(!$('#sidebar ul .text').is(':animated'))
		    		{		    		
		    			$(this).css("width", "221px");
	        			$('#sidebar ul .text').fadeIn(100);
	        		}
		    	},function()
		    	{
		    		if(!$('#sidebar ul .text').is(':animated')){
		    			$(this).css("width", "84px");
						$('#sidebar ul .text').fadeOut(200);
		    		}
		    	}
		    );   

		});
	</script>	
</head>