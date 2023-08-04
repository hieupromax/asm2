@auth
    <div class="dropdown d-none d-lg-flex">
        <a href="#" class="dropdown-toggle text-white text-decoration-none" data-bs-toggle="dropdown">{{ auth()->user()->name  !== "" ? auth()->user()->name : 'Unknown'}}</a>
        <div class="dropdown-menu">
            <a href="/profile" class="dropdown-item">Profile</a>
            <form action="/logout" method="POST" class="dropdown-item">
                @csrf
                <li>
                    <button class="nav-link p-0 text-danger" type="submit">Logout</button>
                </li>
            </form>
        </div>
    </div>

    <li class="nav-item rounded w-100 d-block d-lg-none">
        <a href="/profile" class="nav-link text-white px-lg-3 px-0" style="clear: both; display: inline-block; white-space: nowrap;">{{ auth()->user()->name  !== "" ? auth()->user()->name : 'Unknown'}}</a>
    </li>
    
    <form action="/logout" method="POST" class="w-100 d-block d-lg-none">
        @csrf
        <li class="nav-item w-100">
            <button class="nav-link text-danger" type="submit">Logout</button>
        </li>
    </form>

    @if(auth()->user()->type === "user")
        <li class="nav-item w-100">
            <a class="nav-link text-white position-relative" href="/cart">
                <iconify-icon icon="material-symbols:shopping-cart-rounded" style="color: white;" width="25"></iconify-icon>
                <span class="position-absolute top-0 start-25 translate-middle badge">
                    {{ $cart }}
                </span>
            </a>
        </li>
    @endif

@else
    <li class="nav-item w-100">
        <a class="nav-link text-white" href="/register">Register</a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link text-white" href="/login">Login</a>
    </li>

    <li class="nav-item w-100">
        <a class="nav-link text-white position-relative" href="/login">
            <iconify-icon icon="material-symbols:shopping-cart-rounded" style="color: white;" width="25"></iconify-icon>
            <span class="position-absolute top-0 start-25 translate-middle badge">
                0
            </span>
        </a>
    </li>
@endauth