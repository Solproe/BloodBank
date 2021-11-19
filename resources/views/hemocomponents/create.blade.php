@extends('layoust.templates')

@section('title', 'hemocomponents create')

@section('content')

    <h1>page to create blood components for the BloodBank system</h1>

    <form action="{{route('hemocomponents.store')}}" method="POST">
        @csrf

        <label >
            Codigó de componente:
            <br>
            <input type="text" name ="COD_COMPONENT" value="{{old('COD_COMPONENT')}}">
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
            <textarea name="DES_COMPONENT" rows="1">{{old('DES_COMPONENT')}}</textarea>
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
            <input type="text" name="LOG_ACTIVE"  value="{{old('LOG_ACTIVE')}}">
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
            <input type="text" name="COD_LABELTYPE" value="{{old('COD_LABELTYPE')}}">
        </label>

        @error('COD_LABELTYPE')
            <br>
                <small>*{{$message}}</small>
            <br>
            
        @enderror

        <br>
        <button type="submit">Enviar</button>
        
    </form>
@endsection



