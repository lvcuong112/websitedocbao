@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Sửa thông tin người dùng <a href="{{route('admin.user.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Danh Sách admin</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin người dùng</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.user.update' , ['user' =>$admin->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label>Chọn Quyền</label>
                               <input type="text" class="form-control" id="" name="" placeholder="Admin" readonly="Admin">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ Tên</label>
                                <input value="{{ $admin->username }}" type="text" class="form-control" id="username" name="username" placeholder="Nhập họ & tên">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input value="{{ $admin->email }}" type="text" class="form-control" id="email" name="email" placeholder="Nhập Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="color: #9c3328"> Mật khẩu mới </label>
                                <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Nhập mật khẩu mới">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="status" {{ ($admin->status == 1) ? 'checked' : '' }}> Kích hoạt tài khoản
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
