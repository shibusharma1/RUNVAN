<?php
include './includes/header.php';
?>

<section class="relative pt-40 pb-24 overflow-hidden bg-gradient-to-br from-[var(--primary)] to-[var(--primary-dark)]">
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
            <a href="./" class="hover:text-white">
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
      <div
         class="flex flex-wrap justify-center gap-3"
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

<section style="padding-top: 0 !important;padding-bottom: 0 !important;">
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
                  src="./assets/images/publication-1.webp"
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
               <a href="./assets/images/publication-1.webp" download>
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
                  src="assets/images/blog1.webp"
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
include './includes/footer.php';
?>