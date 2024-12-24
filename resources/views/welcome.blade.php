<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Legend Bank</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .header-font {
            font-family: 'Montserrat', sans-serif;
        }

        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
            background-size: 200% 200%;
            animation: gradientAnimation 8s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .floating-circles {
            position: relative;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .circle.one {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 5%;
        }

        .circle.two {
            width: 120px;
            height: 120px;
            top: 50%;
            right: 15%;
        }

        .circle.three {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 40%;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navigation Bar -->
    <header class="gradient-bg shadow-md">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-3xl font-extrabold text-gray-800 header-font">LEGEND Bank</h1>
            <nav class="space-x-6 flex-grow flex justify-center">
                <a href="#" class="text-gray-700 hover:text-white transition">Business</a>
                <a href="#" class="text-gray-700 hover:text-white transition">Wealth</a>
                <a href="#" class="text-gray-700 hover:text-white transition">Personal</a>
                <a href="#" class="text-gray-700 hover:text-white transition">Our Story</a>
            </nav>
            <a href="{{ route('login') }}" class="bg-white text-blue-600 px-5 py-2 rounded-lg shadow-md hover:bg-gray-100">Login</a>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="flex items-center justify-center min-h-screen gradient-bg floating-circles">
        <div class="max-w-2xl text-center">
            <h1 class="text-6xl font-extrabold header-font mb-6 text-gray-800">Banking with Trust and Innovation</h1>
            <p class="text-lg text-gray-700 mb-8">Your trusted partner in managing finances with personalized care and cutting-edge technology.</p>
            <a
                href="{{ route('register') }}"
                class="bg-blue-500 text-white px-8 py-4 rounded-full shadow-lg hover:bg-blue-600 transition-all duration-300"
            >
                {{ __('Register Here') }}
            </a>
        </div>

        <!-- Circles -->
        <div class="circle one"></div>
        <div class="circle two"></div>
        <div class="circle three"></div>
    </div>

    <!-- Services Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-6">
            <!-- Title -->
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-10">Our Premium Services</h2>
            
            <!-- Grid Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service Items -->
                {% for service in ["Skybanking", "Offshore Banking", "Retail Loan", "Retail Deposit", "Emergency Deposit", "Women Banking", "SME Loan", "SME Deposit"] %}
                <div class="relative group">
                    <img src="./images/home7.jpg" alt="{{ service }}" class="w-full h-48 object-cover rounded-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white font-bold text-xl">LEGEND {{ service }}</h3>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-gray-300 py-10">
        <div class="container mx-auto px-6 md:grid md:grid-cols-3 md:gap-8">
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-400">Business Banking</a></li>
                    <li><a href="#" class="hover:text-gray-400">Personal Banking</a></li>
                    <li><a href="#" class="hover:text-gray-400">Wealth Management</a></li>
                    <li><a href="#" class="hover:text-gray-400">Contact Us</a></li>
                </ul>
            </div>
            <!-- Contact Information -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                <ul class="space-y-2">
                    <li>Phone: <a href="tel:+1234567890" class="hover:text-gray-400">+1 (234) 567-890</a></li>
                    <li>Email: <a href="mailto:support@legendbank.com" class="hover:text-gray-400">support@legendbank.com</a></li>
                    <li>Address: 1234 Bank Street, City, State, ZIP</li>
                </ul>
            </div>
            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <ul class="flex space-x-4">
                    <li><a href="https://www.facebook.com/atikurr.seo" class="hover:text-gray-400">Facebook</a></li>
                    <li><a href="#" class="hover:text-gray-400">Twitter</a></li>
                    <li><a href="https://www.linkedin.com/in/atikurr-seo" class="hover:text-gray-400">LinkedIn</a></li>
                    <li><a href="https://www.instagram.com/atikurr_seo" class="hover:text-gray-400">Instagram</a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright -->
        <div class="mt-8 text-center text-sm text-gray-500">
            © 2024 LEGEND Bank. All rights reserved.
        </div>
    </footer>
</body>
</html>
