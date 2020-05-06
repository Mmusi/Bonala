<!-- footer -->
	<div class="footer">
		<div class="container" >
			<div class="col-md-7 copy">
				<div class="top2" >
					<h6>About Us</h6>
					<p>Bonala <i> WANTS TO SIMPLIFY DATA &amp; business decision making!</i>  It is an initiative  to help and give back to business communities.
               We focus on providing the most efficient data &amp; business analysis services. We will help businesses build up their digital strategies &amp; decision making using data as well as Robotic Process Automation.</p>
				<br>
				<p>Copyright © 2020 All Rights Reserved </p>
        
            
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-2 copy">
				<div class="top2">
					<h6>Quick links </h6>
			 <ul style="list-style: none;  float:left; margin-left:-40px;">
              <li><a href="<?=ROOT_URL?>?p=blogController&amp;a=about" data-hover="About Us">Contact us</a></li>
              <li><a href="#">Contribute</a></li>
			  <li><a href="<?=ROOT_URL?>?p=blogController&amp;a=services" data-hover="Services">Services</a></li>
            </ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-2 copy">
				<div class="top2" style="float:right;">
					<h6>Support</h6>
			 <ul style="list-style: none;  float:left; margin-left:-40px;">
              <li><a href="#">FAQ'S</a></li>
			  <li><a href="#">Sitemap</a></li>
			  <li><a href="<?=ROOT_URL?>?p=blogController&amp;a=terms" data-hover="terms">Terms of Service</a></li>
            </ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
			<div class="social-icons">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/Bonala-109455327201708"><img src="content/images/social/facebook.svg" alt="Facebook" width="40" height="40"></a></li>
              <li><a class="twitter" href="#"><img src="content/images/social/twitter.svg" alt="Twitter" width="40" height="40"></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/company/bonala/"><img src="content/images/social/linkedin.svg" alt="Linkedin" width="40" height="40"></a></li>   
            </ul>
          </div>
			
		</div>
	</div>
<!-- footer -->

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>