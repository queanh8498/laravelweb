{{-- View này sẽ kế thừa giao diện từ `backend.layouts.index` --}}
@extends('backend.layouts.master')
{{-- Thay thế nội dung vào Placeholder `title` của view `backend.layouts.index` --}}
@section('title')
Danh sách sản phẩm
@endsection
{{-- Thay thế nội dung vào Placeholder `content` của view `backend.layouts.index` --}}
@section('main-content')
<!-- Đây là div hiển thị Kết quả (thành công, thất bại) sau khi thực hiện các chức năng Thêm, Sửa, Xóa.
- Div này chỉ hiển thị khi trong Session có các key `alert-*` từ Controller trả về. 
- Sử dụng các class của Bootstrap "danger", "warning", "success", "info" để hiển thị màu cho đúng với trạng thái kết quả.
-->

<a href="{{ route('danhsachsanpham.print') }}" class="btn btn-success" style="font-family: Tohamo; font-size: 18px;">In ấn</a>
<a href="{{ route('danhsachsanpham.excel') }}" class="btn btn-success" style="font-family: Tohamo; font-size: 18px;">Xuất Excel</a>

<br><br>
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
</div>
<!-- Tạo nút Thêm mới sản phẩm 
- Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
- Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `danhsachsanpham.create`
- Sẽ có dạng http://tenmiencuaban.com/admin/danhsachsanpham/create
 -->
@if(Auth::check())
    @if(auth()->user()->can('sp_them')) 
    <a href="{{ route('danhsachsanpham.create') }}" class="btn btn-primary" style="font-family: Tohamo; font-size: 18px;">Thêm mới sản phẩm</a><br><br>
    @endif
@endif

<!-- Tạo table hiển thị danh sách các sản phẩm -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Thuộc loại</th>
            <th>Sửa-Xóa</th>
        </tr>
    </thead>
    <tbody>
        <!-- Sử dụng vòng lặp foreach để duyệt qua các sản phẩm 
        - Biến $danhsachsanpham là biến được truyền qua từ action `index()` trong controller SanPhamController.
        -->
        @foreach($danhsachsanpham as $sp)
            <tr>
                <td>{{ $sp->sp_ma }}</td>
                <td>{{ $sp->sp_ten }}</td>
                <td style="text-align: center;"><img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" class="img-list" style="width: 200px; height: 150px;" /></td>
                <td>{{ $sp->loaisanpham->l_ten }}</td>
                <td>
                    <!-- Tạo nút Sửa sản phẩm 
                    - Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
                    - Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `danhsachsanpham.edit`
                    - Route `danhsachsanpham.edit` cần truyền vào 1 tham số {id}. Giá trị cần truyền là {id} của sản phẩm người dùng cần hiệu chỉnh.
                    - Các tham số cần truyền vào hàm route() là 1 array[]
                    - Sẽ có dạng http://tenmiencuaban.com/admin/danhsachsanpham/{id}/edit
                    -->
                    
                @if(Auth::check())
                    @if(auth()->user()->can('sp_sua')) 
                    <a href="{{ route('danhsachsanpham.edit', ['id' => $sp->sp_ma]) }}" class="btn btn-primary pull-left">Sửa</a>
                    @endif
                @endif
                    <!-- Tạo nút Xóa sản phẩm 
                    - Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
                    - Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `danhsachsanpham.destroy`
                    - Route `danhsachsanpham.destroy` cần truyền vào 1 tham số {id}. Giá trị cần truyền là {id} của sản phẩm người dùng cần xóa.
                    - Các tham số cần truyền vào hàm route() là 1 array[]
                    - Sẽ có dạng http://tenmiencuaban.com/admin/danhsachsanpham/{id}
                    -->
                    
                @if(Auth::check())
                    @if(auth()->user()->can('sp_xoa')) 
                    <form method="post" action="{{ route('danhsachsanpham.destroy', ['id' => $sp->sp_ma]) }}" class="pull-left">
                        <!-- Khi gởi Request Xóa dữ liệu, Laravel Framework mặc định chỉ chấp nhận thực thi nếu có gởi kèm field `_method=DELETE` -->
                        <input type="hidden" name="_method" value="DELETE" />
                        <!-- Khi gởi bất kỳ Request POST, Laravel Framework mặc định cần có token để chống lỗi bảo mật CSRF 
                        - Bạn có thể tắt đi, nhưng lời khuyên là không nên tắt chế độ bảo mật CSRF đi.
                        - Thay vào đó, sử dụng hàm `csrf_field()` để tự sinh ra 1 input có token dành riêng cho CSRF
                        -->
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                    @endif
                @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

