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
         <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
             Home
         </a>
         <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/articles">
             Article
         </a>
         <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
             Categorie
         </a>
         <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
             Settings
         </a>
         <a class="no-underline border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 text-green-600 mr-8" href="/login<?php echo $article['slug']; ?>">
                                           Connexion
            </a>
            <a class="no-underline border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 text-red-600 mr-3" href="/register<?php echo $article['slug']; ?>">
                                           Register
            </a>
     </div>
</nav>
<div class=" w-full  flex  flex-row  flex-wrap  bg-gray-600  p-10  py-20  justify-center" style="background-repeat: no-repeat; background-size: cover; background-blend-mode: multiply;background-position: center center;background-image: url('https://images.unsplash.com/photo-1573079487717-f8ebae0b1539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');">
  <div class=" w-full  text-center">
    <div class=" text-3xl  text-center text-white  antialiased">Tiens toi informer</div>
    <div class="text-xl   text-center  text-white antialiased">les news qui sont mis en ligne arrive direct dans ton mail</div>
  </div>
  <form class=" mt-3  flex   flex-row   flex-wrap" action="" method="POST">
	      <div class="text-gray-600  w-2/3">
	        <input type="text" name="email" class="  w-full  p-2   rounded-l-lg" placeholder="john@mail.com"/>
	      </div>
	     	<div class=" w-1/3">
	     	  <button class=" w-full text-white  p-2  bg-indigo-400  rounded-r-lg text-center hover: bg-indigo-300" type="submit">Subscribe</button>
	     	</div>
	 </form>
</div>
<main class="py-4">
<h1 class="text-2xl font-black text-gray-900 pb-6 px-6 md:px-12">
                   Dernier articles
                </h1>
  <div class="block md:flex justify-between md:-mx-2">
  
<?php 
    foreach($articles as $article) {
        ?>
      <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <img class="h-56 w-full object-cover object-center" src="https://images.unsplash.com/photo-1457282367193-e3b79e38f207?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1654&q=80" alt="">
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
            <?php echo $article['title']; ?>
            </a>
            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
            <?php echo $article['contenue']; ?>
          </div>
            <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#noname</a>
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#noname</a>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    </div>
    </main>
</body>
</html>