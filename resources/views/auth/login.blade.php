@extends('layouts.plane')

@section('title', 'Login')

@section('content')
    <section class="vh-100" style="background-color: #E5E4E2;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <form action="{{ route('login.custom') }}" method="POST" id="logForm">
                        @csrf
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <h3 class="mb-5">Server Monitoring System</h3>
                                <!-- @if ($message = Session::get('error'))
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif -->
                                <div class="form-outline mb-4">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control form-control-lg"
                                        name="username" value="{{ old('username') }}" autofocus />

                                    @if ($errors->has('username'))
                                    <strong><span class="text-danger">{{ $errors->first('username') }}</span></strong>
                                    @endif
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-lg"
                                        name="password" value="{{ old('password') }}"  autofocus/>
                                    @if ($errors->has('password'))
                                    <strong><span class="text-danger">{{ $errors->first('password') }}</span></strong>
                                    @endif
                                </div>
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                {{-- @if (Route::has('password.request'))
                                <a href="{{ route('password.reset') }}" class="lost-pass">
                                    Lost your password?
                                </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
