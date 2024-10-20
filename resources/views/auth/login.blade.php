<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #716f6f; /* Latar belakang putih */
            color: #333; /* Teks berwarna hitam */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        /* Form container */
        .form-container {
            background-color: #a8a4a4a4; /* Latar belakang form tetap putih */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(72, 225, 225, 0.785); /* Shadow lebih ringan */
            width: 100%;
            max-width: 400px;
            margin: 0 15px;
            border: 2px solid rgba(58, 239, 233, 0.766); /* Border abu transparan */
        }

        /* Title of the form */
        h2 {
            color: #00FFFF; /* Biru neon */
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        /* Label styling */
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #00FFFF;
            text-align: left;
            font-size: 14px;
        }

        /* Input field styling */
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            background-color: #f4f4f4; /* Warna latar belakang input lebih terang */
            border: 2px solid rgba(169, 169, 169, 0.5); /* Border abu transparan */
            border-radius: 8px;
            color: #333;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #00FFFF; /* Biru neon saat fokus */
            outline: none;
        }

        /* Button styling */
        button {
            width: 100%;
            padding: 14px;
            background-color: #00FFFF;
            color: #333;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #009999; /* Biru gelap saat hover */
        }

        /* Error message styling */
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: left;
        }

        /* Footer link styling */
        p {
            color: #333;
            font-size: 14px;
            margin-top: 15px;
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
        <h2>Login</h2>
        
        <!-- Form -->
        <form action="{{ url('login') }}" method="POST">
            @csrf

            <!-- Email input -->
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password input -->
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit button -->
            <button type="submit">Login</button>

            <!-- Registration link -->
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
        </form>
    </div>

</body>
</html>
