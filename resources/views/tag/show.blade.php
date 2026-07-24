<x-layout :title="$PageTitle">
        <h1 class="text-3xl font-bold underline">show tag</h1>
        <p>{{ $tag->title }}</p>

        <h1>related posts</h1>
        <ul>
            @forelse ($tag->posts as $post)
                <li>
                    <strong>{{ $post->title }}</strong>
                    <p>Author: {{ $post->author }}</p>
                    <a href="{{ route('blog.show', $post->id) }}">view full post</a>
                </li>
            @empty
            <p>no related posts</p>
        @endforelse
        </ul>
</x-layout>