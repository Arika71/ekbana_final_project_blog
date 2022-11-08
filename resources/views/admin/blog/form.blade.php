

<div class="mb-3">
    <label for="name" class="col-md-3 col-form-label"> Title</label>
    <div class="col-md-12">
      <input type="text" name="title" value="{{old('title', $blogs->title)}}" id="name" class="form-control @error('title') is-invalid @enderror">
      @error('title')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="type" class="col-md-3 col-form-label"> Author</label>
    <div class="col-md-12">
      <input type="text" name="author" value="{{old('author', $blogs->author)}}" id="type" class="form-control @error('author') is-invalid @enderror">
      @error('author')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="type" class="col-md-3 col-form-label"> Category</label>
    <div class="col-md-12">
        <select name="category_id" id="company_id" class="form-control @error('category_id') is-invalid @enderror">
            
            @foreach ($category as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>
            @endforeach
            
          </select>
          @error('category_id')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
    </div>
</div>

<div class="mb-3">
    <label for="type" class="col-md-3 col-form-label"> Tags</label>
    <div class="col-md-12">
      <input type="text" name="tags" value="{{old('tags', $blogs->tags)}}" id="type" class="form-control @error('tags') is-invalid @enderror">
      @error('tags')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="type" class="col-md-3 col-form-label">Blog Image</label>
    <div class="col-md-12">
      <input type="File" name="image" value="{{old('image', $blogs->image)}}" id="type" class="form-control @error('image') is-invalid @enderror">
      @error('image')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>

<div class="mb-3">
    <label for="description" class="col-md-3 col-form-label"> Description</label>
    <div class="col-md-12">
        <textarea class="form-control" placeholder="Enter Category Description" name="description" id="description" rows="4">{{old('description',$blogs->description)}} </textarea>
      @error('description')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
</div>
 

            <button class="btn btn-primary d-inline-flex align-items-center me-2 " type="submit" >
                {{$blogs->exists ? 'Update' : 'Save'}}
            </button>
            <a class="btn btn-danger d-inline-flex align-items-center me-2 " href="{{route('blog.index')}}" >
                
                Cancel
            </a>