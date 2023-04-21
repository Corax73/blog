@extends ('layouts.main')

@section('content')
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Author</span>
  <input type="text" class="form-control" placeholder="Author" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Header</span>
  <input type="text" class="form-control" placeholder="Header" aria-label="Server">
</div>

<div class="input-group">
  <span class="input-group-text">Post text</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<p><input type="submit" name="action" class="b1" value="Save"></p>
@endsection