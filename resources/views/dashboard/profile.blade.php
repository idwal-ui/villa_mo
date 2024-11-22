<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('output.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
</head>
<body class="font-poppins text-black">
  <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-8">
    <nav class="mt-8 px-4 w-full flex items-center justify-between">
      <a href="{{route('front.index')}}">
        <img src="{{asset('assets/icons/back.png')}}" alt="back">
      </a>
      <p class="text-center m-auto font-semibold">Profile</p>
      <div class="w-12"></div>
    </nav>
    <div class="flex flex-1 flex-col h-full px-4 gap-8">
      <div class="px-[35px] w-14 h-14 flex shrink-3">
        <img src="{{Storage::url(Auth::user()->avatar)}}" class="object-contain rounded-full" alt="background">
      </div>
      <p class="text-center m-auto font-semibold">{{Auth::user()->name}}</p>
      <div class="flex flex-1 flex-col h-full px-2 gap-8">
      <form action="{{ route('profile.edit') }}">
        <button type="submit" class="p-[16px_24px] rounded-xl bg-blue w-full text-center font-semibold text-white hover:bg-[#06C755] hover:text-white transition-all duration-300">Edit Profile</button>
    </form>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="p-[16px_24px] rounded-xl bg-blue w-full text-center font-semibold text-white hover:bg-[#06C755] hover:text-white transition-all duration-300">Logout</button>
    </form>
      </div>
    </div>
    <div class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-evenly py-[45px]">
      <a href="{{route('front.index')}}" class="menu opacity-25">
        <div class="flex flex-col justify-center w-fit gap-1">
          <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
            <img src="{{asset('assets/icons/home.svg')}}" alt="icon">             
          </div>
          <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Home</p>
        </div>
      </a>
      <a href="" class="menu opacity-25">
        <div class="flex flex-col justify-center w-fit gap-1">
          <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
            <img src="{{asset('assets/icons/search.svg')}}" alt="icon">            
          </div>
          <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Search</p>
        </div>
      </a>
      <a href="{{route('dashboard.bookings')}}" class="menu opacity-25">
        <div class="flex flex-col justify-center w-fit gap-1">
          <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
            <img src="{{asset('assets/icons/calendar-blue.svg')}}" alt="icon">              
          </div>
          <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">History</p>
        </div>
      </a>
      <a href="{{route('dashboard.dashboard.profile')}}" class="menu">
        <div class="flex flex-col justify-center w-fit gap-1">
          <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
            <img src="{{asset('assets/icons/user-flat.svg')}}" alt="icon">               
          </div>
          <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Profile</p>
        </div>
      </a>
    </div>
  </section>
</body>
</html>