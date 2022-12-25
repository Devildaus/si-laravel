<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <div class="register">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>

        <h2>Register Form</h2>
        <div class="box-register">
            <i class="fas fa-solid fa-user"></i>
            <input type="text" placeholder="Name" name="name" id="name">
        </div>
        <div class="box-register">
            <i class="fas fa-solid fa-user-secret"></i>
            <input type="text" placeholder="Username" name="username" id="username">
        </div>
        <div class="box-register">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" placeholder="Email" name="email" id="email">
        </div>

        <div class="box-register">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Password" name="password" id="password">
        </div>
        <button type="submit" name="register" class="btn-register">register</button>
        <div class="bottom" style="color:aliceblue">
            <p>Already Register</p>
            <a href="/login"><br>Login</a>
        </div>
    </div>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: url('img/background2.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: sans-serif;
    }

    .register {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-30%, -50%);
        background: rgba(4, 29, 23, 0.5);
        padding: 50px;
        width: 270px;
        box-shadow: 0px 0px 25px 10px black;
        border-radius: 15px;
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
        font-family: sans-serif;
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