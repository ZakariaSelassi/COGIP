
  <?php $title = 'login'; ?>

  <div class="container" style="margin-top: 50px">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card p-3 login-card mx-auto">
          <h5 class="text-center login-card-title">COGIP.app</h5>
          <br />
          <form id="login-form" class="form" action="" method="post">
            <div class="form-group">
              <label for="form-control">User :</label>
              <input type="text" class="form-control" placeholder="User">
            </div>
            <div class="form-group">
              <label for="password-login">Password : </label>
              <input id="password-login" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group2 text-center">
              <input type="submit" name="submit" class="btn btn-primary btn-block" value="submit">
              <input type="reset" name="reset" class="btn btn-primary btn-block" value="Cancel">
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>



