<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Form Login</div>
            <div class="title signup">Form Registrasi</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login">
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Daftar</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="/login" class="login" id="loginForm" method="post">
                    @csrf
                    @error('message')
                        <div class="field">
                            <p class="error-field" style="font-size: .8rem;text-align:center">
                                {{ $errors->first('message') }}</p>
                        </div>
                    @enderror
                    <div class="field">
                        <input type="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Buat akun <a href="javascript:void(0)" id="signup-link">Daftar sekarang</a>
                    </div>
                </form>
                <form action="/signup" class="signup" id="signupForm" method="post">
                    @csrf
                    <div class="field">
                        <input type="text" name="name" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password_confirm" placeholder="Ulangi Password" required>
                        @error('password_confirm')
                            <div class="error-field">{{ $errors->first('password_confirm') }}</div>
                        @enderror
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Daftar">
                    </div>
                    <div class="signup-link">Sudah punya akun? <a href="javascript:void(0)" id="login-link">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>

</html>
