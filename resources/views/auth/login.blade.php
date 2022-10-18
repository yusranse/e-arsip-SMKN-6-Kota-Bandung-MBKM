<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    
    <!-- component -->
<div class="min-h-screen bg-gradient-to-b from-cyan-500 to-blue-700 flex justify-center items-center">
	<div class="absolute w-60 h-60 rounded-xl bg-blue-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
	</div>
	
	<div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
		<div class="flex justify-center mb-2">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
				<path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z" clip-rule="evenodd" />
				<path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
			</svg>			  
			<span class="text-3xl font-bold text-center mb-4 cursor-pointer">Digital Arsip</span>			
		</div>
		<div class="space-y-4">
		<form action="/auth/login" method="POST">
            @csrf
			<input type="text" name="username" id="username" placeholder="Username" class="block text-sm mb-4 py-3 px-4 rounded-lg w-full border outline-none" />
			<input type="password" name="password" id="password" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
    	</div>
			<div class="text-center mt-6">
				<form action="{{ route('dashboard') }}">
					<button class="py-3 w-64 text-xl text-white bg-blue-700 rounded-2xl" type="submit">Login</button>
				</form>
				<p class="mt-4 text-sm">Don't have an account? <a class="underline cursor-pointer" href="/auth/registration"> Create Account</a>
				</p>
			</div>
		</form>
	</div>
		<div class="w-40 h-40 absolute bg-blue-300 rounded-full top-0 right-12 hidden md:block"></div>
		<div
			class="w-20 h-40 absolute bg-blue-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
        @if (Session::has('success'))
            toastr.success('{{ Session::get('success') }}')
        @endif
        @if (Session::has('warning'))
            toastr.warning('{{ Session::get('warning') }}')
        @endif
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}')
        @endif
    </script>
</body>
</html>