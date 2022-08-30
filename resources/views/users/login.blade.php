<!DOCTYPE html>
<html lang="en">

@include('users.includes.head')

<body>
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">

            @if (session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
              </div>
            @endif
            
              <form class="bg-white rounded shadow-5-strong p-5" action="/postloginsiswa" method="POST">
                @csrf 
                <!-- Email input -->
                <div class="input-group mb-3">
                  <input type="number" id="form1Example1" class="form-control" name="nis" placeholder="NIS" id="nis" required
                                  value="{{ old('nis') }}"/>
                </div>

                <!-- Password input -->
                <div class="input-group mb-3">
                  <input type="password" id="form1Example1" class="form-control" name="password" placeholder="password" id="password" required
                                    value="{{ old('nis') }}"/>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- MDB -->
     <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>