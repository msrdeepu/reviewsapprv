<div class="container">
    <div class="row mt-3">

        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ $data->name }}">
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
