      <!-- PAGE HEAD -->
    <section class="page-head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Shoping cart</h1> 
          </div>
        </div>
      </div>
    </section>
  <!-- PAGE HEAD END -->

    <?php $attributes = array("name" => "delivery");
      echo form_open("checkout", $attributes);?>
      <div class="order-form row contact-form" style="padding-top: 2%;padding-bottom: 2%;">
        <div class="col-md-6 col-md-offset-3">
          <h4> Billing Details</h4>
          <div class="row offset-top-20">
            <div class="col-md-6 ">
              <div class="form-group">
                <label class="text-light text-italic">First Name <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>" required>
                </label>
              </div>
            </div>
            <div class="col-md-6 offset-top-10 offset-md-top-0">
              <div class="form-group">
                <label class="text-light text-italic">Last Name <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>" required>
                </label>
              </div>
            </div>
            <div class="col-md-12 offset-top-10">
              <div class="form-group">
                <label class="text-light text-italic">Phone <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="mob" value="<?php echo $mob;?>" required>
                </label>
              </div>
            </div>
            <div class="col-md-12 offset-top-10">
              <div class="form-group">
                <label class="text-light text-italic">Country<span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="country" value="<?php echo $country;?>" required>
                </label>
              </div>
            </div>
            <div class="col-md-12 offset-top-10">
              <div class="form-group offset-bottom-0">
                <label class="text-light text-italic">Address <span class="text-primary"> *</span>
                  <input type="text" placeholder="Street address, Building Number" class="form-control" name="addr" value="<?php echo $addr;?>" required>
                </label>
              </div>
            </div>
            <div class="col-md-12 offset-top-10">
              <div class="form-group offset-bottom-0">
                <label class="text-light text-italic">Town / City<span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="town" value="<?php echo $town;?>" required>
                </label>
              </div>
            </div>
            <div class="col-md-6 offset-top-10">
              <div class="form-group">
                <label class="text-light text-italic">State <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="state" value="<?php echo $state;?>" >
                </label>
              </div>
            </div>
            <div class="col-md-6 offset-top-10">
              <div class="form-group">
                <label class="text-light text-italic">Postcode / ZIP <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="pin" value="<?php echo $pin;?>" required>
                </label>
              </div>
            </div>
          </div>
          <div class="offset-top-10">
            <button type="submit" class="pull-right">Continue</button>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>