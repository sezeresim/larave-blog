@extends('layouts.master')
@section('content')
    <!-- Page Header -->
    <header class="masthead bg bg-danger">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Site Ayarları</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">


                <!-- Açıklama -->
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                    <div class="card-body">
                        {!! Form::open(["url"=>"/site-ayarlari/guncelle","method"=>"put"]) !!}
                         @foreach($ayarlar as $ayar)
                        {!! Form::bsText($ayar->name,$ayar->name,$ayar->value) !!}
                        @endforeach
                        {!! Form::bsSubmit("Kaydet") !!}
                         {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>

@endsection


