<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #555454; /* Latar belakang gelap */
            color: #fff; /* Teks berwarna putih */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form container */
        .form-container {
            background-color: #7d7d7dc0; /* Warna abu gelap untuk form */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(51, 219, 234, 0.876);
            width: 100%;
            max-width: 500px;
        }

        /* Title of the form */
        h2 {
            color: #00FFFF; /* Biru neon */
            margin-bottom: 20px;
            font-size: 28px; /* Lebih besar dan bold */
            font-weight: bold;
        }

        /* Styling form fields container */
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        /* Label styling */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #00FFFF; /* Biru neon */
            font-size: 14px;
        }

        /* Input field styling */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            background-color: #555; /* Warna abu gelap untuk input */
            border: 2px solid #00FFFF; /* Biru neon border */
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            box-sizing: border-box; /* Menghindari overflow border */
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #00FFFF; /* Biru neon saat fokus */
            outline: none;
        }

        /* Button styling */
        button {
            width: 100%;
            padding: 12px;
            background-color: #00FFFF; /* Biru neon */
            color: #333; /* Teks hitam di tombol */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #009999; /* Biru gelap saat hover */
        }

        /* Error message */
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: left;
        }

        /* Footer link styling */
        p {
            color: #fff;
            font-size: 14px;
            margin-top: 20px;
        }

        a {
            color: #00FFFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <!-- Form container -->
    <div class="form-container">
        <h2>Register</h2>
        
        <!-- Form -->
        <form action="{{ url('register') }}" method="POST">
            @csrf

            <!-- Name input -->
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" required>
            </div>

            <!-- Email input -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <!-- Password confirmation input -->
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit button -->
            <button type="submit">Daftar</button>

            <!-- Login link -->
            <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
        </form>
    </div>

</body>
</html>
