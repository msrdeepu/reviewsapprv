<div class='container'>
    <div class='row'>
    <!-- Quiz ID (Hidden) -->
    <input type="hidden" name="quiz_id" value="{{ $quiz_id }}">

    <!-- Question -->
    <div class="form-group col-12">
        <label for="question">Question</label>

        <textarea name="question" id="question" class="form-control summernote" required>{{ $data->question }}</textarea>
    </div>

    <!-- Options -->
    <div class="form-group col-md-6">
        <label for="option_1">Option 1</label>
   
         <textarea name="option_1" id="option_1" class="form-control summernote" required>{{ $data->option_1 }}</textarea>
    </div>

    <div class="form-group col-md-6">
        <label for="option_2">Option 2</label>
         <textarea name="option_2" id="option_2" class="form-control summernote" required>{{ $data->option_2 }}</textarea>
    </div>

    <div class="form-group col-md-6">
        <label for="option_3">Option 3</label>
       <textarea name="option_3" id="option_3" class="form-control summernote" required>{{ $data->option_3 }}</textarea>
    </div>

    <div class="form-group col-md-6">
        <label for="option_4">Option 4</label>
       <textarea name="option_4" id="option_4" class="form-control summernote" required>{{ $data->option_4 }}</textarea>
    </div>

    <!-- Correct Answer -->
    <div class="form-group col-md-6">
        <label for="answer">Correct Answer</label>
        <select name="answer" id="answer" class="form-control" required>
            <option value="">Select the correct answer</option>
           @foreach($optioncount as $item)
           <option value="{{$item->value}}">{{$item->name}}</option>
           @endforeach
        </select>
    </div>

    <!-- Marks -->
    <div class="form-group col-md-6">
        <label for="marks">Marks</label>
        <input type="number" name="marks" id="marks" class="form-control" value="{{ $data->marks }}" min="1" required>
    </div>

    <!-- Hint -->
    <div class="form-group col-12">
        <label for="hint">Hint (Optional)</label>
        <textarea name="hint" id="hint" class="form-control">{{ $data->hint }}</textarea>
    </div>

    <!-- Explanation -->
    <div class="form-group col-12">
        <label for="explanation">Explanation (Optional)</label>
        <textarea name="explanation" id="explanation" class="form-control">{{ $data->explanation }}</textarea>
    </div>


  </div>
</div>