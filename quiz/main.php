<?php include("./include/routers.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("./include/head.php") ?>
<body class="bg-slate-900">
  <div class="relative flex flex-col">
    <?php include("./include/header.php");?>
    <menu class="relative w-full h-screen bg-no-repeat bg-cover" style="background-image: url(./images/c.jpeg);">
      <div class="w-full h-screen flex flex-col items-center justify-between bg-black bg-opacity-60 py-8">
        <div class="flex-1 flex flex-col items-center justify-center">
          <h1 class="text-6xl lg:text-7xl xl:text-8xl tracking-wider font-bold font-serif mt-10 text-center bg-gradient-to-r from-lime-600 to-cyan-500 text-transparent bg-clip-text p-2 animate-pulse">Sorular360</h1>
          <div class="flex flex-col items-center space-y-4 mt-24">
            <p class="text-gray-300 uppercase text-2xl bg-gradient-to-r from-lime-500 to-cyan-400 text-transparent bg-clip-text ">"Binlerce Soru, Sınırsız Potansiyel"</p>
          </div>
        </div>
        <div class="flex flex-row justify-center items-center space-x-3">
          <a href="https://www.facebook.com/sorular360" target="_blank" class="w-8 h-8 justify-center inline-flex cursor-pointer z-50">
            <img src="./svg/facebook.svg"></a>
          <a href="https://github.com/sorular360" target="_blank" class="w-8 h-8 justify-center inline-flex cursor-pointer z-50">
            <img src="./svg/github.svg"></a>
          <a href="https://linkedin.com/sorular360" target="_blank" class="w-8 h-8 justify-center inline-flex cursor-pointer z-50">  
            <img src="./svg/linkedin.svg" class=" rounded-xl"></a>
        </div>
      </div>
      <ul class="circlesV2 text-center text-4xl font-bold text-white">
          <li>+</li><li>_</li><li>X</li><li>∑</li><li>∫</li><li>∆</li><li>=</li><li><</li><li>π</li><li>√</li></ul>
    </menu>
    <iframe class="w-full h-96 px-4 py-10 object-cover object-center" src="https://www.youtube.com/embed/"></iframe>
    <section class="px-5 py-11">
      <h1 class="text-lime-400 text-3xl text-center">Popüler Sınavlar</h1>
      <div class="container  mx-auto">
        <div class="flex flex-wrap">
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
            <a href="./sinavayrinti.php" class="rounded overflow-hidden block">
              <img src="./images/sinav.jpg" alt="deneme" class="object-cover object-center w-full h-full hover:scale-125">
            </a>
            <div class="mt-4 leading-none">
              <h3 class="text-gray-400 text-sm tracking-widest">Matematik</h3>
              <h2 class="text-white text-lg">Seviye-1a</h2>
              <p class="text-gray-100 text-sm">Ücretsiz</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
            <a href="./sinavayrinti.php" class="rounded overflow-hidden block">
              <img src="./images/sinav.jpg" alt="deneme" class="object-cover object-center w-full h-full hover:scale-125">
            </a>
            <div class="mt-4 leading-none">
              <h3 class="text-gray-400 text-sm tracking-widest">Fen/Fizik</h3>
              <h2 class="text-white text-lg">Seviye-4c</h2>
              <p class="text-gray-100 text-sm">45TL</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
            <a href="./sinavayrinti.php" class="rounded overflow-hidden block">
              <img src="./images/sinav.jpg" alt="deneme" class="object-cover object-center w-full h-full hover:scale-125">
            </a>
            <div class="mt-4 leading-none">
              <h3 class="text-gray-400 text-sm tracking-widest">Matematik</h3>
              <h2 class="text-white text-lg">Seviye-1b</h2>
              <p class="text-gray-100 text-sm">Ücretsiz</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
            <a href="./sinavayrinti.php" class="rounded overflow-hidden block">
              <img src="./images/sinav.jpg" alt="deneme" class="object-cover object-center w-full h-full hover:scale-125">
            </a>
            <div class="mt-4 leading-none">
              <h3 class="text-gray-400 text-sm tracking-widest">Din Kültürü ve Ahlak Bilgisi</h3>
              <h2 class="text-white text-lg">Seviye-Nihai</h2>
              <p class="text-gray-100 text-sm">70TL</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
            <a href="./sinavayrinti.php" class="rounded overflow-hidden block">
              <img src="./images/sinav.jpg" alt="deneme" class="object-cover object-center w-full h-full hover:scale-125">
            </a>
            <div class="mt-4 leading-none">
              <h3 class="text-gray-400 text-sm tracking-widest">Türkçe</h3>
              <h2 class="text-white text-lg">Seviye-<a class="text-yellow-300">2b</a></h2>
              <p class="text-gray-100 text-sm">20TL</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
            <a href="./sinavayrinti.php" class="rounded overflow-hidden block">
              <img src="./images/sinav.jpg" alt="deneme" class="object-cover object-center w-full h-full hover:scale-125">
            </a>
            <div class="mt-4 leading-none">
              <h3 class="text-gray-400 text-sm tracking-widest">İngilizce</h3>
              <h2 class="text-white text-lg">Seviye-3a</h2>
              <p class="text-gray-100 text-sm">Ücretsiz</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="">
      <div class="container px-5 py-20 mx-auto">
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-green-500 sm:flex-row flex-col">
          <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center flex-shrink-0">
            <img src="./images/ogretmenler.jpg" alt="matematikogretmen" class="rounded-full">
          </div>
          <div>
            <h2 class="text-lime-300 text-lg">Öğretmenlerimiz</h2>
            <p class="text-gray-400 text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore ratione ea officia consequuntur deserunt dolorem quisquam.</p>
            <a href="#" class="mt-3 text-indigo-500 inline-flex items-center">Daha fazla bilgi edin</a>
          </div>
        </div>
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-green-500 sm:flex-row flex-col">
          <div>
            <h2 class="text-lime-300 text-lg">Eğlenceli</h2>
            <p class="text-gray-400 text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore ratione ea officia consequuntur deserunt dolorem quisquam.</p>
            <a href="#" class="mt-3 text-indigo-500 inline-flex items-center">Daha fazla bilgi edin</a>
          </div>
          <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center flex-shrink-0 right">
            <img src="./images/ogretmen.jpg" alt="prof" class="rounded-full">
          </div>
        </div>
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-green-500 sm:flex-row flex-col">
          <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center flex-shrink-0">
            <img src="./images/kitapkaf.jpg" alt="KitapKafa" class="rounded-full">
          </div>
          <div>
            <h2 class="text-lime-300 text-lg">Çalış</h2>
            <p class="text-gray-400 text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore ratione ea officia consequuntur deserunt dolorem quisquam.</p>
            <a href="#" class="mt-3 text-indigo-500 inline-flex items-center">Daha fazla bilgi edin</a>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php include("./include/footer.php");?>