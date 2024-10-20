<div class="container">
    <div class="row mt-3">

        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ $data->name }}">
            
        </div>
 
         <div class="form-group col-md-6">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" value="">
            <label for="current_image">Current Image</label><br>
        @if($data->image)
            <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}" width="150">
        @else
            <p>No image available</p>
        @endif
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
            <label for="subcategory_id">Subategory</label>
            <select class="form-control" id="subcategory_id" name="subcategory_id">
                <option value="">-- Choose --</option>
                @foreach ($subcategories as $item)
                    <option value="{{ $item->id }}">{{ $item->subcategory }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="childcategory_id">Childategory</label>
            <select class="form-control" id="childcategory_id" name="childcategory_id">
                <option value="">-- Choose --</option>
                @foreach ($childcategories as $item)
                    <option value="{{ $item->id }}">{{ $item->childcategory }}</option>
                @endforeach
            </select>
        </div>
         
          <div class="form-group col-md-6">
            <label for="questions">Questions</label>
            <input type="number" class="form-control" id="questions" name="questions" required value="{{ $data->questions }}">
        </div>
         <div class="form-group col-md-6">
            <label for="marks">Marks</label>
            <input type="number" class="form-control" id="marks" name="marks" required value="{{ $data->marks }}">
        </div>
        <div class="form-group col-md-6">
            <label for="duration">Duration (Min.)</label>
            <input type="number" class="form-control" id="duration" name="duration" required value="{{ $data->duration }}">
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
            <label for="metadata">Metadata</label>
            <textarea class="form-control" id="metadata" name="metadata">{{ $data->metadata }}</textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="keywords">Keywords</label>
            <textarea class="form-control" id="keywords" name="keywords">{{ $data->keywords }}</textarea>
        </div>
         <div class="form-group col-md-6">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $data->description }}</textarea>
        </div>

    </div>
</div>
