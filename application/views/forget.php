<main class="page-content">
    <div class="shell">
    </div>
    <div class="shell section-bottom-60">
      <div class="range">
        <div class="cell-md-2">
          
        </div>
        <div class="cell-md-6 cell-md-preffix-1 text-xs-left" style="padding-top: 80px;">
          <h5 class="center" style="font-family: cursive; ">Recover your password</h5>
        <?php $attributes = array("name" => "forget");
          echo form_open("forget", $attributes);?>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
            </div>
          <button class="btn btn-primary pull-right" type="submit" name="submit">Send
          </button>
        <?php echo form_close(); ?>
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
