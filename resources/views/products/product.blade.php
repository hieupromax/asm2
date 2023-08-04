<!-- header -->
@include("partials.header")
<link rel="stylesheet" href="../style.css">

<section class="container my-5">

    @if(count($data))
        <x-productform :data="$data"/> 
    @else
        <h5 class="alert tertiary-color-1">No data found.</h5>
    @endif

    
</section>

<section class="categories m-0">
    <div class="container my-5">
        <h3 class="fw-bold p-3">LATEST</h3>
        <div class="row justify-content-start flex-wrap">
            <x-card :data="$data2"/>
        </div>
    </div>
    <div class="text-center mb-5">
        <a href="/products" class="btn btn-lg secondary-color-2 text-white px-3">View more</a>
    </div>
</section>

<!-- footer -->
@include("partials.footer")