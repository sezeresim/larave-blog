@extends('layouts.master')
@section('content')
    <!-- Page Header -->
    <header class="masthead bg bg-danger">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mx-auto">
                    <div class="site-heading">
                        <h1>Yeni Kategori Ekle</h1>

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

                {!! Form::open(["url"=>"/kategori" ,"method"=>"post" ,"files"=>true ]) !!}
                {!! Form::bsText("baslik","Baslık") !!}
                    {!! Form::bsFile("resim","Resim") !!}

                {!! Form::bsSubmit("Kaydet") !!}
                {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

@endsection


