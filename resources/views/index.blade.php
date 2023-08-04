<!-- header -->
@include("partials.header")

@include("partials.modal")

@auth
    @if(auth()->user()->type === "admin")
        @include("users.admin")
    @else
        @include("users.user")
    @endif
@else
    @include("users.user")
@endauth

<!-- footer -->
@include("partials.footer")