<?php


namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Loai; 
use App\Mau; 

use DB;
use App\SanPham;
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
        $danhsachsanpham = $this->searchSanPham($request);
        // Hiển thị view `frontend.index` với dữ liệu truyền vào
        return view('frontend.index')
            ->with('ds_top3_newest_loaisanpham', $ds_top3_newest_loaisanpham)
            ->with('danhsachsanpham', $danhsachsanpham);
    }
    /**
     * Hàm query danh sách sản phẩm theo nhiều điều kiện
     */
    private function searchSanPham(Request $request)
    {
        $query = DB::table('sanpham')->select('*');
        // Kiểm tra điều kiện `searchByLoaiMa`
        $searchByLoaiMa = $request->query('searchByLoaiMa');
        if ($searchByLoaiMa != null) {
        }
        $data = $query->get();
        return $data;
    }

    /**
     * Action hiển thị view Giới thiệu
     * GET /about
     */
    public function about()
    {
        return view('frontend.pages.about');
    }

    /** * Action hiển thị view Liên hệ * GET /contact */ 
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    /** 
     * Action gởi email với các lời nhắn nhận được từ khách hàng 
     * POST /lien-he/goi-loi-nhan 
     */ 
    public function sendMailContactForm(Request $request)
    {
        $input = $request->all();
        Mail::to('queanhst98@gmail.com')->send(new ContactMailer($input));
        return $input;
    }

}
