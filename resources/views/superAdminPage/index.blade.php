<?php
/**
 * @var $users \App\Models\User
 * @var $admin \App\Models\User
 */
?>

@extends('main_layout')

@section('section')
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h2>Greetings Your majesty, {{$admin->name}}</h2>
                <h2>Here is all your slaves</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-12 table-users-admin-wrapper">
                <table class="table table-striped table-users-admin">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>User Role</th>
                        <th>Email</th>
                        <th>Date Of Birth</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->surname}}</td>
                            <td>{{$user->userRole}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->dateOfBirth}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection()
