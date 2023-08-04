<!-- header -->
@include("partials.header")

<div class="table-responsive categories">
    <table class="table container my-5">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Size</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>
                            <img src="{{ $item->product_img }}" alt="" style="height: 50px; aspect-ratio: 4/3; object-fit: cover">
                        </td>
                        <td>
                            {{ $item->product_name }}
                        </td>
                        <td>
                            {{ ucfirst($item->product_size) }}
                        </td>
                        <td>
                            $<span class="iprice">{{ $item->product_price }}</span>.00
                        </td>
                        <td>
                            <form action="/update/quantity/{{ $item->id }}" method="POST">
                                @csrf
                                <input type="number" class="form-control tertiary-color-2 iquantity" min="1" value="{{ $item->quantity }}" name="quantity{{ $item->id }}" onchange="this.form.submit()" id="total_quantity{{ $item->id }}">
                            </form>
                        </td>
                        <td>
                            $<span class="item_total"></span>.00
                        </td>
                        <td>
                            <a href="/delete/{{$item->id}}" class="btn btn-danger m-2">Delete</a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4"></td>
                    <td class="text-end">Total: </td>
                    <td id="total_price"></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td class="text-end">Address:</td>
                    <td><i>{{ auth()->user()->address }}</i></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td class="text-end">Payment Method:</td>
                    <td><i>Cash On Delivery</i></td>
                    <td>
                        <form action="/checkout/{{ auth()->user()->id }}" method="POST">
                            @csrf
                            <button class="btn btn-success {{ count($data) <= 0 ? 'disabled' : '' }}" type="submit">Checkout</button>
                        </form>
                    </td>
                </tr>
                
        </tbody>
      </table>
    </div>

    <script>
        let price = document.getElementsByClassName('iprice');
        let quantity = document.getElementsByClassName('iquantity');
        let item_total = document.getElementsByClassName('item_total');   
        let total_price = document.getElementById('total_price');
        let totalval = document.getElementById('total');
        
        let total = 0;
        
        function updatePrice(){
            total = 0;
            for(let i = 0; i < price.length; i++){
                item_total[i].innerHTML = quantity[i].value * parseInt(price[i].innerHTML);
                total =  total + quantity[i].value * parseInt(price[i].innerHTML);
            }

            total_price.innerHTML = "$"+ total + ".00";
            totalval.value = total;
        }

        updatePrice();

    </script>

<!-- footer -->
@include("partials.footer")