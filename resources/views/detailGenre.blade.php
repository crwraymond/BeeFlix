@extends('layout')
@section('container')
<div>
    <h2 style="font-size: 25pt;line-height: 0.5px;">{{$genre->name}}</h2>
    <div class="flexbox">
        @foreach($movie as $m)
            <div class="listfilm">
                <div><img src="../../{{$m->photo}}"></div>
                <div class="ttl">{{$m->title}}</div>
                <div class="btnLF"><a class="LF" href="/detail/{{($m->id)}}">Lihat Film</a></div>
            </div>
        @endforeach
    </div>
</div>
@endsection   