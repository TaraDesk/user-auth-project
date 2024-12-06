<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Auth System</title>

	<!-- Tailwind CDN -->
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="w-screen h-screen flex justify-center items-center flex-col bg-slate-200">
	    <div class="w-3/6 p-8 flex flex-col gap-y-6 border rounded-lg shadow-lg bg-white">
	    	<div class="flex flex-col gap-y-2">
		        <h2 class="text-2xl font-bold">Welcome to Auth System</h2>
		        <p>Login to Explore Your Dashboard</p>
	    	</div>

	    	<hr class="bg-slate-200">

	        <form class="w-full flex flex-col gap-y-6" method="post">
	            <div class="flex flex-wrap -mx-3">
	                <div class="w-full px-3">
	                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">Email</label>
	                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="text" name="email" placeholder="Your email here">
	                </div>
	            </div>
	            <div class="flex flex-wrap -mx-3">
	                <div class="w-full px-3">
	                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
	                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" name="password" placeholder="Your password here">
	                </div>
	            </div>

	            <hr class="bg-slate-200">

	            <div class="flex flex-col justify-center items-center gap-y-1">
		           <button class="w-full flex-shrink-0 bg-teal-400 hover:bg-teal-600 text-sm text-white p-2 rounded" type="submit" name="login">Login</button>
		           <p class="flex-shrink-0 text-sm p-2">Don't have an account? <a href="src/views/register.php" class="text-teal-400 hover:text-teal-700">Create now</a></p>
	            </div>
	        </form>
		</div>
		<footer class="container-xl mt-4">
			<p class="text-center text-sm text-slate-400">Made by Perahim Tara</p>
		</footer>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<?php 

	require_once __DIR__ . '/src/helpers/session.php';
	require_once __DIR__ . '/src/views/message.php';
	require_once __DIR__ . '/src/controllers/auth.php';

	$message = get_success_message();
	if ($message) {
	    display_success($message['message'], $message['title']);
	}

	$message_err = get_error_message();
	if ($message_err) {
	    display_errors($message_err['message'], $message_err['title']);
	}
	?>
</body>
</html>
