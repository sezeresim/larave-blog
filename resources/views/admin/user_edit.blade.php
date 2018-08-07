@extends('layouts.master')
@section('content')
    <!-- Page Header -->
    <header class="masthead bg bg-danger">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Kullanıcı Düzenle</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card-body">

                    {!! Form::model($user,['route'=>['user.update',$user->id],"method"=>"put"]) !!}

                    {!! Form::bsCheckbox("rol","roller",[
                     ["value"=>1,"text"=>"Admin","is_checked"=>$user->yetkisi_var_mi("admin")],
                     ["value"=>2,"text"=>"Yazar","is_checked"=>$user->yetkisi_var_mi("author")],
                      ["value"=>3,"text"=>"Standart","is_checked"=>$user->yetkisi_var_mi("standart")]
                    ]) !!}

                    {!! Form::bsText("name","İsim") !!}
                    {!! Form::bsText("email","E-Mail") !!}
                    {!! Form::bsPassword("password","Şifre") !!}
                    {!! Form::bsSubmit("Kaydet") !!}
                    {!! Form::close() !!}
                    <!-- Açıklama -->
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                </div>
            </div>
        </div>
    </div>

@endsection


