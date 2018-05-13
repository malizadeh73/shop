@extends("user.base.index")

@section('title')
	تماس با ما
@endsection

@section('content')
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-home"></i></a></li>
			<li class="active">تماس با ما</li>
		</ol>
		<h1 class="title-header">تماس با ما</h1>
		<div class="row">
			<div class="col-md-8">
				<div id="map"></div>
			</div>
			<div class="col-md-4">
				<h2>اطلاعات</h2>
				<ul class="contact-list">
					<li>
						<label><i class="fa fa-map-marker"></i></label>
						<span>خراسان رضوی مشهد</span>
					</li>
					<li>
						<label><i class="fa fa-envelope"></i></label>
						<span>m.alizadeh009@gmail.com</span>
					</li>
					<li>
						<label><i class="fa fa-phone"></i></label>
						<span>+989303022707</span>
					</li>
				</ul>
				<form method="post" action="#" enctype="multipart/form-data" id="form-contact">
					<div class="form">
						<div class="form-group">
							<input type="text" placeholder="نام و نام خانوادگی" name="name" class="form-control required">
						</div>
						<div class="form-group">
							<input type="email" placeholder="پست الکترونیکی" name="email" class="form-control required email">
						</div>
						<div class="form-group">
							<input type="text" placeholder="شماره تماس" name="telephone" class="form-control required number">
						</div>
						<div class="form-group">
							<textarea rows="4" placeholder="پیام" name="massage" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<div class="QapTcha"></div>
						</div>
						<div class="form-group text-right">
							<button class="btn btn-default"> لغو</button>
							<input type="submit" class="btn btn-primary" value="ارسال">
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
@endsection
