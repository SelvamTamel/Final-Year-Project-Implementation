@extends('layouts.master')

@section('tittle', 'View Users')

@section('content')

<div class="container-fluid px-4">
       

        <div class="card-body">
        @if (session('message'))
        <div class="alert alert-success"> {{ session('message')}}</div>
        @endif
        

        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Users Register Details
                </div>
                <div class="card-body">
        <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($users as $userdata)
                        <tr>
                                <td>{{$userdata->id}}</td>
                                <td>{{$userdata->name}}</td>
                                <td>{{$userdata->email}}</td>
                                <td>{{$userdata->password}}</td>
                                <td>{{$userdata->role_as == '1' ? 'Admin':'User'}}</td>
                                <td>
                                        <a href="{{ url('admin/user/'.$userdata->id)}}" class="btn btn-success"> Edit </a>
                                </td>
                        </tr>
                        @endforeach 
                </tbody>
            </table>

        </div>
        
        </div>

</div>

@endsection

