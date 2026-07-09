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

<!-- <section>
   <div class="container">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
         <div data-aos="fade-right">
            <img
               src="./assets/images/team-overview.png"
               alt=""
               class="w-full rounded-[10px] shadow-lg">
         </div>
         <div data-aos="fade-left">
            <span
               class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-5">
               <i class="ri-user-star-line"></i>
               Leadership Team
            </span>
            <h2 class="mb-6">
               Guiding RUNVAN's Mission and Impact
            </h2>
            <p class="text-muted mb-5 leading-relaxed">
               Our leadership team brings together extensive experience
               in volunteerism, community development, governance,
               project management, and international cooperation.
            </p>
            <p class="text-muted leading-relaxed mb-8">
               Through collective leadership and shared values,
               the team works to strengthen the contribution of
               returned UN Volunteers throughout Nepal.
            </p>
            <div class="grid sm:grid-cols-2 gap-4">
               <div class="flex gap-3">
                  <i class="ri-check-line text-primary text-xl"></i>
                  <span>
                     Volunteer Leadership
                  </span>
               </div>
               <div class="flex gap-3">
                  <i class="ri-check-line text-primary text-xl"></i>
                  <span>
                     Governance Excellence
                  </span>
               </div>
               <div class="flex gap-3">
                  <i class="ri-check-line text-primary text-xl"></i>
                  <span>
                     Community Development
                  </span>
               </div>
               <div class="flex gap-3">
                  <i class="ri-check-line text-primary text-xl"></i>
                  <span>
                     Strategic Partnerships
                  </span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->

<section class="bg-[var(--bg-light)]">
   <div class="container">
      <div
         class="max-w-3xl mx-auto text-center mb-12"
         data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-5">
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
                  class="inline-flex px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-medium mb-4">
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
                  class="text-primary font-medium inline-flex items-center gap-2">
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
<!-- 
<section class="bg-[var(--bg-dark-light)]">
   <div class="container">
      <div
         class="max-w-3xl mx-auto text-center mb-14"
         data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-5">
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
                  alt=""
                  class="w-full h-80 object-cover transition duration-700 group-hover:scale-110">
            </div>
            <div class="p-6">
               <h4 class="mb-2">
                  Mr. Ram Sharma
               </h4>
               <p class="text-primary font-medium mb-4">
                  President
               </p>
               <p class="text-muted text-sm leading-relaxed mb-5">
                  Returned UN Volunteer with extensive experience in
                  community development, leadership, and volunteer management.
               </p>
               <div class="flex items-center justify-between">
                  <div class="flex gap-3">
                     <a href="#" class="text-muted hover:text-primary">
                        <i class="ri-linkedin-line"></i>
                     </a>
                     <a href="#" class="text-muted hover:text-primary">
                        <i class="ri-mail-line"></i>
                     </a>
                  </div>

                  <a
                     href="javascript:void(0)"
                     class="view-team-profile text-primary font-medium inline-flex items-center gap-2"
                     data-image="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500"
                     data-name="Mr. Ram Sharma"
                     data-position="President"
                     data-email="ramsharma@runvan.org"
                     data-linkedin="#"
                     data-description="Returned UN Volunteer with extensive experience in community development, leadership, and volunteer management."
                     >
                     View Profile
                     <i class="ri-arrow-right-line"></i>
                  </a>
               </div>
            </div>
         </article>
         
      </div>
      <div class="text-center mt-12">
         <a href="./teams.php" class="btn-primary inline-flex items-center gap-2">
            View All Team Members
            <i class="ri-arrow-right-line"></i>
         </a>
      </div>
   </div>
</section>


<div
   id="teamProfileModal"
   class="fixed inset-0 bg-black/60 z-[9999] hidden items-center justify-center p-4 transition-all duration-300">
   <div
      class="bg-white rounded-[10px] max-w-4xl w-full overflow-hidden relative transition-all duration-300">
      <button
         id="closeTeamModal"
         class="absolute top-4 right-4 text-2xl text-gray-500 hover:text-primary z-10">
         <i class="ri-close-line"></i>
      </button>
      <div class="grid lg:grid-cols-[350px_1fr]">
         <div class="bg-[var(--bg-light)]">
            <img
               id="modalTeamImage"
               src=""
               alt=""
               class="w-full h-full object-cover">
         </div>
         <div class="p-8">
            <span
               id="modalTeamPosition"
               class="inline-flex px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4">
            </span>
            <h3
               id="modalTeamName"
               class="mb-4">
            </h3>
            <p
               id="modalTeamDescription"
               class="text-muted leading-relaxed mb-6">
            </p>
            <div class="space-y-4 mb-8">
               <div class="flex items-center gap-3">
                  <i class="ri-mail-line text-primary"></i>
                  <span id="modalTeamEmail"></span>
               </div>
               <div class="flex items-center gap-3">
                  <i class="ri-linkedin-line text-primary"></i>
                  <a
                     id="modalTeamLinkedin"
                     href="#"
                     target="_blank"
                     class="text-primary">
                     LinkedIn Profile
                  </a>
               </div>
            </div>

         </div>
      </div>
   </div>
</div> -->

<?php
include './includes/footer.php';
?>