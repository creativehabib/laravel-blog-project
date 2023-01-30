<div>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2">Title</th>
            <th class="border px-4 py-2">Content</th>
            <th class="border px-4 py-2">Created</th>
            <th class="border px-4 py-2">Action</th>
        </tr>
        @foreach ($posts as $post)
            
        
        <tr>
            <td class="border px-4 py-2">{{ Str::limit($post->title, 20)}}</td>
            <td class="border px-4 py-2">{{ Str::limit($post->description, 80) }}</td>
            <td class="border px-4 py-2">{{ date('F j, Y', strtotime($post->title)) }}</td>
            
            <td class="p-2 border-r text-left px-4">
                <div class="flex">
                    <a href="{{route('post.edit',$post->id)}}" class="bg-blue-500 p-2 inline-block text-white hover:shadow-lg text-xs font-thin">@include('components.icons.edit')</a>
                    <a href="{{route('post.show',$post->id)}}" class="bg-green-500 p-2 mx-3 inline-block text-white hover:shadow-lg text-xs font-thin">@include('components.icons.eye')</a>
                    <form wire:submit.prevent="postDelete({{$post->id}})" class="bg-red-500 p-2 inline-block text-white hover:shadow-lg text-xs font-thin">
                        <button onclick="return confirm('you are sure to delete!')" type="submit">@include('components.icons.trash')</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="mt-4">
        {{$posts->links()}}
    </div>
</div>
