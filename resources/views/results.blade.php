


@foreach($results as $data)

<li class="col-lg-3 col-sm-4 col-xs-6">
    <a href="https://youtu.be/{{$data->id->videoId}}" title="{{$data->snippet->title}}">
        <img src="{{$data->snippet->thumbnails->default->url}}" alt="Barca" class="img-responsive" />
        <h2>{{$data->snippet->title}}</h2>
        <span class="glyphicon glyphicon-play-circle"></span>
        <span class="duration">03:15</span>
    </a>
</li>

@endforeach 

@if(count($results) == 0)
    <h2>No results</h2>
@endif