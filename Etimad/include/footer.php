    
    </div>
    </div>

	<footer id="footer">
    <div class="f1">
    	<div class="f2">
        <div class="footer-banner">
        	<div class="text-holder">
                <h1> <a class="banner-link" href="#" data-trigger="modal">About Etimad</a></h1>
                <p>Etimad Holding is a leading UAE company combining and governing key operating companies and skills that together provide an end-to-end fulfillment, control and assurance for any type of national security model.  Our mission-purpose continues to be providing key solutions for our nations-security.</p>
                 <a class="banner-link" href="#" data-trigger="modal"><img src="<?=IMAGE_URL?>tick.png" alt=""/></a>
          </div>
    </div>
        	 <div class="text-holder">
			  <div class="links">
				  <ul>
					  <li><a href="#">Privacy Policy</a></li>
					  <li><a href="#">Terms of Use</a></li>
					  <li><a href="#">Back to Service Selection</a></li>
				  </ul>
			  </div>
			  <span class="copy">&copy; <?=date("Y")?> <a href="#">Etimad</a> All Rights Reserved.</span>
		  </div>
        </div>
    </div>
	</footer>
    </div>
</body>
<div class="magic-popup">
    	<div class="holder">
        <h1>About Etimad</h1>
        	<p>Etimad is a leading UAE Holding combining and governing key operating companies and competencies that together provide an end-to-end fulfillment, control and assurance for any type of national security model.  Our mission-purpose continues to be providing key solutions for our nations-security. In continuation of our success, achieved over the last years through Etimad Operational Companies, our vision has now grown to recognize the need to combine long term strategy with tactical solutions. The success of our integrated security and intelligence solution portfolio, is now complemented with the establishment of Etimad Holding to deliver continuous assurance and governance for critical security projects.</p>
            <p>Recognizing that each project is unique, requiring continuous technical adaptability, Etimad assures continuous project integrity through the respective capabilities of our companies:	</p>
            <ul>
            	<li>Physical-Sensors and Event-Monitoring Technology Analysis and Design delivered through the system integration specialization of our company Al Fahad Security Systems</li>
                <li>Fiber Networks, IT Infrastructure, Information Security, Information Intelligence and Event Monitoring delivered through the specialization of our company Al Fahad Networking and Communications</li>
                <li>Environment-adaptive solutions, Tactical Power Solutions, Health and Safety delivered through the specialization of our company Al Fahad Electrical Systems</li>
                <li>Construction and Civil Infrastructures delivered through the specialization of our company House of Engineering</li>
            </ul>
            <p>All corporate core skills are structured together to provide an integrated delivery of national security paradigms of analysis and design, related civil works, multi sensors, networking, signaling, communications, installation, commissioning, maintenance and operations. The security models now requires not only technical solution focus, but also tailor-made project KPIs,  governance, standardization, and conformance monitoring of the project in whole and across phases within:</p>
            <ul>
            	<li>Applying the specific Human Resource Skills and availability, delivered through the specialization of our company Al Masar Recruitment</li>
                <li>Triggering the efficient Logistical support processes and events, delivered through the specialization of our logistics companies</li>
                <li>Governing and conformance monitoring of each KPI, best practices monitoring and standards to assure project continuous integrity, delivered through the specialization of Etimad Holding   </li>
            </ul>
            <p>Our operating companies deliver the adaptive technology solutions and Etimad ensures their Continuous-Integrity tailor made to fulfill your tactical and strategic benefit, unified.</p>
            <div class="this-etimad">
            	this is etimad
            </div>
            <a href="#" class="cross-btn" data-trigger="closemodal" >X</a>
        </div>
    </div>


    <script type="text/javascript">

$(document).ready(function(e){
    $('[data-trigger="modal"]').click(function(e){
        $('.magic-popup').removeClass('fadeOutUp animated').addClass('fadeInUp animated').show();
    });
     $('[data-trigger="closemodal"]').click(function(e){
        $('.magic-popup').removeClass('fadeInUp animated');
        setTimeout(function(e){
             $('.magic-popup').addClass('fadeOutUp animated');
        },500);
    });
    
});
$('.magic-popup').click(function(e){
   
    
         $('.magic-popup').removeClass('fadeInUp animated');
        setTimeout(function(e){
             $('.magic-popup').addClass('fadeOutUp animated');
        },500);
    
});
    </script>
</html>