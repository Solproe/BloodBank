@extends('layoust.templates')

@section('title', 'hemocomponents edit')

@section('content')
    <h1>page to edit blood components for the BloodBank system</h1>

    <form action="{{route('hemocomponents.update', $component->ID)}}" method="post">

        @csrf

        @method('put')

        <label >
            Codigó de componente:
            <br>
            <input type="text" name ="COD_COMPONENT" value="{{old('COD_COMPONENTE', $component->COD_COMPONENT)}}">
        </label>

        @error('COD_COMPONENT')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label >
            Descripción del componente:
            <br>
            <input type="text" name ="DES_COMPONENT" value="{{old('DES_COMPONENT', $component->DES_COMPONENT)}}">
        </label>

        @error('DES_COMPONENT')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label >
            Estado: 
            <br>
            <input type="text" name="LOG_ACTIVE" value="{{old('LOG_ACTIVE', $component->LOG_ACTIVE)}}">
        </label>

        @error('LOG_ACTIVE')
            <br>
                <small>*{{$message}}</small>
            <br>
            
        @enderror

        <br>
        <label >
            COD_LABELTYPE: 
            <br>
            <input type="text" name="COD_LABELTYPE" value="{{old('COD_LABELTYPE',$component->COD_LABELTYPE)}}">
        </label>

        @error('COD_LABELTYPE')
            <br>
                <small>*{${message}}</small>
            <br>
            
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection



    