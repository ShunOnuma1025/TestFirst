@extends('layouts.index')

@section('content')

<p>本文(ページごとに変えたい)</p>
<a href="{{ route('create') }}"> Laravel </a>
<article>
    <h1>タイトル</h1>
    <section>
        <h2>タイトル</h2>
        <p>コンテンツの内容</p>
    </section>
</article>
<div class="content">
    <a class="js-modal-open" href="">クリックでモーダルを表示</a>
</div>
<div class="modal js-modal">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <p>ここにモーダルウィンドウで表示したいコンテンツを入れます。モーダルウィンドウを閉じる場合は下の「閉じる」をクリックするか、背景の黒い部分をクリックしても閉じることができます。</p>
        <a class="js-modal-close" href="">閉じる</a>
    </div>
    <!--modal__inner-->
</div>
<!--modal-->

<div id="title"></div>
<div id="textarea"></div>

<div id="newtitle"></div>
<div id="intro"></div>
<img src="https://images.microcms-assets.io/assets/c3c8b5d91db9412581c4672769ab1558/d614f8e6710648febc35846c42dbd926/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%20(66).png" id="photo">
<script>
    fetch("https://numatube.microcms.io/api/v1/news/8wnmi8x0lyd", {
            headers: {
                "X-MICROCMS-API-KEY": "c856ca6ed1124672abc88fe54ca2a691a02a"
            }
        })
        .then(res => res.json())
        .then(json => {
            //結果を代入している
            document.getElementById("title").innerHTML = json.title;
            //jsonという箱の中の"title"という要素を表示する

            var elem = document.getElementById("textarea");
            for (i = 0; i < json.textarea.length; i++) {
                // if (json.textarea[i] != null) {
                elem.innerHTML += json.textarea[i].minititle + json.textarea[i].minitext;

            }
        })

    //ここからは別

    fetch("https://numatube.microcms.io/api/v1/intro/yzeql55fll?draftKey=252I2CL0ry", {
            headers: {
                "X-MICROCMS-API-KEY": "c856ca6ed1124672abc88fe54ca2a691a02a"
            }
        })
        .then(res => res.json())
        .then(json => {
            document.getElementById("newtitle").innerHTML = json.newtitle;
            document.getElementById("intro").innerHTML = json.intro;
            document.getElementById("photo").innerHTML = json.photo;
        })
</script>

@endsection