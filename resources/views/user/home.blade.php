@extends("user.base.index")
@section('content')
	<div class="slide-product text-center">
		<div class="row">
			<div class="col-sm-8">
				<a href="#1">
					<img src="assets/img/banner1.jpg" alt="" />
				</a>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-xs-6 col-sm-12">
						<a href="#2">
							<img src="assets/img/banner3.jpg" alt="" />
						</a>
					</div>
					<div class="col-xs-6 col-sm-12">
						<a href="#3">
							<img src="assets/img/banner2.jpg" alt="" />
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<a href="#2">
					<img src="assets/img/banner3.jpg" alt="" />
				</a>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-xs-6 col-sm-12">
						<a href="#3">
							<img src="assets/img/banner2.jpg" alt="" />
						</a>
					</div>
					<div class="col-xs-6 col-sm-12">
						<a href="#1">
							<img src="assets/img/banner1.jpg" alt="" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<ul class="option-list">
		<li>
			<a href="">
				<i class="fa fa-truck"></i><!-- fix inline-block
				--><div class="option-text">
					<h3>ارسال رایگان</h3>
					<h4>سفارش های بالای 100 هزار  تومان</h4>
				</div>
			</a>
		</li>
		<li>
			<a href="">
				<i class="fa fa-retweet"></i><!-- fix inline-block
				--><div class="option-text">
					<h3>برگشت پول</h3>
					<h4>7 روز ضمانت بازگشت پول</h4>
				</div>
			</a>
		</li>
		<li>
			<a href="">
				<i class="fa fa-gift"></i><!-- fix inline-block
				--><div class="option-text">
					<h3>فروش ویژه</h3>
					<h4>همه اقلام فروش تا 10٪ تخفیف</h4>
				</div>
			</a>
		</li>
	</ul>
	<div class="container">
		<div class="row section">
			<h2>پیشنهاد های شگفت انگیز</h2>
			<div class="list-thumbnail list-slide">
				<div class="col-sm-12">
					<div class="thumbnail">
						<a href="product-detail.php">
							<img src="assets/img/products/1.jpg" alt="" />
							<img class="hover" src="assets/img/products/1-1.jpg" alt="" />
						</a>
						<div class="caption">
							<h3>ساعت 4 تکه طرح اسب</h3>
							<h5 class="price">320,000 ريال</h5>
							<a href="" class="like"><i class="fa fa-heart"></i> 12</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="thumbnail">
						<a href="product-detail.php">
							<span class="label-save">OFF<i>5%</i></span>
							<img src="assets/img/products/2.jpg" alt="" />
						</a>
						<div class="caption">
							<h3>ساعت دیواری طرح گل</h3>
							<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
							<a href="" class="like"><i class="fa fa-heart"></i> 2</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="thumbnail">
						<a href="product-detail.php">
							<img src="assets/img/products/3.jpg" alt="" />
						</a>
						<div class="caption">
							<h3>ساعت دیواری طرح اعداد 1</h3>
							<h5 class="price">200,000 ريال</h5>
							<a href="" class="like"><i class="fa fa-heart"></i> 30</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="thumbnail">
						<a href="product-detail.php">
							<span class="label-save">OFF<i>7%</i></span>
							<img src="assets/img/products/4.jpg" alt="" />
						</a>
						<div class="caption">
							<h3>ساعت دیواری طرح اعداد 2</h3>
							<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
							<a href="" class="like active"><i class="fa fa-heart"></i> 7</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="thumbnail">
						<a href="product-detail.php">
							<span class="label-save">OFF<i>4%</i></span>
							<img src="assets/img/products/5.jpg" alt="" />
							<img class="hover" src="assets/img/products/5-5.jpg" alt="" />
						</a>
						<div class="caption">
							<h3>ساعت دیواری</h3>
							<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
							<a href="" class="like active"><i class="fa fa-heart"></i> 0</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="thumbnail">
						<a href="product-detail.php">
							<span class="label-save">OFF<i>15%</i></span>
							<img src="assets/img/products/6.jpg" alt="" />
						</a>
						<div class="caption">
							<h3>ساعت دیواری</h3>
							<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
							<a href="" class="like active"><i class="fa fa-heart"></i> 114</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="thumbnail">
						<a href="product-detail.php">
							<img src="assets/img/products/7.jpg" alt="" />
						</a>
						<div class="caption">
							<h3>ساعت دیواری</h3>
							<h5 class="price">200,000 ريال</h5>
							<a href="" class="like active"><i class="fa fa-heart"></i> 6</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="thumbnail">
						<a href="product-detail.php">
							<span class="label-save">OFF<i>3%</i></span>
							<img src="assets/img/products/8.jpg" alt="" />
							<img class="hover" src="assets/img/products/8-8.jpg" alt="" />
						</a>
						<div class="caption">
							<h3>ساعت دیواری</h3>
							<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
							<a href="" class="like active"><i class="fa fa-heart"></i> 32</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section hidden-xs">
			<a href="#" target="_blank">
				<img src="assets/img/banner-row.jpg" alt="" />
			</a>
		</div>
		<div class="section">
			<h2>پر فروش ترین ها</h2>
			<div class="row list-thumbnail inequitable">
				<div class="col-xs-12 col-sm-5 col-md-4 first">
					<div class="thumbnail">
						<a href="">
							<img src="assets/img/products/9.jpg" alt="" />
						</a>
						<div class="caption">
							<h3>ساعت دیواری</h3>
							<p>در این قسمت پرفروش ترین محصول در تمام دسته بندی ها قرار میگیرد</p>
							<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
							<a href="" class="like active"><i class="fa fa-heart"></i> 40</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-8">
					<div class="col-xs-6 col-sm-4 col-md-3">
						<div class="thumbnail">
							<a href="product-detail.php">
								<span class="label-save">OFF<i>4%</i></span>
								<img src="assets/img/products/5.jpg" alt="" />
								<img class="hover" src="assets/img/products/5-5.jpg" alt="" />
							</a>
							<div class="caption">
								<h3>ساعت دیواری</h3>
								<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
								<a href="" class="like active"><i class="fa fa-heart"></i> 0</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3">
						<div class="thumbnail">
							<a href="product-detail.php">
								<img src="assets/img/products/11.jpg" alt="" />
								<img class="hover" src="assets/img/products/11-11.jpg" alt="" />
							</a>
							<div class="caption">
								<h3>ساعت دیواری</h3>
								<h5 class="price">300,000 ريال</h5>
								<a href="" class="like"><i class="fa fa-heart"></i> 104</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3">
						<div class="thumbnail">
							<span class="label-save">Save <i>5%</i></span>
							<a href="product-detail.php">
								<img src="assets/img/products/12.jpg" alt="" />
							</a>
							<div class="caption">
								<h3>ساعت دیواری</h3>
								<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
								<a href="" class="like"><i class="fa fa-heart"></i> 133</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3">
						<div class="thumbnail">
							<a href="product-detail.php">
								<img src="assets/img/products/7.jpg" alt="" />
							</a>
							<div class="caption">
								<h3>ساعت دیواری</h3>
								<h5 class="price">300,000 ريال</h5>
								<a href="" class="like active"><i class="fa fa-heart"></i> 6</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3">
						<div class="thumbnail">
							<a href="product-detail.php">
								<span class="label-save">OFF<i>3%</i></span>
								<img src="assets/img/products/8.jpg" alt="" />
								<img class="hover" src="assets/img/products/8-8.jpg" alt="" />
							</a>
							<div class="caption">
								<h3>ساعت دیواری</h3>
								<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
								<a href="" class="like active"><i class="fa fa-heart"></i> 32</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3">
						<div class="thumbnail">
							<a href="product-detail.php">
								<img src="assets/img/products/1.jpg" alt=""/>
								<img class="hover" src="assets/img/products/1-1.jpg" alt="" />
							</a>
							<div class="caption">
								<h3>ساعت دیواری</h3>
								<h5 class="price">300,000 ريال</h5>
								<a href="" class="like active"><i class="fa fa-heart"></i> 12</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 hidden-sm">
						<div class="thumbnail">
							<a href="product-detail.php">
								<span class="label-save">OFF<i>5%</i></span>
								<img src="assets/img/products/2.jpg" alt="" />
							</a>
							<div class="caption">
								<h3>ساعت دیواری</h3>
								<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
								<a href="" class="like active"><i class="fa fa-heart"></i> 2</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 hidden-sm">
						<div class="thumbnail">
							<a href="product-detail.php">
								<span class="label-save">OFF<i>7%</i></span>
								<img src="assets/img/products/4.jpg" alt="" />
							</a>
							<div class="caption">
								<h3>ساعت دیواری</h3>
								<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
								<a href="" class="like active"><i class="fa fa-heart"></i> 7</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<h2>برند های تاپ</h2>
			<div class="row list-thumbnail brand">
				<div class="col-sm-8">
					<table>
						<tr>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
							<td>
								<a href="" class="thumbnail">
									<img src="assets/img/brand-logo.jpg" alt="" />
								</a>
							</td>
						</tr>
					</table>

				</div>
				<div class="col-sm-4">
					<a href="#" target="_blank" class="thumbnail">
						<img src="assets/img/logo4.jpg" alt="" />
					</a>
				</div>
			</div>
		</div>
		<div class="row section">
			<h2>جدیدترین کالاها</h2>
			<ul class="nav nav-tabs nav-button">
				<li class="active" >
					<a data-toggle="tab" href="#computer">چوب</a>
				</li>
				<li>
					<a data-toggle="tab" href="#smartphone">هنر دست</a>
				</li>
				<li>
					<a data-toggle="tab" href="#camera">پلکسی گلاس</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="computer" class="tab-pane fade in active">
					<div class="row list-thumbnail list-slide">
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<img src="assets/img/products/7.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال</h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 6</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<img src="assets/img/products/11.jpg" alt="" />
									<img class="hover" src="assets/img/products/11-11.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال</h5>
									<a href="" class="like"><i class="fa fa-heart"></i> 104</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>15%</i></span>
									<img src="assets/img/products/6.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 114</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<img src="assets/img/products/7.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال</h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 6</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<img src="assets/img/products/11.jpg" alt="" />
									<img class="hover" src="assets/img/products/11-11.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال</h5>
									<a href="" class="like"><i class="fa fa-heart"></i> 104</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>15%</i></span>
									<img src="assets/img/products/6.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 114</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>15%</i></span>
									<img src="assets/img/products/7.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال</h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 6</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>15%</i></span>
									<img src="assets/img/products/11.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
									<a href="" class="like"><i class="fa fa-heart"></i> 104</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="smartphone" class="tab-pane fade">
					<div class="list-thumbnail list-slide">
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>5%</i></span>
									<img src="assets/img/products/2.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 2</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>7%</i></span>
									<img src="assets/img/products/4.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 7</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>3%</i></span>
									<img src="assets/img/products/8.jpg" alt="" />
									<img class="hover" src="assets/img/products/8-8.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 32</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<img src="assets/img/products/1.jpg" alt="" />
									<img class="hover" src="assets/img/products/1-1.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال</h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 12</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>5%</i></span>
									<img src="assets/img/products/2.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 2</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>7%</i></span>
									<img src="assets/img/products/4.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 7</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<span class="label-save">OFF<i>3%</i></span>
									<img src="assets/img/products/8.jpg" alt="" />
									<img class="hover" src="assets/img/products/8-8.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال<span class="strike">350,000 ريال</span></h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 32</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="thumbnail">
								<a href="product-detail.php">
									<img src="assets/img/products/1.jpg" alt="" />
									<img class="hover" src="assets/img/products/1-1.jpg" alt="" />
								</a>
								<div class="caption">
									<h3>ساعت دیواری</h3>
									<h5 class="price">300,000 ريال</h5>
									<a href="" class="like active"><i class="fa fa-heart"></i> 12</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="camera" class="tab-pane fade"></div>
				<div id="sport" class="tab-pane fade"></div>
			</div>

		</div>
	</div>
@endsection
