<!-- header -->
@include("partials.header")

<section class="categories gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card tertiary-color-1 text-dark border-0" style="border-radius: 5px;">
            <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4">
                    <h2 class="fw-bold mb-5 text-uppercase">Register</h2>

                    <form action="/register/process" method="POST">
                        @csrf
                        <div class="form-outline form-white mb-4">
                            <input type="text" class="form-control form-control-lg tertiary-color-2 border-0" placeholder="Full name *" required name="name"/>
                            @error('name')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="email" class="form-control form-control-lg tertiary-color-2 border-0" placeholder="Email *" required name="email"/>
                            @error('email')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="text" class="form-control form-control-lg tertiary-color-2 border-0" placeholder="Address *" required name="address"/>
                            @error('address')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" class="form-control form-control-lg tertiary-color-2 border-0" placeholder="Password" required name="password"/>
                            @error('password')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" class="form-control form-control-lg tertiary-color-2 border-0" placeholder="Confirm Password" required name="password_confirmation"/>
                        </div>

                        <button class="btn btn-lg px-5 category-hover text-dark border border-1 border-dark mt-3" type="submit">Register</button>
        
                    </form>
                </div>
  
              <div>
                <p class="mb-0">Have an account? <a href="/login" class="fw-bold">Login</a></p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


<!-- footer -->
@include("partials.footer")