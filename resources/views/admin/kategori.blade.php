@extends('layouts.master')
@section('content')
    <!-- Page Header -->
    <header class="masthead bg bg-danger">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Kategoriler</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="m-b-40 text-center">
                    <a href="/kategori/create" class="btn btn-danger">
                        <i class="fa fa-plus" aria-hidden="true">
                            Yeni Kategori Ekle
                        </i>
                    </a>

                </div>
                <hr>

                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Slug</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($kategoriler as $kategori)
                        <tr>
                            <td>{!! $kategori->kucuk_resim !!}</td>
                            <td>{{$kategori->baslik}}</td>
                            <td>{{$kategori->slug}}</td>
                            <td>
                                <a href="/kategori/{{$kategori->id}}/edit" class="btn btn-primary eylem" data-toggle="tooltip" title="Düzenle"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="/kategori/{{$kategori->id}}" class="btn btn-danger eylem" data-toggle="tooltip" data-method="delete" data-confirm="Are you Sure"  title="Sil"><i class="fa fa-remove" aria-hidden="true"></i></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{$kategoriler->links()}}

                </div>

            </div>
        </div>
    </div>

@endsection


