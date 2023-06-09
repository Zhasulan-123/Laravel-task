@extends('layouts.user')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Статьи</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Статьи</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    @foreach ($articles as $key => $item)
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">{{ $item->name }}</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Цена: {{ $item->price }} тн</h6>

                                    <p class="card-text">
                                        {{ $item->description }}
                                    </p>
                                    <a href="{{ url('page', $item->id) }}" class="btn btn-primary">Просмотр</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    @endforeach
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
