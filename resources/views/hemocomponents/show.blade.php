@extends('layoust.templates')

@section('title', 'hemocomponents')

@section('content')

    <h1>Esta es la pagina donde se muestran hemocomponentes como: {{$component->DES_COMPONENT}} </h1>
    
    <a href="{{route('hemocomponents.index')}}">Volver a Pagina de Componentes</a>
    <br>

    <a href="{{route('hemocomponents.edit', $component->ID)}}">editar Componentes</a>

    <P><STRong>Codigo de Componente :</STRong>{{$component->COD_COMPONENT}}</P>

    <P>{{$component->DES_COMPONENT}}</P>
@endsection

