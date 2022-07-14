@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Подтвердите свою почту</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Ссылка была отправлена Вам на почту
                        </div>
                    @endif
                        Перед тем, как продолжить, проверьте свою почту на наличие ссылки подтверждения
                        Если Вы ее не получили
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Нажмите, чтобы получить ее снова</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
