@extends("admin.base.base")
@section('title')
    افزودن محصول
@endsection
@section('css')
    <link href="{{asset('assets/plugin/jstree/themes/default/style.css')}}" rel="stylesheet">
@endsection
@section('header')
افزودن محصول
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <a href="/admin/product/list/1">
                        <input type="button" class="btn btn-primary pull-right" value="بازگشت">
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">افزودن محصول</h4>
                    <p class="product">برای افزودن محصول، فرم زیر را پر نمایید.</p>
                </div>
                <div class="card-content">
                    <form name="product" class="" enctype='#'>
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="row">
                                <div class="colxs-12 col-md-2 pull-right">
                                    <label>دسته بندی : </label>
                                </div>
                                <div class="col-xs-12 col-md-10 pull-right">
                                    @if($list_jstree_category == false)
                                        <p class="colorRed alert-form">هیچ دسته ای وجود ندارد</p>
                                    @else
                                        <input class="search-input form-control" placeholder="جستجو دسته"></input>
                                        <div id="jstree_div"></div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="colxs-12 col-md-2 pull-right">
                                    <label>دسته انتخاب شده :</label>
                                </div>
                                <div class="col-xs-12 col-md-10 pull-right">
                                    <label id="none" class="selected_category_label margin-bottom-15 margin-top-10 colorDarkBlue">انتخاب نشده</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="colxs-12 col-md-2 pull-right">
                                    <label>عنوان محصول :</label>
                                </div>
                                <div class="col-xs-12 col-md-10 pull-right">
                                    <input maxlength="25" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="colxs-12 col-md-2 pull-right">
                                    <label>کد محصول :</label>
                                </div>
                                <div class="col-xs-12 col-md-10 pull-right">
                                    <input maxlength="25" name="code" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="colxs-12 col-md-2 pull-right">
                                    <label>قیمت محصول :</label>
                                </div>
                                <div class="col-xs-12 col-md-10 pull-right">
                                    <input maxlength="25" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="colxs-12 col-md-2 pull-right">
                                    <label>درصد تخفیف :</label>
                                </div>
                                <div class="col-xs-12 col-md-10 pull-right">
                                    <input maxlength="25" name="off" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="colxs-12 col-md-2 pull-right">
                                    <label for="description">توضیحات :</label>
                                </div>
                                <div class="col-xs-12 col-md-10 pull-right">
                                    <textarea name="body" id="content" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="colxs-12 col-md-2 pull-right">
                                    <label>تصویر محصول :</label>
                                </div>
                                <div class="col-xs-12 col-md-6 pull-right">
                                    <input name="image_input" class="form-control display-none" type="file" accept="image/x-png, image/jpg, image/jpeg">
                                    <div id="photo" class="portfolio-item" style='background-image: url("{{asset('img/default-product.png')}}");'>
                                        <div class="details">
                                            <h4>تعویض تصویر</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-top-15">
                                <input name="save_product" type="button" class="btn btn-primary pull-left submit_button" value="ثبت">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="_alert_">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                                class="fa fa-times-circle"></i></button>
                    <h4 class="modal-title">پیغام</h4>
                </div>
                <div class="modal-body alert_modal_class">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <input name="" type="button" class="btn btn-danger" data-dismiss="modal" value="بستن">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('assets/plugin/jstree/jstree.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.select-bootstrap.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".search-input").keyup(function() {
                var searchString = $(this).val();
                console.log(searchString);
                $('#jstree_div').jstree('search', searchString);
            });
            $('#jstree_div').jstree({
                'core': {
                    'data' : JSON.parse('{!! $list_jstree_category !!}'),
                    "themes":{
                        "icons":false
                    }
                },
                "search": {
                    "case_insensitive": true,
                    "show_only_matches" : true
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
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#photo').css("background-image", "url(' " + e.target.result + " ')");
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("input[name='image_input']").change(function () {
                var size = this.files[0].size;
                if (size <= 2000000){
                    readURL(this);
                }else {
                    swal("خطا", "حجم تصویر بیشتر از حجم مجاز است." + "حد اکثر حجم مجاز : 2 مگابایت", "error");
                }
            });
            $("input[name='save_product']").click(function (e) {
                e.preventDefault();
                var file = $("input[name='image_input']")[0].files[0];
                var category = $('.selected_category_label').attr('id');
                var frm = new FormData();
                frm.append("file", file);
                frm.append("category", category);
                frm.append("name", $("input[name='name']").val());
                frm.append("code", $("input[name='code']").val());
                frm.append("price", $("input[name='price']").val());
                frm.append("off", $("input[name='off']").val());
                frm.append("content", $("textarea[name='body']").val());
                frm.append("_token", '{{csrf_token()}}');
                $.ajax({
                    url: "/admin/product/new/post",
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm,
                    success: function (response) {
                        if (response['status']) {
                            swal("ثبت شد!", response['msg'], "success");
                        } else {
                            swal("خطا", response['msg'], "error");
                        }
                    },
                    error: function () {
                        alert("Error.........")
                    },
                    complete: function () {
                    }
                });

            })
        });
    </script>
@endsection