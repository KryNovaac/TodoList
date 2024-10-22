<!-- resources/views/home.blade.php -->
<x-header>
    @slot('title', 'Rey/Home')
</x-header>

<x-main>
    <html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;family=Playfair+Display:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
  </style>
 </head>
 <body class="bg-black text-white">
  <header class="flex flex-col items-center justify-center h-screen text-center">
   <h1 class="text-6xl font-bold">
    WE ARE
    <br/>
    FULL-SERVICE
    <br/>
    AGENCY
   </h1>
   <p class="mt-4 text-lg max-w-md">
    The Best Full-service Web Agency. We provide top-notch services to help your business grow.
   </p>
   <div class="mt-10">
    <i class="fas fa-arrow-down text-3xl">
    </i>
   </div>
  </header>
  <section class="py-20">
   <h2 class="text-5xl font-bold text-center">
    FEATURES
   </h2>
   <div class="flex flex-wrap justify-center mt-10 px-10">
    <div class="bg-gray-800 p-6 m-4 rounded-lg w-80">
     <i class="fas fa-rocket text-3xl mb-4">
     </i>
     <h3 class="text-2xl font-bold mb-2">
      Launch with Ease
     </h3>
     <p>
      Get your project up and running quickly with our streamlined process.
     </p>
    </div>
    <div class="bg-gray-800 p-6 m-4 rounded-lg w-80">
     <i class="fas fa-infinity text-3xl mb-4">
     </i>
     <h3 class="text-2xl font-bold mb-2">
      Unlimited Requests
     </h3>
     <p>
      Submit as many requests as you need, we are here to help.
     </p>
    </div>
    <div class="bg-gray-800 p-6 m-4 rounded-lg w-80">
     <i class="fas fa-bolt text-3xl mb-4">
     </i>
     <h3 class="text-2xl font-bold mb-2">
      Launch Fast
     </h3>
     <p>
      Our team works efficiently to get your project live in no time.
     </p>
    </div>
    <div class="bg-gray-800 p-6 m-4 rounded-lg w-80">
     <i class="fas fa-play text-3xl mb-4">
     </i>
     <h3 class="text-2xl font-bold mb-2">
      Start Today
     </h3>
     <p>
      Begin your journey with us today and see the results.
     </p>
    </div>
    <div class="bg-gray-800 p-6 m-4 rounded-lg w-80">
     <i class="fas fa-pause text-3xl mb-4">
     </i>
     <h3 class="text-2xl font-bold mb-2">
      Pause or Cancel Anytime
     </h3>
     <p>
      Flexibility to pause or cancel your project whenever you need.
     </p>
    </div>
    <div class="bg-gray-800 p-6 m-4 rounded-lg w-80">
     <i class="fas fa-dollar-sign text-3xl mb-4">
     </i>
     <h3 class="text-2xl font-bold mb-2">
      Affordable Pricing
     </h3>
     <p>
      Get the best services at competitive prices.
     </p>
    </div>
   </div>
  </section>
 </body>
</html>
</x-main>

<x-footer></x-footer>