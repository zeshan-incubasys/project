<div id="menu" title="Menu">
	  <a href="javascript:void(null)"><img src="<?=IMAGE_URL?>icon-cross.png" onclick="$('#menu').dialog('close');" style="float: right;"></a>
	  <h1>Menu</h1>
	  <ul>
			<li><a href="javascript:void(0);" onclick=" $('.main').moveTo(1);$('#menu').dialog('close');" >Home</a></li>
			<li><a href="javascript:void(0);" onclick=" $('.main').moveTo(2);$('#menu').dialog('close');" >Games</a></li>
			<li><a href="javascript:void(0);" onclick=" $('.main').moveTo(3);$('#menu').dialog('close');" >How it works</a></li>
			<li><a href="javascript:void(0);" onclick=" $('.main').moveTo(4);$('#menu').dialog('close');" >About us</a></li>
			<li><a href="javascript:void(0);" onclick=" $('.main').moveTo(5);$('#menu').dialog('close');" >Affiliates </a></li>
			<li><a href="javascript:void(0);" onclick=" $('.main').moveTo(6);$('#menu').dialog('close');" >Developers</a></li>
			<li><a href="#">Privacy Policy </a></li>
			<li><a href="#">Legal </a></li>
			<li><a href="#">FAQ </a></li>
			<li><a href="#">Terms of Use</a></li>
	  </ul>
</div>
<div id="game-desc" title="Game Description">
	<?include("popup.php")?>
</div>

<div id="game3" class="game-data">
	  <?include("popup.php")?>
</div>