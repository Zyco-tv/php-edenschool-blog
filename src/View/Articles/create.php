<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Creat articles</title>
</head>
<body>
<div class="flex items-stretch">
  <div class="flex-1 text-center  px-4 py-2 m-2"></div>
  <div class="self-center flex-1 text-center px-4 py-2 m-2">
  <form method="post" action="/articles" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Titre
      </label>
      <input class="shadow border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" name="title" required>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Slug
      </label>
      <input class="shadow border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="slug" type="text" name="slug" required>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Contenue
      </label>
      <textarea class='shadow border rounded w-full' name="contenue"  id="contenue" cols="30" rows="10"></textarea>
    <p class="text-green-500 text-xs italic">Ajoute ton article</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="crée" type="button">
        Valider
      </button>
    </div>
  </form>
  </div>
  <div class="flex-1 text-gray-700 text-center  px-4 py-2 m-2"></div>
  </div>
</body>
</html>