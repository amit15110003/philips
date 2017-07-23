<!-- SUBSCRIBE FORM -->

	<section class="subscribe">
		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<div class="inner">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="top-title">Want to know about new collection of cakes?</div>
								<div class="bottom-title">Get our weekly email</div>
							</div>
							<div class="col-lg-5 col-md-6">
							<?php $attributes = array("name" => "subscribe");
                echo form_open("home/subscribe", $attributes);?>
								<div class="subs-form">
									<input type="text" placeholder="Enter Your Email" name="email">
									<input type="submit" value="SUBMIT">
								</div>
								<?php echo form_close(); ?>
							</div>	
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- SUBSCRIBE FORM END -->

<!-- FOOTER -->
	<footer class="footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6">
						<a href="#" class="footer-logo"><img src="<?php echo base_url(); ?>media/images/main-logo.png" alt="" class="img-responsive" style="height: 100px;"></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="footer-about">
							<div class="title">About Philips Bakery</div>
							<p>The Philips Bakery was established in Munger,Bihar with a dream to make quality and made from scratch cakes using only the finest ingredients. We have created beautiful, unique and delicious specialty cakes for thousands of satisfied customers.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<ul class="footer-contacts">
							<li><i class="fa fa-phone" aria-hidden="true"></i>+91 8083460761 </li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+91 9431292876 </li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+91 7677987685 </li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+91 9835466944 </li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@philipsbakery.in</li>
							<li><i class="fa fa-facebook" aria-hidden="true"></i>@philipsbakery</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-social">
							<div class="title">Follow Us</div>
							<ul class="social">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-9 text">
						<div class="copyrights"><a href="philipsbakery.in">Philips Bakery</a> 2017 &copy; All Rights reserved  </div>
					</div>
					<div class="col-md-3 text left">
						<div class="copyrights"> Designed by: <a href="trixno.com">trixno.com</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END -->
<!-- JAVASCRIPT FILES -->
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.js'); ?>"></script>
<script src="../../ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script>	
<script type="text/javascript" src="<?php echo base_url('media/js/map-style.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/modernizr-2.6.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.zoomslider.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.parallax-1.1.3.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/waypoint.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.counterup.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/owl.carousel.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/custom-number.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.select2.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.swipebox.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/main.js'); ?>"></script>
<script src="<?php echo base_url('media/js/jquery.elevatezoom.js'); ?>"></script>
<script type="text/javascript">
    $("#gocartbtn").hide();
</script>
<script type="text/javascript">
    function remove_cart(postid)
    {
      var x = document.getElementById("cartcounter").innerHTML;
      var l=document.getElementById("cost_"+postid).innerHTML;
      var t=document.getElementById("totalcost").innerHTML;
      var s=t-l;
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/remove_cart');?>",
                    data:"postid="+postid,
                    success: function (response) {
                        document.getElementById("cartcounter").innerHTML = --x;
                        document.getElementById("totalcost").innerHTML=s;
                     $("#cart_"+postid).hide();
                    }
                });
    }
  </script>
  <script type="text/javascript">
      function cartadd(id)
      { 
        var x = document.getElementById("cartcounter").innerHTML;
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('profile/cartadd');?>",
                      data:"id="+id,
                      success: function (response) {
                        document.getElementById("cartcounter").innerHTML = ++x;
                    $("#addcartbtn").hide();
                    $("#gocartbtn").show();
                    }
                  });
      }
   </script>
  <script type="text/javascript">
    function item(id)
    {
           var i=document.getElementById("itemno_"+id).value;
           var c=document.getElementById("itemcost_"+id).innerHTML;
           var t=document.getElementById("totalcost").innerHTML;
           var l=document.getElementById("cost_"+id).innerHTML;
           var r= i*c;
           var s=t-l;
           var k=s+r;
           var item = $("#itemno_"+id).val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/itemadd');?>",
                    data: {id: id, item: item},
                    success: function (response) {
                    document.getElementById("cost_"+id).innerHTML=r;
                    document.getElementById("totalcost").innerHTML=k;
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function order_cancel(postid)
    {
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('orders/order_cancel');?>",
                    data:"postid="+postid,
                    success: function (response) {
                     $("#order_"+postid).hide();
                    }
                });
    }
  </script>
 <script type="text/javascript">
  
$("#zoom_09").elevateZoom({
            gallery : "gallery_09",
            galleryActiveClass: "active"
            }); 
            
  
     $("#select").change(function(e){
   var currentValue = $("#select").val();
   <?php $i=0;
                  foreach ($query as $row) {$i=$i+1;?>
   if(currentValue == <?php echo $i; ?>){    
   smallImage = '<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>';
   largeImage = '<?php echo base_url(); ?>uploads/productthumbs/<?php echo $row->img; ?>';
   }<?php }?>
  // Example of using Active Gallery
  $('#gallery_09 a').removeClass('active').eq(currentValue-1).addClass('active');   
 
 
   var ez =   $('#zoom_09').data('elevateZoom');    
   
  ez.swaptheimage(smallImage, largeImage); 
     
    });

</script>
</body>
</html>