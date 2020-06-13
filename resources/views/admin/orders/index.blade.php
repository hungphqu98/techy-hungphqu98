@extends('master.admin')
@section('title','Quản lý đơn hàng')
@section('main')
<form action="{{route('admin.orders.search')}}" method="get">
	<input type="search" name="key" class="form-control" value="" placeholder="Tìm kiếm email..."><button class="btn btn-primary" type="submit">Tìm kiếm</button>
	</form>
<table class="table table-hover">
	<thead>
		<tr>
			<th>@sortablelink('id','ID')</th>
			<th>@sortablelink('email','Email')</th>
			<th>Địa chỉ</th>
			<th>Method</th>
			<th>@sortablelink('total','Tổng cộng')</th>
            <th>@sortablelink('status','Trạng thái')</th>
            <th>@sortablelink('created_at','Thời điểm tạo')</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($lists as $model)
		<tr>
			<td>{{$model->id}}</td>
			<td>{{$model->email}}</td>
			<td>{{$model->address}}</td>
						@if($model->payment_method == 1)
							<td>COD</td>
							@elseif($model->payment_method == 2)
							<td>Momo</td>
						@endif
			<td>{{number_format($model->total)}} đ</td>	
						@if($model->status == 1)
					<td>Mới đặt</td>
					@elseif($model->status == 2)
					<td>Đã giao</td>
					@elseif($model->status == 4)
					<td>Đã thanh toán</td>
					@endif
            <td>{{$model->created_at}}</td>
			<td class="text-right">
				<a href="{{ route('admin.orders.edit',['id'=> $model->id]) }}" class="btn btn-sm btn-primary">
					<i class="fa fa-edit"></i>
				</a>
				<a href="{{ route('admin.orders.view',['id'=> $model->id]) }}" class="btn btn-sm btn-default"">
					<i class="fa fa-eye"></i>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
{{$lists->links()}}
@stop()