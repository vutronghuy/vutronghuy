<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css ') }}">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" me>
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    {{-- @if (Route::has('password.request')) --}}
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember</label>
                        {{-- @if (Route::has('password.request')) --}}
                        <a href="#">Forget Password</a>
                        {{-- @endif{{ route('password.request') }} --}}
                    </div>
                    <button>{{ __('Login') }}</button>
                    <div class="register">
                        <p>Don't have a account <a href="/register">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
