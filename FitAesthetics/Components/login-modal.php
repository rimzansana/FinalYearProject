<div class="modal fade" id="LogIN" tabIndex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

  <div class="modal-content modal-main-settings">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Log In</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="d-flex justify-content-center">

            <div class="d-flex justify-content-center modal-settings">

              <form id="login-modal-form" action="./check_auth.php" method="post">
                  	<input type = "hidden" name = "submitted" value = "true" />
                      <input type="email" class="form-control"  placeholder="Email" name="email" id="emailx" required/>
                      <input type="password" class="form-control my-3"  placeholder="Password" name="password" id="passwordx" required/>
                      <button type="submit" class="btn red-button-color white-text-color my-4 form-button-size">Log in</button>
                  </form>

              <div>
                  <div class="d-flex justify-content-center">
                  <a class="red-text-color" href="" data-toggle="modal" data-target="#Reset" data-dismiss="modal" id="text-decoration-none">Forgot your password?</a>
                  </div>
                  <hr />
              </div>


              <div class="d-flex justify-content-center">
                <div class="d-flex flex-row">
                  <p>Don't have an account?</p>
                  <a class="ml-2 red-text-color" href="" data-toggle="modal" data-target="#SignUP" data-dismiss="modal" id="text-decoration-none">Sign up</a>
                </div>
              </div>

            </div>

        </div>
  </div>
  </div>
</div>
