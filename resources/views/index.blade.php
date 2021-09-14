<x-layout>
    <x-slot name="title">
        Hello
    </x-slot>

    <h1>
        <span>Hello</span>
        <a href="{{ route('posts.create') }}">追加</a>
    </h1>
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>空っぽです</li>
        @endforelse
    </ul>
</x-layout>
