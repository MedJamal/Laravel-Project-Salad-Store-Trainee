{{-- SIGN UP start here  --}}
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="commontop text-left">
        <h4>
            Créez votre compte
            <i class="icon_star_alt"></i>
            <i class="icon_star_alt"></i>
            <i class="icon_star_alt"></i>
        </h4>
    </div>
    <p>Créez votre nouveau compte</p>
    <form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">	
            <label>Adresse électronique *</label>
            <input type="text" name="email" value="" placeholder="Votre email" id="input-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
            
            {{-- @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif --}}
        </div>
        <div class="form-group">	
            <label>Prénom et Nom *</label>
            <input type="text"  name="name" value="{{ old('name') }}" required autofocus placeholder="John Doe" id="input-username" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">

            {{-- @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif --}}
        </div>
        <div class="form-group">
            <label>Mot de passe *</label>
            <input type="password" name="password" value="" placeholder="Mot de passe" id="input-password1" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
            
            {{-- @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif --}}
        </div>
        <div class="form-group">
            <label>Confirmez le mot de passe *</label>
            <input type="password" name="password_confirmation" value="" placeholder="Confirmez le mot de passe" id="input-confirmpassword" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
        {{-- <div class="links">
            <input class="checkclass checkbox-inline" type="checkbox">Speed your way through the checkout
        </div>
        <div class="links">
            <input class="checkclass checkbox-inline" type="checkbox">Keep a record all purchases
        </div> --}}
    </form>
</div>	