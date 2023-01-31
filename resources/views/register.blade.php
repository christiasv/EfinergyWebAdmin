@extends('layouts.register')
@section('registros')

    <h1>Registrar usuario</h1>

    <form method="POST" action="{{route('validar-registro')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input type="email" class="form-control" id="emailInput" name="email" aria-describedby="emailHelp" placeholder="Enter email" required autocomplete="disable">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password" required>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop
