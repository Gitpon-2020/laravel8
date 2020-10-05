<div>
    @foreach ($posts as $post)
        <div class="bg-white shadow-xl p-4 my-4 rounded-md">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <div>
                <span>{{ $post->body }}</span>
            </div>
        </div>
    @endforeach
</div>
