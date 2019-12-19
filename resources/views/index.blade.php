<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Learn CRUD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/ccs/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}

</head>
<body class="pt-5">
<div class="container-fluid">
  @if(session('success'))
    <div class="alert alert-success" role="alert">
     {{ session('success') }}
    </div>
  @endif
  <div class="row col-md-12">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Create Data
    </button>
    <form action="/" class="float-right form-inline my-2 my-lg-0 pl-5 ml-5" method="GET">
      <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search.." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <table class="table table-hover mt-3">
      <thead class="thead-light">
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Address</th>
          <th scope="col">Age</th>
          <th scope="col">Born</th>
          <th scope="col">Hobby</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $users)
          <tr>
            <td>{{  $loop->iteration }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->password }}</td>
            <td>{{ $users->address }}</td>
            <td>{{ $users->age }}</td>
            <td>{{ $users->born }}</td>    
            <td>{{ $users->hobby }}</td>
            <td>
              <a href="/user/{{ $users->id }}/edit" class="float-left btn btn-success btn-sm">Edit</a>
              <a href="/delete/{{ $users->id }}" class="float-right btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>  
    {{ $users->links() }}
    
    {{-- buat paginasinya --}}



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Buat Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="/create" method="post">

            {{ csrf_field() }}
              <div class="form-group{{ $errors->has('name') ? 'has-error' : ''  }}">
                <label for="exampleInputName1">Nama</label>
                <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Masukkan Nama Anda" value="{{ old('name') }}">
                @if($errors->has('name'))
                  <span class="help-block">{{ $errors->first('name') }}</span>
                @endif 
              </div>
              <div class="form-group{{ $errors->has('email') ? 'has-error' : ''  }}">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('email') }}">
                 @if($errors->has('email'))
                  <span class="help-block">{{ $errors->first('email') }}</span>
                 @endif 
              </div>
              <div class="form-group{{ $errors->has('password') ? 'has-error' : ''  }}">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{ old('password') }}">
                 @if($errors->has('password'))
                  <span class="help-block">{{ $errors->first('password') }}</span>
                 @endif 
              </div>
               <div class="form-group{{ $errors->has('address') ? 'has-error' : ''  }}">
                  <label for="exampleFormControlAddress1">Address</label>
                  <textarea name="address" class="form-control" id="exampleFormControlAddress1" rows="3">{{ old('address') }}</textarea>
                  @if($errors->has('address'))
                    <span class="help-block">{{ $errors->first('address') }}</span>
                  @endif 
                </div>
                <div class="form-group{{ $errors->has('age') ? 'has-error' : ''  }}">
                  <label for="exampleInputAge1">Age</label>
                  <input name="age" type="text" class="form-control" id="exampleInputAge1" placeholder="Masukkan Usia" value="{{ old('age') }} ">
                  @if($errors->has('age'))
                    <span class="help-block">{{ $errors->first('age') }}</span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('born') ? 'has-error' : ''  }}">
                  <label for="exampleInputBorn1">Born</label>
                  <input name="born" type="text" class="form-control" id="exampleInputBorn1" placeholder="Masukkan TTL" value="{{ old('born') }}">
                  @if($errors->has('born'))
                    <span class="help-block">{{ $errors->first('born') }}</span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('hobby') ? 'has-error' : ''  }}">
                  <label for="exampleInputHobby1">Hobby</label>
                  <input name="hobby" type="text" class="form-control" id="exampleInputHobby1" placeholder="Masukkan Hobby" value="{{ old('hobby') }}">
                  @if($errors->has('hobby'))
                    <span class="help-block">{{ $errors->first('hobby') }}</span>
                  @endif
                </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
           </div>
        </div>
      </div>
  </div>
</div>


  


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>