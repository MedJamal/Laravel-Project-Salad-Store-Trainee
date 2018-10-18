{{-- SIGN IN start here  --}}
<div class="col-md-6 col-sm-6 col-xs-12 box">
    <div class="commontop text-left">
        <h4>
            Sign in
            <i class="icon_star_alt"></i>
            <i class="icon_star_alt"></i>
            <i class="icon_star_alt"></i>
        </h4>
    </div>
    <p>Hello, Welcome to your account</p>
    <ul class="list-inline">
        <li>
            <a href="https://www.facebook.com/" target="_blank">
                <i class="social_facebook"></i> Facebook
            </a>
        </li>
        <li>
            <a href="https://plus.google.com/" target="_blank">
                <i class="social_googleplus"></i> Google +
            </a>
        </li>
    </ul>
    <form method="post" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">	
            <label>Email Address *</label>
            <input type="text" name="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Your Email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>password *</label>
            <input type="text" name="password" value="" placeholder="Password" id="input-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        
        {{-- 

            Forgot your account?

        --}}
        <div class="links">
            <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="checkclass checkbox-inline" type="checkbox">Remember Me!
            <a href="" class="pull-right">Forgot your account?</a>
        </div>
        <button type="submit" class="btn btn-primary">SIGN IN</button>
    </form>
</div>