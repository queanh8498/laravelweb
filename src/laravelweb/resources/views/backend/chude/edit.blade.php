@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh loại sản phẩm
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
<link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection

@section('main-content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('danhsachchude.update', ['id' => $cd->cd_ma]) }}">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="cd_ma">Loại sản phẩm</label>
        <input type="text" class="form-control" id="cd_ma" name="cd_ma" value="{{ $cd->cd_ma }}" readonly>

    </div>
    <div class="form-group">
        <label for="cd_ten">Tên loại sản phẩm</label>
        <input type="text" class="form-control" id="cd_ten" name="cd_ten" value="{{ old('cd_ten', $cd->cd_ten) }}">
    </div>
    
    <div class="form-group">
        <label for="cd_taoMoi">Ngày tạo mới</label>
        <input type="text" class="form-control" id="cd_taoMoi" name="cd_taoMoi" value="{{ old('cd_taoMoi', $cd->cd_taoMoi) }}" data-mask-datetime>
    </div>
    <div class="form-group">
        <label for="cd_capNhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="cd_capNhat" name="cd_capNhat" value="{{ old('cd_capNhat', $cd->cd_capNhat) }}" data-mask-datetime>
    </div>
    <select name="cd_trangThai">
        <option value="1" {{ old('cd_trangThai', $cd->cd_trangThai) == 1 ? "selected" : "" }}>Khoa</option>
        <option value="2" {{ old('cd_trangThai', $cd->cd_trangThai) == 2 ? "selected" : "" }}>Kha dung</option>
    </select>

    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<!-- Các script dành cho thư viện bootstrap-fileinput -->
<script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/locales/fr.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>


<!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
$(document).ready(function(){
    
});
</script>

@endsection