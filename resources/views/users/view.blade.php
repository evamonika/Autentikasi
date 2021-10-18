@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('USER DATA ')  }} {{ $user->name }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <form>
            <input type="hidden" name="id" value="{{$user->id}}"></br>
            <div class="form-group">
              <label for="nim">ID</label>
              <input type="text" class="form-control" required="required" name="id" value="{{$user->id}}" readonly></br>
            </div>
            <div class="form-group">
              <label for="username">USERNAME</label>
              <input type="text" class="form-control" required="required" name="username" value="{{$user->username}}" readonly></br>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}" readonly></br>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}" readonly></br>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" required="required" name="password" value="{{$user->password}}" readonly></br>
            </div>
            <a href='/users' class="btn btn-dark">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection