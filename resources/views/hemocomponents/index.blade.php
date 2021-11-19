@extends('layoust.templates')

@section('title', 'hemocomponents')

@section('content')

    <h1>BloodBank system page of Components</h1>

    <a href="{{route('hemocomponents.create')}}">hemocomponents create</a>

    <ul>
        @foreach ($components as $component)
            <li>

                <a href="{{route('hemocomponents.show', $component->ID)}}">{{$component->DES_COMPONENT}}</a>
               
            </li>
        @endforeach
        
    </ul>
    {{$components->links()}}
    
@endsection
    
