@extends('front.layouts.app')
@section('content')

  <div id="header" class="bg-[#F6F7FA] relative h-[600px] -mb-[388px]">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        <x-navbar/>
    </div>
  </div>

  <div class="container max-w-[1130px] mx-auto mt-10">
      <h2 class="text-3xl font-bold mb-8">Latest Blog Posts</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          @forelse ($blogs as $blog)
              <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all hover:shadow-2xl">
                  <img src="{{Storage::url($blog->thumbnail) }}" alt="Thumbnail" class="w-full h-[200px] object-cover">
                  <div class="p-4">
                      <h3 class="text-xl font-bold text-cp-black">{{ $blog->title }}</h3>
                      <p class="text-cp-dark-grey mt-2">
                          {{ Str::limit(strip_tags($blog->paragraph), 120) }}
                      </p>
                      <a href="{{ route('front.blog.show', $blog->id) }}" class="inline-block mt-4 text-cp-black font-semibold hover:text-cp-blue">
                        Read More →
                      </a>                    
                  </div>
              </div>
          @empty 
          <p>belum ada data</p>
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