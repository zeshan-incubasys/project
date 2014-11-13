<footer id="footer">
    <div class="holder">
        <div class="social-info hide">
            <ul>
                <li><a href="#"></a></li>
                <li class="in"><a href="http://ae.linkedin.com/company/cib"></a></li>
            </ul>
            <!--<span><a href="mail:to">Info@mongoliabusinesscongress.com</a></span>-->
        </div>
        <div class="copy-right">
            <span>&copy; 2014 Mongolia Business Congress.All Rights Reserved.</span>
            <a class="build" target="_blank" href="http://www.incubasys.com">Designed and Developed by Incubasys</a>
        </div>
    </div>
</footer>

<div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>

<!--[if lt IE 9]>
<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js?ver=1"></script>
<![endif]-->
<!--[if (gte IE 9) | (!IE)]><!-->
<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js?ver=1"></script>
<!--<![endif]-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.nav.js"></script>
<script type="text/javascript" src="assets/js/jquery.appear.js"></script>
<script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="assets/mailchimp/js/mailing-list.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/jquery.plugin.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script>
    function watchCountdown(periods) {
        var d = periods[3].toString();
        var hr = periods[4].toString();
        var min = periods[5].toString();
        var sec = periods[6].toString();
        var days1;
        var days2;
        var hr1;
        var hr2;
        var min1;
        var min2;
        var sec;
        var sec2;


        if(d.substring(1,2)=="")
        {
            days1=0;
            days2=d.substring(0,1);
        }else
        {
            days1=d.substring(0,1);
            days2=d.substring(1,2);
        }
        if(hr.substring(1,2)=="")
        {
            hr1=0;
            hr2=hr.substring(0,1);
        }else
        {
            hr1=hr.substring(0,1);
            hr2=hr.substring(1,2);
        }
        if(min.substring(1,2)=="")
        {
            min1=0;
            min2=min.substring(0,1);
        }else
        {
            min1=min.substring(0,1);
            min2=min.substring(1,2);
        }
        if(sec.substring(1,2)=="")
        {
            sec1=0;
            sec2=sec.substring(0,1);
        }else
        {
            sec1=sec.substring(0,1);
            sec2=sec.substring(1,2);
        }
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.clock-wrap, .hidden-md').html('<div class="container"><div class="block-wrap"><div class="holder"><span class="block">'+days1+'</span><span class="block">'+days2+'</span></div><strong class="title">Days</strong></div>'+
                '<div class="block-wrap"><div class="holder"><span class="block">'+hr1+'</span><span class="block">'+hr2+'</span></div><strong class="title">Hours</strong></div>'+
                '<div class="block-wrap"><div class="holder"><span class="block">'+min1+'</span><span class="block">'+min2+'</span></div><strong class="title">Minutes</strong></div>'+
                '<div class="block-wrap"><div class="holder"><span class="block">'+sec1+'</span><span class="block">'+sec2+'</span></div><strong class="title">Seconds</strong></div></div>');
        }else
        {
            $('.clock-wrap,.hidden-sm').html('<div class="container"><div class="block-wrap"><div class="holder"><span class="block">'+days1+'</span><span class="block">'+days2+'</span></div><strong class="title">Days</strong></div>'+
                '<div class="block-wrap"><div class="holder"><span class="block">'+hr1+'</span><span class="block">'+hr2+'</span></div><strong class="title">Hours</strong></div>'+
                '<div class="block-wrap"><div class="holder"><span class="block">'+min1+'</span><span class="block">'+min2+'</span></div><strong class="title">Minutes</strong></div>'+
                '<div class="block-wrap"><div class="holder"><span class="block">'+sec1+'</span><span class="block">'+sec2+'</span></div><strong class="title">Seconds</strong></div></div>');
        }

    }
    $(function () {
        austDay = new Date(2014, 11, 24, 10, 00, 00);
        $('.clock-wrap').countdown({until: austDay, format: 'ODHMS',padZeroes:false, onTick: watchCountdown
            /*layout: '<div class="block-wrap"><div class="holder"><span class="block">{dn}</span></div><strong class="title">Days</strong></div>'+
             '<div class="block-wrap"><div class="holder"><span class="block">{hn}</span></div><strong class="title">Hours</strong></div>'+
             '<div class="block-wrap"><div class="holder"><span class="block">{mn}</span></div><strong class="title">Minutes</strong></div>'+
             '<div class="block-wrap"><div class="holder"><span class="block">{sn}</span></div><strong class="title">Seconds</strong></div>'*/
        });
        $('.carousel').carousel({interval:1000});
		$('.form-register').validate({
		rules: {
			fname: "required",
			sname: "required",
			phone:{ required:true,
			number:true
			},
			email: {
			  required: true,
			  email: true
			}
		  },
			messages: {
				fname: "Please enter your firstname",
				sname: "Please enter your lastname",
				phone: "Please enter your Phone Number",
				email: "Please enter your Valid Email"
			}
		});



    });
	
</script>
</body>
</html>
