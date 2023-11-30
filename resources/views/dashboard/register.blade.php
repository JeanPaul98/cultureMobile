<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.link')

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      
        <section class="section">
            <div class="container mt-5">
              <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h4>Register</h4>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{ route('register') }}">
                        @csrf
                          <div class="form-group">
                              <label for="last_name">Nom</label>
                              <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                  @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                          </div>

                          <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="invalid-feedback">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>

                        
                            <div class="form-group">
                              <label for="password" class="d-block">Mot de passe</label>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="name" name="password">
                              <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                              </div>
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>

                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                              {{ __('Register') }}
                            </button>
                          </div>

                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

      @include('dashboard.layouts.scrypt')

    </div>
  </div>
</body>

</html>