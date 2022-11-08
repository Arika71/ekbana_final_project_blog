

<div class="mb-3">
    <label for="name" class="col-md-3 col-form-label"> Name</label>
    <div class="col-md-12">
      <input type="text" name="name" value="{{old('name', $category->name)}}" id="name" class="form-control @error('name') is-invalid @enderror">
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="type" class="col-md-3 col-form-label"> Type</label>
    <div class="col-md-12">
      <input type="text" name="type" value="{{old('type', $category->type)}}" id="type" class="form-control @error('type') is-invalid @enderror">
      @error('type')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="description" class="col-md-3 col-form-label"> Description</label>
    <div class="col-md-12">
        <textarea class="form-control" placeholder="Enter Category Description" name="description" id="description" rows="4">{{old('description',$category->description)}} </textarea>
      @error('description')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>
 

            <button class="btn btn-primary d-inline-flex align-items-center me-2 " type="submit" >
                {{$category->exists ? 'Update' : 'Save'}}
            </button>
            <a class="btn btn-danger d-inline-flex align-items-center me-2 " href="{{route('category.index')}}" >
                
                Cancel
            </a>