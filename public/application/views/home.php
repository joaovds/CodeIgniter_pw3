<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="w-screen h-screen bg-gray-800">
    <header class="flex items-center justify-around py-4 bg-gray-900 text-gray-200">
      <h4 class="text-lg font-bold text-blue-300">PW III</h4>

      <nav class="text-base text-blue-50">
        <ul class="flex flex-row">
          <li
            class="mx-2 px-3 py-1 border rounded-xl border-gray-500 cursor-pointer hover:bg-gray-800 hover:shadow-lg"
          >
            Home
          </li>
          <li
            class="mx-2 px-3 py-1 border rounded-xl border-gray-500 cursor-pointer hover:bg-gray-800 hover:shadow-lg"
          >
            Produtos
          </li>
          <li
            class="mx-2 px-3 py-1 border rounded-xl border-gray-500 cursor-pointer hover:bg-gray-800 hover:shadow-lg"
          >
            Sobre
          </li>
        </ul>
      </nav>
    </header>

    <div class="container mx-auto mt-8">
      <div class="max-w-screen-lg bg-gray-700 shadow-2xl rounded-lg mx-auto text-center py-12 mt-4">
        <h2 class="text-3xl leading-9 font-bold tracking-tight text-gray-300 sm:text-4xl sm:leading-10">
          Estudando CodeIgniter em PW III
        </h2>
        <div class="mt-8 flex justify-center">
          <div class="inline-flex rounded-md bg-gray-800 shadow hover:shadow-lg hover:bg-gray-800">
            <a href="https://codeigniter.com" class="text-gray-200 font-bold py-2 px-6" target="_blank">
              Documentação
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
