<div class="container">
    <div class="row mt-3">
        <div class="form-group col-md-6">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type">
                <option value="">-- Choose --</option>
                @foreach ($list as $item)
                    <option value="{{ $item->value }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required
                value="{{ $data->name }}">
        </div>
        <div class="form-group col-md-6">
            <label for="value">Value</label>
            <input type="text" class="form-control" id="value" name="value" required
                value="{{ $data->value }}">
        </div>
        <div class="form-group col-md-6">
            <label for="dorder">Display Order</label>
            <input type="text" class="form-control" id="dorder" name="dorder" required
                value="{{ $data->dorder }}">
        </div>
        <div class="form-group col-md-6">
            <label for="pcode">Parent Code</label>
            <input type="text" class="form-control" id="pcode" name="pcode" value="{{ $data->pcode }}">
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
    </div>
</div>
