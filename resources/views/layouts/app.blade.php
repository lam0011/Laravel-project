<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LEGEND Bank')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Custom animation for background gradient */
        @keyframes gradientAnimation {
            0% {
                background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            }
            50% {
                background: linear-gradient(135deg, #bbdefb, #e3f2fd);
            }
            100% {
                background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            }
        }

        /* Custom fade-in effect for content */
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .bg-gradient-animation {
            animation: gradientAnimation 10s ease infinite;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }
    </style>
</head>
<body class="bg-gradient-animation text-white">


    <!-- Main Wrapper -->
    <div class="min-h-screen flex items-center justify-center px-4">
        <!-- Content Container -->
        <div class="w-full max-w-4xl bg-white shadow-xl rounded-lg p-8 transition-transform duration-500 transform hover:scale-105 animate-fade-in">
            <!-- Dynamic Content -->
            @yield('content')
        </div>
    </div>

    <script>
        // Add custom fade-in animation to body after page load
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('body').classList.add('animate-fade-in');
        });
    </script>
</body>
</html>
