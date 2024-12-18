<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">

<main>
    <div id="secone">
        <div class="flex justify-center py-10">
            <div class="flex flex-col md:flex-row gap-32">
                <div class="flex items-center justify-center">
                    <div class="">
                        <h2 class="text-4xl font-semibold text-gray-800 text-center">Register</h2>
                        <div class="w-16 h-1 mx-auto bg-red-500 mt-2 mb-8"></div>
                        <form action="{{ route('register.user') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block mb-1 text-gray-600">Full Name</label>
                                <div class="flex items-center border border-gray-300 rounded">
                                    <input type="text" name="name" id="name" placeholder="John Doe" class="w-full py-2 px-3 text-gray-800 rounded focus:outline-none" required>
                                    @error('name')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block mb-1 text-gray-600">Email</label>
                                <div class="flex items-center border border-gray-300 rounded">
                                    <span class="px-3 text-gray-500"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" id="email" placeholder="john@gmail.com" class="w-full py-2 px-3 text-gray-800 rounded-r focus:outline-none" required>
                                    @error('email')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block mb-1 text-gray-600">Password</label>
                                <div class="flex items-center border border-gray-300 rounded">
                                    <span class="px-3 text-gray-500"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" id="password" placeholder="••••••••••" class="w-full py-2 px-3 text-gray-800 rounded-r focus:outline-none" required>
                                    @error('password')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="block mb-1 text-gray-600">Confirm Password</label>
                                <div class="flex items-center border border-gray-300 rounded">
                                    <span class="px-3 text-gray-500"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••••" class="w-full py-2 px-3 text-gray-800 rounded-r focus:outline-none" required>
                                </div>
                            </div>

                            <button type="submit" class="w-full py-2 mb-4 text-white bg-black rounded hover:bg-gray-800">REGISTER</button>

                            <p class="text-sm text-center text-gray-600">Already have an account? <a href="{{ route('user.login') }}" class="text-red-500 hover:underline">LOGIN</a></p>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end">
                    <img src="/assets/images/Frame 141.png" alt="Illustration" class="hidden md:block">
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
