@extends('layouts.master')
@section('content')
    <!-- Page Header -->
    <header class="masthead bg bg-danger">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Kullanıcı Listesi</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">
                <!-- Açıklama -->
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Roller</th>
                        <th>İsim</th>
                        <th>Email</th>
                            <th>Üyelik Tarihi</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            @foreach($user->roles as $role)

                            {{$role->name}}
                                <br>
                            @endforeach
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="/user/{{$user->id}}/edit" class="btn btn-primary eylem" data-toggle="tooltip" title="Düzenşe"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="/user/{{$user->id}}" class="btn btn-danger eylem" data-toggle="tooltip" data-method="delete" data-confirm="Are you Sure"  title="Sil"><i class="fa fa-remove" aria-hidden="true"></i></a>

                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{$users->links()}}

                </div>

            </div>
        </div>
    </div>

@endsection


