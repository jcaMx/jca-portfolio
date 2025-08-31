
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Jericca</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

  <style>
    .playfair {
      font-family: "Playfair", serif;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
      font-variation-settings:
        "wdth" 100;
    }

    .dm-sans {
      font-family: "DM Sans", sans-serif;
      font-optical-sizing: auto;
      font-weight: 350;
      font-style: normal;
    }
      html {
    scroll-behavior: smooth;
  }
  </style>


  <nav class="fixed top-0 left-0 w-full bg-[#1A1A1A] shadow z-50">
    <div class="max-w-6xl mx-auto flex items-center justify-between px-6 py-4">
      
      <!-- Logo -->
      <h1 class="text-2xl font-bold playfair">jca.</h1>

      <!-- Desktop Menu -->
      <ul class="hidden md:flex space-x-6">
        <li><a href="#" class="hover:text-gray-400 transition">Home</a></li>
        <li><a href="#about-me" class="hover:text-gray-400 transition">About Me</a></li>
        <li><a href="#works" class="hover:text-gray-400 transition">Works</a></li>
      </ul>

      <!-- Contact Button -->
      <a href="https://www.linkedin.com/in/jericca-maxene-oracion-822ba4266" 
         target="_blank" 
         class="hidden md:inline-block border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100 hover:text-black transition">
         Contact Me
      </a>

      <!-- Mobile Menu Button -->
      <button id="menuBtn" class="text-2xl md:hidden" aria-label="Toggle Menu">&#9776;</button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-[#1A1A1A] px-6 pb-4 transition-all duration-300">
      <ul class="space-y-2">
        <li><a href="#" class="block hover:text-gray-400 transition">Home</a></li>
        <li><a href="#about-me" class="block hover:text-gray-400 transition">About Me</a></li>
        <li><a href="#works" class="block hover:text-gray-400 transition">Works</a></li>
        <li>
          <a href="https://www.linkedin.com/in/jericca-maxene-oracion-822ba4266" 
             target="_blank" 
             class="block border border-gray-300 px-4 py-2 hover:bg-gray-100 hover:text-black transition">
             Contact Me
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <script>
    // Toggle mobile menu
    document.getElementById("menuBtn").addEventListener("click", () => {
      document.getElementById("mobileMenu").classList.toggle("hidden");
    });
  </script>
  
</head>
<body class="bg-[#2D2D2D] text-white dm-sans">
  <!-- Hero -->
  <section class="grid md:grid-cols-2 gap-8 items-center ">
    <div>
      <img src="images/MJ-bw.jpg" alt="Portfolio Image" class="w-full shadow-lg">
    </div>
    <div>
      <h1 class="text-6xl font-bold mb-4 playfair">hey, it's max</h1>
      <p class="mb-6 text-gray-300 leading-relaxed mr-12">
        As a passionate explorer of diverse interests, I embrace the joy of continuous learning and skill-building. Whether it's writing, painting, or coding, I find excitement in every creative and intellectual pursuit, always eager to expand my horizons.
      </p>
      <div class="space-x-4">
        <a href="#about-me" target="_blank" class="bg-white text-black px-4 py-2 shadow hover:bg-white-600">Learn more</a>
        <a href="https://www.linkedin.com/in/jericca-maxene-oracion-822ba4266" target="_blank" class="border border-white-500 px-4 py-2 shadow hover:bg-gray-100 hover:text-black transition">Contact me</a>
      </div>
    </div>
  </section>

  <!-- About Me -->
  <section id="about-me" class="p-8 m-12">
    <h2 class="text-6xl font-bold mb-8 text-center playfair">About Me</h2>

      
      <div class= "m-10 text-[#878787]">
        <p>I have gained meaningful experience in creating and working with software programs both through my formal education and my professional role as a personal assistant with a focus on digital and technological tasks. In these capacities, I have been actively involved in exploring software development processes, learning to design and implement solutions, and supporting technology-driven projects. This combination of academic training and hands-on exposure has strengthened my ability to adapt to different digital tools, enhance productivity, and contribute effectively to technology-focused initiatives.</p>
      </div>

    
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-[#1A1A1A] p-6 shadow ">
        <img src="images/coding1.jpg" alt="Experience Icon" class="w-full h-48 object-cover mb-4">
        <h3 class="text-xl font-semibold mb-2">Experience</h3>
        <p class="mb-2">Personal Digital Assistant | Digital Mixology (2 Years)</p>
        <p class="text-gray-400">Helps the client in completing personal projects related to technology by providing research, technical support, and efficient task management.</p>
      </div>

      <div class="bg-[#1A1A1A] p-6 shadow">
        <img src="images/education.jpg" alt="Education Icon" class="w-full h-48 object-cover mb-4">
        <h3 class="text-xl font-semibold mb-2">Education</h3>
        <p class="mb-2">3rd year BS Computer Science student</p>
        <p class="text-gray-400">Currently attending at STI College Davao</p>
        <p class="text-gray-400 mt-2">Currently working on my thesis: a game designed to help people learn Filipino Sign Language.</p>
      </div>

      <div class="bg-[#1A1A1A] p-6 shadow">
        <img src="images/skills.jpg" alt="Skills Icon" class="w-full h-48 object-cover mb-4">
        <h3 class="text-xl font-semibold mb-2">Skills</h3>
        <p>Digital painting <br>Figma UI Design</p>
        <p>Basic Python Programming | Basic Web Programming</p>
        <p class="text-gray-400 mt-2">Continuously expanding knowledge in programming, algorithms, and system design.</p>
      </div>

    </div>
  </section>

  <!-- Works -->
  <section id="works" class="p-8 mb-12">

    <h2 class="text-6xl playfair font-bold mb-6 text-center">Works</h2>

    <!-- Application Programs -->
    <h3 class="text-2xl font-semibold mb-4">Projects</h3>
    <div class="grid md:grid-cols-3 gap-6 mb-20">
      <?php
      $projects = [];
      $jsonPath = __DIR__ . '/projects.json';
      if (file_exists($jsonPath)) {
          $json = file_get_contents($jsonPath);
          $projects = json_decode($json, true) ?? [];
      }
      
      foreach ($projects as $project): ?>
        <div class="bg-[#1A1A1A] shadow p-4 flex flex-col">
          <img src="<?= htmlspecialchars($project['photo']) ?>" alt="<?= htmlspecialchars($project['name']) ?>" class="w-full h-48 object-cover mb-4">
          <h3 class="text-xl font-semibold mb-2"><?= htmlspecialchars($project['name']) ?></h3>
          <p class="text-gray-300 flex-grow"><?= htmlspecialchars($project['description']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Digital Paintings
    <h3 class="text-2xl font-semibold mt-12 mb-4">Digital Paintings</h3>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="shadow">
        <a href="https://www.instagram.com/jeiknvs_/" target="_blank">
          <img src="images/jca-art-sculpt.PNG" alt="Sculpture painting" class="w-full">
        </a>
      </div>
      <div class="shadow">
        <a href="https://www.instagram.com/jeiknvs_/" target="_blank">
          <img src="images/jca-art-yks.jpeg" alt="Artwork" class="w-full">
        </a>
      </div>
      <div class="shadow">
        <a href="https://www.instagram.com/jeiknvs_/" target="_blank">
          <img src="images/jca-art-mel.png" alt="Artwork" class="w-full">
        </a>
      </div>
    </div> -->
  </section> 



</body>
  <!-- Footer -->
<footer class="bg-[#1A1A1A] text-white m-0">
  <div class="max-w-6xl mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Brand & Contact -->
      <div>
        <h2 class="text-2xl font-bold playfair mb-2">jca.</h2>
        <p class="text-sm opacity-80 mb-2">Jericca Maxene Oracion</p>
        <p class="text-sm opacity-80 mb-2">Davao City, Philippines</p>
        <p class="text-sm opacity-80 mb-2">jericca@digitalmixology.com</p>
        <div class="flex space-x-4 mt-4">
          <a href="https://www.linkedin.com/in/jericca-maxene-oracion-822ba4266" target="_blank" class="hover:text-blue-400 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm13.5 11.268h-3v-5.604c0-1.337-.026-3.063-1.867-3.063-1.868 0-2.154 1.459-2.154 2.967v5.7h-3v-10h2.881v1.367h.041c.401-.761 1.379-1.563 2.838-1.563 3.036 0 3.6 2 3.6 4.594v5.602z"/>
            </svg>
          </a>
          <a href="https://github.com/jeiknvs" target="_blank" class="hover:text-gray-400 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.757-1.333-1.757-1.089-.745.083-.729.083-.729 1.205.084 1.84 1.236 1.84 1.236 1.07 1.834 2.809 1.304 3.495.997.108-.775.418-1.305.762-1.605-2.665-.305-5.466-1.332-5.466-5.93 0-1.31.469-2.381 1.236-3.221-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.553 3.297-1.23 3.297-1.23.653 1.653.242 2.873.119 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.803 5.624-5.475 5.921.43.371.823 1.102.823 2.222v3.293c0 .322.218.694.825.576 4.765-1.585 8.199-6.082 8.199-11.384 0-6.627-5.373-12-12-12z"/>
            </svg>
          </a>
          <a href="mailto:jericca.oracion@gmail.com" class="hover:text-red-400 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 13.065l-11.99-7.065v14c0 1.104.896 2 2 2h19.99c1.104 0 2-.896 2-2v-14l-11.99 7.065zm11.99-9.065c0-1.104-.896-2-2-2h-19.99c-1.104 0-2 .896-2 2v.217l11.99 7.065 11.99-7.065v-.217z"/>
            </svg>
          </a>
        </div>
      </div>
      <!-- Quick Links -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
        <ul class="space-y-2 text-sm opacity-90">
          <li><a href="#" class="hover:text-blue-400 transition-colors">Home</a></li>
          <li><a href="#about-me" class="hover:text-blue-400 transition-colors">About Me</a></li>
          <li><a href="#works" class="hover:text-blue-400 transition-colors">Works</a></li>
        </ul>
      </div>
      <!-- Message Form -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Let's Connect</h3>
        <form class="space-y-3" onsubmit="sendEmail(event)">
          <div>
            <input 
              id="userEmail"
              type="email" 
              placeholder="Your email" 
              class="w-full px-3 py-2 bg-white bg-opacity-90 text-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm"
              required
            >
          </div>
          <div>
            <textarea 
              id="userMessage"
              placeholder="Your message" 
              rows="4" 
              class="w-full px-3 py-2 bg-white bg-opacity-90 text-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm resize-none"
              required
            ></textarea>
          </div>
          <div>
            <button 
              type="submit" 
              class="bg-white text-black px-4 py-2 rounded text-sm font-medium hover:bg-blue-50 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-300">
              Send
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="border-t border-white border-opacity-20 mt-8 pt-6">
      <div class="text-center text-sm opacity-75">
        <p>&copy; <?= date('Y') ?> Jericca Maxene Oracion. All Glory to God.</p>
      </div>
    </div>
  </div>
</footer>

    <script>
    function sendEmail(e) {
        e.preventDefault();
        const email = document.getElementById('userEmail').value;
        const message = document.getElementById('userMessage').value;

        if (!email || !message) {
            alert('Please fill in all fields.');
            return;
        }

        const subject = encodeURIComponent("Customer Inquiry from " + email);
        const body = encodeURIComponent(message);

        // Open Gmail compose window in new tab
        window.open(
        `https://mail.google.com/mail/?view=cm&fs=1&to=marahuyohotel@gmail.com&su=${subject}&body=${body}`,
        '_blank'
        );
    }
    </script>
</html>
