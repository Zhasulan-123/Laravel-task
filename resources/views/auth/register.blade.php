@extends('layouts.user')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row login-page">
                    <div class="login-box">
                        <div class="login-logo">
                            Регистрация
                        </div>
                        <!-- /.login-logo -->
                        <div class="card">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Добавить, Пользователя!</p>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Имя" name="name" value="{{ old('name') }}" required
                                            autocomplete="name" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" name="email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="input-group mb-3">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Пароль" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="input-group mb-3">
                                        <input type="password" name="password_confirmation" autocomplete="new-password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Пароль" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8"></div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </div>
                    <!-- /.login-box -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
