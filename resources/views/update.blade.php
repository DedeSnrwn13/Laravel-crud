<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">

              <form method="post" action="/" class="mx-auto pt-5 mt-5 mb-5 pb-5">
              	@method("patch")
              	{{ csrf_field() }}
              	<h2 class="p-2 bg-success text-center text-light">Update Data</h2>
              	<input type="hidden" value="{{ $user->id }}" name="id">
				  <div class="form-row">
				  	<div class="form-group col-md-12">
				    <label for="inputName">Name</label>
				    <input type="text" class="form-control" id="inputName" placeholder="Your Name" name="name" value="{{ $user->name }}">
				  </div>
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="{{ $user->email}}">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4">Password</label>
				      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" value="{{ $user->password }}">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Address</label>
				    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"  value="{{ $user->address }}">
				  
				  </div>
				  <div class="form-group col-md-12 px-0">
				    <label for="inputAge">Age</label>
				    <input type="text" class="form-control" id="inputAge" placeholder="Age" name="age" value="{{ $user->age }}">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">Born</label>
				      <input type="text" class="form-control" id="inputBorn" placeholder="Born" name="born" value="{{ $user->born }}">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputState">Hobby</label>
					  <input type="text" class="form-control" id="inputHoby" placeholder="Hobby" name="hobby" value="{{ $user->hobby }}">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck">
				        Check me out
				      </label>
				    </div>
				  </div>
				  <button type="submit" class="btn btn-warning text-light">Update</button>
				</form>
          </form>
		</div>
	</div>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>