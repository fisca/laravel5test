@extends('app')

@section('content')
<div class="container">
    <h2>User Profile</h2>
    <p><strong>Name: </strong>{{ $user['name'] }}</p>
    <p><strong>Email: </strong>{{ $user['email'] }}</p>
    <p><strong>User id: </strong>{{ $user['id'] }}</p>
</div>
@endsection
