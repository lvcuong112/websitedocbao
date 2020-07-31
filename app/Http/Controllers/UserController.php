<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Admin::all(); // lấy toàn bộ dữ liệu
        // gọi đến view
        return view('admin.user.index', [
            'data' => $data // truyền dữ liệu sang view Index
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = Admin::all();
        return view('admin.user.create', [
            'data' => $admin
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

        //validate
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $status = $request->input('');
        if ($request->has('status')) { // kiem tra status co ton tai khong?
            $status = $request->input('status');
        }

        //luu vào csdl
        $admin = new Admin();
        $admin->username = $request->input('username'); // họ tên
        $admin->password = md5($request->input('password')); // mật khẩu
        $admin->email = $request->input('email'); // email
        $admin->mobile = $request->input('mobile');
        $admin->status = $status;
        $admin->save();

        // chuyen dieu huong trang
        return redirect('admin/user/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Sử dụng hàm findorFail tìm kiếm theo Id, nếu tìm thấy sẽ trả về object , nếu không trả về lỗi
        $admin = Admin::findorFail($id);

        return view('admin.user.edit', [
            'admin' => $admin
        ]);
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
        //validate
        // die('1234');
        // dd($request);
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email',
            'new_password' => 'required|min:6',
        ]);

        $admin = Admin::findorFail($id);
        // $status = $request->input('');
        if ($request->has('status')) { // kiem tra status co ton tai khong?
            $status = $request->input('status');
        }
        //luu vào csdl
        $admin->username = $request->input('username');
        if ($request->input('new_password')) {
            $admin->password = md5($request->input('new_password')); // mật khẩu mới
        }
        $admin->email = $request->input('email'); // email
        $admin->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.user.index');
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
        Admin::destroy($id);

        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json([
            'status' => true
        ], 200);
    }
}
