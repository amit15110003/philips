
  <main class="page-content">
    <br><br><br>
    <div class="offset-top-20 shell section-bottom-60">
      <div class="range">

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