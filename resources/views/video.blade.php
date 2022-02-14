@extends('layouts.index')

@section('content')

@foreach($videos as $video)
<!-- youtube高速表示のため記載 -->
<script>
    function init() {
        var vidDefer = document.getElementsByTagName('iframe');
        for (var i = 0; i < vidDefer.length; i++) {
            if (vidDefer[i].getAttribute('data-src')) {
                vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
            }
        }
    }
    window.onload = init;
</script>

<!-- <div id="movie_{{$video->video_id}}"></div> -->
<iframe width="560" height="315" src="" data-src="https://www.youtube.com/embed/{{$video->video_id}}?controls=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p>{{ $video->comment }}</p>
<p>{{ $video->tag }}</p>


<!-- <script>
    //IFrame Player API の読み込み
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    //YouTubeの埋め込み
    function onYouTubeIframeAPIReady() {
        ytPlayer = new YT.Player(
            'movie_{{$video->video_id}}', {
                width: 660,
                height: 450,
                videoId: '{{ $video->video_id }}',
                playerVars: {
                    rel: 0, //再生動画と同じチャンネルから関連動画を選択
                    modestbranding: 1, //YouTubeロゴを表示しない
                    loop: 1,
                    // playlist: ytData[i]['id'] //youtubeのID
                }
            }
        );

    }
</script> -->
@endforeach


@endsection