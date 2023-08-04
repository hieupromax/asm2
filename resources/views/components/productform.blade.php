@foreach ($data as $item)
        <div class="row">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100" src="{{ $item->product_img }}" style="height: 70vh; object-fit: cover;" alt="">
            </div>
            <div class="col-lg-7 col-md-12 col-12">
                <h6 class="mt-4">Home / {{ ucfirst($item->product_category) }}</h6>
                <h3 class="mt-4 fw-bold">{{ $item->product_name }}</h3>
                <h1 class="mt-3 mb-4 fw-bold">${{  $item->product_price }}.00</h1>
                <form action="/add-cart" method="POST">
                    @csrf
                    @auth
                    <input name="product_id" type="hidden" value="{{ $item->id }}">
                    <input name="user_id" type="hidden" value="{{ auth()->user()->id }}">
                    @endauth
                    <div class="d-flex gap-2 align-items-center mb-2">
                        <label for="" style="width: 100px;">Size: </label>
                        <h5>{{ucfirst($item->product_size)}}</h5>
                    </div>
                    <div class="d-flex gap-2 align-items-start flex-column">
                        <div class="d-flex gap-2 align-items-center">
                            <label for="" style="width: 100px;">Quantity: </label>
                                <input name="quantity" type="number" class="border-0 py-2 px-3 outine-0 rounded tertiary-color-1" style="outline: none; width: 70px;" value="1" min="1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg secondary-color-2 text-white mt-4">Add to cart</button>
                </form>
                <h4 class="mt-5 mb-3">Product Description</h4>
                <p>{{ $item->product_description }}</p>
            </div>
        </div>
    @endforeach