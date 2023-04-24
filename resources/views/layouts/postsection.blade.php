@extends ('layouts.main')

@section('content')
@foreach($posts as $post)
@php
$description = mb_strimwidth($post -> description, 0, 20, '...');
$comments = $post -> comments -> toArray()
@endphp
<div class="post_section">
            
                <span class="comment"><a href="{{ route('showPost', $post -> id) }}">{{ count($comments) }}</a></span>
            
                <h2><a href="{{ route('showPost', $post -> id) }}">{{ $post -> header }}</a></h2>
                
                {{ $post -> created_at }}  | <strong>Author:</strong> {{ $post -> author }}
                
                <p>{{ $description }}</p>
              <a href="{{ route('showPost', $post -> id) }}">Continue reading...</a>
                
</div>
@endforeach
@endsection