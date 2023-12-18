<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Ticket Form</title>
    <!-- Include the Tailwind CSS CDN (you can also download and host it locally) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 p-8">
<div class="max-w-md mx-auto">
    <h2 class="text-2xl text-center text-white font-bold mb-4">Add Ticket</h2>
</div>
<div class="max-w-md mx-auto bg-gray-800 p-8 rounded shadow-md">
    

    <form action="/submit-ticket" method="post">
        <!-- Title -->
        <div class="mb-4">
            <label for="title" class="block text-gray-600 text-sm font-medium mb-2">Title</label>
            <input type="text" id="title" placeholder="enter title"  name="title" class="w-full px-3 py-2 border rounded-md bg-gray-700" required>
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label for="description" class="block text-gray-600 text-sm font-medium mb-2">Description</label>
            <textarea id="description" placeholder="enter description" name="description" rows="4" class="w-full px-3 py-2 border rounded-md bg-gray-700" required></textarea>
        </div>

        <!-- User Selection -->
        <div class="mb-4">
            <label for="user" class="block text-gray-600 text-sm font-medium mb-2">Assign to</label>
            <select id="user" name="user" class="w-full px-3 py-2 border rounded-md text-gray-400 bg-gray-700">
                <option value="" disabled selected>Select User</option>
                <option value="user1">User 1</option>
                <option value="user2">User 2</option>
                <option value="user3">User 3</option>
            </select>
        </div>

        <!-- Tag -->
        <div class="mb-4">
            <label for="tag" class="block text-gray-600 text-sm font-medium mb-2">Tag</label>
            <select id="tag" name="user" class="w-full px-3 py-2 border rounded-md text-gray-400 bg-gray-700">
                <option value="" disabled selected>Select Tag</option>
                <option value="bug">bug</option>
                <option value="question">question</option>
                <option value="flex">FLEX</option>
            </select>
        </div>

        <!-- Priority -->
        <div class="mb-4">
            <label for="priority" class="block text-gray-600 text-sm font-medium mb-2">Priority</label>
            <select id="priority" name="priority" class="w-full px-3 py-2 border rounded-md text-gray-400 bg-gray-700">
                <option value="" disabled selected>Select Priorety</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
    </form>
</div>

</body>
</html>
