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

           <form id="signup-modal-form" action="signup.php" method="POST">
               <input type="email" class="form-control my-2"  placeholder="Email" name="email" />
               <input type="text" class="form-control my-2"  placeholder="First Name" name="first" />
               <input type="text" class="form-control my-2"  placeholder="last Name" name="last" />
               <input type="password" class="form-control my-2"  placeholder="Password" name="pass" />
               <button type="submit" class="btn red-button-color white-text-color my-4 form-button-size" name="signup-button">Sign up</button>
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
