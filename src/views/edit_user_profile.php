<?php

require_once __DIR__ . '/../controllers/read_user.php';

$user_info = read_user_info($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Profile | Auth System</title>

	<!-- Tailwind CDN -->
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="w-screen h-screen flex justify-center items-center flex-col bg-slate-200">
	    <div class="w-3/6 py-4 px-8 flex flex-col gap-y-6 border rounded-lg shadow-lg bg-white">
	    	<div class="flex flex-col gap-y-2">
		        <h2 class="text-2xl font-bold">Edit your Profile</h2>
	    	</div>

	    	<hr class="bg-slate-200">

	        <form class="w-full flex flex-col gap-y-6" method="post">
	            <div class="flex flex-wrap -mx-3">
	                <div class="w-full px-3">
	                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">Email</label>
	                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="text" name="email" placeholder="Your email here" value="<?php echo $user_info['email']; ?>">
	                </div>
	            </div>
	            <div class="flex flex-wrap -mx-3">
	                <div class="w-full px-3">
	                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-username">Username</label>
	                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-username" type="text" name="username" placeholder="Your username here" value="<?php echo $user_info['username']; ?>">
	                </div>
	            </div>
	            <hr class="bg-slate-200">
	            <div class="flex justify-end items-center gap-x-1">
		           <a href="dashboard.php" class="w-1/6 text-center bg-gray-600 hover:bg-gray-700 text-sm text-white p-2 rounded">Cancel</a>
		           <button class="w-1/6 text-center bg-teal-400 hover:bg-teal-600 text-sm text-white p-2 rounded" type="submit" name="submit">Update</button>
	            </div>
	        </form>
		</div>
		<footer class="container-xl mt-4">
			<p class="text-center text-sm text-slate-400">Made by Perahim Tara</p>
		</footer>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<?php

	require_once __DIR__ . '/../controllers/edit_user.php';

	?>
</body>
</html>