@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <td>Başlık</td>
            <td>İçerik</td>
            <td>Okunma Sayısı</td>
            <td>İşlem</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($yazilar as $item)
            <tr>
                <td>
                    {{$item->Baslik}}
                </td>
                <td>
                    {{$item->Icerik}}
                </td>
                 <td>
                    {{$item->OkumaSayisi}}
                    {{-- {{$yazi->yazi_baslikkkk}} --}}
                </td>
            <td><a href="/formguncelle/{{$item->id}}">güncelle</a> - <a href="/yazisil/{{$item->id}}">sil</a></td>
            </tr>
        @endforeach



    </tbody>
</table>
@endsection
