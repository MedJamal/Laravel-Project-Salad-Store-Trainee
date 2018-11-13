{{-- SIGN IN start here  --}}
<div class="col-md-6 col-sm-6 col-xs-12 box">
    <div class="commontop text-left">
        <h4>
            Se connecter
            <i class="icon_star_alt"></i>
            <i class="icon_star_alt"></i>
            <i class="icon_star_alt"></i>
        </h4>
    </div>
    <p>Salue, bienvenue sur votre compte</p>

    {{-- Facebook auth --}}
    {{-- <ul class="list-inline">
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
    </ul> --}}
    <form method="post" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">	
            <label>Adresse électronique *</label>
            <input type="text" name="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Votre email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
            {{-- @if ($errors->has('email'))
                <span class="text-danger invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif --}}
        </div>
        <div class="form-group">
            <label>Mot de passe *</label>
            <input type="password" name="password" value="" placeholder="Mot de passe" id="input-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
            {{-- @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif --}}
        </div>
        
        {{-- 

            Forgot your account?

        --}}
        <div class="links">
            {{-- <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="checkclass checkbox-inline" type="checkbox">Remember Me! --}}
            <a href="" >Oublié votre compte?</a>
        </div>
        <button type="submit" class="btn btn-primary">SE CONNECTER</button>
    </form>
</div>