<?php  
session_start();
include 'DATABASE.php';
$db = new database();
$sql = "SELECT * FROM ticket";
$row = $db->select_tiket($sql);
echo "<pre>";
print_r($row[1]['title']);
echo "<pre>";
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


    <section class="w-full h-screen flex-col justify-center items-center  bg-gray-800 px-5 py-6 overflow-auto">
        <!-- title -->
            <div class="w-full h-12 bg--gray-600 rounded-xl flex gap-3 items-center border border-gray-400">
                <div class="w-3 h-12 bg-sky-950 rounded-l-xl"></div>
                <h1 class="text-4xl font-bold text-white uppercase">
                    <?php 
                        if (isset($row['title'])) {
                            echo $row['title']; 
                        }else {
                            echo"rah khawi";
                        }                
                    ?>
                </h1>
            </div> 
        <!-- fin title -->
        <div class="w-full h-3/5 flex justify-start gap-3 mt-3">

            <!-- parti description -->

                <div class="w-3/5 h-full rounded-xl border-2 border-gray-400 p-2 ">
                    <h2 class="text-2xl font-bold text-gray-400 uppercase">Description</h2>
                    <p class="text-gray-300">
                        <?php 
                            if (isset($row['description'])) {
                                echo $row['description']; 
                            }else {
                                echo"rah khawi";
                            }         
                        ?>
                    </p>
                </div> 

            <!-- fin parti description -->

            

            <!-- parti assigment -->

                <div class="w-1/3 h-auto rounded-md p-1">
                    <h5 class="text-white font-semibold pl-1 hover:text-blue-600">assigmment</h5>
                    <div class="w-full h-auto flex">
                    
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($_SESSION['image']); ?>" alt="mkhdamax" class="w-10 h-10 bg-blue-700 rounded-full">
                        <h5 class="text-white font-semibold pl-1"><?php echo $_SESSION['name'] ?></h5>
                    </div>
                    <div class="w-full h-auto flex mt-1">
                        <img src="med.jpg" alt="" class="w-10 h-10 bg-blue-700 rounded-full">
                        <h5 class="text-white font-semibold pl-1"><?php echo $_SESSION['name'] ?></h5>
                    </div>

                    <select id="tag" name="user" class="w-full px-3 py-2 border rounded-md mt-1">
                        <option value="" disabled selected>Select Status</option>
                        <option value="doing">doing</option>
                        <option value="done">done</option>
                        
                    </select>

                </div>

            <!-- fin parti assigment -->

        </div>
<!-- Parti commenter -->
        <div class="w-3/5 h-1/2 mt-5 rounded-xl p-3 flex-col border-2 border-gray-400">
            <div class="w-full h-4/5 overflow-auto p-3 flex-col">

                <div class="w-full h-auto bg-sky-950 flex  rounded-lg p-2 gap-3">
                    <img src="med.jpg" alt="" class="w-12 h-12 bg-blue-700 rounded-full ">
                    <div class="w-10/12 h-auto">
                        <h5 class="text-white font-semibold pl-1"><?php echo $_SESSION['name'] ?></h5>
                        <p class="text-gray-300">The element in HTML does not have a built-in
                            placeholder attribute like some other form lements. However, you can create a default option as the
                            first one with some text like "Select Tag" to
                            serve as a placeholder. Users can then choose from the other options. Here's an example</p>
                    </div>
                </div>

                <div class="w-full h-auto bg-sky-950 flex  rounded-lg p-2 gap-3 mt-2">
                    <img src="med.jpg" alt="" class="w-12 h-12 bg-blue-700 rounded-full ">
                    <div class="w-10/12 h-auto">
                        <h5 class="text-white font-semibold pl-1"><?php echo $_SESSION['name'] ?></h5>
                        <p class="text-gray-300">The element in HTML does not have a built-in
                            placeholder attribute like some other form lements. However, you can create a default option as the
                            first one with some text like "Select Tag" to
                            serve as a placeholder. Users can then choose from the other options. Here's an example</p>
                    </div>
                </div>

            </div>
            <div class="w-full h-12 bg-sky-800 flex justify-between  rounded-lg p-2 mt-3">
                <input type="text" class="text-gray-300" placeholder="Comment ...">
                
                <button class="w-20 h-9 rounded-xl bg-black text-white text-lg hover:bg-blue-900">send</button>
                
            </div>
        </div>
        <!-- fin parti comment -->
    </section>
    </body>
</html>