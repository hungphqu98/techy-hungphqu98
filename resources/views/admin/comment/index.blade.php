@extends('master.admin')
@section('title','Quản lý bình luận sản phẩm')
@section('main')
<form action="{{route('admin.comment.search')}}" method="get">
	<input type="search" name="key" class="form-control" value="" placeholder="Tìm kiếm email hoặc id sản phẩm..."><button class="btn btn-primary" type="submit">Tìm kiếm</button>
	</form>

<table class="table table-hover">
	<thead>
		<tr>
			<th>@sortablelink('id','ID')</th>
			<th>@sortablelink('user_email','Email')</th>
			<th>@sortablelink('product_id','Mã sản phẩm')</th>
			<th>@sortablelink('rating','Điểm')</th>
            <th>Bình luận</th>
            <th>@sortablelink('status','Trạng thái')</th>
            <th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($lists as $model)
		<tr>
			<td>{{$model->id}}</td>
            <td>{{$model->user_email}}</td>
            <td>{{$model->product_id}}</td>
			<td>{{$model->rating}}</td>
			<td>{{$model->content}}</td>
			<td>
			@if ($model->status == 0)
			Ẩn @elseif ($model->status == 1)
			Hiện @endif
			
			</td>
			<td class="text-right">
				<a href="{{ route('admin.comment.edit',['id'=> $model->id]) }}" class="btn btn-sm btn-primary">
					<i class="fa fa-edit"></i>
				</a>
				<a href="{{ route('admin.comment.delete',['id'=> $model->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
{{$lists->links()}}
@stop()