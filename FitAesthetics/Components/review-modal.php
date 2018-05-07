<div class="modal fade" id="Review" tabIndex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

  <div class="modal-content modal-main-settings">

        <div class="modal-header">
          <div class="column">
                <h5 class="modal-title" id="exampleModalLongTitle">Rate and review</h5>
                <p id="italic-header"><small>Your review will be posted publicly on the site</small></p>
            </div>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="d-flex justify-content-center">

            <div class="d-flex justify-content-center" id="review-modal-settings">


              <form action="rate-trainer_query.php" method="POST">
                <input name="bookingID" value="" type="hidden" class="form-control" id="add-bookingID" aria-describedby="emailHelp" placeholder="Enter email">
                <textarea class="form-control" placeholder="Describe your experience" id="review-input"></textarea>
                <button class="btn red-button-color white-text-color my-4 w-100" type="submit">Submit review </button>
              </form>
            </div>

        </div>

  </div>
  </div>
</div>
