
    <footer class="container-fluid primary-color m-0 py-3">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><iconify-icon icon="ic:baseline-facebook" width="30"></iconify-icon></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><iconify-icon icon="ph:instagram-logo-fill" width="30"></iconify-icon></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><iconify-icon icon="mdi:twitter" width="30"></iconify-icon></a></li>
        </ul>
        <p class="text-center text-white m-0">© FoodKurt 2023. All rights reserved.</p>
    </footer>
    
    {{-- loader --}}
    <div class="loader-outside">
        <div class="loader-wrapper">
            <div class="stick"></div>
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
    </div>

    @if(session()->has('message'))
        @if(session('status') === "danger")
            <div id="snackbar" class="bg-danger show-snackbar">{{ session('message') }}</div>
        @else
            <div id="snackbar" class="bg-success show-snackbar">{{ session('message') }}</div>
        @endif

        <script>
            function myFunction() {
                var x = document.getElementById("snackbar");
                setTimeout(function(){
                    x.classList.remove("show-snackbar");
                }, 3000);
            }
            
            myFunction();
        </script>
    @endif
    
    {{-- jQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(window).on("load",function(){
            $(".loader-outside").fadeOut("slow");
        });
    </script>

    <!-- iconify -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
  </html>