<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen p-8">
    <div class="max-w-lg mx-auto bg-white shadow-xl rounded-xl p-8 border border-gray-200">
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </div>
            <h2 class="text-3xl font-bold text-gray-800">Add New Student</h2>
            <p class="text-gray-600 mt-2">Enter the details below to add a new student.</p>
        </div>
        <form action="/students/store" method="post" class="space-y-6">
            <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                <div class="relative">
                    <input type="text" name="last_name" class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" placeholder="Enter last name" required>
                    <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </div>
            <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                <div class="relative">
                    <input type="text" name="first_name" class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" placeholder="Enter first name" required>
                    <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </div>
            <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <div class="relative">
                    <input type="email" name="email" class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" placeholder="Enter email address" required>
                    <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
            <div class="flex justify-between space-x-4">
                <a href="/students/index" class="flex-1 bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg font-medium transition duration-200 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back
                </a>
                <button type="submit" class="flex-1 bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg font-medium transition duration-200 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Save Student
                </button>
            </div>
        </form>
    </div>
</body>
</html>
