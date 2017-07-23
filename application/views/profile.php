    <!-- PAGE HEAD -->
    <section class="page-head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Profile</h1> 
          </div>
        </div>
      </div>
    </section>
  <!-- PAGE HEAD END -->

    <div class="container-fluid contact-form" style="padding-top: 2%;">
      <div class="row">
        <div class="col-md-offset-2 col-md-5">
            <h5 style="text-transform: capitalize;"><?php echo $fname; ?> <?php echo $lname; ?><br><br>
            Email:<i> <?php echo $email; ?></i><br><br>
            Contact:<i> <?php echo $contact; ?></i></h5>
            <hr>
            <h5>Delivery Address <p> <?php echo $addr; ?><br>
            <?php echo $town; ?></p></h5>
        </div>
        <div class="col-md-5" style="padding-top: 6%;">
          <div class="col-md-offset-1 col-md-4">
            <button  style="width: 100%;"><a href="<?php echo base_url("index.php/profile/delivery"); ?>">Delivery Address </a></button><br><br><br>
            <button  type="button" data-toggle="modal" data-target=".bs-example-modal-md-contact"  style="width: 100%;margin-top: -8%;">Update Contact</button>
          <br><br><br>
            <button type="button" data-toggle="modal" data-target=".bs-example-modal-sm"  style="width: 100%;margin-top: -8%;">Update Password</button>
          </div>
        </div>
      </div>
    </div>
            <div class="modal fade bs-example-modal-md-contact" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-md" role="document" style="margin-top:15%;">
                <div class="modal-content contact-form" style="padding-right: 10px;padding-left: 10px;">
                  <?php $attributes = array("name" => "update");
                    echo form_open("profile", $attributes);?>
                      <h4>Update Profile</h4>
                      <hr class="divider divider-offset-sm divider-gray">
                      <div class="rd-mailform">
                        <div class="row">
                          <div class="col-md-6 col-xs-6 ">
                            <input type="text" id="exampleInputEmail1" class="contact-input" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" style="text-transform: capitalize;">
                          </div>
                          <div class="col-md-6 col-xs-6">
                            <input type="text"  id="exampleInputEmail1" class="contact-input" placeholder="Last Name" name="lname" value=" <?php echo $lname; ?>" style="text-transform: capitalize;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 col-xs-12" >
                                <input type="text"  id="exampleInputPassword1" class="contact-input" placeholder="Contact" name="contact" value=" <?php echo $contact; ?>" required >
                          </div>
                        </div>
                      <button type="submit" class="pull-right">Submit</button>
                      <br><br>
                      </div>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>


            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-sm" role="document" style="margin-top:15%;">
                <div class="modal-content contact-form" style="padding-right: 10px;padding-left: 10px;">
                  <?php $attributes = array("name" => "password");
                    echo form_open("profile/password", $attributes);?>
                      <h4>Update Password</h4>
                      <hr class="divider divider-offset-sm divider-gray">
                      <div class="rd-mailform" >
                          <input type="password" class="contact-input" id="exampleInputPassword1" placeholder="Password" name="password" required style="height: 49px;
    line-height: 49px;
    padding: 10px 22px 10px 22px;
    font-size: 14px;
    font-weight: 300;
    border: none;
    transition: all 400ms;    border: 1px solid #e3ded4;
    border-radius: 2px;
    font-size: 16px;">
                      </div>
                      <button type="submit" class="pull-right">Submit</button>
                      <br><br>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>