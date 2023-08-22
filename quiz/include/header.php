<header class="text-lime-500 sticky top-0 z-50">
  <div class="container mx-auto p-4 md:flex-row flex items-center justify-between">
    <div>
      <a href="main.php" class="flex title-font font-medium items-center mb-4 md:mb-0">
        <img src="./images/sorular360logo.png" alt="logo" class="w-20 h-14 text-white">
        <p class="ml-3 text-2xl max-md:hidden">Sorular360</p>
      </a>
    </div>
    <div class="flex justify-center w-1/3 max-sm:hidden">
      <input type="text" class="border border-lime-300 rounded-l-md px-4 py-2 text-lime-400 focus:outline-none w-full bg-transparent " placeholder="Arama yap...">
      <button type="submit" value="" class="bg-lime-400 px-4 py-2 rounded-r-md"><i class="material-symbols-outlined text-slate-700 font-bold">search</i></button>
    </div>
    <div>
    <ul class="md:ml-auto flex items-center justify-center text-lg">
      <li class="relative">
        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="mr-6 hover:text-yellow-500">Dersler</button>
        <div id="dropdownNavbar" class="absolute hidden mt-3 right-0 text-center">
          <ul class="md:ml-auto text-base text-slate-900" aria-labelledby="dropdownNavbarLink">
            <li class="px-4 py-2 bg-lime-400 hover:bg-yellow-300 rounded-t-md"><a href="./code/matematik.php" class="no-underline">Matematik</a></li>
            <li class="px-4 py-2 bg-lime-400 hover:bg-yellow-300"><a href="./code/turkce.php" class="no-underline"></a>Türkçe</li>
            <li class="px-4 py-2 bg-lime-400 hover:bg-yellow-300"><a href="./code/edebiyat.php" class="no-underline">Edebiyat</a></li>
            <li class="relative">
              <button id="dropdownKimyaLink" data-dropdown-toggle="dropdownKimya" class="px-4 py-2 bg-lime-500 hover:bg-yellow-400 w-full">Fen</button>
              <div id="dropdownKimya" class="absolute hidden right-20 -mt-5">
                <ul class="md:ml-auto text-lime-400 bg-slate-900 rounded-lg shadow-lg shadow-green-800" aria-labelledby="dropdownKimyaLink">
                  <li class="px-5 py-1 rounded-t-md hover:bg-lime-950"><a href="#">Fizik</a></li>
                  <li class="px-5 py-1 hover:bg-lime-950">Kimya</a></li>
                  <li class="px-5 py-1 rounded-b-md hover:bg-lime-950"><a href="#">Biyoloji</a></li>
                </ul>
              </div>
            </li>
            <li class="px-4 py-2 bg-lime-400 hover:bg-yellow-300"><a href="#" class="no-underline">Tarih</a></li>
            <li class="px-4 py-2 bg-lime-400 hover:bg-yellow-300"><a href="#" class="no-underline">Coğrafya</a></li>
            <li class="relative">
              <button id="dropdownDilLink" data-dropdown-toggle="dropdownDil" class="px-4 py-2 bg-lime-500 hover:bg-yellow-400 w-full">Dil</button>
              <div id="dropdownDil" class="absolute hidden left-20 -mt-5">
                <ul class="md:ml-auto text-lime-400 bg-slate-900 rounded-lg shadow-lg shadow-green-800" aria-labelledby="dropdownDilLink">
                  <li class="px-5 py-1 hover:bg-lime-950 rounded-t-md"><a href="./code/english.php">İngilizce</a></li>
                  <li class="px-5 py-1 hover:bg-lime-950"><a href="#">Almanca</a></li>
                  <li class="px-5 py-1 hover:bg-lime-950"><a href="#">Fransızca</a></li>
                  <li class="px-5 py-1 hover:bg-lime-950"><a href="#">Arapça</a></li>
                  <li class="px-5 py-1 hover:bg-lime-950 rounded-b-md"><a href="#">Flemenkçe</a></li>
                </ul>
              </div>
            </li>
            <li class="px-4 py-2 bg-lime-400 hover:bg-yellow-300"><a href="#" class="no-underline">DKAP</a></li>
            <li class="px-4 py-2 bg-lime-400 hover:bg-yellow-300 rounded-b-md"><a href="#" class="no-underline">Felsefe</a></li>
          </ul>
        </div>
      </li>
      <li><a href="about.php" class="mr-6 hover:text-yellow-500">Hakkımızda</a></li>
      <li><a href="iletisim.php" class="mr-6 hover:text-yellow-500">İletişim</a></li>
      <li class="mr-4 px-4 py-1.5 bg-lime-500 rounded-lg text-slate-800 hover:text-yellow-700"><a href="#" class="">Premium</a></li>
    </ul>
    </div>
  </div>
</header>
<!-- profil -->