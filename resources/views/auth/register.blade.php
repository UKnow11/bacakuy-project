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
            <div class="login-header">
                <h1>Welcome To Bacakuy</h1>
                <p>Please register to continue to our Website</p>
            </div>
            <form action="/register" class="login-form" method="POST">
                @csrf
                <div class="login-form-content">
                    <div class="form-item">
                        <label for="username">Username</label>
                        <input type="text" name ="username" class="@error ('username') is-invalid @enderror" id="username" required value="{{ old('username')}}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-item">
                        <label for="email">Email Address</label>
                        <input type="text" name = "email" class="@error ('email') is-invalid @enderror" id="email" required value="{{ old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-item">
                        <label for="password">Password</label>
                        <input type="password" name = "password" class="@error ('password') is-invalid @enderror" id="password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-item">
                        <label for="password">Confirm Password</label>
                        <input type="password" name = "password" class="@error ('password') is-invalid @enderror" id="password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit">Sign Up</button>
                    <div class="register-text">
                        <div class="register-text-1">Already Have an Account?</div>
                        <a class="register-text-2" id="btn_login" href="/login">Login Here!</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="right-side mt-5">
            <a href="/"><img src="assets/img/bacakuy.png"></a>
        </div>
    </div>
</body>
</html>