<div class="span12 form-container" id="">
    <div><h1><i class="icon-building"></i> Submit + Save!<small><br>
                Submit your project to our pre-qualified student staffing force and save!</div>
    <div class="well">

        </small></h1>
        <form class="form-horizontal">
            <fieldset>
                <legend>Contact Information</legend>
                  <!-- Full Name-->
                  <div class="control-group">
                    <label class="control-label" for="">Full Name</label>
                    <div class="controls">
                      <input type="text" id="" placeholder="Full Name">
                    </div>
                  </div>
                <div class="control-group">
                                    <label class="control-label" for="">Company Name</label>
                                    <div class="controls">
                                      <input type="text" id="" placeholder="Company Name">
                                    </div>
                                  </div>
                  <!-- Email-->
                  <div class="control-group">
                    <label class="control-label" for="">Email</label>
                    <div class="controls">
                      <input type="text" id="" placeholder="Email">
                    </div>
                  </div>
                <!-- Phone-->
                  <div class="control-group">
                    <label class="control-label" for="">Phone</label>
                    <div class="controls">
                      <input type="text" id="" placeholder="Phone">
                    </div>
                  </div>
                </fieldset>
            <!-- Phone-->
                              <div class="control-group">
                                <label class="control-label" for="">Location</label>
                                <div class="controls">
                                  <input type="text" id="" placeholder="Location">
                                </div>
                              </div>
                            </fieldset>
                <fieldset>
                                <legend>Project Details</legend>

                <!-- University-->
                                  <div class="control-group">
                                    <label class="control-label" for="">Project Title</label>
                                    <div class="controls">
                                      <input type="text" id="" placeholder="Project Tile">
                                    </div>
                                  </div>
                    <!-- Major-->
                                                      <div class="control-group">
                                                        <label class="control-label" for="">Start Date</label>
                                                        <div class="controls">
                                                          <input type="text" id="" placeholder="Start Date">
                                                        </div>
                                                      </div>
                    <!-- GPA-->
                                                      <div class="control-group">
                                                        <label class="control-label" for="">End Date</label>
                                                        <div class="controls">
                                                          <input type="text" id="" placeholder="End Date">
                                                        </div>
                                                      </div>




                                                                    <div class="control-group">
                                                                      <label class="control-label" for="">Project Description</label>
                                                                      <div class="controls">
                                                                          <textarea rows="8" class="span6"></textarea>
                                                                      </div>
                                                                    </div>

          </fieldset>

          <div class="control-group">
            <div class="controls">

              <button type="button" class="btn btn-success btn-large">Submit ULance Project <i class="icon-chevron-right"></i></button>
            </div>
          </div>
        </form>
    </div>
</div>
<div class="msg-container span12 alert alert-success" style="display: none">
    <h1>Thank You <small>Job#: CLESW107</small></h1>
    <hr>
    <h4><i class="icon-check"></i> Your request has been submitted.  A ULance project manager will contact you shortly.</h4>
    <br>&nbsp;
    <a href="/profiles" class="btn btn-large btn-success"><i class="icon-group"></i> View Matched Students </a>
    <br>&nbsp;
</div>

<script type="text/javascript">
$(document).ready(function(){
    $(".btn").click(function(){
        $(".form-container").fadeOut(function(){
            $(".msg-container").fadeIn();
        });
    })
});

</script>