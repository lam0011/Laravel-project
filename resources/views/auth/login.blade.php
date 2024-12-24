<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ABCD Bank</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .background-circles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: float 6s ease-in-out infinite;
        }

        .circle.small {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-duration: 5s;
        }

        .circle.medium {
            width: 200px;
            height: 200px;
            bottom: 30%;
            right: 20%;
            animation-duration: 7s;
        }

        .circle.large {
            width: 300px;
            height: 300px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-duration: 10s;
        }

        @keyframes float {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .container {
            display: flex;
            width: 80%;
            max-width: 1200px;
            height: 80%;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .left-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right-section {
            flex: 1;
            background: linear-gradient(135deg, #bbdefb, #e3f2fd);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
        }

        .right-section h2 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .right-section p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }

        .login-container h1 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 24px;
        }

        .login-container input {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            font-size: 14px;
        }

        .login-container input:focus {
            outline: none;
            border-color: #42a5f5;
            box-shadow: 0 0 0 2px rgba(66, 165, 245, 0.3);
        }

        .login-container button {
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

        .login-container button:hover {
            background-color: #1565c0;
        }

        .login-container .footer {
            margin-top: 16px;
            font-size: 14px;
            text-align: center;
        }

        .login-container .footer a {
            color: #1e88e5;
            text-decoration: none;
        }

        .login-container .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="background-circles">
        <div class="circle small"></div>
        <div class="circle medium"></div>
        <div class="circle large"></div>
    </div>

    <div class="container">
        <div class="left-section">
            <div class="login-container mt-6">
                <h1>Welcome Back</h1>
                <!-- Updated Form -->
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf
                    <!-- Email Input -->
                    <input type="email" name="email" placeholder="Email or username" required>
                    <!-- Password Input -->
                    <input type="password" name="password" placeholder="Password" required>
                    <!-- Submit Button -->
                    <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition flex items-center justify-center">
                        {{ __('Log in') }}
                    </button>
                </form>

                <!-- Forgot Password and Register Links -->
                <div class="footer">
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Forgot Password?</a>
                    <div class="text-center text-sm mt-4">
                        <p>Don't have an account?
                            <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-900">
                                {{ __('Register here') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-section">
            <div class="relative z-10 text-white px-10 text-center">
                <h2 class="text-4xl font-bold mb-4">Experience Banking Like Never Before</h2>
                <p class="text-lg mb-6">
                    Manage your accounts, investments, and loans effortlessly with our secure and innovative banking solutions.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
