@extends('default.admin')

@section('content')

	<h1 class="alert-info">Admin Menu of Restaurant</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
    	@foreach ($columns as $column)
      		<th scope="col">{{ $column }}</th>
    	@endforeach
      		<th scope="col">Edit</th>
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
				<form action="{{ route('menusEdit',['food'=>$food->id]) }}" class="form-horizontal" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="action" value="delete">
					<input type="submit" value="Delete" class="btn btn-danger">
				</form>
			</td>
		</tr>
	
	@endforeach
  </tbody>
</table>

<a style="margin-left: 50px;" class="btn btn-info" href="{{ route('menusAdd') }}">Add new Food</a>

@endsection