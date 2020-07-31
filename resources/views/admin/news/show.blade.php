@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
        <h1>
            Thông Tin Chi Tiết <a href="{{ route('admin.news.index') }}" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Danh Sách Tin Tức</a>
        </h1>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Tin Tức</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><b>Tên :</b></td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td><b>Đường dẫn Hình ảnh:</b></td>
                                <td>{{ $data->image }}</td>
                            </tr>
                            <tr>
                                <td><b>Tin hot:</b></td>
                                <td>@if( $data->is_hot ==0)Không hot @else Tin hot @endif</td>
                            </tr>
                            <tr>
                                <td><b>Trạng thái</b></td>
                                <td>@if($data->is_active ==0)Ẩn @else Hiển thị @endif</td>
                            </tr>
                            <tr>
                                <td><b>Lượng views:</b></td>
                                <td>{{ $data->views }}</td>
                            </tr>
                            <tr>
                                <td><b>Danh mục tin tức:</b></td>
                                <td>{{ $category_name->name }}</td>
                            </tr>
                            <tr>
                                <td><b>Url:</b></td>
                                <td>{{ $data->url }}</td>
                            </tr>
                            <tr>
                                <td><b>Nội Dung:</b></td>
                                <td>{{ $data->content }}</td>
                            </tr>
                            <tr>
                                <td><b>Tiêu Đề:</b></td>
                                <td>{{ $data->meta_title }}</td>
                            </tr>
                            <tr>
                                <td><b>Mô tả tiêu đề:</b></td>
                                <td>{{ $data->meta_description }}</td>
                            </tr>

                         
                           




                            </tbody></table>
                    </div>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
