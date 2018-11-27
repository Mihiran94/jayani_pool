<html>
<head>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<br><br><br>
{{--<p class="tip">Click on button in image container</p>--}}
<div class="cont">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form sign-in">
            <h2>Welcome back to Jayani Pools</h2>
            <label>
                <span>Email</span>
                <input name="email" type="email" />
                @if ($errors->has('email'))
                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </label>
            <label>
                <span>Password</span>
                <input name="password" type="password" />
                @if ($errors->has('password'))
                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="submit" class="submit">Sign In</button>
            <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
        </div>
    </form>
    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">
                <h2>New here?</h2>
                <p>Sign up and connect with us to enjoy best features!</p>
            </div>
            <div class="img__text m--in">
                <h2>One of us?</h2>
                <p>If you already has an account, just sign in. We've missed you!</p>
            </div>
            <div class="img__btn">
                <span class="m--up">Sign Up</span>
                <span class="m--in">Sign In</span>
            </div>
        </div>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form sign-up">
                <h2>Time to feel like home,</h2>
                <label>
                    <span>Name</span>
                    <input name="name" type="text" />
                    @if ($errors->has('name'))
                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </label>
                <label>
                    <span>Email</span>
                    <input name="email" type="email" />
                    @if ($errors->has('email'))
                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </label>
                <label>
                    <span>Password</span>
                    <input name="password" type="password" />
                    @if ($errors->has('password'))
                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </label>
                <label>
                    <span>Confirm Password</span>
                    <input type="password" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                </label>
                <button type="submit" class="submit">Sign Up</button>
                <button type="button" class="fb-btn">Join with <span>facebook</span></button>
            </div>
        </form>
    </div>
</div>

<a href="https://dribbble.com/shots/3306190-Login-Registration-form" target="_blank" class="icon-link">
    <img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Dribbble-icon.png">
</a>
<a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter">
    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
</a>
<script src="js/app.js" type="text/javascript"></script>
</body>
</html>
