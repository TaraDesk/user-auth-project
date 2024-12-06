<?php

require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../controllers/read_user.php';

check_login();

$user = get_login_info();
$user_info = read_user_info($user["id"]);

?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard | Auth System</title>

	<!-- Tailwind CDN -->
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

	<div class="container-xl my-8 px-12 flex flex-col gap-y-2">
		<h1 class="text-3xl font-bold">Welcome to your Dashboard</h1>
		<p class="text-justify">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Fuga dolores enim minus reiciendis consequuntur voluptate rerum nostrum, autem cum sed beatae in accusantium est, nesciunt, magni dolorem, deserunt suscipit earum.</p>	
	</div>
	<div class="container-xl mt-9 mb-4 mx-6 px-6 py-2 flex flex-col gap-y-4 border shadow-lg rounded-lg bg-slate-100">
		<div class="flex justify-between items-center border-b-2 py-6">
			<h2 class="text-2xl font-bold">#<?php echo $user_info["id"]; ?> - Account Profile</h2>
			<div class="flex gap-x-5">
				<a href="edit_user_profile.php?id=<?php echo $user_info["id"];?>" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow-lg">Edit</a>
				<a href="../controllers/delete_user.php?id=<?php echo $user_info["id"];?>" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded shadow-lg">Delete</a>
			</div>
		</div>
		<div class="py-4 space-y-4">
			<div class="flex items-center gap-x-1">
				<span class="font-medium text-gray-700">Your username is</span>
				<span class="text-gray-900 font-bold"><?php echo " " . $user_info["username"]; ?></span>
			</div>
			<div class="flex items-center gap-x-1">
				<span class="font-medium text-gray-700">Your email for this account : </span>
				<span class="text-gray-900 font-bold"><?php echo $user_info["email"]; ?></span>
			</div>
		</div>
		<div class="py-6 border-t-2">
			<a href="../controllers/logout.php" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded shadow-lg">Logout</a>
		</div>
	</div>

	<footer class="container-xl">
		<p class="text-center text-sm text-slate-400">Made by Perahim Tara</p>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<?php 

	require_once __DIR__ . '/../views/message.php';

	$message = get_success_message();
	if ($message) {
	    display_success($message['message'], $message['title']);
	}
	?>
</body>
</html>
