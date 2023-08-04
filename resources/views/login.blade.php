<!-- header -->
@include("partials.header")

<section class="categories gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card tertiary-color-1 text-dark border-0" style="border-radius: 5px;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4">
                <h2 class="fw-bold mb-5 text-uppercase">Login</h2>
                
                <form action="/login/process" method="POST">
                    @csrf
                    <div class="form-outline form-white mb-4">
                      <input type="email" class="form-control form-control-lg tertiary-color-2 border-0" placeholder="Email" name="email"/>
                    </div>

                    <div class="form-outline form-white mb-4">
                        <input type="password" class="form-control form-control-lg tertiary-color-2 border-0" placeholder="Password" name="password"/>
                    </div>
    
                    <button class="btn btn-lg px-5 category-hover text-dark border border-1 border-dark mt-3" type="submit">Login</button>
                </form>
              </div>
  
              <div>
                <p class="mb-0">Don't have an account? <a href="/register" class="fw-bold">Register</a></p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


<!-- footer -->
@include("partials.footer")