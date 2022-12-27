<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <div class="login">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>
        <h2>Login Form</h2>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/login" method="post">
            @csrf
            <div class="box-login">
                <i class="fas fa-envelope-open-text"></i>
                <input type="username" name="username" id="username" placeholder="username" class="@error('username') rounded-top bg-danger @enderror" required value="{{ old('username') }}">
            </div>
            @error('username')
            <div class=" error" style="text-align: center; color:beige;">
                {{ $message }}
            </div>
            @enderror
            <div class="box-login">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
            <div class="bottom">
                <a href="/register">Register</a>
                <a href="#">Forgot Password</a>
            </div>
        </form>
    </div>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: url('img/background.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: sans-serif;
    }

    .login {
        scale: 0.75;
        position: absolute;
        top: 50%;
        left: 45%;
        transform: translate(-30%, -50%);
        background: rgba(4, 29, 23, 0.5);
        padding: 50px;
        width: 30%;
        box-shadow: 0px 0px 25px 10px black;
        border-radius: 15px;
    }

    @media (max-width: 768px) {

        .login {
            position: fixed;
            top: 20%;
            left: 20%;
            transform: translate(-20%, -20%);
            width: 95vw;
        }
    }

    .avatar {
        font-size: 30px;
        background: #E59866;
        width: 50px;
        height: 50px;
        line-height: 50px;
        position: fixed;
        left: 50%;
        top: 0;
        transform: translate(-50%, -50%);
        text-align: center;
        border-radius: 50%;
    }

    .login h2 {
        text-align: center;
        color: white;
        font-size: 30px;
        font-family: sans-serif;
        letter-spacing: 3px;
        padding-top: 0;
        margin-top: -20px;
    }

    .box-login {
        display: flex;
        justify-content: space-between;
        margin: 10px;
        border-bottom: 2px solid white;
        padding: 8px 0;
    }

    .box-login i {
        font-size: 23px;
        color: white;
        padding: 5px 0;
    }

    .box-login input {
        width: 85%;
        padding: 5px 0;
        background: none;
        border: none;
        outline: none;
        color: white;
        font-size: 18px;
    }

    .box-login input::placeholder {
        color: white;
    }

    .btn-login .box-login input:hover {
        background: rgba(10, 10, 10, s 0.5);
    }

    .btn-login {
        margin-left: 10px;
        margin-bottom: 20px;
        background: none;
        border: 1px solid white;
        width: 92.5%;
        padding: 10px;
        color: white;
        font-size: 18px;
        letter-spacing: 3px;
        cursor: pointer;
    }

    .btn-login:hover {
        background: rgba(12, 30, 15, 0.5);
    }

    .bottom {
        margin-left: 10px;
        margin-right: 10px;
        display: flex;
        justify-content: space-between;
    }

    .bottom a {
        color: white;
        font-size: 15px;
        text-decoration: none;
    }

    .bottom a:hover {
        text-decoration: underline;
    }
</style>

</html>