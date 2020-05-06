<?php require_once 'shared/header.php' ?>

<!-- content -->

		<div class="contact-down">
				<div style="width:70%;" class="contact-right">

		<div class="tab-wrap">
		
			<input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
			<label for="tab1">Data Science</label>

			<input type="radio" id="tab2" name="tabGroup1" class="tab">
			<label for="tab2">Robotic Process Automation</label>

			<input type="radio" id="tab3" name="tabGroup1" class="tab">
			<label for="tab3">Business</label>

			<div class="tab__content">
				<h3>Data Science</h3>
				
<div class="tabs">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Covid-19 Estimation Model</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Botswana Covid-19 Analysis</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Website Usage Tracking: Heatmap.js</button>
</div>

<div style="height:850px;" id="London" class="tabcontent">
  <h3>Covid-19 Estimation Model</h3>
  <p>In this article I used Data Science to develop a model that was able to show the spread of Covid-19 over a   
   given period of time and as well predict its spread by using the mathematics function: The Logistic Growth model.</p>
   
  
<iframe width="110%" height="650px" style="border:none;" src="http://localhost/bonala/content/frames/Infections.html"></iframe>
   
</div>

<div style="height:850px;" id="Paris" class="tabcontent">
  <h3>Botswana Covid-19 Analysis</h3>
  <p>Covid-19 Analysis Botswana</p> 
  
  <iframe width="110%" height="650px" style="border:none;" src="http://localhost/bonala/content/frames/botswana.html"></iframe>
  
</div>

<div style="height:600px;" id="Tokyo" class="tabcontent">
  <h3>Website Usage Tracking: Heatmap.js</h3>
  <p>Heatmap.js wcase will be displayed here soon.</p>
</div>

	
			
			
			
			
			</div>

			<div class="tab__content">
				<h3>Robotic Process Automation</h3>
				<p>More will follow here..</p>
				
			</div>

			<div class="tab__content">
				<h3>Business</h3>
				<p>More will follow here..</p>
			
			</div>

		</div>

</div>
</div>







<!-- content -->	

<?php require_once 'shared/footer.php' ?>