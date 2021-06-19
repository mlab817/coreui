@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">

                    <div class="card-body p-4">
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>

                        <form method="POST" action="{{ route('register') }}" novalidate>
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="c-icon cil-user"></i>
                                </span>
                                </div>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                       placeholder="Name" name="name" value="{{ old('name') }}" required
                                       autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="c-icon cil-envelope-open"></i>
                                </span>
                                </div>
                                <input id="email" type="email" placeholder="Email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="c-icon cil-lock-locked"></i>
                                </span>
                                </div>
                                <input id="password" type="password" placeholder="Password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="c-icon cil-lock-locked"></i>
                                </span>
                                </div>
                                <input id="password-confirm" type="password" placeholder="Confirm Password"
                                       class="form-control" name="password_confirmation" required
                                       autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
