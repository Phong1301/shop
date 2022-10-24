@extends('user.main')

@section('content')
    <section class="container forms">
        
        <div class="form">
            <div class="form-content">
                <header>Registration</header>
                <form action="{{ route('validate_registration') }}" method="post">
                    @csrf   
                    <div class="field input-field">
                        <input type="text" name="name" placeholder="Name" class="input" value="{{ old('name') }}" />
                    </div>
                    @if($errors->has('name'))
                        <span style="color: red;">{{ $errors->first('name') }}</span>
                    @endif
                   

                    <div class="field input-field">
                        <input type="text" name="email" placeholder="Email" class="input" value="{{ old('email') }}" />
                    </div>
                    @if($errors->has('email'))
                        <span style="color: red;">{{ $errors->first('email') }}</span>
                    @endif

                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Password" class="password" value="{{ old('password') }}" />
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    @if($errors->has('password'))
                        <span style="color: red;">{{ $errors->first('password') }}</span>
                    @endif

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit">Register</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="{{ route('login') }}" class="link signup-link">Login</a></span>
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