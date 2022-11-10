@extends('Users.layout')
 
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Users of System</div>
                    <div class="card-body">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Names</th>
            <th>Station code</th>
            <th>email</th>
            <th>password</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->stations_id }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>
                <form action="{{ route('users.destroy',$users->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('users.show',$users->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$users->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! $users->links() !!}
      
@endsection