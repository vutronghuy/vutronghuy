{{-- @extends('frontend.homepage') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="/register/store" method="POST">
                    @csrf
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input name="name" type="text" required>
                        <label for="name">Name</label>
                    </div>

{{-- 
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input name="email" type="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="password" type="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="password_confirnmation" type="password" required>
                        <label for="password_confirnmation">Confirm Password</label>
                    </div>
                    <button type="submit">{{ __('Register') }}</button>
                    
                </form>
            </div>
        </div>
    </section>

    
    {{-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> --}}
</body>
</html>