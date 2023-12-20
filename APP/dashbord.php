
<?php  
session_start();
include 'DATABASE.php';
$db = new database();

$sql = "SELECT * FROM ticket";
$row = $db->select_tiket($sql);

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


<div class="w-screen h-16 bg-gray-800 flex justify-between items-center px-7 fixed top-0 shadow-md shadow-gray-700">
    <img class="w-32 h-13" src="https://th.bing.com/th/id/OIP.YnbscusCxdXnHWtU2iM2_gHaEK?rs=1&pid=ImgDetMain" alt="xof line dyl image wax khedam">                      
    <a href="logout.php" class="text-base font-bold text-blue-100 flex items-center">LOG OUT</a>
</div>
<div class="w-screen h-16 "></div>
<div class="w-screen h-full flex gap-3 fixed top-16 p-3 ">
    
    <div class="w-[30%] h-screen  rounded-lg flex flex-col justify-start gap-2  p-3">
        <div class="shadow-md shadow-gray-700 rounded-xl">
            <div class="overflow-hidden ">
                <img src="https://i.postimg.cc/K8Rq5BCD/pexels-pavel-danilyuk-8381916.jpg" alt=""
                    class="object-cover object-top w-full h-32 rounded-t-xl">
            </div>
            <div
                class="relative w-32 h-32 mx-auto -mt-16 overflow-hidden border-4 border-white rounded-full">
                <img src="https://i.postimg.cc/RhQYkKYk/pexels-italo-melo-2379005.jpg" alt=""
                    class="object-cover object-top w-full h-32 ">
            </div>
            <div class="flex justify-center ">
                <div>
                    <h2 class="text-xl text-center font-semibold dark:text-gray-300 "><?php echo $_SESSION['name']; ?></h2>
                    <span class="text-sm font-medium text-gray-600"><?php echo $_SESSION['email']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <div style="display: block;" class="w-[70%] h-full px-[0.3%]  py-[0.3%] flex flex-col gap-5" id="users">
       
        <div class="w-[100%] h-15  flex justify-between items-center">
            <a href="creat_ticket.php" class="bg-sky-900 hover:bg-sky-950 rounded-lg flex justify-center items-center w-36 h-10 text-white shadow-md shadow-gray-700 ">
                creat ticket
            </a> 
            <a href="details_ticket.php" class="bg-sky-900 hover:bg-sky-950 rounded-lg flex justify-center items-center w-36 h-10 text-white shadow-md shadow-gray-700 ">
                SHOW DETAILS
            </a> 
            <div class=" w-2/5 h-fit flex gap-2">
                <select id="tag" name="user" class=" w-1/2 px-3 py-2 border rounded-md mt-1 shadow-md shadow-gray-700">
                    <option value="" disabled selected>Select Status</option>
                    <option value="doing">doing</option>
                    <option value="done">done</option>
                </select>
                <select id="tag" name="user" class=" w-1/2 px-3 py-2 border rounded-md mt-1 shadow-md shadow-gray-700">
                    <option value="" disabled selected>Select Status</option>
                    <option value="doing">doing</option>
                    <option value="done">done</option>
                </select>
            </div>
        </div>
        
        <div class="w-[100%] h-[77%] py-3 overflow-auto">
            
            <table class="min-w-full bg-gray-800  border-gray-300 rounded-xl shadow-lg shadow-gray-700">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">TITLE</th>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">DESCRIPTION</th>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">PRIORETY</th>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">TAG</th>
                       
                    </tr>
                </thead>
                
                <tbody>
                <?php foreach ($row as $key): ?>
                    <tr>
                        
                        <td class="py-2 px-4 border-b border-gray-500 text-white"><?php echo $key['title']; ?></td>
                        <td class="py-2 px-4 border-b border-gray-500 text-white"><?php echo $key['description']; ?></td>
                        <td class="py-2 px-4 border-b border-gray-500 text-white"><?php echo $key['priorite']; ?></td>
                        <td class="py-2 px-4 border-b border-gray-500 text-white"><?php echo $key['status']; ?></td>
                            
                        
                    </tr>  
                <?php endforeach; ?>   
                </tbody>
                
            </table>
            
            
        </div>
    
    </div>    
</div>
</body>
</html>