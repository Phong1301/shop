@extends('user.main')

@section('content')

    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="{{ route('validate_login') }}" method="post">
                    @csrf
                    <div class="field input-field">
                        <input type="text" placeholder="Email" name="email" class="input" value="{{ old('email') }}">
                    </div>
                    @if ($errors->has('email'))
                        <span style="color: red;">{{ $errors->first('email') }}</span>
                    @endif

                    <div class="field input-field">
                        <input type="password" placeholder="Password" name="password" class="password" value="{{ old('password') }}">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    @if ($errors->has('password'))
                        <span style="color: red;">{{ $errors->first('password') }}</span>
                    @endif

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="{{ route('registration') }}" class="link signup-link">Signup</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="#" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>

    </section>
@endsection