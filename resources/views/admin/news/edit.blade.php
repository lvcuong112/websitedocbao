@extends('admin.layouts.main')
@section('content')
    <style>.w-50 { width: 50% }</style>
    <section class="content-header">
        <h1>
            Chỉnh sửa thông tin Tin Tức <a href="{{route('admin.news.index')}}" class="btn btn-success pull-right"><i
                    class="fa fa-list"></i> Danh Sách Tin Tức</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin tin tức</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.news.update', ['news' => $news->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên </label>
                                <input value="{{ $news->name }}" type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile"> Thay đổi ảnh </label>
                                <input type="file" id="new_image" name="new_image"><br>
                                @if ($news->image)
                                    <img src="{{asset($news->image)}}" width="200">
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input {{ ($news->is_hot) ? 'checked':'' }} type="checkbox" value="1" name="is_hot"> <b>Sản phẩm Hot</b>
                                    </label>
                                 </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input {{ ($news->is_active) ? 'checked':'' }} type="checkbox" value="1" name="is_active"> <b>Trạng thái</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Danh mục tin tức</label>
                                <select class="form-control w-50" name="category_id">
                                    <option value="0">-- chọn Danh Mục --</option>
                                    @foreach($categories as $category)
                                        <option {{ ($news->category_id == $category->id ? 'selected':'') }} value="{{ $category -> id }}">{{ $category -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Liên kết (url) tùy chỉnh</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea id="editor2" name="content" class="form-control" rows="10" >{{ $news->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $news->meta_title }}" >
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control" rows="3" >{{ $news->meta_description }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <input type="reset" class="btn btn-default pull-right" value="Reset">
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            </form>
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('my_javascript')
    <script type="text/javascript">
        $(function () {

            // setup textarea sử dụng plugin CKeditor
            var _ckeditor = CKEDITOR.replace('editor1');
            _ckeditor.config.height = 500; // thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 200; // thiết lập chiều cao
        })
    </script>
@endsection
