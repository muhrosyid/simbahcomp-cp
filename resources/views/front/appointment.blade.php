@extends('front.layouts.app')
@section('content')
  <div id="header" class="bg-[#F6F7FA] relative h-[700px] -mb-[488px]">
    <div class="container max-w-[1130px] mx-auto relative pt-10  z-10">
        <x-navbar/>
    </div>
  </div>
  <div id="Contact" class="container max-w-[1130px] mx-auto flex flex-wrap xl:flex-nowrap justify-between gap-[50px] relative z-10">
    <div class="flex flex-col mt-20 gap-[50px]">
      <div class="breadcrumb flex items-center gap-[30px]">
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Beranda</p>
        <span class="text-cp-light-grey">/</span>
        {{-- <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Product</p>
        <span class="text-cp-light-grey">/</span> --}}
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Pemesanan</p>
      </div>
      <h1 class="font-extrabold text-4xl leading-[45px]">Kita Akan Bantu Anda Dengan Sepenuh Hati</h1>
      <div class="flex flex-col gap-5">
        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="assets/icons/global.svg" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold">Perum. Griya Karisma, Blok C No. 07, Semarang</p>
        </div>
        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="assets/icons/call.svg" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold">085643563591</p>
        </div>
        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="assets/icons/monitor-mobbile.svg" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold">simbah-comp.my.id</p>
        </div>
      </div>
    </div>
    <form action="{{route('front.appointment_store')}}" method="POST" class="flex flex-col p-[30px] rounded-[20px] gap-[18px] bg-white shadow-[0_10px_30px_0_#D1D4DF40] w-full md:w-[700px] shrink-0">
        @csrf
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Nama Lengkap</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/profile.svg" alt="icon">
            </div>
            <input type="text" name="name" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Tulis nama lengkap anda" required>
          </div>
        </div>
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Alamat Email</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/sms.svg" alt="icon">
            </div>
            <input type="email" name="email" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Tulis alamat anda" required>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Nomor WA</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/call-black.svg" alt="icon">
            </div>
            <input type="tel" name="phone_number" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Tulis nomor telepon anda" required>
          </div>
        </div>
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Tanggal Visit</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white relative">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/calendar.svg" alt="icon">
            </div>
            <button type="button" id="dateButton" class="p-0 bg-transparent w-full text-left border-none outline-none">Pilih tanggal</button>
            <input type="date" name="meeting_at" id="dateInput" class="absolute opacity-0 -z-10">
          </div>
        </div>
      </div>
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Keperluan Anda</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/building-4-black.svg" alt="icon">
            </div>
            <select name="product_id" id="" class="appearance-none outline-none w-full invalid:font-normal font-semibold px-[10px] -mx-[10px]" required>
              <option value="" hidden>Pilih Satu</option>
              @foreach($products as $product)
              <option value="{{$product->id}}">{{$product->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Budget Available</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="assets/icons/dollar-square.svg" alt="icon">
            </div>
            <input type="number" name="budget" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="What is your budget" required>
          </div>
        </div>
      </div>
      <div class="flex flex-col gap-2 flex w-full">
        <p class="font-semibold">Keterangan Lengkap</p>
        <div class="flex gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
          <div class="w-[18px] h-[18px] flex shrink-0 mt-[3px]">
            <img src="assets/icons/message-text.svg" alt="icon">
          </div>
          <textarea name="brief" id="" rows="6" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full resize-none" placeholder="Beri tahu kami detail keperluan anda"></textarea>
        </div>
      </div>
      <button type="submit" class="bg-cp-dark-blue p-5 w-full rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Pesan Sekarang</button>
    </form>
  </div>
  <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
    <h2 class="font-bold text-lg">Klien kami</h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-lldikti61.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logo-ori.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/Newera.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/pelni.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/poldajateng.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/volta.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/logodiskominfo.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/tigaraksa.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('assets/logo/restu sejati.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
    </div>
  </div>
  <div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
    <div class="flex flex-col gap-[14px] items-center">
      <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">SUCCESS CLIENTS</p>
      <h2 class="font-bold text-4xl leading-[45px] text-center">Our Satisfied Clients<br>From Worldwide Company</h2>
    </div>
    <div class="main-carousel w-full">
      @forelse($testimonials as $testimonial)
        <div class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
        <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
          <div class="flex flex-col gap-[30px]">
            <div class="h-9 overflow-hidden">
              <img src="{{Storage::url($testimonial->client->logo)}}" class="object-contain" alt="icon">
            </div>
            <div class="relative pt-[27px] pl-[30px]">
              <div class="absolute top-0 left-0">
                <img src="assets/icons/quote.svg" alt="icon">
              </div>
              <p class="font-semibold text-2xl leading-[46px] relative z-10">{{$testimonial->message}}</p>
            </div>
            <div class="flex items-center justify-between pl-[30px]">
              <div class="flex items-center gap-6">
                <div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
                  <img src="{{Storage::url($testimonial->client->avatar)}}" class="w-full h-full object-cover" alt="photo">
                </div>
                <div class="flex flex-col justify-center gap-1">
                  <p class="font-bold">{{$testimonial->client->name}}</p>
                  <p class="text-sm text-cp-light-grey">{{$testimonial->client->occupation}}</p>
                </div>
              </div>
              <div class="flex flex-nowrap">
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/Star-rating.svg" alt="star">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-indicator flex items-center justify-center gap-2 h-4 shrink-0">
          </div>
        </div>
        <div class="testimonial-thumbnail w-[470px] h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9]">
          <img src="assets/backgrounds/banner.jpg" class="w-full h-full object-cover object-center" alt="thumbnail">
        </div>
      </div>
      @empty
          <p>eh lupa</p>
      @endforelse
    </div>
  </div>
  <footer class="bg-cp-black w-full relative overflow-hidden mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] pb-[220px] relative z-10">
      <div class="flex flex-col gap-10">
        <div class="flex items-center gap-3">
          <div class="flex shrink-0 h-[43px] overflow-hidden">
              <img src="{{asset('assets/logo/logonew.png')}}" class="object-contain w-full h-full" alt="logo">
          </div>
          <div class="flex flex-col">
            <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">Simba[h] Komputer</p>
            <p id="CompanyTagline" class="text-sm text-cp-light-grey">Service with Passion</p>
          </div>
        </div>
        <div class="flex items-center gap-4">
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="assets/icons/youtube.svg" class="w-full h-full object-contain" alt="youtube">
            </div>
          </a>
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="assets/icons/whatsapp.svg" class="w-full h-full object-contain" alt="whatsapp">
            </div>
          </a>
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="assets/icons/facebook.svg" class="w-full h-full object-contain" alt="facebook">
            </div>
          </a>
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="assets/icons/instagram.svg" class="w-full h-full object-contain" alt="instagram">
            </div>
          </a>
        </div>
      </div>
      <div class="flex flex-wrap gap-[50px]">
        <div class="flex flex-col w-[200px] gap-3">
          <p class="font-bold text-lg text-white">Products</p>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">General Contract</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Building Assessment</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">3D Paper Builder</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Legal Constructions</a>
        </div>
        <div class="flex flex-col w-[200px] gap-3">
          <p class="font-bold text-lg text-white">About</p>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">We’re Hiring</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Our Big Purposes</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Investor Relations</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Media Press</a>
        </div>
        <div class="flex flex-col w-[200px] gap-3">
          <p class="font-bold text-lg text-white">Useful Links</p>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Privacy & Policy</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Terms & Conditions</a>
          <a href="contact.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Contact Us</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Download Template</a>
        </div>
      </div>
    </div>
    <div class="absolute -bottom-[135px] w-full">
      <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">SIMBA[H]</p>
    </div>
  </footer>
@endsection
@push('after-script')
  <script src="js/contact-form.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
  <script src="{{asset('js/carousel.js')}}"></script>
@endpush