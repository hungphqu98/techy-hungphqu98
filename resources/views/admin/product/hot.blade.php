@extends('master.admin')
@section('title','Quản lý sản phẩm')
@section('main')

		<h2>Top 5 sản phẩm bán chạy</h2> 
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Ảnh</th>
					<th>Tên sản phẩm</th>
					<th>Số hàng đã bán</th>
					<th>Trạng thái</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($pros as $model)
				<tr>
					<td>{{$model->product_id}}</td>
					<td>
						<img src="{{url('public/assets/img/product')}}/{{$model->image}}" alt="" width="60">
					</td>
					<td>{{$model->name}}</td>
					<td>{{$model->count}}</td>
					<td>@if($model->status == 1)
						Hiện
						@elseif($model->status == 2)
						Ẩn
						@elseif($model->status == 3)
						Giảm giá
						@elseif($model->status == 4)
						Hàng giới hạn
						@endif</td>
					<td>
						<a href="{{ route('admin.product.detail',['id'=> $model->id]) }}" class="btn btn-sm btn-success" title="Detail">Detail</a>
						<a href="{{ route('admin.product.edit',['id'=> $model->id]) }}" class="btn btn-sm btn-primary" title="Edit">Edit</a>
					</td>	
				</tr>
			@endforeach
			</tbody>
		</table>
		
	
	
@stop()