<?php include('include/header.php'); 
	if(isset($_GET['tab'])){
		$tab = $_GET['tab'];
	}else{
		$tab = '';
	}
?>
	  <div id="container">
      	<h1>Contact US</h1>
      	<form class="contact-form" action="#">
        	<fieldset>
            	<div class="row">
                	<div class="block">
                    	<input type="text" placeholder="Name" />
                    </div>
                </div>
                <div class="row">
                	<div class="block">
                    	<input type="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row">
	                <div class="block">
                    <textarea placeholder="Message " ></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit"/>
                </div>
            </fieldset>
        </form>
	  </div>

<?php include('include/footer.php'); ?>