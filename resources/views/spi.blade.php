@extends('layouts.index')

@section('content')
<div class="percentage"></div>
<div class="percentage"></div>
<div id="text"></div>
<script>
    fetch("https:/numatube.microcms.io/api/v1/percentage/7w07pumdg", {
            headers: {
                "X-MICROCMS-API-KEY": "c856ca6ed1124672abc88fe54ca2a691a02a"
            }
        })
        .then(res => res.json())
        .then(json => {
            var percent = document.getElementsByClassName("percentage");
            percent[0].innerHTML = json.percentage;
            percent[1].innerHTML = json.percentage;
            document.getElementById("text").innerHTML = json.text;

        })
</script>
@endsection