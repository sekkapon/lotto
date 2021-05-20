<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/vendors/bootstrap-icons/bootstrap-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/app.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/pages/auth.css'); ?>">
</head>
<style>
    img.backgroundLogin {
        width: 800px;
        height: 750px;
    }
</style>

<body>
    <div id="auth">
        <div class="row h-100" style="justify-content: center;">
            <div class="col-lg-5 col-12">
                <br><br>
                <div id="auth-left" style=" border: 1px solid #1455D6;">
                    <div class="auth-logo">
                        <img src="<?= base_url('public/images/logo/logo.png'); ?>" alt="Logo">
                    </div>
                    <h1 class="auth-title" style="font-size: 3rem;">LOGIN</h1>
                    <form id="formLogin">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username" id="username" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" id="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('#formLogin').submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: '<?= base_url('Login/checkLogin'); ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                usernameInput: $('#username').val(),
                passwordInput: $('#password').val(),
            }
        }).done(function(res) {
            console.log(res);
            if (res.status == 'success') {
                window.location.href = '<?= base_url('Admin/index'); ?>'
            } else {
                swal({
                    icon: res.status,
                    text: res.msg,
                    timer: 1500,
                    buttons: false,
                });
            }
        });

    });
</script>

</html>