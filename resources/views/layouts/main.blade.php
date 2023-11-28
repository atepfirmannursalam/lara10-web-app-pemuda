<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>Black Banjar | Home</title>
</head>
<body>
  {{-- Header Start --}}
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-50">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="/" class="font-bold text-lg text-primary py-6 flex items-center"><img class="w-8 h-8 mr-2" src="img/logo-karang-taruna.png" alt="logo">Black Banjar </a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>

          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[200px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="/" class="text-bold text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
              </li>
              <li class="group">
                <a href="/about" class="text-bold text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Kami</a>
              </li>
              <li class="group">
                <a href="/login" class="text-bold text-dark py-2 mx-8 flex group-hover:text-primary">Login</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  {{-- Header End --}}

  <div class="w-full pt-3">
    @yield("public-nav")
  </div>
  
  {{-- Footer Start --}}
    <footer class="bg-dark pt-10 pb-12">
      <div class="container">
        <a href="/" class="font-bold text-3xl text-slate-300 flex items-center pb-5 mb-10 px-4"><img class="w-16 h-16 mr-2" src="img/logo-karang-taruna.png" alt="logo">Black Banjar </a>
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/2">
            <h3 class="font-bold text-2xl">Hubungi Kami</h3>
            <p class="text-primary underline"> blackbanjar@gmail.com</p>
            <p>Cp: 08123456789</p>
            <p class="text-sm">Kp. Gunung banjar RT 01 RW 08 Desa Pakemitan Kidul Kecamatan Ciawi Kabupaten Tasikmalaya Provinsi Jawa Barat. Kode Pos 46156 </p>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/2">
            <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
            <ul class="text-slate-300">
              <li>
                <a href="#home" class="inline-block text-base hover:text-primary">Beranda</a>
              </li>
              <li>
                <a href="#about" class="inline-block text-base hover:text-primary">Tentang Kami</a>
              </li>
              <li>
                <a href="#blog" class="inline-block text-base hover:text-primary">Blog</a>
              </li>
              <li>
                <a href="#contact" class="inline-block text-base hover:text-primary">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full pt-10 border-t border-slate-700">
          <div class="flex items-center justify-center mb-5">
            {{-- instagam icons --}}
            <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-400 hover:border-primary hover:bg-primary hover:text-white ">
              <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
            </a>

            {{-- Twitter icons--}}
            <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-400 hover:border-primary hover:bg-primary hover:text-white ">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
            </a>

            {{-- Facebook icons --}}
            <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-400 hover:border-primary hover:bg-primary hover:text-white ">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
            </a>

            {{-- YT Icons --}}
            <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-400 hover:border-primary hover:bg-primary hover:text-white ">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
          </div>
          <p class="font-medium text-xs text-slate-500 text-center">Maked with <span class="text-red-600">💓</span> by <a href="https://instagram.com/atpfrmnnrslm" class="text-primary">Atep</a> & <a href="#" class="text-primary">Denon</a>, using Laravel + Tailwind CSS</p>
          <p class="font-medium text-xs text-slate-500 text-center">Copyright &copy 2023 Black Banjar | All Rights reserved</p>
        </div>
      </div>
    </footer>
  {{-- Footer End --}}
</body>
</html>


    


