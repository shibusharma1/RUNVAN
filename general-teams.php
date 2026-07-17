<?php
   include './includes/header.php';
   ?>
<section class="relative overflow-hidden pt-40 pb-28">
   <div class="absolute inset-0">
      <img
         src="./assets/images/team/team-hero.jpg"
         alt="Core Team" loading="lazy"
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
         General Team
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

<section class="bg-[var(--bg-dark-light)]">
   <div class="container">
      <div
         class="max-w-3xl mx-auto text-center mb-14"
         data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-5">
         <i class="ri-group-line"></i>
         Core Team Members
         </span>
         <h2 class="mb-5">
            Leadership Team
         </h2>
         <p class="text-muted">
            Meet the individuals who provide leadership, direction,
            and strategic guidance to RUNVAN.
         </p>
      </div>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
         <article
            class="group bg-white rounded-[10px] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
            <div class="overflow-hidden">
               <img
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500"
                  alt="Ram Sharma" loading="lazy"
                  class="w-full h-80 object-cover transition duration-700 group-hover:scale-110">
            </div>
            <div class="p-6">
               <h4 class="mb-2">
                  Mr. Ram Sharma
               </h4>
               <p class="text-[var(--primary)] font-medium mb-4">
                  President
               </p>
               <p class="text-muted text-sm leading-relaxed mb-5">
                  Returned UN Volunteer with extensive experience in
                  community development, leadership, and volunteer management.
               </p>
               <div class="flex items-center justify-between">
                  <div class="flex gap-3">
                     <a href="#" class="text-muted hover:text-[var(--primary)]">
                     <i class="ri-linkedin-line"></i>
                     </a>
                     <a href="#" class="text-muted hover:text-[var(--primary)]">
                     <i class="ri-mail-line"></i>
                     </a>
                  </div>
                  <!-- <a
                     href="team-detail.php"
                     class="text-[var(--primary)] font-medium inline-flex items-center gap-2">
                     View Profile
                     <i class="ri-arrow-right-line"></i>
                     </a> -->
                  <a
                     href="javascript:void(0)"
                     class="view-team-profile text-[var(--primary)] font-medium inline-flex items-center gap-2"
                     data-image="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500"
                     data-name="Mr. Ram Sharma"
                     data-position="President"
                     data-email="ramsharma@runvan.org"
                     data-linkedin="#"
                     data-description="Returned UN Volunteer with extensive experience in community development, leadership, and volunteer management.">
                  View Profile
                  <i class="ri-arrow-right-line"></i>
                  </a>
               </div>
            </div>
         </article>
      </div>
      <div class="text-center mt-12">
         <a href="./general-teams.php" class="btn-primary inline-flex items-center gap-2">
         View All Team Members
         <i class="ri-arrow-right-line"></i>
         </a>
      </div>
   </div>
</section>

<?php
   include './includes/general-team-modal.php';
   include './includes/footer.php';
   ?>