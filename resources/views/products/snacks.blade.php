<!-- header -->
@include("partials.header")

<section class="categories">
    <div class="container my-5">
        <h3 class="fw-bold p-3">SNACKS</h3>
        <div class="row justify-content-start flex-wrap">
            <x-card :data="$data"/>
        </div>
    </div>
    <div class="mb-5">
        {{ $data->links() }}
    </div>
</section>

<!-- footer -->
@include("partials.footer")