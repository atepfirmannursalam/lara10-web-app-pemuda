@extends("layouts.main")

@section("public-nav")

  {{-- Hero Section Start--}}
  <section id="home" class="pt-36 ">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-xl font-semibold text-primary md:text-2xl">Selamat Datang di Website <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Black Banjar</span></h1>
          <h2 class="font-medium text-slate-600 text-sm mb-5 ">Organisasi Kepemudaan Kp.Gunung Banjar RT 01 RW 08 Desa Pakemitan Kidul Kecamatan Ciawi Kabupaten Tasikmalaya</h2>
          <p class="font-medium text-slate-700 mb-10 leading-relaxed italic">"Organisasi yang dircancang untuk mempererat tali silaturahmi antar anggota pemuda dan juga sebagai wadah untuk menampung potensi-potensi generasi muda untuk berekspresi, berkarya, babakti ka lemah cai."</p>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2">
          <div class="relative mt-10 lg:mt-0 right-0">
            <img src="img/logo-karang-taruna.png" alt="logo-karang-taruna" class="max-w-full mx-auto">
            <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-100">
              <svg width="500" height="500" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#06b6d4" d="M33.3,-47.9C46.1,-36.5,61.6,-30.8,66.8,-20.4C72,-10,66.9,5,60.4,18C53.9,30.9,46,41.6,35.7,52.6C25.4,63.6,12.7,74.8,1,73.4C-10.6,72,-21.2,57.9,-34.2,47.8C-47.1,37.6,-62.4,31.4,-67.7,20.7C-73.1,9.9,-68.4,-5.4,-64.7,-22.4C-61,-39.4,-58.4,-58,-47.8,-70.2C-37.1,-82.3,-18.6,-87.9,-4.2,-82.1C10.2,-76.4,20.4,-59.3,33.3,-47.9Z" transform="translate(100 100) scale(1.1)" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Hero Section End--}}

  {{-- About section Start --}}
  <section id="about" class="pt-32 pb-36 ">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-10 lg:w-1/2">
          <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Kami</h4>
          <h2 class="font-bold text-dark text-3xl mb-3 max-w-md lg:text-4xl">Profil Black Banjar</h2>
          <p class="font-medium text-base text-slate-700 max-w-xl lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis illum explicabo praesentium ab doloremque nulla maiores. Reprehenderit debitis consequuntur quos. <a href="/about" class="text-primary underline hover:opacity-70 duration-300 ease-in-out">baca selangkapnya...</a></p>
        </div>
        <div class="w-full px-4 lg:w-1/2">
          <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Kunjungi Kami di Sosial Media</h3>
          <p class="font-medium text-base text-slate-700 mb-6 lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit accusamus debitis sed recusandae inventore rem autem sunt.</p>
          <div class="flex items-center">
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
        </div>
      </div>
    </div>
  </section>
  {{-- About section End --}}

  {{-- Blog Start --}}
  <section id="blog" class="pt-36 pb-16 bg-slate-100">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Blog</h4>
          <h2 class="font-bold text-dark text-3xl">Blog Kegiatan</h2>
          <p class="font-medium text-md text-slate-700 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde quibusdam quo, omnis vel corporis nemo dolorum. Eaque, doloremque officiis ut accusantium, excepturi magni nihil id molestias blanditiis laudantium recusandae! Iure!</p>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="img/sepul.jpeg" alt="img1" class="w-full">
              <div class="py-8 px-6">
                <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Judul Blog</a></h3>
                <p class="font-medium text-base text-slate-700 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis temporibus amet impedit corporis ad maxime!.</p>
                <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">baca selengkapnya...</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="img/denon.jpeg" alt="img1" class="w-full">
              <div class="py-8 px-6">
                <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Judul Blog</a></h3>
                <p class="font-medium text-base text-slate-700 mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. A accusamus tempora quos praesentium eius hic?</p>
                <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">baca selengkapnya...</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="img/sepul.jpeg" alt="img1" class="w-full">
              <div class="py-8 px-6">
                <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Judul Blog</a></h3>
                <p class="font-medium text-base text-slate-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique adipisci impedit eius, unde natus non!</p>
                <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">baca selengkapnya...</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
              <img src="img/denon.jpeg" alt="img1" class="w-full">
              <div class="py-8 px-6">
                <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Judul Blog</a></h3>
                <p class="font-medium text-base text-slate-700 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ad vero omnis ut aliquam quam.</p>
                <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">baca selengkapnya...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Blog End --}}

  {{-- Contact Section Start --}}
    <section id="contact" class="pt-36 pb-32">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">kontak</h4>
            <h2 class="font-bold text-dark text-3xl">Hubungi Kami</h2>
            <p class="font-medium text-md text-slate-700 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, inventore?</p>
          </div>
        </div>
        <form action="#">
          <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
              <label for="name" class="text-base text-primary font-bold">Nama</label>
              <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>
            <div class="w-full px-4 mb-8">
              <label for="email" class="text-base text-primary font-bold">Email</label>
              <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>
            <div class="w-full px-4 mb-8">
              <label for="message" class="text-base text-primary font-bold">Pesan</label>
              <textarea type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
            </div>
            <div class="w-full px-4">
              <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  {{-- Contact Section End --}}

  {{-- location Start --}}
    <section id="contact" class="pt-16 pb-32">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-10">
            <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Lokasi Kami</h4>
            <p class="font-medium text-md text-slate-700 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, inventore?</p>
          </div>
        </div>
      </div>
      <div class="w-full px-4 mb-8 mx-auto">
        <iframe class="w-full lg:w-2/3 lg:mx-auto rounded-xl shadow-g" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.5998065800754!2d108.144668!3d-7.1721732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f4ea0f4f69cb5%3A0xeac5d17cc11d5dbf!2sSDN%20Gunungbanjar!5e0!3m2!1sid!2sid!4v1702450727545!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  {{-- location End --}}
@endsection


