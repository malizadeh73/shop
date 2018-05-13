@extends("user.base.index")
@
@section('content')
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li class="active">ورود و ثبت نام</li>
		</ol>
		<div class="row">
			<!-- login -->
			<div class="col-sm-5 pull-right">
				<h1 class="title-header">ورود</h1>
				<form role="form" class="form-horizontal">
					<div class="form-group">
						<label class="control-label">نام کاربری یا ایمیل</label>
						<input type="text" placeholder="Username or Email" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">کلمه عبور</label>
						<input type="text" placeholder="Password" class="form-control">
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								<input type="checkbox"> مرا به خاطر بسپار
							</label>
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">ورود</button>
						<a href="" class="btn btn-facebook"><i class="fa fa-facebook"></i> ورود با فیسبوک</a>
					</div>
					<div class="form-group">
						<div class="text-right">
							<a href="">فراموشی کلمه عبور؟</a>
						</div>
					</div>
				</form>
				<!--<div class="panel-border">
                    <h2>login with facebook</h2>
                    <a href="" class="btn btn-facebook"><i class="fa fa-facebook"></i> Connect with Facebook</a>
                </div>-->
			</div>
			<!--  -->
			<div class="col-sm-7 pull-right">
				<div class="panel">
					<h1 class="title-header">کاربر جدید</h1>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<form role="form" class="form-horizontal row">
						<h5 class="col-sm-12">اطلاعات شخصی</h5>
						<div class="form-group col-sm-6 pull-right">
							<label class="control-label">نام</label>
							<input type="text" placeholder="نام" class="form-control">
						</div>
						<div class="form-group col-sm-6 pull-right">
							<label class="control-label">نام خانوادگی</label>
							<input type="text" placeholder="نام خانوادگی" class="form-control">
						</div>
						<div class="form-group col-sm-12 pull-right">
							<label class="control-label">نام کاربری یا ایمیل</label>
							<input type="text" placeholder="نام کاربری یا ایمیل" class="form-control">
						</div>
						<div class="form-group col-sm-12 pull-right">
							<div class="checkbox">
								<label>
									<input type="checkbox">ثبت نام در خبرنامه
								</label>
							</div>
						</div>
						<h5 class="col-sm-12 pull-right">اطلاعات ورود</h5>
						<div class="form-group col-sm-6">
							<label class="control-label">کلمه عبور</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group col-sm-6 pull-right">
							<label class="control-label"> تکرار کلمه عبور
							</label>
							<input type="password" class="form-control">
						</div>
						<div class="col-sm-12 pull-right">
							<div class="form-group">
								<button class="btn btn-primary" type="submit">ارسال</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
