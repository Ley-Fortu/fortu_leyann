<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen p-8">

    <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-xl p-8 border border-gray-200">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-indigo-100 rounded-full mb-4">
                <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Students Management</h1>
            <p class="text-gray-600">Manage your student records efficiently</p>
        </div>

        <div class="flex gap-2">
            <a href="/students/create" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                + Add Student
            </a>

            <a href="/students/delete_all"
                onclick="return confirm('Are you sure you want to delete ALL records?')"
                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                Delete All
            </a>
        </div>



        <!-- Students Table -->
        <div class="overflow-x-auto mt-6">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Last Name</th>
                        <th class="py-2 px-4 border-b">First Name</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td class="py-2 px-4 border-b"><?= $student['id'] ?></td>
                                <td class="py-2 px-4 border-b"><?= $student['last_name'] ?></td>
                                <td class="py-2 px-4 border-b"><?= $student['first_name'] ?></td>
                                <td class="py-2 px-4 border-b"><?= $student['email'] ?></td>
                                <td class="py-2 px-4 border-b text-center">
                                    <a href="/students/edit/<?= $student['id'] ?>" 
                                       class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                        Edit
                                    </a>
                                    <a href="/students/delete/<?= $student['id'] ?>" 
                                       onclick="return confirm('Are you sure you want to delete this student?')"
                                       class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-1">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-4">No students found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>