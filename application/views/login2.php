<?php  ?>
<head>
    <title> Halaman Login </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/template_login/style1.css">   
</head> 
    <body>
    <div class="login-box">
    <img src="<?php echo base_url()?>assets/template_login/avatar.png" class="avatar">
    
        <h1>Login Here</h1>
        <?php echo $this->session->flashdata('pesan')?>
            <form method="post" action="<?php echo base_url('Auth/login') ?>" class="user">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <span class="fa fa-user form-control-feedback"></span>
            <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?>

            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div>
    
    </body>
