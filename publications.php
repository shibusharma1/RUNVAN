<?php
   include './includes/header.php';
   ?>
<section class="relative pt-40 pb-24 overflow-hidden bg-gradient-to-br from-primary to-primary-dark">
   <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black/20"></div>
      <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
      <div class="absolute bottom-0 right-0 w-[450px] h-[450px] bg-white/5 rounded-full blur-3xl"></div>
   </div>
   <div class="container relative z-10">
      <div class="max-w-3xl">
         <nav
            class="flex items-center gap-2 text-white/70 text-sm mb-6"
            data-aos="fade-up">
            <a href="index.html" class="hover:text-white">
            Home
            </a>
            <i class="ri-arrow-right-s-line"></i>
            <span>
            Publications & News
            </span>
         </nav>
         <h1
            class="text-white mb-6"
            data-aos="fade-up"
            data-aos-delay="100">
            Publications & News
         </h1>
         <p
            class="text-lg text-white/80 max-w-2xl"
            data-aos="fade-up"
            data-aos-delay="200">
            Explore reports, research publications, organizational updates,
            success stories, and insights highlighting RUNVAN’s contributions
            to volunteerism and sustainable development.
         </p>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
         <div
            class="relative"
            data-aos="fade-right">
            <img
               src="assets/images/publications-overview.jpg"
               alt="RUNVAN Publications"
               class="w-full max-w-[500px] h-[350px] object-cover rounded-[10px]">
            <div
               class="absolute -bottom-6 -right-6 bg-white rounded-[10px] shadow-lg p-5">
               <div class="text-3xl font-semibold text-[var(--primary)]">
                  100+
               </div>
               <p class="text-muted text-sm">
                  Publications & Resources
               </p>
            </div>
         </div>
         <div data-aos="fade-left">
            <span
               class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-5">
            <i class="ri-book-open-line"></i>
            Knowledge Hub
            </span>
            <h2 class="mb-5">
               Sharing Knowledge, Experience & Impact
            </h2>
            <p class="text-muted mb-6">
               RUNVAN promotes learning and knowledge sharing through
               publications, reports, case studies, news articles,
               and volunteer experiences. These resources capture
               achievements, lessons learned, and contributions toward
               community development and volunteer engagement.
            </p>
            <ul class="space-y-4">
               <li class="flex items-center gap-3">
                  <i class="ri-check-line text-[var(--primary)]"></i>
                  Annual Reports & Organizational Publications
               </li>
               <li class="flex items-center gap-3">
                  <i class="ri-check-line text-[var(--primary)]"></i>
                  Success Stories & Volunteer Experiences
               </li>
               <li class="flex items-center gap-3">
                  <i class="ri-check-line text-[var(--primary)]"></i>
                  Research & Knowledge Resources
               </li>
               <li class="flex items-center gap-3">
                  <i class="ri-check-line text-[var(--primary)]"></i>
                  News, Events & Organizational Updates
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="pt-0">
   <div class="container">
      <div
         class="flex flex-wrap justify-center gap-3 mb-14"
         data-aos="fade-up">
         <button
            class="publication-filter active-filter"
            data-filter="all">
         All
         </button>
         <button
            class="publication-filter"
            data-filter="publication">
         Publications
         </button>
         <button
            class="publication-filter"
            data-filter="news">
         News
         </button>
         <button
            class="publication-filter"
            data-filter="report">
         Reports
         </button>
         <button
            class="publication-filter"
            data-filter="story">
         Success Stories
         </button>
      </div>
   </div>
</section>
<section class="pt-0">
   <div class="container">
      <div
         id="publicationGrid"
         class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
         <!-- Card 1 -->
         <article
            class="publication-card group"
            data-category="publication"
            data-aos="fade-up">
            <div class="publication-image">
               <img
                  src="assets/images/publication-1.jpg"
                  alt="">
               <span class="publication-badge publication">
               Publication
               </span>
            </div>
            <div class="publication-content">
               <div class="publication-meta">
                  <i class="ri-calendar-line"></i>
                  12 May 2026
               </div>
               <h4>
                  Volunteerism and Community Development Report
               </h4>
               <p>
                  Insights and findings highlighting volunteer
                  contributions to sustainable development.
               </p>
               <a href="#">
               Download Publication
               <i class="ri-download-line"></i>
               </a>
            </div>
         </article>
         <!-- Card 2 -->
         <article
            class="publication-card group"
            data-category="news"
            data-aos="fade-up"
            data-aos-delay="100">
            <div class="publication-image">
               <img
                  src="assets/images/news-1.jpg"
                  alt="">
               <span class="publication-badge news">
               News
               </span>
            </div>
            <div class="publication-content">
               <div class="publication-meta">
                  <i class="ri-calendar-line"></i>
                  05 June 2026
               </div>
               <h4>
                  RUNVAN Conducts Leadership Workshop
               </h4>
               <p>
                  Volunteers and development practitioners gathered
                  to strengthen leadership skills.
               </p>
               <a href="#">
               Read Article
               <i class="ri-arrow-right-line"></i>
               </a>
            </div>
         </article>
         <!-- More cards -->
      </div>
   </div>
</section>
<?php
   include './includes/pagination.php';
   ?>
<?php
   include './includes/footer.php';
   ?>