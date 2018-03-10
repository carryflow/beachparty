<!DOCTYPE html>
<html lang="es">

<head>
  @include('admin.layouts.partials.head')
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-dark text-left p-5">
              <h2>Login</h2>
              <h4 class="font-weight-light">Hello! let's get started</h4>
              <form class="pt-5" method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Username</label>
                    <input id="email" type="email" class="form-control" name="email" required autofocus placeholder="Username">
                    <i class="mdi mdi-account"></i>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="exampleInputPassword1">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                    <i class="mdi mdi-eye"></i>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="mt-5">
                    <button type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium" >Login</button>
                  </div>
                  <div class="mt-3 text-center">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>

                    <a class="auth-link text-white" href="{{-- {{ route('password.request') }} --}}">
                                    Forgot Your Password?
                    </a>
                  </div>                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.layouts.partials.scripts')  
</body>

</html>