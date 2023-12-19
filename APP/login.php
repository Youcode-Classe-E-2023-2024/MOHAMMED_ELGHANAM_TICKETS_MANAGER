<?php
    include 'DATABASE.php';
    $db = new database();

if (!empty($_POST['send'])) {

    $name = $_POST['name'];
    $image = file_get_contents($_FILES['file']['tmp_name']);
    $email = $_POST['email'];
    $password = $_POST['password'];

    $new_password = $db->hach_password($password);
    $sql = "INSERT INTO users (name,image,email,password) VALUES('$name','$image','$email','$new_password')";
    $db->insert($sql);
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJopLb8r/UAZBjNQJsnqz0y4O2F5K92K" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="w-screen h-full flex flex-col justify-center items-center gap-2 overflow-x-hidden bg-gray-800 p-2">


<!--log in ------------------------------------------------------------------------------------------ -->
<section style="display:block;"  class="bg-gray-50 dark:bg-gray-900" id="login">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 gap-3">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white ">
            Sign in 
        </h1>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              
                <form class="space-y-4 md:space-y-6"  method="post">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-blue-600 hover:underline ">Forgot password?</a>
                  </div>
                  <button type="submit" name="send" class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Sign in</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Don’t have an account yet? <a href="#" onclick="register()" class="font-medium hover:underline text-blue-600">Sign up</a>
                  </p>
                </form>
          </div>
      </div>
  </div>
</section>
<!-- register ------------------------------------------------------------------------------------------------------------------- -->


<section style="display:none;" class="bg-gray-50 dark:bg-gray-900" id="register">
    <div class="max-w-md mx-auto  flex justify-center">
        <h2 class="font-bold text-3xl text-white mb-6">register</h2>
    </div>
    <div class="max-w-md mx-auto  rounded-md overflow-hidden shadow-md bg-gray-800 ">
        
        <form class="px-6 py-4"  method="post">
            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Your Name" required>
            </div>

            <!-- File Input -->
            <div class="mb-4">
                <label for="file" class="block text-gray-700 text-sm font-bold mb-2">File</label>
                <input type="file" id="file" name="file"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    accept=".jpg, .jpeg, .png" required>
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="you@example.com" required>
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="********" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" name="send" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Register
            </button>
            <a href="#" onclick="login()" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">back</a>
        </form>
    </div>
</section>
</body>
</html>
<script>
    function login() {
        console.log("HELLO");
        var loginElement = document.getElementById('login');
        var registerElement = document.getElementById('register');
      
        // if (loginElement && registerElement) {
          loginElement.style.display = 'block';
          registerElement.style.display = 'none';
        // } else {
        //   console.error("Elements with IDs 'login' and 'register' not found.");
        // }
    }
      
      
    function register() {
        console.log("HELLO");
        var loginElement = document.getElementById('login');
        var registerElement = document.getElementById('register');
      
        
          loginElement.style.display = 'none';
          registerElement.style.display = 'block';

    }
      
</script>







    