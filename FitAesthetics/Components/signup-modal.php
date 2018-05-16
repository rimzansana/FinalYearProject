<div class="modal fade" id="SignUP" tabIndex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="d-flex justify-content-center">

        <div class="d-flex justify-content-center modal-settings">

           <form class="needs-validation" id="signup-modal-form" action="signup.php" method="POST" novalidate>
               <input type="email" class="form-control my-2"  placeholder="Email" name="email" required/>
               <div class="invalid-feedback">
                Please provide a valid email address.
               </div>
               <input type="text" class="form-control my-2"  placeholder="First Name" name="first" required />
               <div class="invalid-feedback">
                Please Fill in your first name.
               </div>
               <input type="text" class="form-control my-2"  placeholder="last Name" name="last" required  />
               <div class="invalid-feedback">
                Please Fill in your last name.
               </div>
               <input type="password" class="form-control my-2"  placeholder="Password" name="pass" minlength=10 maxlength=15 required />
               <div class="invalid-feedback">
                Please provide a password.
               </div>
               <button type="submit" class="btn red-button-color white-text-color my-3 form-button-size" name="signup-button">Sign up</button>

           </form>

           <div>
            <hr />
           </div>

           <div class="d-flex justify-content-center">
             <div class="d-flex flex-row">
                 <p>Already have an account?</p>
                 <a class="ml-2 red-text-color" href="" data-toggle="modal" data-target="#LogIN" data-dismiss="modal" id="text-decoration-none">Log in</a>
             </div>

           </div>

        </div>

        </div>
      </div>
      </div>
</div>



<script>

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
