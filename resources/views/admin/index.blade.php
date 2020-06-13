@extends('master.admin')

@section('title','Trang chính')
@section('main')

<div class="jumbotron">
	<div class="container">
		<h1>Hello, {{Auth::user()->email}}</h1>
		<p><strong>Have a great day!!!</strong></p>
		
	</div>
</div>
<div class="row">
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-aqua">
		<div class="inner">
		<h3>{{$ord_count->count()}}</h3>

		  <p>Đơn hàng mới</p>
		</div>
		<div class="icon">
		  <i class="ion ion-bag"></i>
		</div>
	<a href="{{route('admin.orders')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-green">
		<div class="inner">
		  <h3>{{$com_count->count()}}</h3>

		  <p>Bình luận mới</p>
		</div>
		<div class="icon">
		  <i class="ion ion-stats-bars"></i>
		</div>
		<a href="{{route('admin.comment')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-yellow">
		<div class="inner">
		  <h3>{{$cus_count->count()}}</h3>

		  <p>Người dùng mới</p>
		</div>
		<div class="icon">
		  <i class="ion ion-person-add"></i>
		</div>
	<a href="{{route('admin.users')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-red">
		<div class="inner">
		  <h3>{{number_format($total_count)}} đ</h3>

		  <p>Doanh thu trong tháng</p>
		</div>
		<div class="icon">
		  <i class="ion ion-pie-graph"></i>
		</div>
	<a href="{{route('admin.product')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div>
	<!-- ./col -->
  </div>

@stop()