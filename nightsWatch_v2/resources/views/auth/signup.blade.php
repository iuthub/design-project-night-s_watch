<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reg_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="signup-form">
        <form role="form" method="post" action="{{ route('auth.signup') }}">
            <h2>Sign Up</h2>
            <p>It's free and only takes a minute.</p>
            <hr>
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="control-label">Choose a username</label>
                <input type="text" name="username" placeholder="Username" class="form-control" id="username" value="{{ Request::old('username') ?: '' }}">
                @if ($errors->has('username'))
                <span class="help-block">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">Your email address</label>
                <input type="text" name="email" placeholder="Email Address" class="form-control" id="email" value="{{ Request::old('email') ?: '' }}">
                @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label">Choose a password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                @if ($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
            </div>
            <input type="hidden" name="_token" value="{{ Session::token() }}">

            <!-- <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p> -->
        </form>
        <div class="text-center">Already have an account? <a href="{{ route('auth.signin') }}">Login here</a></div>
    </div>
</body>

</html>