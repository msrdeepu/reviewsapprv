<div class="container">
    <div class="row mt-3">

        <div class="form-group col-md-6">
            <label for="subject">Name</label>
            <input type="text" class="form-control" id="subject" name="subject" required value="{{ $data->subject }}">
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
