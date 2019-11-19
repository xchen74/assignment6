
    <footer>
      <!--- Connect -->
      <div class="container-fluid padding">
        <hr class= "light">
        <div class="row text-center padding">
            <div class="col-lg-3 social-title">
                <h2>Follow Us:</h2>
            </div>
            <div class="col-lg-6 social padding">
                <a href="http://www.facebook.com/UrWomensClubSoccer"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/URWCSoccer"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/urwcsoccer"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="col-lg-3 social-tag">
                <p class="display-4">#URWSC</p>
            </div>
            <hr class= "light">
        </div>
        <div class="row text-center">
          <div class="col-12 footer-notice">
            <h5> Website developed by Team Berlin </h5>
          </div>
        </div>
      </div>
     </footer>
    <!-- Optional JavaScript -->
    <script src="https://use.fontawesome.com/9bd6d54fab.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
  </body>
</html>
