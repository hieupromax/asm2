@include("partials.header")
<!-- edit form column -->
<div class="container d-flex justify-content-center align-items-center flex-column categories">
    <form class="tertiary-color-1 p-5 profile-form" role="form" method="POST" action="/update/{{ auth()->user()->id !== "" ? auth()->user()->id : ""}}">
        @csrf
        <h3>Update Personal Information</h3>
      <div class="form-group mt-3">
        <label class="control-label">Full name: *</label>
        <div>
          <input class="form-control" type="text" value="{{ auth()->user()->name !== "" ? auth()->user()->name : ""}}" name="name">
          @error('name')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
      </div>
      <div class="form-group mt-3">
        <label class="control-label">Email: *</label>
        <div>
          <input class="form-control" type="text" value="{{ auth()->user()->email !== "" ? auth()->user()->email : ""}}" name="email">
          @error('email')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
      </div>
      <div class="form-group mt-3">
        <label class="control-label">Address: *</label>
        <div>
          <input class="form-control" type="text" value="{{ auth()->user()->address !== "" ? auth()->user()->address : ""}}" name="address">
          @error('address')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
      </div>
      <div class="form-group mt-3">
        <label class="control-label">Old Password:</label>
        <div>
          <input class="form-control" type="password" value="" name="old_password">
        </div>
      </div>
      <div class="form-group mt-3">
        <label class="control-label">New Password:</label>
        <div>
          <input class="form-control" type="password" value="" name="new_password">
        </div>
      </div>
      <div class="form-group mt-3">
        <div>
          <input type="submit" class="btn btn-primary" value="Save Changes">
          <span></span>
          <input type="reset" class="btn btn-default" value="Reset">
        </div>
      </div>
    </form>
  </div>
@include("partials.footer")