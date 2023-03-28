@extends('layouts.guest', ['title'=>'login', 'activeLink'=>'login'])

@section('content')
<form class="form" method="" action="">
  <div class="card card-login card-hidden">
    <div class="card-header card-header-rose text-center">
      <h4 class="card-title">Login</h4>
    </div>
    <div class="card-body ">
      <p class="card-description text-center">connect to your account</p>
      <span class="bmd-form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="material-icons">email</i>
            </span>
          </div>
          <input type="email" class="form-control" placeholder="Email...">
        </div>
      </span>
      <span class="bmd-form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="material-icons">lock_outline</i>
            </span>
          </div>
          <input type="password" class="form-control" placeholder="Password...">
        </div>
      </span>
    </div>
    <div class="card-footer justify-content-center">
      <a href="#pablo" class="btn btn-rose btn-link btn-lg">connexion</a>
    </div>
  </div>
</form>
@endsection

