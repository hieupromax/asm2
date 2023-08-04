<!-- TOP SECTION -->
<section class="d-flex justify-content-center align-items-center mt-5" style="margin-bottom: 1.5%">
    <div id="carouselExampleAutoplaying" class="carousel slide tertiary-color-2 container p-0" data-bs-ride="carousel">
    <div class="carousel-inner" style="aspect-ratio: 16/9">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1507120366498-4656eaece7fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" class="d-block w-100" style="height: 100%; object-fit:cover;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="d-block w-100" style="height: 100%; object-fit:cover;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1602663491496-73f07481dbea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="d-block w-100" style="height: 100%; object-fit:cover;" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>

<!-- CATEGORY LIST -->
<section class="mb-5 p-0">
    <div class="container p-0">
        <h3 class="fw-bold p-3">CATEGORIES</h3>
        <div class="row justify-content-between p-0 m-0">
            <div class="p-0" style="width: 32%;">
                <a href="/drinks" class="d-flex justify-content-center align-items-center flex-column tertiary-color-1 text-black category-hover" style="text-decoration: none;">
                    <img src="assets/drinks.png" class="w-75 h-100" alt="Drinks" style="object-fit: contain; aspect-ratio: 9/16">
                    <h4 class="pb-4">Drinks</h4>
                </a>
            </div>
            <div class="p-0" style="width: 32%;">
                <a href="/snacks" class="d-flex justify-content-center align-items-center flex-column tertiary-color-1 text-black category-hover" style="text-decoration: none;">
                    <img src="assets/snacks.png" class="w-75 h-100" alt="Snacks" style="object-fit: contain; aspect-ratio: 9/16">
                    <h4 class="pb-4">Snacks</h4>
                </a>
            </div>
            <div class="p-0" style="width: 32%;">
                <a href="/sweets" class="d-flex justify-content-center align-items-center flex-column tertiary-color-1 text-black category-hover" style="text-decoration: none;">
                    <img src="assets/sweets.png" class="w-75 h-100" alt="Sweets" style="object-fit: contain; aspect-ratio: 9/16">
                    <h4 class="pb-4">Sweets</h4>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-5">
        <h3 class="fw-bold p-3">PRODUCTS</h3>
        <div class="row justify-content-start flex-wrap">
            <x-card :data="$data"/>
        </div>
    </div>
    <div class="mb-5 text-center">
        <a href="/products" class="btn btn-lg secondary-color-2 text-white px-3">View more</a>
    </div>
</section>