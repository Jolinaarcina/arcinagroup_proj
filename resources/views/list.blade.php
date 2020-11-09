@extends('layout.app')

@section('content')
		<section class="ftco-section ftco-properties" id="properties-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Availble Production</h2>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-12">
            <div class="carousel-properties owl-carousel">
            	<div class="item">
            		<div class="properties ftco-animate">
		    					<div class="img">
				    				<img src="<?php echo url('/'); ?>/images/corn2.jpg" class="img-fluid" alt="Colorlib Template">
			    				</div>
			    				<div class="desc">
			    					<div class="text bg-primary d-flex text-center align-items-center justify-content-center">
				    					<span>Sale</span>
				    				</div>
			    					<div class="d-flex pt-5">
				    					<div>
					    					<h3><a href="properties.html">Sweet Corn Fresh Harvest</a></h3>
											</div>
											<div class="pl-md-4">
													<h4 class="price">P60<span>/kilo</span></h4>
											</div>

										</div>
										<p class="h-info"><span class="location">Bontoc So. Leyte</span> </p>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="properties ftco-animate">
		    					<div class="img">
				    				<img src="<?php echo url('/'); ?>/images/rice.jpg" class="img-fluid" alt="Colorlib Template">
			    				</div>
			    				<div class="desc">
			    					<div class="text bg-secondary d-flex text-center align-items-center justify-content-center">
				    					<span>Sale</span>
				    				</div>
			    					<div class="d-flex pt-5">
				    					<div>
					    					<h3><a href="properties.html">Rice </a></h3>
											</div>
											<div class="pl-md-4">
												<h4 class="price">P1,950<span>/sack</span></h4>
											</div>
										</div>
										<p class="h-info"><span class="location">Bontoc So. Leyte</span> </p>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="properties ftco-animate">
		    					<div class="img">
				    				<img src="<?php echo url('/'); ?>/images/let.jpg" class="img-fluid" alt="Colorlib Template">
			    				</div>
			    				<div class="desc">
			    					<div class="text bg-primary d-flex text-center align-items-center justify-content-center">
				    					<span>Sale</span>
				    				</div>
			    					<div class="d-flex pt-5">
				    					<div>
					    					<h3><a href="properties.html">Fresh Lettuce</a></h3>
											</div>
											<div class="pl-md-4">
												<h4 class="price">P60<span>/kilo</span></h4>
											</div>
										</div>
										<p class="h-info"><span class="location">Bontoc So. Leyte</span> </p>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="properties ftco-animate">
		    					<div class="img">
				    				<img src="<?php echo url('/'); ?>/images/plot.jpg" class="img-fluid" alt="Colorlib Template">
			    				</div>
			    				<div class="desc">
			    					<div class="text bg-primary d-flex text-center align-items-center justify-content-center">
				    					<span>Sale</span>
				    				</div>
			    					<div class="d-flex pt-5">
				    					<div>
					    					<h3><a href="properties.html">Planting Vegetables</a></h3>
											</div>
										</div>
										<p class="h-info"><span class="location">Bontoc So. Leyte</span> </p>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="properties ftco-animate">
		    					<div class="img">
				    				<img src="<?php echo url('/'); ?>/images/plant.jpg" class="img-fluid" alt="Colorlib Template">
			    				</div>
			    				<div class="desc">
			    					<div class="text bg-secondary d-flex text-center align-items-center justify-content-center">
				    					<span>Rent</span>
				    				</div>
			    					<div class="d-flex pt-5">
				    					<div>
					    					<h3><a href="properties.html">Plant Station</a></h3>
											</div>
											
										</div>
									<p class="h-info"><span class="location">Bontoc So. Leyte</span> </p>
			    				</div>
		    				</div>
            	</div>
            </div>
          </div>
        </div>
    	</div>
    </section>
@endsection