<div class="modal fade" id="auth_modal" tabindex="-1" role="dialog" aria-labelledby="auth_modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <ul class="nav nav-tabs" id="authTab" role="tablist">
          <li class="nav-item"><a class="nav-link active" id="login-tab" data-toggle="tab" aria-selected="true" href="#login">Login</a></li>
          <li class="nav-item"><a class="nav-link" id="signup-tab" data-toggle="tab" aria-selected="true" href="#signup">Sign Up</a></li>
        </ul>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form method="POST" action="{{ route('login') }}" id="auth_form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
            <form method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Username</label>
                <input required type="text" class="form-control" id="name" name="name" aria-describedby="usernameHelp" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="emailInput">Email address</label>
                <input required type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="passwordInput">Password</label>
                <input required type="password" name="password" class="form-control" id="passwordInput" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input required type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
              </div>
              <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>