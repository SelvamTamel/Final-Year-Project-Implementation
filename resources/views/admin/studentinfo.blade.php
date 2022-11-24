@extends('layouts.master')

@section('tittle', 'Student Info')

@section('content')

<div class="container-fluid px-4">
       

        <div class="card-body">
        @if (session('message'))
        <div class="alert alert-success"> {{ session('message')}}</div>
        @endif
        

        
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Student Information
                </div>
                <div class="card-body">
        <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Dateofbirth</th>
                        <th>Gender</th>
                        <th>Nationality</th>
                        <th>Education</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($studentinfo as $studentinfodata)
                        <tr>
                                <td>{{$studentinfodata->id}}</td>
                                <td>{{$studentinfodata->studentid}}</td>
                                <td>{{$studentinfodata->name}}</td>
                                <td>{{$studentinfodata->dateofbirth->format('d/m/Y')}}</td>
                                <td>{{$studentinfodata->gender}}</td>
                                <td>{{$studentinfodata->nationality}}</td>
                                <td>{{$studentinfodata->education}}</td>
                        </tr>
                        @endforeach 
                </tbody>
            </table>

        </div>
        </div>

</div>


@endsection
