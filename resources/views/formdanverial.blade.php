@extends('layouts.app')

@section('content')

<form action="/formukaydet" method="post">
    @csrf
    <div class="form-group">
        <label for="Baslik">Yazı başlığı giriniz</label>
        <input class="form-control" type="text" name="Baslik" id="Baslik">
    </div>

    <div class="form-group">
        <label for="Icerik">Yazı içerik giriniz</label>
        <textarea class="form-control" name="Icerik" rows="10" id="Icerik"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Kaydet</button>
</form>
@endsection
