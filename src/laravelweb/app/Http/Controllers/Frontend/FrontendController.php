<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Loai;

use App\Sanpham;
use DB;
use Mail;
use App\Mail\ContactMailer;

class FrontendController extends Controller
{
    /**
     * Action hiển thị view Trang chủ
     * GET /
     */
    public function index(Request $request)
    {
        // Query top 3 loại sản phẩm (có sản phẩm) mới nhất
        $ds_top3_newest_loaisanpham = DB::table('loai')
            ->join('sanpham', 'loai.l_ma', '=', 'sanpham.l_ma')
            ->orderBy('l_ngaycapNhat')->take(3)->get();

        // Query tìm danh sách sản phẩm
        //$danhsachsanpham = $this->searchSanPham($request);
        
        // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
        // $danhsachhinhanhlienquan = DB::table('hinhanh')
        //     ->whereIn('sp_ma', $danhsachsanpham->pluck('sp_ma')->toArray())
        //     ->get();

        // Query danh sách Loại
        $danhsachloai = Loai::all();
        
        // Query danh sách màu
        
        // Hiển thị view `frontend.index` với dữ liệu truyền vào
        // return view('frontend.index')
        //     ->with('ds_top3_newest_loaisanpham', $ds_top3_newest_loaisanpham)
        //     ->with('danhsachsanpham', $danhsachsanpham)
        //     ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
        //     ->with('danhsachloai', $danhsachloai);
    }


}