<nav class="navigation">
    <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <ul class="navigation-bar navigation-bar-left">
        <li><a href="index.php#hero"><img src="assets/img/home.svg" class="hidden-sm "/>Home</a></li>
        <!--<li><a href="#stat">Number Facts</a></li>-->
        <li <?=(strpos($_SERVER['PHP_SELF'],'agenda.php') !== false)?'class="active"':''?>><a href="agenda.php"><img src="assets/img/Agenda.svg" class="hidden-sm"/>Agenda</a></li>
        <li <?=(strpos($_SERVER['PHP_SELF'],'speakers.php') !== false)?'class="active"':''?>><a href="speakers.php"><img src="assets/img/Speakers.svg" class="hidden-sm"/>Speakers</a></li>
        <li><a href="index.php#media"><img src="assets/img/media.svg" class="hidden-sm "/>Media</a></li>

        <li <?=(strpos($_SERVER['PHP_SELF'],'register.php') !== false)?'class="active"':''?>><a href="register.php"><img src="assets/img/Register.svg" class="hidden-sm "/>Register</a></li>
        <li><a href="index.php#location"><img src="assets/img/Venue.svg" class="hidden-sm "/>Location</a></li>
        <!--<li class="featured"><a href="register.html"><i class="fa fa-ticket fa-1x"></i>Buy Tickets</a></li>-->
    </ul>
</nav>