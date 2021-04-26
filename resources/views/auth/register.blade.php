@extends('layouts.app')

@section('content')
    <div class="col-xl-6 mx-auto">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <div class="py-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an account</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text"  id="name" placeholder="Name..."
                                           class="form-control form-control-user @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="Name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" placeholder="Email Address..."
                                           class="form-control form-control-user @error('email') is-invalid @enderror"
                                           name="email" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"  id="password" placeholder="Password..."
                                           class="form-control form-control-user @error('password') is-invalid @enderror"
                                           name="password" value="{{ old('password') }}" required autocomplete="new-password" autofocus>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password-confirm" placeholder="Confirm Password..."
                                           class="form-control form-control-user"
                                           name="password-confirm" required autocomplete="new-password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
