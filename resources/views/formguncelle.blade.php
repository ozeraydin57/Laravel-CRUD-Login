@extends('layouts.app')

@section('content')
<form action="/yaziguncelle/{{$yazibul->id}}" method="post">
    @csrf
    <div class="form-group">
        <label for="my-input">Yazı başlığı giriniz</label>
    <input class="form-control" type="text" name="Baslik" value="{{$yazibul->Baslik}}">
    </div>

    <div class="form-group">
        <label for="my-input">Yazı içerik giriniz</label>
        <textarea name="Icerik" cols="30" rows="10">{{$yazibul->Icerik}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Güncelle</button>
</form>
@endsection
