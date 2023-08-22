<?php include("./include/routers.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("./include/head.php") ?>
<body>
    <div class="relative min-h-screen flex overflow-clip">
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 bg-gradient-to-r max-md:from-cyan-400 max-md:via-blue-800 max-md:to-cyan-400 fixed top-0 right-0 w-20 h-20 bg-blue-500 text-white flex justify-center items-center">
            <div class="sm:w-1/2 xl:w-3/5 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden text-white bg-no-repeat bg-cover relative" style="background-image: url(./images/kayit.jpg);"> <!-- sol kısım  -->
                <div class="absolute bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900 opacity-60 inset-0 z-0"></div>
                <div class="w-full max-w-md z-10">
                    <div class="sm:text-3xl xl:text-4xl font-bold leading-tight mb-6">Sorular360</div>
                    <div class="sm:text-sm xl:text-lg">"Öğren, Test Et, Başar! Tam Donanımlı Sınav Hazırlık Platformu"</div>
                    <div class="animate-spin absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                    <div class="animate-spin absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                    <div class="animate-spin absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8 "></div>
                    <div class="animate-spin absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                </div>
            </div>
            <div class="w-full h-full bg-white sm:w-auto sm:rounded-lg md:flex md:items-center md:justify-center md:p-10 p-8 xl:w-2/5">
                <div class="max-w-md w-full space-y-10">
                    <div class="text-center">
                        <h2 class="mt-6 text-3xl font-bold text-gray-900">Üye Ol!</h2>
                        <p class="mt-2 text-sm text-gray-500">Hemen Bize Katıl</p>
                    </div>
                    <div class="flex flex-row justify-center items-center space-x-3">
                        <a href="https://www.facebook.com/sorular360" target="_blank" class="w-11 h-11 justify-center inline-flex cursor-pointer"><img src="./svg/facebook.svg"></a>
                        <a href="https://github.com/sorular360" target="_blank" class="w-11 h-11 justify-center inline-flex cursor-pointer"><img src="./svg/github.svg"></a>
                        <a href="https://linkedin.com/sorular360" target="_blank" class="w-11 h-11 justify-center inline-flex cursor-pointer"><img src="./svg/linkedin.svg" class=" rounded-xl"></a>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="h-px w-16 bg-gray-200"></span>
                        <span class="text-gray-300">veya devam et</span>
                        <span class="h-px w-16 bg-gray-200"></span>
                    </div>
                    <form action="" method="POST" class="mt-8 space-y-3">
                        <input type="hidden" name="" value="true">
                        <div class="flex items-center border border-gray-300 rounded-lg py-2 px-3">
                            <img src="./svg/person.svg" type="" class="h-5 w-5 text-gray-400">
                            <input type="text" name="" id="" class="pl-2 w-full outline-none border-none" placeholder="Ad Soyad">
                        </div>
                        <div class="flex items-center border border-gray-300 rounded-lg py-2 px-3">
                            <img src="./svg/fingerprint.svg" type="" class="h-5 w-5 text-gray-400">
                            <input type="text" name="" id="" class="pl-2 w-full outline-none border-none" placeholder="Kullanıcı adı">
                        </div>
                        <div class="flex items-center border border-gray-300 rounded-lg py-2 px-3">
                            <img src="./svg/alternate_email.svg" type="" class="h-5 w-5 text-gray-400">
                            <input type="email" name="" id="" class="pl-2 w-full outline-none border-none" placeholder="E-mail">
                        </div>
                        <div class="flex items-center border border-gray-300 rounded-lg py-2 px-3">
                            <img src="./svg/lock.svg" type="" class="h-5 w-5 text-gray-400">
                            <input type="password" name="" id="" class="pl-2 w-full outline-none border-none" placeholder="Şifre">
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <input type="checkbox" name="" id="" class="h-4 w-4 focus:ring-blue-400 border-gray-300">
                                <label for="" class="ml-2 block text-sm text-gray-900">Beni Hatırla</label>
                            </div>
                            <a href="#" class="text-sm text-indigo-400 hover:text-blue-500">Parolanızı mı unuttunuz?</a>
                        </div>
                        <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Üye Ol</button>
                        <p class="flex flex-col justify-center items-center mt-10 text-center text-md text-gray-500">
                            <label>Hesabınız var mı?</label>
                            <a href="index.php" class="text-indigo-400 hover:text-blue-800 hover:scale-105 no-underline cursor-pointer">Giriş Yap</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body> 
</html>