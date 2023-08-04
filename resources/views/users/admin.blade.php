<div class="container mt-5 d-flex justify-content-between">
    <button type="button" class="btn btn-success d-flex gap-2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="clear: both; display: inline-block; white-space: nowrap;">Add Product<span><i class="fa fa-regular fa-plus"></i></span></button>
    <form class="form-inline my-2 my-lg-0 d-flex gap-2" action="/" method="GET">
        <input class="form-control mr-sm-2 tertiary-color-2 text-dark border-dark" value="{{ request()->query('search-edit') !== '' ? request()->query('search-edit') : '' }}" type="search" placeholder="Search" aria-label="Search" name="search-edit">
        <button class="btn text-white my-2 my-sm-0 secondary-color-2 border-0" type="submit">Search</button>
    </form>
</div>
<div class="table-responsive">
<table class="table container my-5">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <td><img src="{{ $item->product_img }}" alt="" style="height: 50px; aspect-ratio: 4/3; object-fit: cover"></td>
                <td>{{ $item->product_name }}</td>
                <td>{{ ucfirst($item->product_category) }}</td>
                <td>{{ $item->product_price }}</td>
                <td>
                    <a class="btn btn-primary m-2" href="/update/{{ $item->id }}">Update</a>
                    <form action="/remove/{{ $item->id }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger m-2">Remove</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
  {{ $data->appends([ 'search' => request()->query('search-edit') ])->links() }}