@extends("admin.base.base")
@section('title')
    افزودن دسته
@endsection
@section('css')
    <script src="{{ asset('assets/plugin/ckeditor/ckeditor.js') }}"></script>
@endsection
@section('header')
افزودن دسته
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <a href="/admin/category/list/1">
                        <input type="button" class="btn btn-primary pull-right" value="بازگشت">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 pull-right">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">افزودن دسته</h4>
                    <p class="category">برای افزودن دسته، فرم زیر را پر نمایید.</p>
                </div>
                <div class="card-content">
                    <form name="category" class="" enctype='#'>
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="row">
                                <div class="colxs-12 col-md-3 pull-right">
                                    <label>عنوان :</label>
                                </div>
                                <div class="col-xs-12 col-md-9 pull-right">
                                    <input maxlength="25" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="colxs-12 col-md-3 pull-right">
                                    <label>زیر مجموعه :</label>
                                </div>
                                <div class="col-xs-12 col-md-9 pull-right">
                                    @if($list_category == false)
                                        <p class="colorRed alert-form">هیچ دسته ای وجود ندارد</p>
                                    @else
                                        <select name="select_parent" class="selectpicker" data-style="select-with-transition" title="انتخاب دسته بندی" required="required">
                                            <option value="parent" selected="selected">دسته بندی اصلی</option>
                                            @foreach($list_category['category'] as $one_category)
                                                <option value="{{$one_category->id}}">{{$one_category->name}}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                            </div>
                            <div class="row margin-top-15">
                                <input name="save_category" type="button" class="btn btn-primary pull-left submit_button" value="ثبت">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 pull-right">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">پیش نمایش</h4>
                    <p class="category">پیش نمایش دسته بندی فروشگاه.</p>
                </div>
                <div class="card-content">
                    <form name="category" class="" enctype='#'>
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <ul>
                                <li>
                                    <a class="" href="#"><i class=""></i>پروژه های برنامه نویسی</a>
                                    <ul role="group" class="">
                                        <li><i class=""></i>
                                            <a class="" href="#"><i class=""></i>پایتون(Python)</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="jstree-anchor" href="#"><i class=""></i>مقاله ، تحقیق ، کارآموزی</a>
                                </li>
                            </ul>
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
    <script src="{{asset('js/admin/jquery.select-bootstrap.js')}}"></script>
    <script type="text/javascript">
        $("input[name='save_category']").click(function (e) {
            e.preventDefault();
            var select_parent = $('select[name="select_parent"] :selected').val();
            var frm = new FormData();
            frm.append("name", $("input[name='name']").val());
            frm.append("parent_id", select_parent);
            frm.append("_token", '{{csrf_token()}}');


            $.ajax({
                url: "/admin/category/new/post",
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
    </script>
@endsection