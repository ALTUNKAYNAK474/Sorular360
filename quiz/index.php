<?php include("./include/routers.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("./include/head.php") ?>
<body>
  <div class="relative min-h-screen flex overflow-clip">
    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0  bg-gradient-to-b from-yellow-600 to-purple-800">
      <div class="content sm:w-1/2 xl:w-3/5 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden bg-no-repeat bg-cover relative" style="background-image: url(./images/giris.png);"> <!-- sol kısım  -->
        <div class="absolute bg-gradient-to-b from-yellow-600 to-purple-800 opacity-70 inset-0 z-0"></div>
        <div class="w-full max-w-md z-10">
          <div class="sm:text-3xl xl:text-4xl text-white font-bold leading-tight mb-6">Başarıya Giden Yolda Sınavlarla Adım Adım ilerle!</div>
          <div class="sm:text-sm xl:text-lg text-gray-100">"Sınavlara Adım Adım: Öğrenciler İçin Kullanıcı Dostu Arayüz ve Hızlı, Güvenli Online Giriş Deneyimi ile Pratik Çözüm"</div>
        </div>    
        <ul class="circles"> <!---animasyon-->
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="md:flex md:items-center md:justify-center w-full sm:w-auto md:h-full xl:w-2/5 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none bg-white"><!--sağ kısım-->
        <div class="max-w-md w-full space-y-8"> 
          <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-gray-900">Tekrar Hoşgeldiniz!</h2>
            <p class="mt-2 text-sm text-gray-500">Lütfen hesabınızda oturum açın</p>
          </div>
          <div class="flex flex-row justify-center items-center space-x-3">
            <a href="https://www.facebook.com/sorular360" target="_blank" class="w-11 h-11 justify-center inline-flex cursor-pointer">
              <img src="./svg/facebook.svg"></a>
            <a href="https://github.com/sorular360" target="_blank" class="w-11 h-11 justify-center inline-flex cursor-pointer">
              <img src="./svg/github.svg"></a>
            <a href="https://linkedin.com/sorular360" target="_blank" class="w-11 h-11 justify-center inline-flex cursor-pointer">  
              <img src="./svg/linkedin.svg" class=" rounded-xl"></a>
          </div>
          <div class="flex items-center justify-center space-x-2">
            <span class="h-px w-16 bg-gray-200"></span><span class="text-gray-300">veya devam et</span><span class="h-px w-16 bg-gray-200"></span>
          </div>
          <form class="mt-8 space-y-6" method="POST" action="main.php">
            <input type="hidden" name="remember" value="true">
            <div class="relative">
              <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">E-mail</label>
              <input class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-600" type="email" placeholder="mail@gmail.com"">
            </div>
            <div class="mt-8 content-center">
              <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Şifre</label>
              <input
                class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-600"
                type="password" placeholder="Şifrenizi girin">
            </div>
            <div class="flex justify-between">
              <div class="flex items-center">
                <input id="" name="" type="checkbox" class="h-4 w-4 focus:ring-blue-400 border-gray-300">
                <label for="" class="ml-2 block text-sm text-gray-900">Göster/Gizle</label>
              </div>
                <a href="#" class="text-sm text-indigo-400 hover:text-blue-500">Parolanızı mı unuttunuz?</a>
            </div>
            <button type="submit" class="w-full flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4  rounded-full tracking-wide font-semibold shadow-lg cursor-pointer">Giriş</button>
            <p class="flex flex-col justify-center mt-10 text-center text-md text-gray-500">
              <label>Hesabınız yok mu?</label>  
              <a href="kayit.php" class="text-indigo-400 hover:text-blue-800 hover:scale-105 no-underline cursor-pointer">Üye Ol</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>