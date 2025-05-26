<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <title>Server Connection</title>
  <style>
    body {
      background: linear-gradient(135deg,rgb(99, 132, 185) 0%,rgb(102, 158, 114) 100%);
      min-height: 100vh;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen">
  <div class="w-full max-w-xl bg-white/90 rounded-2xl shadow-2xl p-8 md:p-12">
    <h2 class="text-3xl font-extrabold text-center text-gray-700 mb-8">Register Account</h2>
    <form action="" method="post" class="space-y-6">
      <div class="grid gap-6 md:grid-cols-2">
        <div>
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First name</label>
          <input name="First_Name" type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="Farid Ahmad" required />
        </div>
        <div>
          <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last name</label>
          <input name="Last_Name" type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="Haidary" required />
        </div>
        <div>
          <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company</label>
          <input name="Company" type="text" name="company" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="HaidarySoft" required />
        </div>
        <div>
          <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
          <input name="Phone_Number" type="tel" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="+93787562663" required />
        </div>
      </div>
      <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
        <input name="Email_Address" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="faridahmadhaidary01@gmail.com" required />
      </div>
      <div class="grid gap-6 md:grid-cols-2">
        <div>
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
          <input name="Password" type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="********" required />
        </div>
        <div>
          <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
          <input name="Confirm_Password" type="password" name="confirm_password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="********" required />
        </div>
      </div>
      <div class="flex items-start mb-4">
        <input name="Checkbox"  id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-2 focus:ring-blue-300" required />
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900">I agree with the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a>.</label>
      </div>
      <button type="submit" class="w-full py-3 px-6 text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-lg transition duration-200 shadow-lg">Submit</button>
    </form>
    <p class="mt-6 text-center text-gray-500 text-sm">Already have an account? <a href="#" class="text-blue-600 hover:underline">Sign in</a></p>
  </div>
</body>
</html>

<?php
hello 

  
?>