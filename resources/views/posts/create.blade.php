<x-layout>
    <x-slot name="title">
        追加
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>追加</h1>

    <form method="post" action="{{ route('posts.store') }}">
        @csrf

        <label>
            Title
            <input type="text" name="title">
        </label>
        <label>
            Body
            <textarea name="body"></textarea>
        </label>
        <button>送信</button>
    </form>
</x-layout>
