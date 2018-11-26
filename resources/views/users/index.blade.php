@extends('layouts.master')


@section('content')
   <div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            
            <h2>All users</h2>
        </div>

        @if ($users->isEmpty())
            <p>There is no registered users</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Other Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{!! $user->id !!}</td>
                            <td>{!! $user->first_name !!}</td>
                            <td>{!! $user->surname !!}</td>
                            <td>{!! $user->other_name !!}</td>
                            <td>{!! $user->email !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
   </div>
@endsection

