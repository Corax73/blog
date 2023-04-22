@extends ('layouts.main')

@section('content')
<form action="{{ route('createPost') }}" method="post">
@csrf
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Author</span>
    <input name="author" type="text" class="form-control" placeholder="Author" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  @if ($errors->has('author'))
    <span class="text-danger">{{ $errors->first('author') }}</span>
  @endif
  <div class="input-group mb-3">
    <span class="input-group-text">Header</span>
    <input name="header" type="text" class="form-control" placeholder="Header" aria-label="Server">
  </div>
  @if ($errors->has('header'))
    <span class="text-danger">{{ $errors->first('header') }}</span>
  @endif

  <div class="input-group">
    <span class="input-group-text">Post text</span>
    <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
  </div>
  @if ($errors->has('description'))
    <span class="text-danger">{{ $errors->first('description') }}</span>
  @endif
  <p><input type="submit" name="action" class="b1" value="Save"></p>
</form>
@endsection