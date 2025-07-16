<?php
    function custom_Menu($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8){
        echo '
            <ul class="flex text-white  gap-5 m-auto w-[80%]">
                <li><a href="#" class="hover:text-pink-500">'.$a1.'</a></li>
                <li><a href="#" class="hover:text-pink-500">'.$a2.'</a></li>
                <li><a href="#" class="hover:text-pink-500">'.$a3.'</a></li>
                <li><a href="#" class="hover:text-pink-500">'.$a4.'</a></li>
                <li><a href="#" class="hover:text-pink-500">'.$a5.'</a></li>
                <li><a href="#" class="hover:text-pink-500">'.$a6.'</a></li>
                <li><a href="#" class="hover:text-pink-500">'.$a7.'</a></li>
                <li><a href="#" class="hover:text-pink-500">'.$a8.'</a></li>
            </ul>
        ';
    }

    function sectionList($title,$sboder, $bgtitle, $Lpic,$description){
        echo '
        <section class="mt-[50px] w-[80%] h-[500px] shadow m-auto relative border-t-[5px] border-['.$sboder.']">
            <div class="head-section absolute top-[-50px] py-2 px-3 bg-['.$bgtitle.'] text-white">
                '.$title.' <i class="fa-solid fa-angle-right"></i>
            </div>

            <div class="flex w-[100%] h-[100%] p-3">
                <div class="left w-[30%] ">
                    <img src="'.$Lpic.'"  alt="">
                    <div class="txt p-2 bg-pink-400">
                        <p class="text-[25px] text-white">'.$description.'</p>
                    </div>
                </div>

                <div class="right w-[70%] px-[8px] grid grid-cols-4 gap-1">
                    <div class="content shadow ">
                        <img src="https://i.pinimg.com/736x/3c/88/d6/3c88d6aa7a30b841fb284a5c919ac13c.jpg" alt="">
                        <div class="txt p-2 ">
                            <p class="text-[15px] text-black"> adipisicing elit. Similique ullam tenetur nulla sapiente voluptates assumenda!</p>
                        </div>
                    </div>
                    <div class="content shadow ">
                        <img src="https://i.pinimg.com/736x/3c/88/d6/3c88d6aa7a30b841fb284a5c919ac13c.jpg" alt="">
                        <div class="txt p-2 ">
                            <p class="text-[15px] text-black"> adipisicing elit. Similique ullam tenetur nulla sapiente voluptates assumenda!</p>
                        </div>
                    </div>
                    <div class="content shadow ">
                        <img src="https://i.pinimg.com/736x/3c/88/d6/3c88d6aa7a30b841fb284a5c919ac13c.jpg" alt="">
                        <div class="txt p-2 ">
                            <p class="text-[15px] text-black"> adipisicing elit. Similique ullam tenetur nulla sapiente voluptates assumenda!</p>
                        </div>
                    </div>
                    <div class="content shadow ">
                        <img src="https://i.pinimg.com/736x/3c/88/d6/3c88d6aa7a30b841fb284a5c919ac13c.jpg" alt="">
                        <div class="txt p-2 ">
                            <p class="text-[15px] text-black"> adipisicing elit. Similique ullam tenetur nulla sapiente voluptates assumenda!</p>
                        </div>
                    </div>
                    <div class="content shadow ">
                        <img src="https://i.pinimg.com/736x/3c/88/d6/3c88d6aa7a30b841fb284a5c919ac13c.jpg" alt="">
                        <div class="txt p-2 ">
                            <p class="text-[15px] text-black"> adipisicing elit. Similique ullam tenetur nulla sapiente voluptates assumenda!</p>
                        </div>
                    </div>
                    <div class="content shadow ">
                        <img src="https://i.pinimg.com/736x/3c/88/d6/3c88d6aa7a30b841fb284a5c919ac13c.jpg" alt="">
                        <div class="txt p-2 ">
                            <p class="text-[15px] text-black"> adipisicing elit. Similique ullam tenetur nulla sapiente voluptates assumenda!</p>
                        </div>
                    </div>
                    <div class="content shadow ">
                        <img src="https://i.pinimg.com/736x/3c/88/d6/3c88d6aa7a30b841fb284a5c919ac13c.jpg" alt="">
                        <div class="txt p-2 ">
                            <p class="text-[15px] text-black"> adipisicing elit. Similique ullam tenetur nulla sapiente voluptates assumenda!</p>
                        </div>
                    </div>
                    <div class="content shadow ">
                        <img src="https://i.pinimg.com/736x/3c/88/d6/3c88d6aa7a30b841fb284a5c919ac13c.jpg" alt="">
                        <div class="txt p-2 ">
                            <p class="text-[15px] text-black"> adipisicing elit. Similique ullam tenetur nulla sapiente voluptates assumenda!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Sansation:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
         *{
            font-family: 'Hanuman', sans-serif;
            font-size: 20px;
        };
        .head-section{
            clip-path: polygon(0 0, 83% 0, 100% 100%, 0% 100%);
        
        }
        .on-head{
            clip-path: polygon(0 0, 90% 0, 100% 100%, 0% 100%);
        }
    </style>

</head>
<body>
    <menu class="w-full bg-[#fa1939] p-4">
    <!-- <menu class="w-full bg-[#c9c2c3] p-4"> -->
        <?php custom_Menu("<i class='fa-solid fa-house'></i>", "កម្សាន្ត", "បច្ចេកវិទ្យា", "ជីវិតនិងសង្គម", "កីឡា", "ផ្លូវទៅស្រុក", "AUTO TALK", "PORTCAST"); ?>
    </menu>

    <section class="w-[80%] m-auto h-[70vh] shadow mt-8 flex gap-2 ">
    <div class="left w-[70%] bg-blue-400">
        <div class="row h-[50%] bg-black flex">
            <div style="background-image: url(../Image/img3.jpg);" class="w-[60%] h-[100%] bg-green-800 relative">
                <!-- <img class="w-[100%] h-[100%] object-fit-contain" src="" alt=""> -->
                    <div class="on-head bg-[#fa5480] p-1 w-[15%] absolute top-[15px]">
                        <p class="text-[18px] text-white">កម្សាន្ត</p>
                    </div>
                    <div class="group p-1 mt-[125px] text-white transition-all duration-300 hover:mt-[100px] hover:text-red-600">
                        <p class="text-[24px] font-semibold">
                            ថ្ងៃនេះ ទេព រិនដារ៉ូ សម្រេចចិត្ដចាក់វ៉ាក់សាំង ជាមួយពាក្យក្រើនរំលឹកចំពោះហ្វេនៗ
                        </p>
                        <p class="text-[15px] opacity-0 transition-opacity duration-300 group-hover:opacity-100 text-white">
                            ទេព រិនដារ៉ូ ក្រើនរំលឹកចំពោះហ្វេនៗ
                        </p>
                    </div>
                <div class="h-[40px] absolute bottom-0 w-[100%] p-1 text-white text-[15px]">អង្គារ, 20 ឧសភា 2025 14:24</div>
            </div>
            <div class="w-[40%] h-[100%] bg-pink-700"></div>
        </div>
    </div>
    <div class="rigth w-[30%] bg-red-300"></div>
</section>


    <section>
        <?php sectionList("កម្សាន្ត", "#fa5480","#fa5480", "https://i.pinimg.com/736x/f7/4b/87/f74b87389a99d98417f4c3767002f63a.jpg","loremaskjfeiafeiakdofje")?>
    </section>
    <section>
        <?php sectionList("បច្ចេកវិទ្យា", "#4390f8","#4390f8", "https://i.pinimg.com/736x/f7/4b/87/f74b87389a99d98417f4c3767002f63a.jpg","loremaskjfeiafeiakdofje")?>
    </section>
    
        
    
</body>
</html>