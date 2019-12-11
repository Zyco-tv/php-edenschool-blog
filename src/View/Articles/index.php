<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
<nav class="bg-white px-8 pt-2 shadow-md">
     <div class="-mb-px flex justify-center">
         <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/">
             Home
         </a>
         <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/articles">
             Article
         </a>
         <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
             Categorie
         </a>
         <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3" href="#">
             Settings
         </a>
     </div>
</nav>

 
<section class="py-12">
        <div class="container mx-auto">
        
            <div>
                <h1 class="text-2xl font-black text-gray-900 pb-6 px-6 md:px-12">
                   Mon Blog
                </h1>
                <a href="/articles/nouveau/<?php echo $article['slug']; ?>" class="text-green-600 px-1 ">
                                           Crée un article
            </a>
            </div>
            <div class="flex flex-wrap px-6">
            <?php 
    foreach($articles as $article) {
        ?>
                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                    <div class="bg-white shadow-xl">
                        <div class="">
                            <img src="https://digitalsynopsis.com/wp-content/uploads/2017/02/beautiful-color-gradients-backgrounds-166-deep-relief.png?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""
                                class="h-56 w-full border-white border-8 hover:opacity-25">
                        </div>
                        <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold break-words  text-lg">
                            <?php echo $article['title']; ?>
                            </h1>
                            <p class="py-4 break-words">
                            <?php echo $article['contenue']; ?>
                            </p>
                            <div class="flex flex-wrap pt-8">
                                <div class="w-full md:w-1/3 text-sm font-medium">
                                    DATE: ?????
                                </div>
                                <div class="2/3">
                                    <div class="text-sm font-medium">
                                        SHARE:
                                        <a href="" class="text-blue-700 px-1 ">
                                            FACEBOOk
                                        </a>
                                        <a href="" class="text-blue-500 px-1 ">
                                            TWITTER
                                        </a>
                                        <a href="/articles/<?php echo $article['slug']; ?>" class="text-red-600 px-1 ">
                                            En savoir plus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
    }
    ?>
            </div>
            
        </div>
    </section>
</body>
</html>