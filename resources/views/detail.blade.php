@extends('layout')
@section('container')
    <div class="backgroundContent">
        <div class="content">
            <div class="flexbox">
                <div class="fotodetail">
                    <img src="../{{$movie->photo}}">
                </div>

                <div class="descbox">
                    <div class="titleDetail">{{$movie->title}}</div>
                    <div class="star" style="display: inline-flex">
                        @for ($i = 0; $i < 5; $i++)
                            @if($i< $movie->rating)
                                <img src="/star1.png" style="width: 25px;height: 25px;">
                            @else
                                <img src="/star2.png" style="width: 25px;height: 25px;">
                            @endif
                        @endfor
                    </div>
                    <div>{{$movie->description}}<div><br>
                    <div>Kategori: &nbsp;
                        <a href="detailgenre/{{$genre->name}}">{{$genre->name}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="episodes">
            <div class="epsDetail"><a>EPISODE</a></div>
            <div>
                <table>
                    <tr>
                        <th>Episode</th>
                        <th style="width: 300px;">Title</th>
                    </tr>
                    @foreach ($episode as $e)
                        <tr>
                            <th>{{$e->episode}}</th>
                            <th>{{$e->title}}</th>
                        </tr>
                    @endforeach
                </table>
            </div>
            <br>
            {{$episode->links()}}
        </div>
    </div>
@endsection   