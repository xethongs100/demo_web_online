@extends('layout')
@section('title')
	Trang chủ
@endsection

@section('slide')
	@include('template.slide')
@endsection

@section('content')
	@if(Session::has('thongbao'))
		<script type="text/javascript">
			alert("{{Session::get('thongbao')}}")
		</script>
	@endif
	@include('template.content')
@endsection

@section('js')

@endsection