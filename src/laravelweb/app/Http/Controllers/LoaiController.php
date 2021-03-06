<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Loai;
use Session;


use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;

class LoaiController extends Controller
{
    //
    // action
    public function show() {

       
    }
    public function index() {

        //$ds_loai = Loai::all();
        $ds_loai = Loai::paginate(3); 
        
        return view('backend.loai.index')
        ->with('danhsachloai', $ds_loai);

    }
   
    public function create()
    {
        $ds_loai = Loai::all(); // SELECT * FROM loai
        return view('backend.loai.create')
            // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachloai`
            ->with('danhsachloai', $ds_loai);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loai = Loai::where("l_ma",  $id)->first();;

        return view('backend.loai.edit')
            ->with('l', $loai);

            
    }

    public function update(Request $request, $id)
    {
        
        $l = Loai::where("l_ma",  $id)->first();;
        $l->l_ten = $request->l_ten;
        $l->l_ngaytaoMoi = $request->l_ngaytaoMoi;
        $l->l_ngaycapNhat = $request->l_ngaycapNhat;
        $l->l_trangThai = $request->l_trangThai;
        $l->l_ma = $request->l_ma;
        
        $l->save();

        Session::flash('alert-info', 'Cập nhật thành công ^^~!!!');
        return redirect()->route('danhsachloai.index');
    }
    public function store(Request $request)
    {
        
        $l = new Loai();
        $l->l_ten = $request->l_ten;
        $l->l_ngaytaoMoi = $request->l_ngaytaoMoi;
        $l->l_ngaycapNhat = $request->l_ngaycapNhat;
        $l->l_trangThai = $request->l_trangThai;
        $l->l_ma = $request->l_ma;
        
        $l->save();

        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        
        return redirect()->route('danhsachloai.index');
    }

    public function destroy($id)
    {
    $l = Loai::where("l_ma",  $id)->first();
    
    $l->delete();

    Session::flash('alert-info', 'Xóa loại sản phẩm thành công ^^~!!!');
    return redirect()->route('danhsachloai.index');
    }

   
}
