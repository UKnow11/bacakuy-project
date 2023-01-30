<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="assets/css/account.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="left-side">
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="login-header">
                <h1>Welcome To Bacakuy</h1>
                <p>Please login to continue to our Website</p>
            </div>
            <form action="/login" class="login-form" method="POST">
                @csrf
                <div class="login-form-content">
                    <div class="form-item">
                        <label for="email">Email Address</label>
                        <input type="text" name = 'email' class="@error ('email') is-invalid @enderror" id="email" required value="{{ old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-item">
                        <label for="password">Password</label>
                        <input type="password" name ="password" id="password" required>
                    </div>
                    <button type="submit">Sign In</button>
                </div>
                <div class="register-text">
                    <div class="register-text-1">Don't Have an Account?</div>
                    <a class="register-text-2" id="btn_login" href="/register">Register Now!</a>
                </div>
            </form>
        </div>
        <div class="right-side">
            <a href="/"><img src="assets/img/bacakuy.png"></a>
        </div>
    </div>
</body>
</html>