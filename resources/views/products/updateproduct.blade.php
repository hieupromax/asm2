@include("partials.header")
<!-- Modal -->

<link rel="stylesheet" href="../style.css">

<div class="container categories mt-5 update-container">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
        </div>
        <form action="/update/{{ $id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <input type="text" class="form-control my-2" placeholder="Full name" value="{{ $data[0]->product_name }}" name="product_name" required>
                <textarea name="product_description" id="" cols="30" rows="10" class="form-control my-2" placeholder="Description">{{ $data[0]->product_description }}</textarea>
                <select name="product_category" class="my-2 form-select" required>
                    <option value="{{ $data[0]->product_category }}">{{ ucfirst($data[0]->product_category) }}</option>
                    <option value="drinks">Drinks</option>
                    <option value="snacks">Snacks</option>
                    <option value="sweets">Sweets</option>
                </select>
                <select name="product_size" class="form-select my-2" required>
                  <option value="{{ $data[0]->product_size }}">{{ ucfirst($data[0]->product_size) }}</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
              </select>
                <input type="number" class="form-control my-2" placeholder="Price" name="product_price" value="{{ $data[0]->product_price }}" required>
                <input type="text" class="form-control my-2" placeholder="Image URL" name="product_img" value="{{ $data[0]->product_img }}" required>
            </div>
            <div class="modal-footer gap-2">
                <a href="/" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
    </div>
</div>
@include("partials.footer")