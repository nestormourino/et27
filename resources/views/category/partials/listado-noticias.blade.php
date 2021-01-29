<div class="bg-white overflow-hidden shadow sm:rounded-lg p-4 mb-2 mt-2">
    <a href="{{route('post.show',$post)}}">
        <span class="text-gray-800 font-bold text-lg">{{$post->materia->name}}: {{$post->name}}<br><center class="text-gray-600 text-base">({{date('d-m-Y', strtotime($post->updated_at))}})</center></span>
        <span class="text-gray-800 text-base">{{$post->extract}}</span>
    </a>
</div>