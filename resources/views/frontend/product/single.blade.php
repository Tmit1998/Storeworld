@extends('frontend.layouts.master')
@section('single')

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">

                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                        <div class="simpleLens-container">
                        	<div class="simpleLens-big-image-container">
                        		<a data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-lens-image"><img class="default-img" src="https://via.placeholder.com/550x750" alt="#"></a>
                        	</div>
                        </div>

                        <div class="simpleLens-thumbnails-container">
                          	<a data-big-image="img/view-slider/medium/polo-shirt-1.png" data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-thumbnail-wrapper" href="#">
                            	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                          	</a>                                    
                          	<a data-big-image="img/view-slider/medium/polo-shirt-3.png" data-lens-image="img/view-slider/large/polo-shirt-3.png" class="simpleLens-thumbnail-wrapper" href="#">
                            	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                          	</a>
                          	<a data-big-image="img/view-slider/medium/polo-shirt-4.png" data-lens-image="img/view-slider/large/polo-shirt-4.png" class="simpleLens-thumbnail-wrapper" href="#">
                            	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                          	</a>
                        </div>

                    </div>
                  </div>
                </div>

                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  	<div class="aa-product-view-content">
                    	<h3>T-Shirt</h3>
	                    <div class="aa-price-block">
	                      <span class="aa-product-view-price">$34.99</span>
	                      <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
	                    </div>

                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>

                    	<h4>Size</h4>

	                    <div class="aa-prod-view-size">
	                      <a href="#">S</a>
	                      <a href="#">M</a>
	                      <a href="#">L</a>
	                      <a href="#">XL</a>
	                    </div>

                    	<h4>Color</h4>

	                    <div class="aa-color-tag">
	                      <a href="#" class="aa-color-green"></a>
	                      <a href="#" class="aa-color-yellow"></a>
	                      <a href="#" class="aa-color-pink"></a>                      
	                      <a href="#" class="aa-color-black"></a>
	                      <a href="#" class="aa-color-white"></a>                      
	                    </div>

	                    <div class="aa-prod-quantity">
	                      <form action="">
	                        <select id="" name="">
	                          <option selected="1" value="0">1</option>
	                          <option value="1">2</option>
	                          <option value="2">3</option>
	                          <option value="3">4</option>
	                          <option value="4">5</option>
	                          <option value="5">6</option>
	                        </select>
	                      </form>
	                      <p class="aa-prod-category">
	                        Category: <a href="#">Polo T-Shirt</a>
	                      </p>
	                    </div>

	                    <div class="aa-prod-view-bottom">
	                      <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
	                      <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
	                      <a class="aa-add-to-cart-btn" href="#">Compare</a>
	                    </div>
                  	</div>
                </div>
              </div>
            </div>

            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#review" data-toggle="tab">Reviews</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid voluptate perferendis, distinctio!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas! Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos, fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde accusantium facilis repudiandae.</p>
                </div>
                <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4>2 Reviews for T-Shirt</h4> 
                   <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                   </ul>
                   <h4>Add a review</h4>
                   <div class="aa-your-rating">
                     <p>Your Rating</p>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                   </div>
                   <!-- review form -->
                   <form action="" class="aa-review-form">
                      <div class="form-group">
                        <label for="message">Your Review</label>
                        <textarea class="form-control" rows="3" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>  
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                      </div>

                      <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                   </form>
                 </div>
                </div>            
              </div>
            </div>

            <!-- Related product -->
            <div class="aa-product-related-item">
              	<h3>Related Products</h3>
              
	            <div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>

							<div class="product-content">
								<h3><a href="product-details.html">Women Hot Collection</a></h3>
								<div class="product-price">
									<span>$29.00</span>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">Awesome Pink Show</a></h3>
								<div class="product-price">
									<span>$29.00</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
								<div class="product-price">
									<span>$29.00</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="new">New</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">Women Pant Collectons</a></h3>
								<div class="product-price">
									<span>$29.00</span>
								</div>
							</div>
						</div>
					</div>

				</div>

              <!-- quick view modal -->                  
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
							</div>
							<div class="modal-body">
								<div class="row no-gutters">
									<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
										<!-- Product Slider -->
											<div class="product-gallery">
												<div class="quickview-slider-active">
													<div class="single-slider">
														<img src="https://via.placeholder.com/569x528" alt="#">
													</div>
													<div class="single-slider">
														<img src="https://via.placeholder.com/569x528" alt="#">
													</div>
													<div class="single-slider">
														<img src="https://via.placeholder.com/569x528" alt="#">
													</div>
													<div class="single-slider">
														<img src="https://via.placeholder.com/569x528" alt="#">
													</div>
												</div>
											</div>
										<!-- End Product slider -->
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
										<div class="quickview-content">
											<h2>Flared Shift Dress</h2>
											<div class="quickview-ratting-review">
												<div class="quickview-ratting-wrap">
													<div class="quickview-ratting">
														<i class="yellow fa fa-star"></i>
														<i class="yellow fa fa-star"></i>
														<i class="yellow fa fa-star"></i>
														<i class="yellow fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<a href="#"> (1 customer review)</a>
												</div>
												<div class="quickview-stock">
													<span><i class="fa fa-check-circle-o"></i> in stock</span>
												</div>
											</div>
											<h3>$29.00</h3>
											<div class="quickview-peragraph">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
											</div>
											<div class="size">
												<div class="row">
													<div class="col-lg-6 col-12">
														<h5 class="title">Size</h5>
														<select>
															<option selected="selected">s</option>
															<option>m</option>
															<option>l</option>
															<option>xl</option>
														</select>
													</div>
													<div class="col-lg-6 col-12">
														<h5 class="title">Color</h5>
														<select>
															<option selected="selected">orange</option>
															<option>purple</option>
															<option>black</option>
															<option>pink</option>
														</select>
													</div>
												</div>
											</div>
											<div class="quantity">
												<!-- Input Order -->
												<div class="input-group">
													<div class="button minus">
														<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
															<i class="ti-minus"></i>
														</button>
													</div>
													<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
													<div class="button plus">
														<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
															<i class="ti-plus"></i>
														</button>
													</div>
												</div>
												<!--/ End Input Order -->
											</div>
											<div class="add-to-cart">
												<a href="#" class="btn">Add to cart</a>
												<a href="#" class="btn min"><i class="ti-heart"></i></a>
												<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
											</div>
											<div class="default-social">
												<h4 class="share-now">Share:</h4>
												<ul>
													<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
              <!-- / quick view modal -->   
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->



@endsection