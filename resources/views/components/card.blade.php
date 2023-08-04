@if(count($data) > 0)
    @foreach ($data as $item)
        <a href="/products/{{$item->id}}" class="card col-lg-3 col-md-4 tertiary-color-1 rounded-0 border-1 px-0 text-decoration-none category-hover">
            <img src="{{$item->product_img}}" class="card-img-top rounded-0" alt="..." style="height: 300px !important; max-height: 300px !important; object-fit: cover">
            <h5 class="card-title px-3 pt-3 fw-bold">{{$item->product_name}}</h5>
            <p class="card-text px-3 position-relative desc-text">{{$item->product_description}}</p>
            <span class="px-3 pb-3">${{$item->product_price}}.00</span>
        </a>
    @endforeach
@else
    <h5 class="alert tertiary-color-1">No data found.</h5>
@endif