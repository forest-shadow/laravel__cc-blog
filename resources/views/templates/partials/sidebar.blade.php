<h3>Tags</h3>
@if ( $tags->count() )
    @foreach( $tags as $tag )
        <a href="{{ route('posts.tagged', $tag->slug ) }}" class="tag">{{ $tag->name }}</a>
    @endforeach
@else
    <p>There are no tags to display</p>
@endif