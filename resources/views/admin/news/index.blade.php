@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Danh Sách Tin Tức <a href="{{ route('admin.news.create') }}" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Thêm Tin Tức</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-tools">
                            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                       placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>Tên</th>
                                <th>Hình ảnh</th>
                                <th>Nội Dung</th>
                                <th>Vị trí</th>
                                <th>Danh Mục</th>
                                <th>Trạng thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </tbody>
                            <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                            @foreach($data as $key => $item)
                                <tr class="item-{{ $item->id }}"> <!-- Thêm Class Cho Dòng -->
                                    <td>{{ $item->name }}</td>
                                    <td>
                                    @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
                                        <img src="{{asset($item->image)}}" width="50" height="50">
                                        @endif
                                    </td>
                                    <td>{{ substr($item->content, 0, 500)  }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>{{ $item->category_id }}</td>
                                    <td>{{ ($item->is_active == 1) ? 'Hiển thị' : 'Ẩn' }}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.news.show', ['news'=> $item->id ])}}" class="btn btn-default">Xem</a>
                                        <!-- <button class="btn-detail btn" data-toggle="modal" data-target="#myModal" data-id="{{$item->id}}"> Xem</button> -->
                                        <a href="{{route('admin.news.edit', ['news'=> $item->id])}}" class="btn btn-info">Sửa</a>
                                        <!-- Thêm sự kiện onlick cho nút xóa -->
                                        <a href="javascript:void(0)" class="btn btn-danger" onclick="destroyNews({{ $item->id }})" >Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
<!-- 
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
                <p>Some text in the modal.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
    </div> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('.btn-detail').click(function(){
            var id = $(this).attr('data-id');
           
            $.ajax({
                url: base_url + '/admin/news/quickGet/'+id, 
                type: "GET", 
                dataType: "json",
                data:{
                    
                }, 
                beforeSend: function(){

                }, 
                success: function(res){
                    console.log(res);    
                },
                error:function(error){
                    console.log(error.responseText);
                }, 
                complete: function(){

                }
            })

        });
        
        // Xử lý lỗi
        // nodejs + mysql2/mongodb

        // Đồng bộ: 
        /*
            A
            B
            C
            D
            E
        */

        // Bất đồng bộ: setTimeout, setInterval, ajax, WebAPI
        /*
            lấy dữ liệu từ cơ sở dữ liệu -> in ra ngoài màn hình

            A: thiết lập kết nối
            B: lấy dữ liệu 
            C: hiển thị

            3 cách xử lý bất đồng bộ:
            callback
            promise
            async/await

        */

        // Xử lý bất đồng bộ: từ bất đồng bộ -> đồng bộ
        // SPA (Single Page Application): 
        // MPA ()

    </script>
        <!-- /.row -->
    </section>
@endsection
