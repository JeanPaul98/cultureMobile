<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.link')

<body>
  <div class="loader"></div>
  <div id="app">
      

          <section class="section">
              <div class="container mt-5">
                <div class="row">
                  <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
         +       <div class="card-header">
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
</body>

</html>