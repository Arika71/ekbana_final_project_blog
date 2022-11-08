<div class="mb-3">
    <label for="name" class="col-md-3 col-form-label"> Name</label>
    <div class="col-md-12">
      <input type="text" name="name" value="{{old('name', $admin->name)}}" id="name" class="form-control @error('name') is-invalid @enderror">
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="name" class="col-md-3 col-form-label"> User Name</label>
    <div class="col-md-12">
      <input type="text" name="userName" value="{{old('userName', $admin->userName)}}" id="name" class="form-control @error('userName') is-invalid @enderror">
      @error('userName')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="name" class="col-md-3 col-form-label"> Email</label>
    <div class="col-md-12">
      <input type="email" name="email" value="{{old('email', $admin->email)}}" id="name" class="form-control @error('email') is-invalid @enderror">
      @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="name" class="col-md-3 col-form-label"> Password</label>
    <div class="col-md-12">
      <input type="password" name="password" value="{{old('password', $admin->password)}}" id="name" class="form-control @error('password') is-invalid @enderror">
      @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="type" class="col-md-3 col-form-label"> Contact</label>
    <div class="col-md-12">
      <input type="text" name="contact" value="{{old('contact', $admin->contact)}}" id="type" class="form-control @error('contact') is-invalid @enderror">
      @error('contact')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="type" class="col-md-3 col-form-label"> address</label>
    <div class="col-md-12">
      <input type="text" name="address" value="{{old('address', $admin->address)}}" id="type" class="form-control @error('address') is-invalid @enderror">
      @error('address')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="type" class="col-md-3 col-form-label"> Gender</label>
    <div class="col-md-12">
      <select type="text" name="gender" value="{{old('gender', $admin->gender)}}" id="type" class="form-control @error('gender') is-invalid @enderror">
        <option selected>Choose a Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
        @error('gender')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="type" class="col-md-3 col-form-label"> Profile Picture</label>
    <div class="col-md-12">
      <input type="file" name="picture" value="{{old('picture', $admin->picture)}}" id="type" class="form-control @error('picture') is-invalid @enderror">
      @error('picture')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>


<input type="hidden" value="1" name="role">
<br>

            <button class="btn btn-primary d-inline-flex align-items-center me-2 " type="submit" >
                {{$admin->exists ? 'Update' : 'Save'}}
            </button>
            <a class="btn btn-danger d-inline-flex align-items-center me-2 " href="{{route('admin.index')}}" >
                
                Cancel
            </a>