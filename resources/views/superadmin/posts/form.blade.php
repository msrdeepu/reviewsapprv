<div class="container">
    <div class="row mt-3">

        <div class="form-group col-md-6">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required value="{{ $data->title }}">
        </div>
        
        <div class="form-group col-md-6">
            <label for="seotitle">SEO Title</label>
            <input type="text" class="form-control" id="seotitle" name="seotitle" required value="{{ $data->seotitle }}">
        </div>
        
        <div class="form-group col-md-6">
            <label for="select2">Active</label>
            <select class="form-control" id="status" name="status">
                <option value="">-- Choose --</option>
                @foreach ($status as $item)
                    <option value="{{ $item->value }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
       
       
        <div class="form-group col-md-6">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id">
                <option value="">-- Choose --</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->category }}</option>
                @endforeach
            </select>
        </div>
        
        
        <div class="form-group col-md-6">
            <label for="subcategory_id">Sub Category</label>
            <select class="form-control" id="subcategory_id" name="subcategory_id">
                <option value="">-- Choose --</option>
                @foreach ($subcategories as $item)
                    <option value="{{ $item->id }}">{{ $item->subcategory }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group col-md-6">
            <label for="thumb">Thumbnail</label>
            <input type="file" class="form-control" id="thumb" name="thumb" value="">
            <label for="current_thumb">Current Image</label><br>
        @if($data->thumb)
            <img src="{{ asset('storage/' . $data->thumb) }}" alt="{{ $data->thumb }}" width="150">
        @else
            <p>No Thumbnail available</p>
        @endif
        </div>
        
         <div class="form-group col-md-6">
            <label for="featured_image">Featured Image</label>
            <input type="file" class="form-control" id="featured_image" name="featured_image" value="">
            <label for="current_thumb">Current Image</label><br>
        @if($data->featured_image)
            <img src="{{ asset('storage/' . $data->featured_image) }}" alt="{{ $data->featured_image }}" width="150">
        @else
            <p>No Featured Image available</p>
        @endif
        </div>
        
        
        <div class="form-group col-md-6">
            <label for="banner">Banner Image</label>
            <input type="file" class="form-control" id="banner" name="banner" value="">
            <label for="current_thumb">Banner Image</label><br>
        @if($data->featured_image)
            <img src="{{ asset('storage/' . $data->banner) }}" alt="{{ $data->banner }}" width="150">
        @else
            <p>No Banner available</p>
        @endif
        </div>
        
         
        
        <div class="form-group col-md-6">
            <label for="meta">Meta Data</label>
            <textarea class="form-control" id="meta"  name="meta">{{ $data->meta }}</textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="keywords">Keywords</label>
            <textarea class="form-control" id="keywords" name="keywords">{{ $data->keywords }}</textarea>
        </div>
        <div class="form-group col-12">
            <label for="body1">Body 1</label>
            <textarea class="form-control summernote" id="body1" name="body1">{{ $data->body1 }}</textarea>
        </div>
        <div class="form-group col-12">
            <label for="body2">Body 2</label>
            <textarea class="form-control summernote" id="body2" name="body2">{{ $data->body2 }}</textarea>
        </div>
        <div class="form-group col-12">
            <label for="body3">Body 3</label>
            <textarea class="form-control summernote" id="body3" name="body3">{{ $data->body3 }}</textarea>
        </div>
        <div class="form-group col-12">
            <label for="body4">Body 4</label>
            <textarea class="form-control summernote" id="body4" name="body4">{{ $data->body4 }}</textarea>
        </div>
        <div class="form-group col-12">
            <label for="body5">Body 5</label>
            <textarea class="form-control summernote" id="body5" name="body5">{{ $data->body5 }}</textarea>
        </div>
        <div class="form-group col-12">
            <label for="body6">Body 6</label>
            <textarea class="form-control summernote" id="body6" name="body6">{{ $data->body6 }}</textarea>
        </div>




    </div>
</div>
