@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco! Precisamos que você valide seu e-mail.</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos um e-mail para você com validação
                        </div>
                    @endif

                    Antes de prosseguir verifique o e-mail de validação de conta que enviamos.
                    <br>
                    Caso não tenha recebido, clique no link abaixo a seguir para receber um novo e-mail.
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui.</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
