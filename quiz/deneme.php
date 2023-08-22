<!DOCTYPE html>
<html lang="en">
<?php include("./include/head.php") ?>
<body>
<ul class="md:ml-auto flex items-center justify-center text-lg">
  <li class="relative">
    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="mr-6 hover:text-blue-900">Dersler</button>
    <div id="dropdownNavbar" class="absolute hidden mt-2 py-2 bg-white rounded-lg shadow-md">
      <ul class="md:ml-auto text-lg" aria-labelledby="dropdownNavbarLink">
        <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Matematik</a></li>
        <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Türkçe</a></li>
        <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Edebiyat</a></li>
        <li class="relative">
          <button id="dropdownKimyaLink" data-dropdown-toggle="dropdownKimya" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Fen</button>
          <div id="dropdownKimya" class="absolute hidden mt-2 py-2 bg-white rounded-lg shadow-md">
            <ul class="md:ml-auto text-lg" aria-labelledby="dropdownKimyaLink">
              <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Fizik</a></li>
              <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Kimya</a></li>
              <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Biyoloji</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Tarih</a></li>
        <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Coğrafya</a></li>
        <li class="relative">
          <button id="dropdownDilLink" data-dropdown-toggle="dropdownDil" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Dil</button>
          <div id="dropdownDil" class="absolute hidden mt-2 py-2 bg-white rounded-lg shadow-md">
            <ul class="md:ml-auto text-lg" aria-labelledby="dropdownDilLink">
            <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">İngilizce</a></li>
            <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Almanca</a></li>
            <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Fransızca</a></li>
            <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Arapça</a></li>
            <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Flemenkçe</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Din Kültürü ve Ahlâk Bilgisi</a></li>
        <li><a href="#" class="px-4 py-2 text-gray-800 hover:bg-blue-100">Felsefe</a></li>
      </ul>
    </div>
  </li>
  <li><a href="#" class="mr-6 hover:text-blue-900">Hakkımızda</a></li>
  <li><a href="#" class="mr-6 hover:text-blue-900">İletişim</a></li>
  <li><a href="#" class="mr-6 hover:text-blue-900">Premium</a></li>
</ul>

<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-white title-font text-lg font-medium">The Catalyzer</h2>
          <p class="mt-1">$16.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-white title-font text-lg font-medium">Shooting Stars</h2>
          <p class="mt-1">$21.15</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/422x262">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-white title-font text-lg font-medium">Neptune</h2>
          <p class="mt-1">$12.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/423x263">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-white title-font text-lg font-medium">The 400 Blows</h2>
          <p class="mt-1">$18.40</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/424x264">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-white title-font text-lg font-medium">The Catalyzer</h2>
          <p class="mt-1">$16.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/425x265">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-white title-font text-lg font-medium">Shooting Stars</h2>
          <p class="mt-1">$21.15</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/427x267">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-white title-font text-lg font-medium">Neptune</h2>
          <p class="mt-1">$12.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a href="#" class="h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/428x268">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-white title-font text-lg font-medium">The 400 Blows</h2>
          <p class="mt-1">$18.40</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script> -->

</body>
</html>