@extends('layouts.index')

@section('content')

<form method="POST" action="{{ route('store') }}">
    @csrf
    <textarea name="video_id" placeholder="11桁のid" cols="50" required></textarea>
    <textarea rows="6" cols="70" name="comment"></textarea>
    <select required name="tag">
        <option value="" name="">選択してください</option>
        <option value="★" name="tag">★</option>
        <option value="◎" name="tag">◎</option>
        <option value="〇" name="tag">〇</option>
        <option value="△" name="tag">△</option>

    </select>
    <button type="submit" name="add">
        追加
    </button>
</form>

@endsection