  <main class="page-content">
    <div class="shell section-60 text-sm-left">
    <?php $attributes = array("name" => "delivery");
      echo form_open("checkout", $attributes);?>
      <div class="order-form range">
        <div class="cell-md-3 "></div>
        <div class="cell-sm-6">
          <h4> Billing Details</h4>
          <div class="range offset-top-20">
            <div class="cell-md-6 ">
              <div class="form-group">
                <label class="text-light text-italic">First Name <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>" required>
                </label>
              </div>
            </div>
            <div class="cell-md-6 offset-top-10 offset-md-top-0">
              <div class="form-group">
                <label class="text-light text-italic">Last Name <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>" required>
                </label>
              </div>
            </div>
            <div class="cell-md-12 offset-top-10">
              <div class="form-group">
                <label class="text-light text-italic">Phone <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="mob" value="<?php echo $mob;?>" required>
                </label>
              </div>
            </div>
            <div class="cell-md-12 offset-top-10">
              <div class="form-group">
                <label class="text-light text-italic">Country<span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="country" value="<?php echo $country;?>" required>
                </label>
              </div>
            </div>
            <div class="cell-md-12 offset-top-10">
              <div class="form-group offset-bottom-0">
                <label class="text-light text-italic">Address <span class="text-primary"> *</span>
                  <input type="text" placeholder="Street address, Building Number" class="form-control" name="addr" value="<?php echo $addr;?>" required>
                </label>
              </div>
            </div>
            <div class="cell-md-12 offset-top-10">
              <div class="form-group offset-bottom-0">
                <label class="text-light text-italic">Town / City<span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="town" value="<?php echo $town;?>" required>
                </label>
              </div>
            </div>
            <div class="cell-md-6 offset-top-10">
              <div class="form-group">
                <label class="text-light text-italic">State <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="state" value="<?php echo $state;?>" >
                </label>
              </div>
            </div>
            <div class="cell-md-6 offset-top-10">
              <div class="form-group">
                <label class="text-light text-italic">Postcode / ZIP <span class="text-primary"> *</span>
                  <input type="text" class="form-control" name="pin" value="<?php echo $pin;?>" required>
                </label>
              </div>
            </div>
          </div>
          <div class="offset-top-10">
            <button type="submit" class="btn btn-primary pull-right">Continue</button>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </main>
  <footer class="page-footer section-60">
    <div class="shell"><a href="index-2.html" class="brand"><img alt="" src="images/logo.png" width="163" height="41" class="reveal-inline-block img-responsive"></a>
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