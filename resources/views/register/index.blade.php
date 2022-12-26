<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <div class="register">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>


        <h2>Register Form</h2>
        <form action="/register" method="post">
            @csrf
            <div class="box-register ">
                <i class="fas fa-solid fa-user"></i>
                <input type="text" placeholder="Name" name="name" id="name" class="@error('name') rounded-top bg-danger @enderror
" required value="{{ old('name') }}">
            </div>
            <div class="box-register">
                <i class="fas fa-solid fa-user-secret"></i>
                <input type="text" placeholder="Username" name="username" id="username" class="@error('username') rounded-top bg-danger @enderror
" value="{{ old('username') }}">
            </div>
            @error('username')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            <div class="box-register">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" placeholder="Email" name="email" id="email" class="@error('email') rounded-top bg-danger @enderror
" required value="{{ old('email') }}">
            </div>
            @error('email')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            <div class="box-register">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" id="password" class="@error('password') rounded-top bg-danger @enderror" required>
            </div>
            @error('password')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            <button type="submit" name="register" class="btn-register">register</button>
            <div class="bottom" style="color:aliceblue">
                <div class="c">Already Register</div>
                <a href="/login"><br>
                    <div class="c">Login</div>
                </a>
            </div>
    </div>
    </form>
</head>
<style>
    * {
        font-family: 'work-sans';
    }

    .c {
        color: white;
        text-shadow: 2px 2px 5px black;
        font-size: 23px;
        font-weight: bold;
        text-align: center;
        font-family: 'work-sans';
    }

    body {
        margin: 0;
        padding: 0;
        background: url('img/background2.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'poppins';
    }

    .error {
        color: white;
        font-size: 15px;
        font-weight: bold;
        text-align: center;
        text-transform: capitalize;
        background-color: rgba(0, 0, 0, 0.5);
        transition: color 0.5s ease-in-out;
        font-family: 'poppins';
    }

    .error:hover {
        color: black;
        background-color: white;
    }

    .register {
        scale: 0.75;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(4, 29, 23, 0.5);
        padding: 50px;
        width: 500px;
        box-shadow: 0px 0px 25px 10px black;
        border-radius: 15px;
    }

    @media (max-width: 768px) {

        .register {
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

    .register h2 {
        text-align: center;
        color: white;
        font-size: 30px;
        font-family: 'poppins';
        letter-spacing: 3px;
        padding-top: 0;
        margin-top: -20px;
    }

    .box-register {
        display: flex;
        justify-content: space-between;
        margin: 10px;
        border-bottom: 2px solid white;
        padding: 8px 0;
    }

    .box-register i {
        font-size: 23px;
        color: white;
        padding: 5px 0;
    }

    .box-register input {
        width: 85%;
        padding: 5px 0;
        background: none;
        border: none;
        outline: none;
        color: white;
        font-size: 18px;
    }

    .box-register input::placeholder {
        color: white;
    }

    .btn-register .box-register input:hover {
        background: rgba(10, 10, 10, s 0.5);
    }

    .btn-register {
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

    .btn-register:hover {
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