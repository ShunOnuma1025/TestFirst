<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>サイトタイトル</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/common.js')}}" type="text/javascript"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
    <script src="https://unpkg.com/youtube-vue3" type="text/javascript"></script> <!-- youtubeのAPIを使うため -->
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
</head>

<body>
    <!----- ヘッダー ----->
    <header>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" value="ログアウト">
        </form>
    </header>
    <nav>
        <ul class="header__menu">
            <li class="mega__menu">
                <a href="#">MEGA</a>
                <ul class="mega__menu-second">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                </ul>
            </li>
            <li class="mega__menu">
                <a href="#">MEGA</a>
                <ul class="mega__menu-second">
                    <li><a href="{{ route('video') }}">VIDEO</a></li>
                </ul>
            </li>
            <li class="mega__menu">
                <a href="#">MEGA</a>
                <ul class="mega__menu-second">
                    <li><a href="{{ route('record')}}">RECORD</a></li>
                </ul>
            </li>
            <li class="mega__menu">
                <a href="#">MEGA</a>
                <ul class="mega__menu-second">
                    <li><a href="{{ route('spi') }}">SPI</a></li>
                </ul>
            </li>
        </ul>
        <strong>ようこそ{{ $username }}さん</strong>
    </nav>
    <!----- ヘッダー END ----->

    <!----- メインコンテンツ ----->

    <!----- メインコンテンツ END ----->
    @yield('content')
    <!----- フッター ----->
    <footer>フッター</footer>
    <!----- フッター END ----->
</body>

</html>