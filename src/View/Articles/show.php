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
         <a class="no-underline text-teal-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/">
             Home
         </a>
         <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="/articles">
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
<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">Titre: 
    <?php echo $article['title']; ?>
    </div>
    <p class="text-gray-700 text-base">Contenue: 
    <?php echo $article['contenue']; ?>
    </p>
  </div>
  <a class="flex items-baseline mt-3 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900" href="/articles/<?php echo $article['slug']; ?>/edit">
            <span>Edit</span>
            <span class="text-xs ml-1">&#x279c;</span>
    </a>
            <form action="/articles/<?php echo $article['slug']; ?>/delete" method="post">
                <button type="submit">Suppr <span class="text-xs ml-1">&#x279c;</span></button>
            </form>
          </a>
</div>
   
</body>
</html>