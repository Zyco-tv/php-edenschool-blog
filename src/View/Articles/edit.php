<?php
function getError($field) {
  if(isset($_SESSION['error'][$field])) {
      $error = $_SESSION['error'][$field];
      unset($_SESSION['error'][$field]);
      return $error;
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Edite article</title>
</head>
<body>
<div class="flex items-stretch">
  <div class="flex-1 text-center  px-4 py-2 m-2"></div>
  <div class="self-center flex-1 text-center px-4 py-2 m-2">
  <form action="/articles/<?php echo $article['slug']?>" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Titre
      </label>
      <input class="shadow border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="title" value="<?php echo $article['title'];?>">
      <span class="text-red-500"><?php echo getError('titleErr'); ?></span>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Titre
      </label>
      <input class="shadow border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="slug" value="<?php echo $article['slug'];?>">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Contenue
      </label>
      <textarea name="contenue" class='shadow border rounded w-full'  id="contenu" cols="30" rows="10"><?php echo $article['contenue'];?></textarea>
      <span class="text-red-500"><?php echo getError('contenuErr'); ?></span> 
    <p class="text-red-500 text-xs italic">Modifie ton text</p>
    </div>
    <div class="flex items-center justify-between">
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Valider
      </button>
    </div>
  </form>
  </div>
  <div class="flex-1 text-gray-700 text-center  px-4 py-2 m-2"></div>
  </div>
</body>
</html>
<?php unset($_SESSION['error']);?>