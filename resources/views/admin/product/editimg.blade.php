@extends('master.admin')
@section('title','Chỉnh sửa sản phẩm')
@section('main')
<div class="box-body">
        @if(Session::has('success'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('success')}}
          </div>
        @endif
        @if(Session::has('error'))
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('error')}}
          </div>
          @endif
        </div>
        @foreach($getProductById as $ed)
<form action="{{ route('admin.product.updateimg', $ed->id) }}" method="POST" role="form" enctype='multipart/form-data' >
    
    @csrf
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name" class="form-control" value="{{$ed->name}}" id="name" readonly placeholder="Input field">   
    </div>
	<div class="form-group">
				<label for="">Ảnh chính</label>
				<input type="file" class="form-control" name="image" placeholder="Input field">
	</div>
		@if($errors->has('image'))
    <div class="alert alert-danger">{{ $errors->first('image') }}</div>
		@endif
	<div class="form-group">
				<label for="">Ảnh phụ</label>
				<input type="file" class="form-control" name="image_2" placeholder="Input field">
				<input type="file" class="form-control" name="image_3" placeholder="Input field">
				<input type="file" class="form-control" name="image_4" placeholder="Input field">
	</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach	
</div>
@stop()