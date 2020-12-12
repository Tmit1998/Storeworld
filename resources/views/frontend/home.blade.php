@extends('frontend.layouts.master')

@section('Slider')

	<section class="hero-slider">
		<!-- Single Slider -->
		<img src="{{asset('/frontend/images/banner.jpg')}}">
		<!--/ End Single Slider -->
	</section>

@endsection
<!-- END CODE SILDE -->

@section('Banner')

	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{asset('/frontend/images/category1.jpg')}}" alt="#">
						{{-- <div class="content">
							<p>Man's Collectons</p>
							<h3>Summer travel <br> collection</h3>
							<a href="#">Discover Now</a>
						</div> --}}
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{asset('/frontend/images/category2.jpg')}}" alt="#">
						{{-- <div class="content">
							<p>Bag Collectons</p>
							<h3>Awesome Bag <br> 2020</h3>
							<a href="#">Shop Now</a>
						</div> --}}
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="{{asset('/frontend/images/category3.jpg')}}" alt="#">
						{{-- <div class="content">
							<p>Flash Sale</p>
							<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
							<a href="#">Discover Now</a>
						</div> --}}
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>

@endsection
<!--  END CODE BANNER -->

@section('Product')

	<div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title mb-0">
							<h2>Sản phẩm mới</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">

							<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="{{asset('/frontend/images/1.jpg')}}" alt="#">
															<img class="hover-img" src="{{asset('/frontend/images/1.jpg')}}" alt="#">
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
														<h3><a href="product-details.html">Đồ chơi tàu hỏa BO train IM.P811</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="{{asset('/frontend/images/2.jpg')}}" alt="#">
															<img class="hover-img" src="{{asset('/frontend/images/2.jpg')}}" alt="#">
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
														<h3><a href="product-details.html">Đồ chơi xếp hình Mini cảnh sát thành phố IM.20035</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="{{asset('/frontend/images/3.jpg')}}" alt="#">
															<img class="hover-img" src="{{asset('/frontend/images/3.jpg')}}" alt="#">
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
														<h3><a href="product-details.html">Đồ chơi xếp hình Mini quân đội IM23058</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="{{asset('/frontend/images/4.jpg')}}" alt="#">
															<img class="hover-img" src="{{asset('/frontend/images/4.jpg')}}" alt="#">
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
														<h3><a href="product-details.html">Đồ chơi tàu hỏa BO train IM.P811</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							
						</div>
					</div>
				</div>
            </div>
    </div>

@endsection
<!--  END CODE PRODUCT -->

@section('MidiumBanner')

	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{asset('/frontend/images/left.jpg')}}" alt="#">
						<div class="content">
							{{-- <p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3> --}}
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{asset('/frontend/images/right.jpg')}}" alt="#">
						<div class="content">
							{{-- <p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3> --}}
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>

@endsection
<!--  END CODE MidiumBanner -->

@section('MostPopular')

	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Sản phẩm bán chạy</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="{{asset('/frontend/images/1.jpg')}}" alt="#">
								<img class="hover-img" src="{{asset('/frontend/images/1.jpg')}}" alt="#">
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
							<h3><a href="product-details.html">Đồ chơi tàu hỏa BO train IM.P811</a></h3>
							<div class="product-price">
								<span>$29.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-4 col-12">
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="{{asset('/frontend/images/2.jpg')}}" alt="#">
								<img class="hover-img" src="{{asset('/frontend/images/2.jpg')}}" alt="#">
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
							<h3><a href="product-details.html">Đồ chơi xếp hình Mini cảnh sát thành phố IM.20035</a></h3>
							<div class="product-price">
								<span>$29.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-4 col-12">
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="{{asset('/frontend/images/3.jpg')}}" alt="#">
								<img class="hover-img" src="{{asset('/frontend/images/3.jpg')}}" alt="#">
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
							<h3><a href="product-details.html">Đồ chơi xếp hình Mini quân đội IM23058</a></h3>
							<div class="product-price">
								<span>$29.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-4 col-12">
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="{{asset('/frontend/images/4.jpg')}}" alt="#">
								<img class="hover-img" src="{{asset('/frontend/images/4.jpg')}}" alt="#">
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
							<h3><a href="product-details.html">Đồ chơi tàu hỏa BO train IM.P811</a></h3>
							<div class="product-price">
								<span>$29.00</span>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>

@endsection
<!--  END CODE MostPopular -->

@section('Cowndown')

	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="{{asset('/frontend/images/demo1.jpg')}}" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Ưu đãi trong ngày</p>
								<h3 class="title">BỘ ĐỒ CHƠI SIÊU THÍCH</h3>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
								<div class="link text-center">
									<a href="#" class="btn">Xem thêm</a>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>

@endsection
<!--  END CODE Cowndown -->

@section('Blog')
	
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>BÀI VIẾT NỔI BẬT</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="{{asset('frontend/images/1.jpg')}}" alt="#">
						<div class="content">
							<a href="#" class="title">Đồ chơi tàu hỏa BO train IM.P811.</a>
							<a href="#" class="more-btn">Nội dung đang được cập nhật</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="{{asset('frontend/images/1.jpg')}}" alt="#">
						<div class="content">
							<a href="#" class="title">Đồ chơi tàu hỏa BO train IM.P811.</a>
							<a href="#" class="more-btn">Nội dung đang được cập nhật</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="{{asset('frontend/images/1.jpg')}}" alt="#">
						<div class="content">
							<a href="#" class="title">Đồ chơi tàu hỏa BO train IM.P811.</a>
							<a href="#" class="more-btn">Nội dung đang được cập nhật</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
			</div>
		</div>
	</section>

@endsection
<!-- END CODE Blog -->

@section('Services')

	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Miễn phí giao hàng</h4>
						<p>Đợn hàng trên 250.000 VNĐ</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Trả lại miễn phí</h4>
						<p>Trong vòng 15 ngày</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Thanh toán an toàn</h4>
						<p>Thanh toán an toàn 100%</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Giá tốt nhất</h4>
						<p>Giá đảm bảo</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>

@endsection
<!-- END CODE Services -->

@section('Newsletter')

	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

<!-- END CODE Newsletter -->

@section('Modal')
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
@endsection
<!-- END CODE Modal -->
