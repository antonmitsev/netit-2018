<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo htmlspecialchars(@$params['page_content_db']['html_title'], ENT_QUOTES, 'utf-8');?></title>
		<meta name="description" content="<?php echo htmlspecialchars(@$params['page_content_db']['html_description'], ENT_QUOTES, 'utf-8');?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASE;?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE;?>css/animate.css">
    
    <link rel="stylesheet" href="<?php echo BASE;?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE;?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo BASE;?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo BASE;?>css/aos.css">

    <link rel="stylesheet" href="<?php echo BASE;?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo BASE;?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo BASE;?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo BASE;?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo BASE;?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo BASE;?>css/style.css">
  </head>
  <body>

  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Trim.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
<?php foreach($params['menus_1'] as $item): ?>
                <li class="nav-item<?php echo (
									$item['url'] == '/' . URI ? ' active' : ''
								);?>"><a class="nav-link" href="<?php echo Helpers::menuItemFormat($base_folder , $item['url']); ?>"><?php echo $item['menu_text']; ?></a></li>
<?php endforeach; ?>            
	          <!-- TODO <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>-->
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        	<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
        		<span class="icon-play"></a>
        	</a>
          <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo @$params['page_content_db']['heading'];?></h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3">Book an Appointment</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>000 (123) 456 7890</h3>
	    						<p>A small river named Duden flows</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>198 West 21th Street</h3>
	    						<p>Suite 721 New York NY 10016</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social pl-md-5 p-4">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container"><h1>TTT</h1>
<?php echo @$params['page_content'];?>
    	</div>
    </section>

    <section class="ftco-section ftco-bg-dark">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
              	<span class="flaticon-scissor-and-comb"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Haircuts &amp; Styling</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
              	<span class="flaticon-male-head-hair-and-beard"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Beard Treatment</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-heads-hairs-and-scissors"></span></div>
              <div class="media-body">
                <h3 class="heading">Coloring Services</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-young-male-short-irregular-hair-on-head-and-a-small-beard"></span></div>
              <div class="media-body">
                <h3 class="heading">Beard Waxing</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">What We Do</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/work-1.jpg);"></a>
    					<div class="text p-4">
    						<h3>Hair Style </h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
    						<span><a href="#">Read more</a></span>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/work-2.jpg);"></a>
    					<div class="text p-4">
    						<h3>Trimming</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    						<span><a href="#">Read more</a></span>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/work-3.jpg);"></a>
    					<div class="text p-4">
    						<h3>Traditional Haircuts Mens </h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    						<span><a href="#">Read more</a></span>
    					</div>
    				</div>
    			</div>

    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-md-last" style="background-image: url(images/work-4.jpg);"></a>
    					<div class="text p-4">
    						<h3>Hair Style for Womens</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
    						<span><a href="#">Read more</a></span>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-md-last" style="background-image: url(images/work-5.jpg);"></a>
    					<div class="text p-4">
    						<h3>Trimming </h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    						<span><a href="#">Read more</a></span>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-md-last" style="background-image: url(images/work-6.jpg);"></a>
    					<div class="text p-4">
    						<h3>Traditional Haircuts Mens </h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    						<span><a href="#">Read more</a></span>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Plan &amp; Pricing</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
				</div>
				
				<?php 
				
				$service_arr = array(
					array_slice(
						$params['services_0'], 
						0,
						round(count($params['services_0']) / 2) - 1
					),
					array_slice(
						$params['services_0'], 
						round(count($params['services_0']) / 2) - 1
					)
				);


				?>


        <div class="row">
<?php
	foreach($service_arr as $column_arr):
		?>
					<div class="col-md-6">
		<?php
				foreach($column_arr as $item): 
?>
        		<div class="pricing-entry ftco-animate">
        			<div class="d-flex text align-items-center">
        				<h3><span><?php echo $item['name']; ?></span></h3>
        				<span class="price"><?php echo number_format($item['price'], 2); ?> лв.</span>
        			</div>
        			<div class="d-block">
        				<p><?php echo $item['description']; ?></p>
        			</div>
        		</div>				
<?php
				endforeach;
?>
					</div>
<?php
	endforeach;
?>
				</div>
	

    	</div>
    </section>

    <section class="ftco-section ftco-discount img" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center" data-scrollax-parent="true">
					<div class="col-md-7 text-center discount ftco-animate" data-scrollax=" properties: { translateY: '-30%'}">
						<h3>Save up to 25% Off</h3>
						<h2 class="mb-4">All Services Discount</h2>
						<p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<p><a href="#" class="btn btn-primary px-4 py-3">Appointment</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Hair Stylist</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_1.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Hair Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_2.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Mark Wilson</a></h3>
      					<span class="position">Beard Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_3.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
      					<span class="position">Hair Stylist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_4.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
      					<span class="position">Beard Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-bg-dark">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Shop</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 ftco-animate">
    				<div class="product-entry text-center">
    					<a href="#"><img src="images/prod-1.png" class="img-fluid" alt="Colorlib Template"></a>
    					<div class="text">
    						<p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
    						<h3><a href="#">Shaves 01</a></h3>
    						<span class="price mb-4">$150</span>
    						<p><a href="#" class="btn btn-primary">Add to cart</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 ftco-animate">
    				<div class="product-entry text-center">
    					<a href="#"><img src="images/prod-2.png" class="img-fluid" alt="Colorlib Template"></a>
    					<div class="text">
    						<p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
    						<h3><a href="#">Shaves 01</a></h3>
    						<span class="price mb-4">$150</span>
    						<p><a href="#" class="btn btn-primary">Add to cart</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 ftco-animate">
    				<div class="product-entry text-center">
    					<a href="#"><img src="images/prod-3.png" class="img-fluid" alt="Colorlib Template"></a>
    					<div class="text">
    						<p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
    						<h3><a href="#">Shaves 01</a></h3>
    						<span class="price mb-4">$150</span>
    						<p><a href="#" class="btn btn-primary">Add to cart</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 ftco-animate">
    				<div class="product-entry text-center">
    					<a href="#"><img src="images/prod-4.png" class="img-fluid" alt="Colorlib Template"></a>
    					<div class="text">
    						<p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
    						<h3><a href="#">Shaves 01</a></h3>
    						<span class="price mb-4">$150</span>
    						<p><a href="#" class="btn btn-primary">Add to cart</a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-gallery">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Gallery</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
		              	<strong class="number" data-number="705">0</strong>
		              	<span>Creative Makeup</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
		              	<strong class="number" data-number="1000">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
		              	<strong class="number" data-number="3000">0</strong>
		              	<span>Happy Clients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Piercing Done</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Men's hairstyle for all face shapes</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Men's hairstyle for all face shapes</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Men's hairstyle for all face shapes</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Appointments</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" id="appointment_date" class="form-control" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" id="appointment_time" class="form-control" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Haircut</a></li>
                <li><a href="#" class="py-2 d-block">Hairstyle</a></li>
                <li><a href="#" class="py-2 d-block">Trimming</a></li>
                <li><a href="#" class="py-2 d-block">Shaving</a></li>
                <li><a href="#" class="py-2 d-block">Skin Care</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo BASE;?>js/jquery.min.js"></script>
  <script src="<?php echo BASE;?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo BASE;?>js/popper.min.js"></script>
  <script src="<?php echo BASE;?>js/bootstrap.min.js"></script>
  <script src="<?php echo BASE;?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo BASE;?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo BASE;?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo BASE;?>js/owl.carousel.min.js"></script>
  <script src="<?php echo BASE;?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo BASE;?>js/aos.js"></script>
  <script src="<?php echo BASE;?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo BASE;?>js/bootstrap-datepicker.js"></script>
  <script src="<?php echo BASE;?>js/jquery.timepicker.min.js"></script>
  <script src="<?php echo BASE;?>js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo BASE;?>js/google-map.js"></script>
  <script src="<?php echo BASE;?>js/main.js"></script>
    
  </body>
</html>