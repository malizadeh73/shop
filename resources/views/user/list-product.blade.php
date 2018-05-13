@extends("user.base.index")

@section('title')
	محصولات
@endsection

@section('css')
	<link href="{{asset('assets/plugin/jstree/themes/default/style.css')}}" rel="stylesheet">
	<script src="{{asset('assets/js/pagination.js')}}" type="text/javascript"></script>
@endsection


@section('content')
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">دسته بندی</a></li>
			<li class="active selected_category_label">همه</li>
		</ol>

		<div class="sidebar">
			<h3 class="title-nav">دسته بندی</h3>
			@if($list_jstree_category == false)
				<p class="colorRed alert-form">هیچ دسته ای وجود ندارد</p>
			@else
				<input class="search-input form-control" placeholder="جستجو دسته"></input>
				<div id="jstree_div"></div>
			@endif
			{{--<ul class="nav">--}}
				{{--<li><h4><a href="">Computer <span>(142)</span> <i class="fa fa-chevron-right"></i></a></h4>--}}
					{{--<ul>--}}
						{{--<li>Lenovo</li>--}}
						{{--<li>Dell</li>--}}
						{{--<li>Toshiba</li>--}}
						{{--<li>Asus</li>--}}
					{{--</ul>--}}
				{{--</li>--}}
				{{--<li class="active"><h4><a href="">Smart phone <span>(655)</span> <i class="fa fa-chevron-down"></i></a></h4>--}}
					{{--<ul>--}}
						{{--<li class="active"><i></i><a href="#">Samsung</a></li>--}}
						{{--<li><i></i><a href="#">Apple</a></li>--}}
						{{--<li><i></i><a href="#">Sony</a></li>--}}
					{{--</ul>--}}
				{{--</li>--}}
				{{--<li><h4><a href="">Camera <span>(56)</span> <i class="fa fa-chevron-right"></i></a></h4>--}}
				{{--</li>--}}
				{{--<li><h4><a href="">Sport <span>(122)</span> <i class="fa fa-chevron-right"></i></a></h4>--}}
				{{--</li>--}}
			{{--</ul>--}}
			<h3 class="title-nav">رنج قیمت</h3>
			<div class="nav-price">
				<form>
					<input type="text" id="amount" readonly="readonly" />
					<div id="slider-range"></div>
					<button class="btn btn-primary">فیلتر کردن</button>
				</form>
			</div>
		</div>
		<div class="section">
			<h2>Smart Phone</h2>
			<div class="orderby">مرتب سازی پیشفرض
				<select class="form-control">
					<option>مرتب سازی بر اساس محبوبیت</option>
					<option>مرتب سازی بر اساس میانگین رتبه بندی</option>
					<option>مرتب سازی بر اساس جدید بودن</option>
					<option>مرتب سازی بر اساس قیمت: کم تا زیاد</option>
					<option>مرتب سازی بر اساس قیمت: از بالا به پایین</option>
				</select>
			</div>
			@if($product == false)
				<div class="row">
					<div class="col-xs-12 col-md-6 pull-right">
						<div class="alert alert-info alert-with-icon" data-notify="container">
							<i data-notify="icon" class="fa fa-bell"></i>
							<span data-notify="message">هیچ محصولی یافت نشد. لطفا محصول جدیدی وارد کنید.</span>
						</div>
					</div>
				</div>
			@else
				<div class="row list-thumbnail">
					{{--<div class="col-xs-6 col-sm-4 col-md-3 pull-right">--}}
						{{--<div class="thumbnail">--}}
							{{--<a href="product-detail.php">--}}
								{{--<img src="assets/img/products/1.jpg" alt="" />--}}
								{{--<img class="hover" src="assets/img/products/1-1.jpg" alt="" />--}}
							{{--</a>--}}
							{{--<div class="caption">--}}
								{{--<h3>iPhone 6 (16GB Space Grey, Silver)</h3>--}}
								{{--<h5 class="price">$200.00</h5>--}}
								{{--<a href="" class="like active"><i class="fa fa-heart"></i> 12</a>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					@foreach($product as $one_product)
						@if($one_product->off == 0 or $one_product->off == null)
							<div class="col-xs-6 col-sm-4 col-md-3 pull-right">
								<div class="thumbnail">
									<a href="/products/{{$one_product->name}}">
										<img class="" src="@if($one_product->img == null){{asset('img/default-news.jpg')}}@else{{asset("media/product/" . $one_product->img)}}@endif" alt="">
									</a>
									<div class="caption">
										<h3>{{$one_product->name}}</h3>
										<h5 class="price">{{$one_product->price}}</h5>
										<a href="" class="like active"><i class="fa fa-heart"></i>{{$one_product->score}}</a>
									</div>
								</div>
							</div>
						@else
							<div class="col-xs-6 col-sm-4 col-md-3 pull-right">
								<div class="thumbnail">
									<a href="/products/{{$one_product->name}}">
										<span class="label-save">%<i>{{$one_product->off}}</i></span>
										<img class="" src="@if($one_product->img == null){{asset('img/default-news.jpg')}}@else{{asset("media/product/" . $one_product->img)}}@endif" alt="">
									</a>
									<div class="caption">
										<h3>{{$one_product->name}}</h3>
										<h5 class="price">قیمت جدید<span class="strike">{{$one_product->price}}</span></h5>
										<a href="" class="like active"><i class="fa fa-heart"></i>{{$one_product->score}}</a>
									</div>
								</div>
							</div>
						@endif
					@endforeach
				</div>
			@endif
			<ul class="pagination"></ul>
			{{--<ul class="pagination pagination-sm">--}}
				{{--<li><a href="#"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>--}}
				{{--<li class="active"><a href="#">1</a></li>--}}
				{{--<li><a href="#">2</a></li>--}}
				{{--<li><a href="#">3</a></li>--}}
				{{--<li><a href="#">4</a></li>--}}
				{{--<li><a href="#">5</a></li>--}}
				{{--<li><a href="#"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>--}}
			{{--</ul>--}}
		</div>
	</div>
@endsection
@section('javascript')
	<script src="{{asset('assets/plugin/jstree/jstree.min.js')}}"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            var all_page = Math.floor({{$all_page}});
            var page_now = Math.floor({{$page_now}});
            paginate(".pagination", all_page, page_now, 7, "/products");
            $(".search-input").keyup(function () {
                var searchString = $(this).val();
                console.log(searchString);
                $('#jstree_div').jstree('search', searchString);
            });
            $('#jstree_div').jstree({
                'core': {
                    'data': JSON.parse('{!! $list_jstree_category !!}'),
                    "themes": {
                        "icons": false
                    }
                },
                "search": {

                    "case_insensitive": true,
                    "show_only_matches": true
                },
                "plugins": ["search"]
            });
            $('#jstree_div').on('changed.jstree', function (e, data) {
				/*var i, j, r = [];
				 for(i = 0, j = data.selected.length; i < j; i++) {
				 r.push(data.instance.get_node(data.selected[i]).id);
				 }*/
                var label_ = $(".selected_category_label");
                label_.text(data.instance.get_node(data.selected).text);
                label_.attr('id', data.instance.get_node(data.selected).id);
            }).jstree();
            $('#photo').click(function () {
                $("input[name='image_input']").click()
            });
        })
	</script>
@endsection