@extends('layouts.guest', ['title' => 'Reset Password', 'activeLink' => ''])

@section('content')
    {{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center"> --}}




    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="card card-login card-hidden">
            <div class="card-header card-header-rose text-center">
                <h4 class="card-title">Reset Password</h4>
            </div>
            <div class="card-body ">
                {{-- <p class="card-description text-center"></p> --}}
                <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">email</i>
                            </span>
                        </div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email...">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </span>
            </div>

            <div class="card-footer justify-content-center ">

                {{-- <div class="row mb-3">
                    <div class="col-4 offset-md-2">
                        <button type="submit" class="btn btn-rose ">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div> --}}
                <div class="row mb-3">
                    <div class="col-4 ">
                    {{-- <button type="submit" class="btn btn-rose   ">Login</button> --}}
                    <input type="submit" class="btn btn-rose " value="{{ __('Send Password Reset Link') }}">
                    </div>

                </div>
            </div>
        </div>
    </form>









    {{-- <div class="card card-login card-hidden">
            
                <div class="card-header card-header-rose text-center">
                    <h4>Reset Password</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center">{{ __('Enter Your Email Address') }}</h4>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <<div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="material-icons ml-4">email</i>
                                </span>
                            </div>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4 offset-md-2">
                                <button type="submit" class="btn btn-rose ">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
@endsection
