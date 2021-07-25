@extends('frontend.layouts.base')

@section('content')
<br><br>
<div class="container h-100 mt-5 mb-5">
    <div class="row h-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2">Welcome back, Dey</h1>
                    <p class="lead">
                        Sign in to your account to continue
                    </p>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <div class="text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Andrew Jones" class="img-fluid rounded-circle" width="112" height="112">
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf        
                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" type="text" class="form-control form-control-md @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control form-control-md @error('email') is-invalid @enderror" placeholder="Enter your email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control form-control-md @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="Enter your password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control form-control-md" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                                </div>

                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <center>
                    <a href="/"><p><i class="fas fa-home"></i>  Beranda</p></a>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
