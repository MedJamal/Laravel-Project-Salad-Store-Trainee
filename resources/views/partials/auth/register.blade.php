{{-- SIGN UP start here  --}}
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="commontop text-left">
        <h4>
            Create your account
            <i class="icon_star_alt"></i>
            <i class="icon_star_alt"></i>
            <i class="icon_star_alt"></i>
        </h4>
    </div>
    <p>Create your new account</p>
    <form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">	
            <label>Email Address *</label>
            <input type="text" name="email" value="" placeholder="Your Email" id="input-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
            
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">	
            <label>Name *</label>
            <input type="text"  name="name" value="{{ old('name') }}" required autofocus placeholder="John Doe" id="input-username" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>password *</label>
            <input type="text" name="password" value="" placeholder="Password" id="input-password1" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
            
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>confirm password*</label>
            <input type="text" name="password_confirmation" value="" placeholder="Password" id="input-confirmpassword" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">SIGN up</button>
        <div class="links">
            <input class="checkclass checkbox-inline" type="checkbox">Speed your way through the checkout
        </div>
        <div class="links">
            <input class="checkclass checkbox-inline" type="checkbox">Keep a record all purchases
        </div>
    </form>
</div>	