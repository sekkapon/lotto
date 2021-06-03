<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หวยไทย-2021</title>
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="<?= base_url('public/css/pages/mem_style.css'); ?>">
</head>
<style>

</style>
<body>

<form class="login" id="formLogin">
<input type="text" class="form-control form-control-xl" name="username" id="username" placeholder="Username">
<input type="password" class="form-control form-control-xl" name="password" id="password" placeholder="Password">
  <button  type="submit">Login</button>
</form>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('#formLogin').submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: '<?= base_url('singin/checkLogin'); ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                usernameInput: $('#username').val(),
                passwordInput: $('#password').val(),
            }
        }).done(function(res) {
            console.log(res);
            if (res.status == 'success') {
                window.location.href = '<?= base_url('bet-huay-thai'); ?>'
            } else {
                swal({
                    icon: res.status,
                    text: res.msg,
                    // timer: 1500,
                    buttons: true,
                });
            }
        });

    });
</script>

</html>