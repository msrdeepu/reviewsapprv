<div class="container">
    <div class="row mt-3">

        <div class="form-group col-md-6">
            <label for="subcategory">Name</label>
            <input type="text" class="form-control" id="subcategory" name="subcategory" required value="{{ $data->subcategory }}">
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
            <label for="select2">Active</label>
            <select class="form-control" id="status" name="status">
                <option value="">-- Choose --</option>
                @foreach ($status as $item)
                    <option value="{{ $item->value }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-12">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $data->description }}</textarea>
        </div>




    </div>
</div>
