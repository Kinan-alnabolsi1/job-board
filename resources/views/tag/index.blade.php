<x-layout :title="$PageTitle">
    <h1  class="text-3xl font-bold underline">tag Page</h1>
    @foreach ($tags as $tag)
        <h1 class="text-2xl">{{ $tag->title }}</h1>
    @endforeach
</x-layout>