<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <section class="flex h-screen">
    {{-- side bar --}}
    <section class="w-[300px] h-full bg-gray-700">

    </section>
    {{-- Main content --}}
    <section class="flex-1">
      <header class="flex items-center gap-2 justify-between px-4 py-2 bg-gray-50 h-[60px]">
        <nav>
          <ul class="flex items-center gap-2">
            <li class="text-green-500 font-semibold cursor-pointer">Dashboard</li>
          </ul>
        </nav>
        <div>
          <p>User</p>
        </div>
      </header>
      <main class="px-4 py-6"> 
        <section class="flex items-center justify-between gap-2">
          <h1 class="text-gray-900 text-lg font-semibold">Recent Ocation</h1>
          <a href="{{route('occation.create')}}" class="px-4 py-2 bg-green-500 rounded-md text-white font-semibold hover:bg-green-600 transition-colors duration-300">Add Occation</a>
        </section>
      </main>
      <footer>

      </footer>
    </section>
  </section>
  
</body>
</html>