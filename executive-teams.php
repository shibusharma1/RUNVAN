<?php
include './includes/header.php';
?>

<section class="relative overflow-hidden pt-40 pb-28">
   <div class="absolute inset-0">
      <img
         src="./assets/images/team/team-hero.jpg"
         alt="Core Team"
         class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-[var(--primary)]"></div>
   </div>
   <div class="container relative z-10">
      <nav
         class="flex items-center gap-2 text-white/70 text-sm mb-8"
         data-aos="fade-up">
         <a href="./" class="hover:text-white transition">
            Home
         </a>
         <i class="ri-arrow-right-s-line"></i>
         <span class="text-white">
            Core Team
         </span>
      </nav>
      <div
         class="max-w-4xl"
         data-aos="fade-up"
         data-aos-delay="100">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 text-white text-sm mb-6">
            <i class="ri-team-line"></i>
            Leadership & Governance
         </span>
         <h1 class="text-white mb-6">
            Meet Our Core Team
         </h1>
         <p class="text-white/80 text-lg leading-relaxed max-w-3xl">
            Dedicated returned United Nations Volunteers and development
            professionals working together to strengthen volunteerism,
            leadership, and sustainable development across Nepal.
         </p>
      </div>
   </div>
</section>

<section class="bg-[var(--bg-light)]">
   <div class="container">
      <div
         class="max-w-3xl mx-auto text-center mb-12"
         data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
            <i class="ri-profile-line"></i>
            Leadership Biographies
         </span>
         <h2 class="mb-5">
            Inspiring Stories and Contributions
         </h2>
         <p class="text-muted">
            Discover the professional journeys, achievements,
            and lasting contributions of individuals who have
            strengthened RUNVAN's mission and impact.
         </p>
      </div>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
         <article
            class="group bg-white rounded-[10px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
            <div class="overflow-hidden">
               <img
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500"
                  alt=""
                  class="w-full h-80 object-cover transition duration-700 group-hover:scale-110">
            </div>
            <div class="p-6">
               <span
                  class="inline-flex py-1 rounded-full bg-primary/10 text-[var(--primary)] text-xs font-medium mb-4">
                  Former President
               </span>
               <h4 class="mb-2">
                  Mr. Ram Sharma
               </h4>
               <p class="text-muted text-sm mb-4">
                  Returned UN Volunteer
               </p>
               <p class="text-muted text-sm leading-relaxed mb-5">
                  A dedicated development professional whose leadership and
                  volunteer service contributed significantly to community
                  engagement and organizational growth.
               </p>
               <a
                  href="biography-details.php"
                  class="text-[var(--primary)] font-medium inline-flex items-center gap-2">
                  Read Biography
                  <i class="ri-arrow-right-line"></i>
               </a>
            </div>
         </article>
      </div>
      <div class="text-center mt-12">
         <a href="#" class="btn-primary inline-flex items-center gap-2">
            View All Biographies
            <i class="ri-arrow-right-line"></i>
         </a>
      </div>
   </div>
</section>

<?php
include './includes/footer.php';
?>