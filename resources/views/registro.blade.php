@extends('layouts.layoutprincipal')

@section('titulo')
Registro
@endsection

@section('contenido')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-6">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="img-fluid hover-shadow" alt="Los Angeles Skyscrapers" />
        </div>

        <div class="col-6">
            <form>
                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" id="registerUsername" class="form-control" />
                    <label class="form-label" for="registerUsername">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form1Example2" class="form-control" />
                    <label class="form-label" for="form1Example2">Password</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form1Example1" class="form-control" />
                    <label class="form-label" for="form1Example1">Email address</label>
                </div>

                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form5Example1" class="form-control" />
                    <label class="form-label" for="form5Example1">Name</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block" ><i class="fas fa-pencil-alt"></i> Sign in</button>
            </form>
        </div>
    </div>

</div>

@endsection