<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<div class="row">
    <?php include('includes/menu.php'); ?>
    <div class="col-md-4">
        <h1>LOGIN</h1>
        <form>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        </form>

        <br>
        <!--<a href="" data-toggle="modal" data-target="#myModal" class="btn btn-success">REGISTER </a>-->
        <a href="register.php" class="btn btn-success"> REGISTER </a>
    </div>
    <div class="col-md-4"></div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">REGISTER</h4>
      </div>


      <div class="modal-body">
        <form action="rcv.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="name" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    
<?php include('includes/footer.php'); ?>