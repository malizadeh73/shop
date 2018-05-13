<!DOCTYPE html>
<html>
<head>	
	<title>@yield('title')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="user-scalable=0,initial-scale=1.0, maximum-scale=1, minimum-scale=1" />	
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/font.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('css/user/overwrite-bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/user/custom.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/user/color-switch.css') }}" rel="stylesheet" type="text/css" />
	<link href="#green" id="color" rel="stylesheet" type="text/css" />
	@yield('css')
</head>
<body>
	<div class="wrapper">
		<div class="color-switch">
			<ul>
				<li><a id="brown" class="brown change" href="#brown"><i class="fa fa-check"></i></a></li>
				<li><a id="red" class="red change" href="#red"><i class="fa fa-check"></i></a></li>
				<li><a id="yellow" class="yellow change" href="#yellow"><i class="fa fa-check"></i></a></li>
				<li><a id="blue" class="blue change" href="#blue"><i class="fa fa-check"></i></a></li>
				<li><a id="green" class="green change" href="#green"><i class="fa fa-check"></i></a></li>
				<li><a id="gray" class="gray change" href="#gray"><i class="fa fa-check"></i></a></li>
				<li><a id="modernstyle" class="modernstyle change" href="#modernstyle"><i class="fa fa-check"></i></a></li>
			</ul>
			<i class="fa fa-paint-brush"></i>
		</div>
		<div class="nav-top">
			<div class="userbar">
				<div class="contact">
					<a href="" class="tel"><i class="fa fa-phone"></i> (+98) 915 829 2548</a>
					<span class="split"></span>
					<a href="" class="email"><i class="fa fa-envelope-o"></i> m.alizadeh009@gmail.com</a>
				</div>
				<div class="زبان">
					<a href="" id="lang" class="dropdown-toggle" data-toggle="dropdown">فارسی <span class="caret"></span></a>
					<ul class="dropdown-menu" aria-labelledby="lang">
						<li><a href="" >فارسی</a></li>
						<li><a href="" >انگلیسی</a></li>
					</ul>
				</div>
				<span class="split"></span>
				<!-- Before Login -->
				<a href="/login">ورود</a> <span>یا</span> <a href="/login">ثبت نام</a>
				<!-- End Before Login -->
				<!-- after Login -->
						<!-- End after Login -->
			</div>
		</div>
		<header class="header">
			<div class="inner-header">
				<div class="logo">
					<a href="#"><img src="{{ asset('assets/img/log.png') }}" alt="abc point" /></a>
					<!--<div class="cc">
						<span><i class="fa fa-phone"></i> +66 2 123 4567</span>
					</div>-->
				</div>
				<div class="searchbar">
					<div class="search-toggle">
						<i class="fa fa-search icon-search"></i>
						<i class="fa fa-remove icon-remove"></i>
					</div>
					<div class="search">
						<input type="text" placeholder="جستجو ی محصول" class="search-box" /><!-- fix inline-block --><button class="search-btn"><i class="fa fa-search"></i></button>
					</div>
					<a href="wishlist.php" class="wishlist"><i class="fa fa-heart"></i> <b>21</b></a>
					<a href=".checkout" data-toggle="modal" class="basket"><i class="fa fa-shopping-cart"></i> <b>12,000<i> تومان</i></b> <span>4</span></a>
				</div>
				<!--<div class="section-button">
					<a href="" class="active">Online Service <i class="fa fa-angle-down"></i></a>
					<a href="">Corporate  <i class="fa fa-angle-right"></i></a>
				</div>-->
			</div>
		</header>
		<nav class="nav-main">
			<a href="javascript:void(0);" class="nav-toggle"><i class="fa fa-align-justify"></i></a>
			<ul class="inner-nav-main">
				<li class="category">
					<a href="#">
						<div class="nav-text">
							<h2>دسته بندی</h2>
						</div>
						<i class="fa fa-angle-left"></i>
					</a>
					<div class="nav-sub">
						<ul class="inner-nav-sub">
							<li class="col-xs-4 pull-right">
								<h4>Computer</h4>
								<ul>
									<li>
										<a href="http://www.google.com">New Products</a>
									</li>
									<li class="sub-menu">
										<a href="#" class="sub-menu-toggle">Apple <div class="label label-danger"><div class="arrow"></div>New</div> <span class="fa fa-angle-left"></span></a>
										<ul>
											<li>
												<a href="list-product.php">Macbook Pro</a>
											</li>
											<li>
												<a href="list-product.php">Macbook Air</a>
											</li>
											<li>
												<a href="list-product.php">iMac</a>
											</li>
											<li>
												<a href="list-product.php">Mac Pro</a>
											</li>
											<li>
												<a href="list-product.php">Mac Mini</a>
											</li>
											<li>
												<a href="list-product.php">OS X Yosemite</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="list-product.php">Lenovo <div class="label label-danger"><div class="arrow"></div>New</div></a>
									</li>
									<li>
										<a href="list-product.php">Samsung</a>
									</li>
									<li>
										<a href="list-product.php">Microsoft</a>
									</li>
								</ul>
							</li><!-- fix inline-block-->
							<li class="col-xs-4 pull-right">
								<h4>Sports</h4>
								<ul>
									<li>
										<a href="list-product.php">Sport Tops & Vests</a>
									</li>
									<li>
										<a href="list-product.php">Swimware</a>
									</li>
									<li>
										<a href="list-product.php">Footware</a>
									</li>
									<li>
										<a href="list-product.php">Sport Underware</a>
									</li>
								</ul>
							</li><!-- fix inline-block-->
							<li class="col-xs-4 pull-right">
								<h4>Video Games & Consoles</h4>
								<ul>
									<li>
										<a href="list-product.php">Action</a>
									</li>
									<li>
										<a href="list-product.php">Adventure</a>
									</li>
									<li>
										<a href="list-product.php">Shooter</a>
									</li>
									<li>
										<a href="list-product.php">Role-Playing Games (RPGs)</a>
									</li>
								</ul>
							</li>
						</ul>
						<ul class="inner-nav-sub">
							<li class="col-xs-4 pull-right">
								<h4>Phones & Accessories</h4>
								<ul>
									<li>
										<a href="list-product.php">iPhone</a>
									</li>
									<li>
										<a href="list-product.php">Samsung</a>
									</li>
									<li>
										<a href="list-product.php">Sony</a>
									</li>
									<li>
										<a href="list-product.php">Azus</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</li><!--
				--><li @if($active == 'home')class="active"@endif>
					<a href="/">
						<div class="nav-text">
							<h2 class="text">خانه</h2>
							<h2 class="icon"><i class="fa fa-home"></i></h2>
						</div>
					</a>
				</li><!--
				--><li @if($active == 'list-product')class="active"@endif>
					<a href="/products/1">
						<div class="nav-text">
							<h2>محصولات</h2>
						</div>
					</a>
				</li><!--
				--><li @if($active == 'aboute-us')class="active"@endif>
					<a href="element.php">
						<div class="nav-text">
							<h2>درباره ما</h2>
						</div>
					</a>
					<!--<ul class="nav-sub">
						<li></li>
						<li>หมวดหมู่</li>
						<li></li>
					</ul>-->
				</li><!--
				--><li @if($active == 'contact-us')class="active"@endif>
					<a href="\contact">
						<div class="nav-text">
							<h2>تماس با ما</h2>
						</div>
					</a>
					<!--<ul class="nav-sub">
						<li></li>
						<li>หมวดหมู่</li>
						<li></li>
					</ul>-->
				</li>
			</ul>
		</nav>
		<!-- Modal Checkout -->
		<div class="modal checkout fade">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title">سفارش شما</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>جزئیات محصول</th>
										<th class="text-right" style="width: 90px;">سفارش</th>
										<th class="text-right" style="width: 80px;">Amount</th>
										<th style="width: 20px;"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><img src="assets/img/products/1.jpg" style="width: 50px;" class="pull-left hidden-xs" alt="" /> ساعت دیواری
										</td>
										<td class="text-right">
											<div class="quantity">
												<div class="minus">
													<a class="ddd" href="#">-</a>
												</div>
												<div class="input">
													<input type="text" class="quntity-input" value="1" />
												</div>
													<div class="plus"> <a class="ddd" href="#">+</a>
												</div>
											</div>
										</td>
										<td class="text-right">$2,000</td>
										<td class="text-right">
											<a href=""><i class="fa fa-trash-o red"></i></a>
										</td>
									</tr>
									<tr>
										<td class="text-right" colspan="2"><b>Total Amount</b></td>
										<td class="text-right">$2,000</td>
										<td class="text-right"></td>
									</tr>
								</tbody>
							</table>

						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
						<a href="checkout.php" class="btn btn-primary">Checkout</a>
					</div>
				</div><!-- /.modal-content -->
			</div>
		</div>
		<!-- Modal -->
		@yield('content')
	</div>
	<footer class="footer">
		<div class="inner-footer">
			<div class="row nav-bottom">
				<div class="col-sm-8 pull-right">
					<div class="col-sm-5 pull-right">
						<h3>درباره ما</h3>
						<p>رایان آیریک یک شرکت تازه تاسیس جوانان ایرانی است که با هدف تولید ملی روی صناع چوبی کار می کند.</p>
						<div class="social">
							<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="" class="google"><i class="fa fa-google"></i></a>

						</div>
						<h4><span>شماره تماس : </span>051-3271-0000<br /><span>ایمیل : </span>m.alizadeh009@gmail.com</h4>
					</div>
					<div class="col-sm-4 pull-right">
						<h3>تازه های اخبار</h3>
						<ul class="nav-list">
							<li class="media">
								<a href="" class="pull-right">
									<img width="75" src="img/user/2017-10-29_161047.png" alt="" />
								</a>
								<div class="media-body">
									<h5><a href="">راه اندازی وب سایت شرکت رایان آیریک</a></h5>
									<i>15 آبان 1396</i>
								</div>
							</li>
							<li class="media">
								<a href="" class="pull-right">
									<img width="75" src="img/user/2017-10-29_161047.png" alt="" />
								</a>
								<div class="media-body">
									<h5><a href="">راه اندازی وب سایت شرکت رایان آیریک</a></h5>
									<i>15 آبان 1396</i>
								</div>
							</li>
							<li class="media">
								<a href="" class="pull-right">
									<img width="75" src="img/user/2017-10-29_161047.png" alt="" />
								</a>
								<div class="media-body">
									<h5><a href="">راه اندازی وب سایت شرکت رایان آیریک</a></h5>
									<i>15 آبان 1396</i>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-sm-3 pull-right">
						<h3>خدمات</h3>
						<ul class="nav-list">
							<li><a href="">تماس با ما</a></li>
							<li><a href="">سوالات متداول</a></li>
							<li><a href="">شرایط پرداخت</a></li>
							<li><a href="">بازگشت و بازپرداخت</a></li>
							<li><a href="">تحویل</a></li>
							<li><a href="">شرایط و ضوابط</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 pull-right">
				<iframe height="240" style="width: 100%; border: 0;" src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcrtvmrkt&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
				</div>
			</div>
			<hr />
			<div class="copyright">
				<div class="col-sm-6 pull-right">
					<span>تمامی حقوق کپی و رایت برای شرکت رایان آیریک محفوظ است</span>
				</div>
				<div class="col-sm-6 text-right pull-right">
					<div class="pull-right">
						<p>ثبت نام برای خبرنامه:</p>
						<form class="form-inline" id="validate-form" method="post" action="#" enctype="multipart/form-data">
							<div class="form-group">
								<input type="email" name="email" placeholder="--- آدرس ایمیل شما ---" class="form-control required">
							</div>
							<button class="btn btn-primary" type="submit">اشتراک</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{asset('assets/js/jquery-3.min.js')}}" type="text/javascript"></script>
	{{--<script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>--}}
	<script type="text/javascript" src="{{ asset('assets/js/color-switch.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery-ui.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.ui.touch-punch.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/holder.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.dotdotdot.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.elevateZoom.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/user/custom.js') }}"></script>
	@yield('javascript')
</body>
</html>