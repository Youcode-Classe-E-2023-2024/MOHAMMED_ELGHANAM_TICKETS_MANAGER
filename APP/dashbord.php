
<?php
    include 'header.php';
?>
<div class="w-screen h-16 bg-gray-800 flex justify-between items-center px-7 fixed top-0 shadow-md shadow-gray-700">
    <img class="w-32 h-15 " src="logo-help.png" alt="">                      
    <a href="LOGOUT.php" class="text-base font-bold text-blue-100 flex items-center">LOG OUT</a>
</div>
<div class="w-screen h-16 "></div>
<div class="w-screen h-full flex gap-3 fixed top-16 p-3 ">
    <!-- fixed top-16 -->
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
                    <h2 class="text-xl font-semibold dark:text-gray-300 ">John Doe</h2>
                    <span class="text-sm font-medium text-gray-600">john@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
    <div style="display: block;" class="w-[70%] h-full px-[0.3%]  py-[0.3%] flex flex-col gap-5" id="users">
       
        <div class="w-[100%] h-15  flex justify-between items-center">
            <a href="creat_ticket.php" class="bg-sky-900 hover:bg-sky-950 rounded-lg flex justify-center items-center w-36 h-10 text-white shadow-md shadow-gray-700 ">
                creat ticket
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
            <a href="details_ticket.php">
            <table class="min-w-full bg-gray-800  border-gray-300 rounded-xl shadow-lg shadow-gray-700">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">Name</th>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">DESCRIPTION</th>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">PRIORETY</th>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">TAG</th>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">ASSIGNEMENT</th>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">STATUS</th>
                        <th class="py-2 px-4 border-b border-gray-500 text-gray-400">DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-500 text-white">1</td>
                        <td class="py-2 px-4 border-b border-gray-500 text-white">John Doe</td>
                        <td class="py-2 px-4 border-b border-gray-500 text-white">1</td>
                        <td class="py-2 px-4 border-b border-gray-500 text-white">John Doe</td>
                        <td class="py-2 px-4 border-b border-gray-500 text-white flex gap-1">
                            <img src="https://i.postimg.cc/RhQYkKYk/pexels-italo-melo-2379005.jpg" alt="" class=" w-8 h-8 rounded-full">
                            <p>hello</p>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-500 text-white">
                            
                        <select id="tag" name="user" class=" w-24 h-6 px-3 py-2 border rounded-md shadow-md shadow-gray-700">
                            <option value="" disabled selected>Select Status</option>
                            <option class=" text-black" value="doing">doing</option>
                            <option class=" text-black" value="done">done</option>
                        </select>
                        
                        </td>
                        <td class="py-2 px-4 border-b border-gray-500 text-white">Admin</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 text-white">2</td>
                        <td class="py-2 px-4 text-white">Jane Doe</td>
                        <td class="py-2 px-4 text-white">1</td>
                        <td class="py-2 px-4 text-white">John Doe</td>
                        <td class="py-2 px-4 text-white">jane@example.com</td>
                        <td class="py-2 px-4 text-white">
                        <select id="tag" name="user" class=" w-24 h-6 px-3 py-2 border rounded-md shadow-md shadow-gray-700">
                            <option value="" disabled selected>Select Status</option>
                            <option class=" text-black" value="doing">doing</option>
                            <option class=" text-black" value="done">done</option>
                        </select>
                        </td>
                        <td class="py-2 px-4 text-white">Admin</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            </a>
            <!-- <div class="w-[100%] h-20  rounded-md  flex justify-between items-center px-3  shadow-sm shadow-blue-200 my-1 bg-green-600"></div> -->
        </div>
    
    </div>    
</div>