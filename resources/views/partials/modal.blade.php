<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/add-product" method="POST">
            @csrf
            <div class="modal-body">
                <input type="text" class="form-control my-2" placeholder="Name" name="product_name" required>
                <textarea name="product_description" id="" cols="30" rows="10" class="form-control my-2" placeholder="Description"></textarea>
                <select name="product_category" class="my-2 form-select" required>
                    <option value="drinks">Drinks</option>
                    <option value="snacks">Snacks</option>
                    <option value="sweets">Sweets</option>
                </select>
                <select name="product_size" class="form-select my-2" required>
                  <option value="">Select Size</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
              </select>
                <input type="number" class="form-control my-2" placeholder="Price" name="product_price" required>
                <input type="text" class="form-control my-2" placeholder="Image URL" name="product_img" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
      </div>
    </div>
</div>