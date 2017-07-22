
    <div class="container" style="padding-top: 6%;">
      <div class="row">
        <div class="col-md-4 text-xs-left">
            <h4 style="text-transform: capitalize;"><?php echo $fname; ?> <?php echo $lname; ?></h4>
            <h5>Email:<i> <?php echo $email; ?></i></h5>
            <h5>Contact:<i> <?php echo $contact; ?></i></h5>
            <hr class="divider divider-offset-lg divider-gray">
            <h4>Delivery Address</h4>
            <p><i> <?php echo $addr; ?></i></p>
            <p><i><?php echo $town; ?> ,<?php echo $state; ?> , <?php echo $country; ?></i></p>
            <p>PIN: <i><?php echo $pin; ?></i></p>
        </div>
        <div class="col-md-7" style="padding-top: 6%;">
          <div class="row">
            <button  style="width: 100%;"><a href="<?php echo base_url("index.php/profile/delivery"); ?>">Delivery Address </a></button>
          </div>
          <div class=" row">
            <button  type="button" data-toggle="modal" data-target=".bs-example-modal-md-contact"  style="width: 100%;margin-top: -8%;">Update Contact</button>
          </div>
          <div class="row">
            <button type="button" data-toggle="modal" data-target=".bs-example-modal-sm"  style="width: 100%;margin-top: -8%;">Update Password</button>
          </div>
        </div>
      </div>
    </div>
            <div class="modal fade bs-example-modal-md-contact" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-md" role="document" style="margin-top:15%;">
                <div class="modal-content" style="padding-right: 10px;padding-left: 10px;padding-top: 10px;">
                  <?php $attributes = array("name" => "password");
                    echo form_open("profile/password", $attributes);?>
                      <h4>Update Profile</h4>
                      <hr class="divider divider-offset-sm divider-gray">
                      <div class="rd-mailform">
                        <div class="row">
                          <div class="col-md-6 col-xs-6 ">
                            <input type="text" id="exampleInputEmail1" class="text-primary" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" style="text-transform: capitalize;">
                          </div>
                          <div class="col-md-6 col-xs-6">
                            <input type="text"  id="exampleInputEmail1" class="text-primary" placeholder="Last Name" name="lname" value=" <?php echo $lname; ?>" style="text-transform: capitalize;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 col-xs-12" >
                                <input type="text"  id="exampleInputPassword1" class="text-primary" placeholder="Contact" name="password" value=" <?php echo $contact; ?>" required >
                          </div>
                        </div>
                      <button type="submit" class="btn btn-primary pull-right" style="height: 40px;margin-top: -10px;">Submit</button>
                      <br><br>
                      </div>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>


            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-sm" role="document" style="margin-top:15%;">
                <div class="modal-content" style="padding-right: 10px;padding-left: 10px;padding-top: 10px;">
                  <?php $attributes = array("name" => "password");
                    echo form_open("profile/password", $attributes);?>
                      <h4>Update Password</h4>
                      <hr class="divider divider-offset-sm divider-gray">
                      <div class="rd-mailform" >
                          <input type="password" class="text-primary" id="exampleInputPassword1" placeholder="Password" name="password" required>
                      </div>
                      <button type="submit" class="btn btn-primary pull-right" style="height: 40px;margin-top: -10px;">Submit</button>
                      <br><br>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>