	<footer id="footer">
		
	</footer>
	<script type="text/javascript" src="<?=JS_URL?>masonry.pkgd.min.js"></script>
	<script type="text/javascript">
		var container = document.querySelector('#hero-masonry');
		var msnry = new Masonry( container, {
		  // options
		  columnWidth: 5,
		  itemSelector: '.game-wrap',
		  isAnimated: true		
		});
		$('document').ready(function(){
			$('window').load(function(){
				msnry.layout();
			});
		});
	</script>
</body>
</html>