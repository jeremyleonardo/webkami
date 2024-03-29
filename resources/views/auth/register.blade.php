@extends('layouts.app')

@section('style')

<link rel="stylesheet" href="{{asset('/css/auth/login-register.css')}}" />

@endsection

@section('content')

<div class="vector-bg pt-5 pb-5">
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Daftar</h3>
                <form class="login-form" method="POST" action="/register">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input value="{{ old('name') }}" type="name" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input value="{{ old('email') }}" type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input value="{{ old('password') }}" type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="passwordConfirmation">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="passwordConfirmation" placeholder="Password">
                    </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="text-center submit-container">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
                <p class="text-center pt-5">Sudah memiliki akun? <a href="/login">Klik di sini untuk login</a></p>
            </div>
        </div>

    </div>
</div>

@endsection

@section('script')

<script type="text/javascript">

</script>

@endsection
