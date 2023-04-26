@extends ('layouts.main')

@section('content')
<div class="post_section">
            
                <span class="comment"><a href="#comment_section">{{ count($comments) }}</a></span>
            
                <h2>{{ $post -> header }}</h2>
    
                {{ $post -> created_at }} | <strong>Author:</strong> {{ $post -> author }}
                
                <p class="post">{{ $post -> description }}</p>
                
		  </div>
            
            <div class="comment_tab">
           	    Comments           </div>
            
      <div id="comment_section">
                <ol class="comments first_level">

                        <li>
                        @foreach($comments as $comment)
                            <div class="comment_box commentbox1">
                                
                                <div class="comment_text">
                                    <div class="comment_author">{{ $comment -> author }}</div>
                                    <p>{{ $comment -> created_at }}</p>
                                    <p class="post">{{ $comment -> description }}</p>
                                </div>
                                
                                <div class="cleaner"></div>
                            </div>                        
                        @endforeach
                            
                        </li>
                        
                    </ol>
                </div>
                
                <div id="comment_form">
                    <h3>Leave a comment</h3>
                    
              		<form action="#" method="post">
                      @csrf
                        <div class="form_row">
                            <label><strong>Name</strong> (required)</label>
           					<br />
                            <input type="text" name="author" />
                        </div>
                        @if ($errors->has('author'))
                        <span class="text-danger">{{ $errors->first('author') }}</span>
                        @endif
                        <div class="form_row">
                            <label><strong>Comment</strong></label>
           					<br />
                            <textarea  name="description" rows="" cols=""></textarea>
                        </div>
                        @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                        <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                    </form>
                    
                </div>
            
		</div> <!-- end of main -->
@endsection