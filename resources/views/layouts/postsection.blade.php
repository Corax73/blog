@extends ('layouts.main')

@section('content')
@foreach($posts as $post)
<div class="post_section">
            
                <span class="comment"><a href="{{ route('showPost', $post -> id) }}">{{ count($post -> comments) }}</a></span>
            
                <h2><a href="{{ route('showPost', $post -> id) }}">{{ $post -> header }}</a></h2>
                
                {{ $post -> created_at }}  | <strong>Author:</strong> {{ $post -> author }}
                
</div>
@endforeach
@endsection