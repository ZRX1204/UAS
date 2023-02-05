@foreach ($projects as $project)
@foreach($project->images as $image)
<article>
    <img src="{{ asset('/storage/' . $image) }}" alt="{{$project->name}}">
</article>
@endforeach
@endforeach
