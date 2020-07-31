<?php

namespace App\Http\Controllers;

use App\News;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::all();//latest()->paginate(10);

        return view('admin.news.index', [
               'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
 
        return view('admin.news.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
         ]);

        $news = new news(); // khởi tạo model
        $news->name = $request->input('name');
        $news->slug = Str::slug($request->input('name'));

        // Upload file
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/news/';
            // Thực hiện upload file
            $request->file('image')->move($path_upload,$filename); // upload lên thư mục public/uploads/news

            $news->image = $path_upload.$filename;
        }
        // Tin Tức Hot
        if ($request->has('is_hot')){
            $news->is_hot = $request->input('is_hot');
        }
        // Trạng thái
        if ($request->has('is_active')){//kiem tra is_active co ton tai khong?
            $news->is_active = $request->input('is_active');
        }
        $news->category_id = $request->input('category_id');
        $news->url = $request->input('url');
        $news->content = $request->input('content');
        $news->meta_title = $request->input('meta_title');
        $news->meta_description = $request->input('meta_description');
        $news->save();

        // chuyển hướng đến trang
        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get data from db
        $data = news::findorFail($id);
        $category_name = Category::where('id', $data->category_id)->first();

        return view('admin.news.show', [
            'data' => $data,
            'category_name' => $category_name
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = news::findorFail($id);
        $categories = Category::all();
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $categories,
        ]);

    }

    public function getById($id){ 
       
        $news = news::findorFail($id);
        // json_encode: object -> json
        // json_decode: string (json) -> object
        return $news;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ]);

        $news = news::findorFail($id);; // khởi tạo model
        $news->name = $request->input('name');
        $news->slug = Str::slug($request->input('name'));

        // Thay đổi ảnh
        if ($request->hasFile('new_image')) {
            // xóa file cũ
            @unlink(public_path($news->image));
            // get file mới
            $file = $request->file('new_image');
            // get tên
            $filename = time().'_'.$file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/news/';
            // upload file
            $request->file('new_image')->move($path_upload,$filename);

            $news->image = $path_upload.$filename;
        }
        // Tin Tức Hot
        if ($request->has('is_hot')){
            $news->is_hot = $request->input('is_active');
        }
        // Trạng thái
        if ($request->has('is_active')){//kiem tra is_active co ton tai khong?
            $news->is_active = $request->input('is_active');
        }
        $news->category_id = $request->input('category_id');
        $news->url = $request->input('url');
        $news->content = $request->input('content');
        $news->meta_title = $request->input('meta_title');
        $news->meta_description = $request->input('meta_description');
        $news->save();

        // chuyển hướng đến trang
        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // gọi tới hàm destroy của laravel để xóa 1 object
        news::destroy($id);

        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json([
            'status' => true
        ], 200);
    }
}
