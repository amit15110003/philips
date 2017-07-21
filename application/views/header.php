<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from just-themes.com/mrcoffee/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2017 10:59:56 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="images/favicon.png">
<title>PHILIPS BAKERY</title>

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800" rel="stylesheet">

<!-- CSS FILES -->
<link href="<?php echo base_url('media/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('media/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('media/css/owl.carousel.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('media/css/zoomslider.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('media/css/style.css'); ?>" rel="stylesheet" type="text/css" />

</head>
<body>
  <!-- HEADER -->
  <header class="top-nav" data-spy="affix" data-offset-top="34">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <a href="index.html" class="main-logo"><img src="images/main-logo.png" alt=""></a>
          <a href="index.html" class="small-logo"><img src="images/small-logo.png" alt=""></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#coffee-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav id="coffee-menu" class="navbar collapse navbar-collapse">
          
            <div class="row">
            <div class="col-lg-2 col-md-12">
              <ul class="top-social">
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-8 col-md-12">
              <ul class="main-menu nav">
                <li class="active"><a href="<?php echo base_url(""); ?>">Home</a></li>
                <li class="parent">
                  <a href="shop.html">products</a>
                  <ul class="sub-menu">
                   <?php foreach ($category as $row ) {?>
                      <li><a href="<?php echo base_url("index.php/product/view/$row->category"); ?>"><?php echo $row->category;?></a></li>
                  <?php }?>
                  </ul>
                </li>
                <?php if ($this->session->userdata('fname')){ ?>
              <li><a href="<?php echo base_url("index.php/profile"); ?>"><?php echo $this->session->userdata('fname'); ?></a>
                <ul class="rd-navbar-dropdown">
                  <li><a href="<?php echo base_url("index.php/profile"); ?>">My Account</a></li>
                  <li><a href="<?php echo base_url("index.php/wishlist"); ?>">Wishlist</a></li>
                  <li><a href="<?php echo base_url("index.php/orders"); ?>">Orders</a></li>
                  <li><a href="<?php echo base_url("index.php/home/logout"); ?>">Logout</a></li>
                </ul>
              </li>
              
              <?php } else{?>
              <li><a href="#"  data-toggle="modal" data-target="#myModal">Login</a></li>
              <?php }?>
                <li><a href="<?php echo base_url("index.php/home/contact"); ?>">Contacts</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-12">
              <div class="top-right">
                <a href="<?php echo base_url("index.php/cart"); ?>" class="cart">
                  <span class="name">Cart</span>
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span class="count" id="cartcounter">
                  <?php $detail1=$this->user->countproduct($this->session->userdata('uid'));
                    if(!empty($detail1))
                      { 
                        echo $detail1; 
                      }
                  else{
                    echo"0";
                    } ?></span>
                </a>
                <div class="top-search">
                  <input type="text" placeholder="Search">
                  <a href="#" class="fa fa-search search" aria-hidden="true"></a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- HEADER END -->



    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document">
      <div class="modal-content col-sm-12 col-md-8 col-md-offset-2 " style="margin-top:30%;">
        <div class="modal-body ">
          <div class="form-horizontal">
            <?php $attributes = array("name" => "loginform");
        echo form_open("login/index", $attributes);?>
        <h4 style="font-family: 'Open Sans', sans-serif;font-size: 18px;" class="text-center">LOGIN</h4>
        <hr>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label" >Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label" >Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div >
              <button type="submit" class="btn btn-default" style="background-color:#f0b637;color:white;border:0px;float:right;width:30%;margin-right:15px;">login</button>
            </div>
          </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          <p class="text-center">Don't have an account? <a href="<?php echo base_url(); ?>index.php/signup">Sign up!</a></p>
          <p class="text-center"><a href="<?php echo base_url(); ?>index.php/forget">Forgot Password</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>



