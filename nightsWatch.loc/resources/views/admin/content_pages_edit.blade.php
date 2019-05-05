<div class="wrapper container-fluid">
	<h1 class="alert-info"><?= $data['title'] ?></h1>
	<form action="{{ route('menusEdit',array('page'=>$data['id'])) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $data['id'] }}">
		<div class="form-group" style="display: inline-block;width: 20%;">
			<label for="name" class="control-label">Name</label>
			<input type="text" name="name" value="{{ $data['name'] }}" id="name" class="form-control" placeholder="Name of Food">
		</div>
		
		<div class="form-group" style="display: inline-block;width: 20%;">
			<label for="price" class="control-label">Price</label>
			<input type="number" name="price" value="{{ $data['price'] }}" id="price" class="form-control" placeholder="Price of Food">
		</div>
		
		<div class="form-group">
			<label for="text" class="control-label">Text</label>
			<textarea name="text" id="editor" class="form-control" placeholder="Text of Food">{{ $data['text'] }}</textarea>
		</div>
		
		<div class="form-group">
			<img height="250" src="{{ asset("assets/img/menu/".$data['img']) }}" alt="">
		</div>

		<div class="form-group">
			<input type="file" name="images" class="btn btn-primary" placeholder="Image of Food">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Submit">
			<a href="{{ route('index') }}" class="btn btn-secondary" style="float: right;">Go to Home Page</a>
		</div>

	</form>

</div>