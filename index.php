<?php
include("header.php"); //include header content
?>
	<div class="row wrap">

	    <div class="flexslider large-12 columns">
		    <ul class="slides">
		        <li>
		    	    <img src="img/bg-home-2.jpg" />
				</li>
				<li>
		    	    <img src="img/bg-home-3.jpg" />
				</li>
				<li>
		    	    <img src="img/bg-home-4.jpg" />
				</li>
				<li>
		    	    <img src="img/bg-home-6.jpg" />
				</li>
				<li>
		    	    <img src="img/bg-home-7.jpg" />
				</li>
				<li>
		    	    <img src="img/bg-home-8.jpg" />
				</li>
	        </ul>
		</div>


		<div class="large-8 columns">
			<h3>The Grid</h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="large-12 columns">
					<div class="panel">
						<p>This is a twelve column section in a row. Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<div class="panel">
						<p>Six columns</p>
					</div>
				</div>
				<div class="large-6 columns">
					<div class="panel">
						<p>Six columns</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
			</div>

			<h3>Buttons</h3>

      <div class="row">
        <div class="large-6 columns">
          <p><a href="#" class="small button">Small Button</a></p>
          <p><a href="#" class="button">Medium Button</a></p>
          <p><a href="#" class="large button">Large Button</a></p>
        </div>
        <div class="large-6 columns">
          <p><a href="#" class="small alert button">Small Alert Button</a></p>
          <p><a href="#" class="success button">Medium Success Button</a></p>
          <p><a href="#" class="large secondary button">Large Secondary Button</a></p>
        </div>
      </div>
		</div>

		<div class="large-4 columns">
			<h4>Getting Started</h4>
			<p>We're stoked you want to try Foundation! To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>

			<h4>Other Resources</h4>
			<p>Once you've exhausted the fun in this document, you should check out:</p>
			<ul class="disc">
				<li><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</li>
				<li><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</li>
				<li><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</li>
			</ul>
		</div>
	</div>
</div>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
