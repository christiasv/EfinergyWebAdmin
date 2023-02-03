@extends('layouts.register')
@section('registros')

    <h1>Registrar usuario</h1>

    <form method="POST" action="{{route('validar-registro')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre Completo</label>
            <input type="text" class="form-control" id="nameInput" name="name" aria-describedby="nameHelp" placeholder="Ingrese el nombre completo del colaborador" required autocomplete="disable">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input type="email" class="form-control" id="emailInput" name="email" aria-describedby="emailHelp" placeholder="Ingrese el correo electronico" required autocomplete="disable">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    <br>
    <h1>Lista de usuarios</h1>
        <table class="list-group">
            <tr>
                <th class="active" aria-current="true">Nombre completo</th>
                <th class="active" aria-current="true">Correo</th>
            </tr>
            <tr>
                <td class="">Nombre completo</td>
                <td class=""></td>
            </tr>
        </table>
    </div>

@stop
