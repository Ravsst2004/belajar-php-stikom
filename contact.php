<?php require_once "./src/layouts/header.php" ?>


<div class="mt-20 py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
  <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Contact Me</h2>
  <p class="mb-8 lg:mb-16 font-light text-center text-gray-900 sm:text-xl">Ada masalah bang?. Kirim pesan ke saya, akan saya kasi botol bekas!</p>
  <form action="/php-belajar/functions/email_send.php" method="POST" class="space-y-8">
    <div>
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
      <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="name@flowbite.com" required>
    </div>
    <div>
      <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
      <input type="text" id="subject" name="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Let us know how we can help you" required>
    </div>
    <div class="sm:col-span-2">
      <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
      <textarea id="message" rows="6" name="message" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Leave a comment..."></textarea>
    </div>
    <button type="submit" class="py-3 px-5 b-2 border-black w-fit text-sm font-medium text-center bg-blue-700 text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Send message</button>
  </form>
</div>



<?php require_once "./src/layouts/footer.php" ?>