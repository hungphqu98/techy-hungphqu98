@extends('master.admin')
@section('title','Đơn hàng thành công')
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
			<th>Phương pháp</th>
            <th>@sortablelink('total','Tổng cộng')</th>
            <th>@sortablelink('updated_at','Thời điểm tạo')</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($ordone as $model)
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
            <td>{{$model->updated_at}}</td>
			<td class="text-right">
				<a href="{{ route('admin.orders.view',['id'=> $model->id]) }}" class="btn btn-sm btn-danger"">
					<i class="fa fa-eye"></i>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<h3>Doanh thu trong tháng : {{number_format($month_count)}} đ</h3>
<h3>Tổng doanh thu : {{number_format($total_count)}} đ</h3>

{{$ordone->links()}}
@stop()