@extends('master.admin')
@section('title','Quản lý sản phẩm')
@section('main')

		<h2>Danh sách sản phẩm</h2> 
		<form action="{{route('admin.product.search')}}" method="get">
		<input type="search" name="key" class="form-control" value="" placeholder="Tìm kiếm sản phẩm..."><button class="btn btn-primary" type="submit">Tìm kiếm</button>
		</form>
		<br><br>
		<a href="{{route('admin.product.add')}}" class="btn btn-info btn-sm" title="Thêm mới">Thêm mới</a>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>@sortablelink('id','ID')</th>
					<th>Ảnh</th>
					<th>@sortablelink('name','Tên sản phẩm')</th>
					<th>Slug</th>
					<th>@sortablelink('price','Giá')</th>
					<th>@sortablelink('status','Trạng thái')</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($lists as $model)
				<tr>
					<td>{{$model->id}}</td>
					<td>
						<img src="{{url('public/assets/img/product')}}/{{$model->image}}" alt="" width="60">
					</td>
					<td>{{$model->name}}</td>
					<td>{{$model->slug}}</td>
					<td>{{$model->price}}</td>
					<td>
					@if($model->status == 1)
					Hiện
					@elseif($model->status == 0)
					Ẩn
					@elseif($model->status == 2)
					Mới
					@elseif($model->status == 3)
					Giảm giá
					@elseif($model->status == 4)
					Hàng giới hạn
					@endif
					</td>
					<td>
						<a href="{{ route('admin.product.detail',['id'=> $model->id]) }}" class="btn btn-sm btn-success" title="Detail">Detail</a>
						<a href="{{ route('admin.product.edit',['id'=> $model->id]) }}" class="btn btn-sm btn-primary" title="Content"> Edit Content</a>
						<a href="{{ route('admin.product.editimg',['id'=> $model->id]) }}" class="btn btn-sm btn-primary" title="Image"> Edit Image</a>
						<a href="{{ route('admin.product.delete',['id'=> $model->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')" title="Delete">Delete</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		
		{{$lists->links()}}
	
@stop()