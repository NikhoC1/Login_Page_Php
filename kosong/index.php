<?php 
    include "../function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../output.css">
</head>

<body class="bg-gray-300">
    <div
        class=" container mx-auto border mt-[90px] rounded-xl w-96 h-[430px] shadow-xl shadow-gray-400 bg-yellow-00 bg-white">
        <h1 class="mt-4 text-2xl text-black ml-[130px] mb-10">Login Form</h1>
        <form action="test.php" method="POST">
            <label class="ml-[30px]">Username :</label><br>

            <input
                class=" border border-black hover:ring-1 hover:ring-sky-500 rounded-md ml-[20px] h-10 w-[340px] mt-4 mb-3 invalid:text-red-700 invalid:focus:ring-red-700 invalid:focus:border-red-700 peer pl-[15px]"
                type="email" name="Username" id="Username" placeholder="Masukkan email anda"><br>
            <p class="text-sm ml-[19px] text-red-700 invisible peer-invalid:visible">Email Invalid</p>

            <label class="ml-[30px]">Password :</label><br>
            <input
                class=" border border-black hover:ring-1 hover:ring-sky-500 rounded-md ml-[20px] h-10 w-[340px] mt-4 mb-3 pl-[15px]"
                type="password" name="password" id="password" placeholder="Masukkan Password anda"><br>

            <a href="#" class="ml-[20px] text-blue-400">Belum punya akun?</a><br>
            <button
                class=" ml-10 w-[81px] h-10 rounded-lg bg-sky-300 hover:bg-sky-600 ring-2 ring-bg-sky-300 border cursor-pointer mt-10"
                type="submit" id="Save" name="Save">Save</button>

        </form>
    </div>
</body>

</html>