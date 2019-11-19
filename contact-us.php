<?php $pageTitle="Contact Us |"; $title1 = " "; $title2 = " "; $title3 = " "; $title4 = "active"; include "inc/head+nav.php"; ?>

	<main class="container-fluid content mt-5">
		<div class="row be-member text-center">
			<div class="col-12">
					<h1 class="display-4">Become a Member</h1>
					<hr>
			</div>
			<div class="col-12">
					<p class="lead">The soccer club doesn't require try-outs for any eligible member. If you are interesed and are a current undergraduate at the University of Rochester or the Eastman School of Music please fill out the form below.</p>
			</div>
		
			<div id="form-wrapper" class="col-12 pl-5">
				 <form class="be-member-form  pb-5" method="post" action="#" id="subscription-form">
					 <label for="name"> Name:</label>
					 <input type="text" placeholder="Full Name" name="name" id="name"><br>
					 <label for="email">Email:</label>
					 <input type="text" placeholder="Email address" name="email" id="email"><br>
					 <label for="years">Years Playing:</label>
					 <input type="text" placeholder="Years Playing" name="years" id="years"><br>
					 <input type="submit" name="submit" value="Send">
				</form>
			</div>
			
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
    $("#subscription-form").submit(function(e) {
      var formData = $("#subscription-form").serialize();
      $.ajax({
        type: 'POST',
        url: "new.php",
        data: formData,
        success: function(data){
          $("#form-wrapper").html("Thank you for subscribing!");
        }
      });
      e.preventDefault();
    });
    </script>
	</main>

	<?php include "inc/footer.php"; ?>
