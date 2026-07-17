<?php
   include './includes/header.php';
   ?>

<section class="relative overflow-hidden pt-40 pb-24">
   <div class="absolute inset-0 bg-gradient-to-r from-[var(--primary)] to-[var(--primary-dark)]"></div>
   <div class="container relative z-10">
      <div class="max-w-3xl">
         <div class="flex items-center gap-2 text-white/70 text-sm mb-6">
            <a href="./">
            Home
            </a>
            <i class="ri-arrow-right-s-line"></i>
            <a href="./programs.php">
            Programs & Activities
            </a>
            <i class="ri-arrow-right-s-line"></i>
            <span>
            Volunteer Capacity Building
            </span>
         </div>
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 text-white text-sm mb-5">
         Service
         </span>
         <h1 class="text-white mb-6">
            Volunteer Capacity Building
         </h1>
         <p class="text-white/80 text-lg">
            Strengthening volunteer leadership, professional skills, and
            community engagement through structured training and mentoring
            opportunities.
         </p>
      </div>
   </div>
</section>

<section class="bg-white">
   <div class="container">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
         <div data-aos="fade-right">
            <img
               src="./assets/images/program-main.webp"
               alt=""
               class="w-full max-w-[550px] h-[400px] object-cover rounded-[10px] shadow-md">
         </div>
         <div data-aos="fade-left">
            <span
               class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm mb-4">
            Program Overview
            </span>
            <h2 class="mb-6">
               Building Skills for Greater Impact
            </h2>
            <p class="text-muted mb-8 leading-relaxed">
               This program focuses on strengthening volunteer
               competencies through training, mentorship, knowledge
               sharing, and leadership development initiatives.
            </p>
            <div class="grid sm:grid-cols-3 gap-4">
               <div class="bg-slate-50 rounded-[10px] p-5">
                  <h6 class="mb-2">Duration</h6>
                  <p class="text-muted">
                     Year Round
                  </p>
               </div>
               <div class="bg-slate-50 rounded-[10px] p-5">
                  <h6 class="mb-2">Location</h6>
                  <p class="text-muted">
                     Nepal
                  </p>
               </div>
               <div class="bg-slate-50 rounded-[10px] p-5">
                  <h6 class="mb-2">Category</h6>
                  <p class="text-muted">
                     Service
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section-light">
   <div class="container">
      <div class="section-title">
         <h2>
            Key Objectives
         </h2>
      </div>
      <div class="grid md:grid-cols-2 gap-8 mt-14">
         <div class="bg-white p-8 rounded-[10px] shadow-sm">
            Strengthen volunteer leadership skills.
         </div>
         <div class="bg-white p-8 rounded-[10px] shadow-sm">
            Enhance professional and technical competencies.
         </div>
         <div class="bg-white p-8 rounded-[10px] shadow-sm">
            Promote networking and knowledge sharing.
         </div>
         <div class="bg-white p-8 rounded-[10px] shadow-sm">
            Encourage community participation and engagement.
         </div>
      </div>
   </div>
</section>

<section class="bg-white">
   <div class="container">
      <div class="section-title">
         <h2>
            Program Gallery
         </h2>
      </div>
      <div class="grid md:grid-cols-2 gap-6 mt-14">
         <img
            src="./assets/images/blog-featured.webp"
            class="w-full h-[250px] object-cover rounded-[10px]">
         <img
            src="./assets/images/blog1.webp"
            class="w-full h-[250px] object-cover rounded-[10px]">
         <img
            src="./assets/images/hero-2.webp"
            class="w-full h-[250px] object-cover rounded-[10px]">
         <img
            src="./assets/images/program-main.webp"
            class="w-full h-[250px] object-cover rounded-[10px]">
      </div>
   </div>
</section>

<section class="section-light overflow-hidden">
   <div class="container">
      <!-- Section Heading -->
      <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
         <div data-aos="fade-up">
            <span
               class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
            <i class="ri-links-line"></i>
            Explore More
            </span>
            <h2>
               Related Programs
            </h2>
            <p class="text-muted mt-3 max-w-2xl">
               Discover other initiatives and activities that complement
               this program and contribute to volunteerism, leadership,
               and sustainable development.
            </p>
         </div>
         <a href="./programs.php"
            data-aos="fade-left"
            class="inline-flex items-center gap-2 text-[var(--primary)] font-medium">
         View All Programs
         <i class="ri-arrow-right-line"></i>
         </a>
      </div>
      <!-- Programs Grid -->
      <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
         <!-- Card 1 -->
         <article
            class="group bg-white rounded-[10px] overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500"
            data-aos="fade-up">
            <div class="relative overflow-hidden">
               <img
                  src="./assets/images/program-main.webp"
                  alt=""
                  class="w-full h-[220px] object-cover group-hover:scale-110 transition duration-700">
               <span
                  class="absolute top-4 left-4 px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm">
               Activity
               </span>
            </div>
            <div class="p-6">
               <h4 class="mb-3">
                  Community Outreach Campaign
               </h4>
               <p class="text-muted mb-5">
                  Volunteer-driven engagement initiatives supporting
                  local communities through awareness and participation.
               </p>
               <a href="./programs-details.php"
                  class="inline-flex items-center gap-2 text-[var(--primary)] font-medium">
               Learn More
               <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>
               </a>
            </div>
         </article>
         <!-- Card 2 -->
         <article
            class="group bg-white rounded-[10px] overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500"
            data-aos="fade-up"
            data-aos-delay="100">
            <div class="relative overflow-hidden">
               <img
                  src="./assets/images/blog-featured.webp"
                  alt=""
                  class="w-full h-[220px] object-cover group-hover:scale-110 transition duration-700">
               <span
                  class="absolute top-4 left-4 px-3 py-1 rounded-full bg-blue-100 text-[var(--primary)] text-sm">
               Service
               </span>
            </div>
            <div class="p-6">
               <h4 class="mb-3">
                  Leadership Development Program
               </h4>
               <p class="text-muted mb-5">
                  Building leadership capacity through mentorship,
                  networking opportunities, and practical learning.
               </p>
               <a href="./programs-details.php"
                  class="inline-flex items-center gap-2 text-[var(--primary)] font-medium">
               Learn More
               <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>
               </a>
            </div>
         </article>
         <!-- Card 3 -->
         <article
            class="group bg-white rounded-[10px] overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500"
            data-aos="fade-up"
            data-aos-delay="200">
            <div class="relative overflow-hidden">
               <img
                  src="./assets/images/blog1.webp"
                  alt=""
                  class="w-full h-[220px] object-cover group-hover:scale-110 transition duration-700">
               <span
                  class="absolute top-4 left-4 px-3 py-1 rounded-full bg-orange-100 text-orange-700 text-sm">
               Event
               </span>
            </div>
            <div class="p-6">
               <h4 class="mb-3">
                  National Volunteer Gathering
               </h4>
               <p class="text-muted mb-5">
                  Bringing together volunteers, professionals, and
                  stakeholders for collaboration and learning.
               </p>
               <a href="./programs-details.php"
                  class="inline-flex items-center gap-2 text-[var(--primary)] font-medium">
               Learn More
               <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>
               </a>
            </div>
         </article>
      </div>
   </div>
</section>

<?php
   include './includes/footer.php';
   ?>