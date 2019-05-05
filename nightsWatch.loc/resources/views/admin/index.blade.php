@extends('default.admin')

@section('content')

	<h1 class="alert-info">Admin Menu of Restaurant</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
    	@foreach ($columns as $column)
      		<th scope="col">{{ $column }}</th>
    	@endforeach
      		<th scope="col" colspan="2">Edit</th>
    </tr>
  </thead>
  

  <tbody>
 
	@foreach ($foods as $food)
	  	
		<tr>
			<th scope="row">{{$food->id}}</th>
			<td>{{$food->name}}</td>
			<td>{{$food->price}}</td>
			<td>{{$food->img}}</td>
			<td style="max-width: 200px;">{{$food->text}}</td>
			<td>{{$food->created_at}}</td>
			<td>{{$food->updated_at}}</td>
			<td>{{$food->user_id}}</td>
			<td>
				<a class="btn btn-info" href="{{ route('menusEdit',['menu'=>$food->id]) }}">Edit</a>
			</td>
			<td>
				<form action="{{ route('menusEdit',['menu'=>$food->id]) }}" class="form-horizontal" method="post">
					{{ csrf_field() }}
					{{-- <input type="hidden" name="_method" value="DELETE"> --}}
					{{ method_field('DELETE') }}
					<input type="submit" value="Delete" class="btn btn-danger">
				</form>
			</td>
		</tr>
	
	@endforeach
  </tbody>
</table>

<a style="margin-left: 50px; margin-bottom: 100px;" class="btn btn-info" href="{{ route('menusAdd') }}">Add new Food</a>
<a href="{{ route('index') }}" class="btn btn-warning" style="float: right; margin-right: 50px;"> Home Page </a>
<a href="{{ route('menu') }}" class="btn btn-success" style="float: right; margin-right: 50px;"> Menus Page </a>

@endsection