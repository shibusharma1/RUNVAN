<?php
include './includes/header.php';
?>

<section class="relative overflow-hidden pt-40 pb-24">
   <div class="absolute inset-0 bg-gradient-to-r from-[var(--primary)] to-[var(--primary-dark)]"></div>
   <div
      class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl">
   </div>
   <div
      class="absolute bottom-0 left-0 w-80 h-80 bg-white/5 rounded-full blur-3xl">
   </div>
   <div class="container relative z-10">
      <div class="max-w-3xl">
         <div
            class="flex items-center gap-2 text-white/70 text-sm mb-6"
            data-aos="fade-up">
            <a href="./">
               Home
            </a>
            <i class="ri-arrow-right-s-line"></i>
            <span>
               Programs & Activities
            </span>
         </div>
         <h1
            class="text-white mb-6"
            data-aos="fade-up"
            data-aos-delay="100">
            Programs & Activities
         </h1>
         <p
            class="text-white/80 text-lg max-w-2xl"
            data-aos="fade-up"
            data-aos-delay="200">
            Discover our services, activities, and events that promote
            volunteerism, leadership development, knowledge sharing, and
            sustainable community impact across Nepal.
         </p>
      </div>
   </div>
</section>

<section class="bg-white">
   <div class="container">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
         <div
            class="relative mx-auto lg:mx-0"
            data-aos="fade-right">
            <img
               src="./assets/images/program-main.png"
               alt="Programs Overview"
               class="w-full max-w-[500px] h-[350px] object-cover rounded-[10px] shadow-md">
            <div
               class="absolute -bottom-5 -right-5 bg-white rounded-[10px] shadow-lg px-6 py-4">
               <div class="flex items-center gap-3">
                  <div
                     class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                     <i class="ri-global-line text-[var(--primary)] text-xl"></i>
                  </div>
                  <div>
                     <h5 class="text-[var(--primary)]">
                        Community Impact
                     </h5>
                     <p class="text-sm text-muted">
                        Across Nepal
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div data-aos="fade-left">
            <span
               class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
               <i class="ri-briefcase-line"></i>
               Programs Overview
            </span>
            <h2 class="mb-6">
               Empowering Communities Through Action
            </h2>
            <p class="text-muted leading-relaxed mb-6">
               RUNVAN designs and implements programs that harness the
               expertise of returned UN volunteers to support community
               development, leadership growth, knowledge exchange, and
               sustainable social impact.
            </p>
            <p class="text-muted leading-relaxed mb-8">
               Through services, activities, and events, we create
               opportunities for collaboration, learning, volunteer
               engagement, and meaningful contribution to national
               development priorities.
            </p>
            <div class="grid sm:grid-cols-2 gap-4 mb-8">
               <div class="flex gap-3">
                  <i class="ri-check-line text-[var(--primary)] mt-1"></i>
                  <span>Volunteer Engagement</span>
               </div>
               <div class="flex gap-3">
                  <i class="ri-check-line text-[var(--primary)] mt-1"></i>
                  <span>Capacity Building</span>
               </div>
               <div class="flex gap-3">
                  <i class="ri-check-line text-[var(--primary)] mt-1"></i>
                  <span>Knowledge Sharing</span>
               </div>
               <div class="flex gap-3">
                  <i class="ri-check-line text-[var(--primary)] mt-1"></i>
                  <span>Community Development</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section-light">
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
            <i class="ri-apps-line"></i>
            Programs Directory
         </span>
         <h2>
            Services, Activities & Events
         </h2>
         <p>
            Explore RUNVAN's initiatives designed to promote volunteerism,
            strengthen communities, and encourage sustainable development.
         </p>
      </div>
      <div
         class="flex flex-wrap justify-center gap-3 mb-12 overflow-x-auto pb-2"
         data-aos="fade-up">

         <button
            class="program-filter active-filter"
            data-filter="all">
            All
         </button>

         <button
            class="program-filter"
            data-filter="service">
            Services
         </button>

         <button
            class="program-filter"
            data-filter="activity">
            Activities
         </button>

         <button
            class="program-filter"
            data-filter="event">
            Events
         </button>

      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
         <div
            data-category="service"
            class="group program-card bg-white rounded-[10px] overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300"
            data-aos="fade-up">
            <div class="overflow-hidden">
               <img
                  src="./assets/images/program-main.png"
                  alt=""
                  class="w-full h-[220px] object-cover group-hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
               <span
                  class="inline-block px-3 py-1 rounded-full bg-blue-100 text-[var(--primary)] text-sm mb-4">
                  Service
               </span>
               <h4 class="mb-3">
                  Volunteer Capacity Building
               </h4>
               <p class="text-muted mb-5">
                  Training, mentoring, and leadership development opportunities
                  designed to strengthen volunteer competencies.
               </p>
               <a href="./programs-details.php"
                  class="inline-flex items-center gap-2 text-[var(--primary)] font-medium">
                  Read More
                  <i class="ri-arrow-right-line"></i>
               </a>
            </div>
         </div>

         <div
            data-category="activity"
            class="group program-card bg-white rounded-[10px] overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300"
            data-aos="fade-up"
            data-aos-delay="100">
            <div class="overflow-hidden">
               <img
                  src="./assets/images/blog1.png"
                  alt="Community Outreach Campaign"
                  class="w-full h-[220px] object-cover group-hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
               <span
                  class="inline-block px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm mb-4">
                  Activity
               </span>
               <h4 class="mb-3">
                  Community Outreach Campaign
               </h4>
               <p class="text-muted mb-5">
                  Volunteer-led community engagement activities focused on awareness,
                  participation, and local development initiatives.
               </p>
               <a href="./programs-details.php"
                  class="inline-flex items-center gap-2 text-[var(--primary)] font-medium">
                  Read More
                  <i class="ri-arrow-right-line"></i>
               </a>
            </div>
         </div>
         <div
            data-category="event"
            class="group program-card bg-white rounded-[10px] overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300"
            data-aos="fade-up"
            data-aos-delay="200">
            <div class="overflow-hidden">
               <img
                  src="./assets/images/blog-featured.png"
                  alt="National Volunteer Gathering"
                  class="w-full h-[220px] object-cover group-hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
               <span
                  class="inline-block px-3 py-1 rounded-full bg-orange-100 text-orange-700 text-sm mb-4">
                  Event
               </span>
               <h4 class="mb-3">
                  National Volunteer Gathering
               </h4>
               <p class="text-muted mb-5">
                  Bringing together volunteers, development professionals, and
                  partners to share experiences, ideas, and future collaborations.
               </p>
               <a href="./programs-details.php"
                  class="inline-flex items-center gap-2 text-[var(--primary)] font-medium">
                  Read More
                  <i class="ri-arrow-right-line"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
include './includes/footer.php';
?>