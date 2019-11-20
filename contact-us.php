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
					 <div>
						 <label for="name"> Name:</label>
						 <input type="text" name="name" id="name">
					 </div>
					 <div>
						 <label for="email">Email:</label>
						 <input type="text" name="email" id="email">
				 	 </div>
						<div>
						 <label for="years" id="yearslabel">Years Playing:</label>
						 <input type="number" name="years" id="years">
				   </div>
					 <input type="submit" name="submit" value="Send" id="submit">
				</form>
			</div>

		</div>
	</main>

	<?php include "inc/footer.php"; ?>
