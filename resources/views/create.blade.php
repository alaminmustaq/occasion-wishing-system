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
        <form action="">
          <div>
            <label for="name" class="block text-sm font-medium">Name</label>
            <input type="text" id="name" placeholder="Name" class="px-4 py-2 rounded-md border focus:outline-none">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium">Email</label>
            <input type="text" id="email" placeholder="Email" class="px-4 py-2 rounded-md border focus:outline-none">
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium">Phone</label>
            <input type="text" id="phone" placeholder="Phone" class="px-4 py-2 rounded-md border focus:outline-none">
          </div>
          <div>
            <label for="occation" class="block text-sm font-medium">Occation</label>
            <select name="occation" id="occation">
              <option value="">Birthday</option>
              <option value="">Mariege Aniversery</option>
              <option value="">Deathday</option>
            </select>
          </div>
        </form>
      </main>
      <footer>

      </footer>
    </section>
  </section>
  
</body>
</html>