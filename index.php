<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Management System</title>
</head>
<body>
    <div class="w-full h-full flex flex-row ">
        <div class="w-full h-screen  items-center flex flex-col py-10">
            <h1 class="text-4xl font-semibold uppercase tracking-[5px] text-center">Welcome to Student Management System</h1>
         <div class="flex flex-row justify-evenly gap-3 py-5 h-full items-center">
         <button class="py-2 px-3 bg-orange-600 outline-none hover:bg-orange-700 text-white rounded-md"><a href="http://localhost/student_management_system/student/html/login.html">Student Portal</a></button>
            <button class="py-2 px-3 bg-red-600 outline-none hover:bg-red-700 text-white rounded-md"><a href="http://localhost/student_management_system/academic_officer/html/login.html">Academic Officer Portal</a></button>
            <button class="py-2 px-3  bg-yellow-500 outline-none hover:bg-yellow-600 text-white rounded-md"><a href="http://localhost/student_management_system/Teacher/html/login.html">Lecturer Portal</a></button>
         </div>
        </div>
        <div class="w-full h-screen overflow-hidden">
            <img src="https://d2jyir0m79gs60.cloudfront.net/news/images/successful-college-student-lg.png" class="w-full  h-full object-cover" alt="">
        </div>
    </div>

</body>
</html>
    

<?php
}else{
    http_response_code(404);

    echo('
    <html>
    <head>
    <title>404 Not Found | Student management system</title>
    </head>
    <body style=" width:100%; display:flex; flex-direction:row ; justify-content:center;align-items:center">
    <h1 style="text-align:center;">404 Not Found</h1>
    </body>
    </html>
    ');
}

?>