<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/MuIyr8Ej74CrXhJDQy37RPBe/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-rxGZvg8Gdn3mgkwZjiW/lYDbAOnTpSluTNQ2InCrzanOoXT6H/CMKNjLfpfo7x0s"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="pageLoginStyle.css">
   
    <title>Login</title>
</head>


<body>

    <div class="wrapper">
        <div class="form-box Login">
            <h2>Login</h2>

            <form method="post">
                <!--Input NRP-->
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="text" name="inputNRP" id="inputNRP" required>
                    <label>NRP</label>
                </div>

                <!--input Password-->
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" name="inputPassword" id="inputPassword" required>
                    <label>Password</label>
                </div>


                <div class="remember-forgot">
                    <label><input type="checkbox">
                    I'am not a robot</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name='tombol_login' value = 'ya' class="btn">Login</button>
            </form>

        </div>
    </div>

    <style>

.wrapper{
    position: relative;
    width: 550px;
    height: 440px;
    background: transparent;
    border: 2px solid rgba(255,255,255, .5);
    border-radius: 8px;
    backdrop-filter: blur(2px);
    box-shadow: 0 0 30px rgba(0,0,0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
}

.wrapper .form-box{
    width: 100%;
    padding: 40px;
}

.form-box h2{
    position: relative;
    bottom: 25px;
    font-size:2em;
    color: rgba(233, 238, 242);
    text-align: center;
}

.input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid rgba(16, 37, 54);
    margin: 30px 0;
}

.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: rgb(164, 204, 239);
    font-weight: 700;
    pointer-events: none;
    transition: .5s;
}

.input-box input:focus~label,
.input-box input:valid~label{
    top: -6px;
}

.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    font-weight: 600;
    padding: 0 35px 0 5px;
}

.remember-forgot{
    font-size: .9em;
    color: #8d9094;
    font-weight: 600;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;
}

.remember-forgot label input{
    font-weight: 600;
    margin-right: 3px;
}

.remember-forgot a{
    color: #bdcbd6;
    text-decoration: none;
}

.remember-forgot a:hover{
    text-decoration: underline;
}

.btn{
    position: relative;
    top: 30px;
    width: 100%;
    height: 45px;
    border: none;
    outline: none;
    background: rgb(146, 172, 207);
    border-radius: 6px;
    cursor: pointer;
}

.input-box span{
    background-color: #bdcbd6;
}
</style>

</body>


<style>
    body{
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url('https://p4.wallpaperbetter.com/wallpaper/15/801/176/nature-landscape-stars-night-wallpaper-preview.jpg') no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>

</html>