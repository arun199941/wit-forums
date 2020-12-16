


<!-- Login Modal -->
<form action="Controllers/LoginController.php" method="POST">
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input  class="form-control" type="text" name="username" required placeholder="Username ...." />

        </div>
        <div class="form-group">
            <input  class="form-control" type="password" name="password" required placeholder="Password ...." />

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- Register Modal -->
<form method="POST" action="Controllers/RegisterController.php">
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
      <div class="form-group">
            <input  class="form-control" type="text" name="name" required placeholder="Name ...." />

        </div>
        <div class="form-group">
            <input  class="form-control" type="email" name="email" required placeholder="Email...." />

        </div>
        <div class="form-group">
            <input  class="form-control" type="text" name="username" required placeholder="Username ...." />

        </div>
        <div class="form-group">
            <input  class="form-control" type="password" name="password" required placeholder="Password ...." />

        </div>
        <div class="form-group">
            <input  class="form-control" type="password" name="confirm_password" required placeholder="Confirm Password ...." />

        </div>
      </div>


     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit">Register</button>
      </div>
    </div>
  </div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>