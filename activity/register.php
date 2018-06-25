<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<?php
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    if(isset($_POST['submit'])){
        $err = 0;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($name)){
            $nameErr = "The Name field is required!";
            $err = 1;
        }
        else{
            $name = test_input($name);
        }
        if(empty($email)){
            $emailErr = "The Name field is required!";
            $err = 1;
        }
        else{
            $email = test_input($email);
            $email = validate_email($email);
        }
        if(empty($password)){
            $pwdErr = "The Name field is required!";
            $err = 1;
        }
        else{
            $password = test_input($password);
        }

        if($err == 0 ){
            header ("Location: index.php");
        }
    }

?>


<div class="row">
    <?php include('includes/menu.php'); ?>
    <div class="col-md-4">
        <h1>REGISTRATION FORM</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="name" value='<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>' name="name" class="form-control" placeholder="Name">
                <?php if(isset($nameErr)){ echo "<div class='alert alert-danger'>".$nameErr."</div>"; } ?>
            </div>

            <div class="form-group">
                <label>Email address</label>
                <input type="text"value='<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>' name="email" class="form-control" placeholder="Email">
                <?php if(isset($emailErr)){ echo "<div class='alert alert-danger'>".$emailErr."</div>"; } ?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <?php if(isset($pwdErr)){ echo "<div class='alert alert-danger'>".$pwdErr."</div>"; } ?>
            </div>

            <button type="submit" name="submit" class="btn btn-info">Submit</button>
        </form>
    </div>

    <div class="col-md-4">
    </div>
</div>
    



<?php include('includes/footer.php'); ?>