<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/custom.css">
    <title>Sign Up</title>
</head>
<body>

    <div class="min-h-screen bg-gradient-to-b from-cyan-500 to-blue-700 flex justify-center items-center">
        <div class="absolute w-60 h-60 rounded-xl bg-blue-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
        </div>

        
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
            <form action="/auth/registration" method="POST">
                @csrf
                <div>
                    <h1 class="text-2xl font-bold text-center mb-4 cursor-pointer">Create An Account</h1>
                </div>
                <div class="space-y-4">
                    <input type="text" name="username" id="username" placeholder="Username" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="text" name="email" id="email" placeholder="Email Addres" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                    <input type="password" name="password" id="password" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
            </div>
                    <div class="text-center mt-6">
                        <button class="py-3 w-64 text-xl text-white bg-blue-700 rounded-2xl">Create Account</button>
                        <p class="mt-4 text-sm">Already Have An Account? <a class="underline cursor-pointer" href="/"> Sign In</a>
                        </p>
                    </div>
                </div>
                <div class="w-40 h-40 absolute bg-blue-300 rounded-full top-0 right-12 hidden md:block"></div>
                <div
                    class="w-20 h-40 absolute bg-blue-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
                </div>
            </form>    
        </div>
    
</body>
</html>

