<?php  
include 'DATABASE.php';
$db = new database();

$sql = "SELECT name FROM users";
$row = $db->select1($sql);
// echo "<pre>";
// print_r($row);
// echo "<pre>";

// foreach ($row as $key) {
//     echo $key['name'] . "<br>";
// }
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


    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>

</head>
<body class="w-screen h-full flex flex-col justify-center items-center gap-2 overflow-x-hidden bg-gray-800 p-2">



<div class="w-1/3 mx-auto bg-gray-800 p-8 rounded shadow-md">
<h2 class="text-2xl text-center text-white font-bold mb-4">Add Ticket</h2>

    <form action="handel_creat_ticket.php" method="post">
        
        <div class="mb-4">
            <label for="title" class="block text-gray-600 text-sm font-medium mb-2">Title</label>
            <input type="text" id="title" placeholder="enter title"  name="title" class="w-full px-3 py-2 border rounded-md bg-gray-700" required>
        </div>

        
        <div class="mb-4">
            <label for="description" class="block text-gray-600 text-sm font-medium mb-2">Description</label>
            <textarea id="description" placeholder="enter description" name="description" rows="4" class="w-full px-3 py-2 border rounded-md bg-gray-700" required></textarea>
        </div>

        




        <div class="py-6 border-b border-gray-100 dark:border-gray-800">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">

                        <div class="w-full p-3 md:w-1/3">

                            <label class="text-lg font-mono text-gray-700 dark:text-gray-400">
                                developpeur
                            </label>
                        </div>

                        <div class="w-full p-3 md:flex-1">

                            <select name="dev[]" id="dev" multiple>
                                <?php foreach ($row as $key): ?>
                                <option value="<?= $key['name'];  ?>">
                                    <?= $key['name']; ?>
                                </option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


        
    
        
        <div class="mb-4">
            <label for="tag" class="block text-gray-600 text-sm font-medium mb-2">Tag</label>
            <select id="tag" name="tag" class="w-full px-3 py-2 border rounded-md text-gray-400 bg-gray-700">
                <option value="" disabled selected>Select Tag</option>
                <option value="bug">bug</option>
                <option value="question">question</option>
                <option value="flex">FLEX</option>
            </select>
        </div>

        
        <div class="mb-4">
            <label for="priority" class="block text-gray-600 text-sm font-medium mb-2">Priority</label>
            <select id="priority" name="priority" class="w-full px-3 py-2 border rounded-md text-gray-400 bg-gray-700">
                <option value="" disabled selected>Select Priorety</option>
                <option  value="low">Low</option>
                <option  value="medium">Medium</option>
                <option  value="high">High</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
    </form>
</div>

</body>
</html>

<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
     <script>
        new MultiSelectTag('dev')
    </script>
