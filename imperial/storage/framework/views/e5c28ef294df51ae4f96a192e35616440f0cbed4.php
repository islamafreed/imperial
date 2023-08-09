<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Imperial Estate </title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo e(asset('public/admin_assets/plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo e(asset('public/admin_assets/plugins/node-waves/waves.css')); ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo e(asset('public/admin_assets/plugins/animate-css/animate.css')); ?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo e(asset('public/admin_assets/css/style.css')); ?>" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Imperial<b>Estate</b></a>
            <small>Admin Panel</small>
        </div>
        
        
        <div class="card">
            <div class="body">
                <form action="<?php echo e(route('admin.login.post')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <!--  -->
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo e(asset('public/admin_assets/plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo e(asset('public/admin_assets/plugins/bootstrap/js/bootstrap.js')); ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo e(asset('public/admin_assets/plugins/node-waves/waves.js')); ?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo e(asset('public/admin_assets/plugins/jquery-validation/jquery.validate.js')); ?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo e(asset('public/admin_assets/js/admin.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin_assets/js/pages/examples/sign-in.js')); ?>"></script>

    <!-- Sweet Alert 2 js -->
<script type="text/javascript" src="<?php echo e(asset('public/admin_assets/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<script>
<?php if(isset($_SESSION["error"])) { ?>
// notifier.show('Error!', '//echo $_SESSION["error"]; ', 'danger', '', 10000);
swal(
    'Error',
    '<?php echo $_SESSION["error"]; ?>',
    'error'
    );
<?php unset($_SESSION["error"]); ?>
<?php } ?>

<?php if(isset($_SESSION["success"])) { ?>
//notifier.show('Success!', '//echo $_SESSION["successs"];', 'success', '', 10000);
swal(
    'Success',
    '<?php echo $_SESSION["success"]; ?>',
    'success'
    );
<?php unset($_SESSION["success"]); ?>
<?php } ?>


<?php if(Session::has('error')): ?>

swal(
    'Error',
    '<?php echo e(Session::get("error")); ?>',
    'error'
    );

<?php endif; ?>

<?php if(Session::has('success')): ?>

swal(
    'Success',
    '<?php echo e(Session::get("success")); ?>',
    'success'
    );

<?php endif; ?>


</script>
</body>

</html><?php /**PATH E:\laragon\www\imperial\resources\views/adminauth/login.blade.php ENDPATH**/ ?>