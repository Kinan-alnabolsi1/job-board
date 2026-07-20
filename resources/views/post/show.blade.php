<x-layout :title="$PageTitle">
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <p>{{ $post->author }}</p>
        <p>{{ $post->body }}</p>
        <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->content }} , {{ $comment->author }}</li>
            @endforeach
        </ul>
</x-layout>