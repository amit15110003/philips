
  <main class="page-content">
    <br><br><br>
    <div class="offset-top-20 shell section-bottom-60">
      <div class="range">
        <div class="cell-md-4 text-xs-left">
            <h4 style="text-transform: capitalize;"><?php echo $fname; ?> <?php echo $lname; ?></h4>
            <h5>Email:<i> <?php echo $email; ?></i></h5>
            <h5>Contact:<i> <?php echo $contact; ?></i></h5>
            <hr class="divider divider-offset-lg divider-gray">
            <h4>Delivery Address</h4>
            <p><i> <?php echo $addr; ?></i></p>
            <p><i><?php echo $town; ?> ,<?php echo $state; ?> , <?php echo $country; ?></i></p>
            <p>PIN: <i><?php echo $pin; ?></i></p>
        </div>
        <div class="cell-md-7 cell-md-preffix-1 sidebar sidebar-right">
          <div class="shell range">
            <div class="cell-md-4">
            </div>
            <button class="btn btn-primary pull-center cell-md-4" style="width: 100%;"><a href="<?php echo base_url("index.php/profile/delivery"); ?>">Delivery Address </a></button>
          </div>
          <div class="shell range">
            <div class="cell-md-4">
            </div>
            <button class="btn btn-primary  pull-center cell-md-4 " type="button" data-toggle="modal" data-target=".bs-example-modal-md-contact"  style="width: 100%;margin-top: -8%;">Update Contact</button>
          </div>
          <div class="shell range">
            <div class="cell-md-4">
            </div>
            <button class="btn btn-primary   pull-center cell-md-4" type="button" data-toggle="modal" data-target=".bs-example-modal-sm"  style="width: 100%;margin-top: -8%;">Update Password</button>
          </div>

            <div class="modal fade bs-example-modal-md-contact" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-md" role="document" style="margin-top:15%;">
                <div class="modal-content" style="padding-right: 10px;padding-left: 10px;padding-top: 10px;">
                  <?php $attributes = array("name" => "password");
                    echo form_open("profile/password", $attributes);?>
                      <h4>Update Profile</h4>
                      <hr class="divider divider-offset-sm divider-gray">
                      <div class="rd-mailform">
                        <div class="range">
                          <div class="cell-md-6 cell-xs-6 ">
                            <input type="text" id="exampleInputEmail1" class="text-primary" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" style="text-transform: capitalize;">
                          </div>
                          <div class="cell-md-6 cell-xs-6">
                            <input type="text"  id="exampleInputEmail1" class="text-primary" placeholder="Last Name" name="lname" value=" <?php echo $lname; ?>" style="text-transform: capitalize;">
                          </div>
                        </div>
                        <div class="range">
                          <div class="cell-md-12 cell-xs-12" >
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
  </main>
  <footer class="page-footer section-60">
    <div class="shell">
      <a href="<?php echo base_url(""); ?>" class="brand"><img alt="" src="<?php echo base_url(); ?>media/images/logosm.png" width="100" height="30" class="reveal-inline-block img-responsive"></a>
      <p>Our product is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience.  Purchase the goods you need every day or just like in a few clicks or taps, depending on the device you use to access the Internet. We work to make your life more enjoyable.</p>
      <ul class="elements-group-20 offset-top-20">
        <li><a href="#" class="icon icon-xs text-base fa-facebook"></a></li>
        <li><a href="#" class="icon icon-xs text-base fa-twitter"></a></li>
        <li><a href="#" class="icon icon-xs text-base fa-google-plus"></a></li>
        <li><a href="#" class="icon icon-xs text-base fa-linkedin"></a></li>
        <li><a href="#" class="icon icon-xs text-base fa-pinterest"></a></li>
      </ul>
      <p class="offset-top-20 text-muted"><span class='text-bold'>Jewelry</span> 2017 | <a href='privacy.html'>Privacy Policy</a></p>
    </div>
  </footer>
</div>

<script src="<?php echo base_url('media/js/core.min.js'); ?>"></script> 
<script src="<?php echo base_url('media/js/script.js'); ?>"></script>
</body>
</html>