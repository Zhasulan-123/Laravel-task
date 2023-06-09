@extends('layouts.user')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row login-page">
                    <div class="login-box">
                        <div class="login-logo">
                            Авторизация
                        </div>
                        <!-- /.login-logo -->
                        <div class="card">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Войдите, чтобы начать сеанс!</p>

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
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
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <input type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember">
                                                    Запомнить меня
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">Войти</button>
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
