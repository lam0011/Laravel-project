<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - legend Bank</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            width: 80%;
            max-width: 1200px;
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }

        .form-container {
            flex: 1;
            padding: 50px;
            text-align: center;
        }

        .form-header {
            margin-bottom: 24px;
        }

        .form-header h1 {
            font-size: 28px;
            font-weight: 600;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-input:focus {
            outline: none;
            border-color: #42a5f5;
            box-shadow: 0 0 0 2px rgba(66, 165, 245, 0.3);
        }

        .form-error {
            margin-top: 5px;
            font-size: 14px;
            color: #e74c3c;
        }

        .form-actions {
            margin-top: 30px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #1e88e5;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #1565c0;
        }

        .link {
            display: inline-block;
            font-size: 14px;
            color: #1e88e5;
            text-decoration: none;
            margin-top: 20px;
        }

        .link:hover {
            text-decoration: underline;
        }

        .right-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px;
            background: linear-gradient(135deg, #bbdefb, #e3f2fd);
            text-align: center;
        }

        .right-content h2 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .right-content p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Left section for registration form -->
        <div class="form-container">
            <div class="form-header">
                <h1>Register</h1>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-input" required autofocus>
                    <x-input-error :messages="$errors->get('name')" class="form-error" />
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-input" required>
                    <x-input-error :messages="$errors->get('email')" class="form-error" />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-input" required>
                    <x-input-error :messages="$errors->get('password')" class="form-error" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-input" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="form-error" />
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn">Register</button>
                    <a href="{{ route('login') }}" class="link">Already registered?</a>
                </div>
            </form>
        </div>

        <!-- Right section for additional content -->
        <div class="right-content">
            <h2>Secure & Easy Banking</h2>
            <p>
                Experience seamless account management, secure transactions, and tailored financial solutions at legend Bank. 
                Join now to access tools that simplify your banking experience.
            </p>
        </div>
    </div>
</body>

</html>
