


@foreach($results as $data)
@if($data->id->kind == "youtube#video")
<li class="col-lg-6 col-sm-6 col-xs-6">
    <a href="https://youtu.be/{{$data->id->videoId}}" title="{{$data->snippet->title}}">
    <div class="row">
        <div class="col-md-4">
            <img src="{{$data->snippet->thumbnails->default->url}}" alt="Barca" class="img-responsive" height="130px"/>            
        </div>    
        <div class="col-md-8">
            <h2>{{$data->snippet->title}}</h2>
        </div>                
    </div>                    
    </a>
</li>
@endif
@endforeach 

@if(count($results) == 0)
    <h2>No results</h2>
@endif