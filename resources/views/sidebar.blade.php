<div class="list-group">
    @foreach ($posts as $post)
    <a href="{{ route('posts.show', $post->id) }}" class="list-group-item">
        {{ $post->title }}
    </a>
    @endforeach
</div>