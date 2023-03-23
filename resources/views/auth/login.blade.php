@extends('layouts.app')
@section('css')
    <style>
        .btn-primary {
            background-color: #3f51b5 !important;
            border-color: #3f51b5 !important;
        }

        .color {
            color: #3f51b5 !important;
        }
    </style>
@endsection
@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md- col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" action="{{ route('login') }}">
                        <!-- Email input -->

                        <div class="form-outline mb-4 text-center">
                            <a class="text-decoration-none text-dark" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form1Example13">Correo Electronico</label>
                            <div class="col-12">
                                <input type="email" id="form1Example13"
                                    class="form-control form-control-lg form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Contraseña</label>
                            <div class="col-12">
                                <input id="password" type="password"
                                    class="form-control form-control-lg form-control @error('pasword') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Recordarme </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="color" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                            @endif
                        </div>

                        <!-- Submit button -->
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-lg btn-block col-12">Iniciar Sesion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
