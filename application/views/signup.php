
  <main class="page-content">
    <br><br><br>
    <div class="shell section-bottom-60">
      <div class="range">
        <div class="cell-md-4 text-xs-left">
        </div>
        <div class="cell-md-4 text-xs-left">
          <h4>SignUp form</h4>
          <?php $attributes = array("name" => "signupform");
            echo form_open("signup", $attributes);?>
          <div class="offset-top-20 rd-mailform">
            <div class="range">
            <div class="cell-md-6 text-xs-left">
            <label for="name" class="text-italic">First Name:<span class="text-primary">*</span></label>
            <input id="name" type="text" name="fname" data-constraints="@NotEmpty">
            </div>
            <div class="cell-md-6 text-xs-left">
            <label for="name" class="text-italic">Last Name:<span class="text-primary">*</span></label>
            <input id="name" type="text" name="lname" data-constraints="@NotEmpty">
            </div>
            </div>
            <label for="email" class="text-italic">Your E-mail:<span class="text-primary">*</span></label>
            <input id="email" type="text" name="email" data-constraints="@NotEmpty @Email">
            <label for="name" class="text-italic">Your Password:<span class="text-primary">*</span></label>
            <input id="name" type="password" name="password" data-constraints="@NotEmpty">
            <label for="name" class="text-italic">Contact Number:<span class="text-primary">*</span></label>
            <input id="name" type="text" name="contact" data-constraints="@NotEmpty">
            <button class="btn btn-primary pull-right" type="submit">Send</button>
          </div>
          <?php echo $this->session->flashdata('msg'); ?>
          <?php echo form_close(); ?>
        </div>
        <div class="cell-md-3 ">
        </div>
      </div>
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