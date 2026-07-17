<?php
include './includes/header.php';
?>

<section class="relative pt-40 pb-24 bg-gradient-to-br from-[var(--primary)] to-[var(--primary-dark)] overflow-hidden">
   <div class="absolute inset-0 bg-black/10"></div>
   <div class="container relative z-10">
      <div class="max-w-3xl">
         <nav
            class="flex items-center gap-2 text-white/70 text-sm mb-6"
            data-aos="fade-up">
            <a href="./">Home</a>
            <i class="ri-arrow-right-s-line"></i>
            <span>Gallery</span>
         </nav>
         <h1
            class="text-white mb-6"
            data-aos="fade-up"
            data-aos-delay="100">
            Photo Gallery
         </h1>
         <p
            class="text-lg text-white/80"
            data-aos="fade-up"
            data-aos-delay="200">
            Explore moments from volunteer initiatives,
            community engagement programs, trainings,
            workshops, and organizational events.
         </p>
      </div>
   </div>
</section>

<section>
   <div class="container">
      <div
         class="flex flex-nowrap sm:flex-wrap justify-start sm:justify-center gap-3 overflow-x-auto pb-2"
         data-aos="fade-up">
         <button class="gallery-filter active-filter" data-filter="all">
            All
         </button>
         <button class="gallery-filter" data-filter="volunteer">
            Volunteer Activities
         </button>
         <button class="gallery-filter" data-filter="community">
            Community Outreach
         </button>
         <button class="gallery-filter" data-filter="training">
            Training & Workshops
         </button>
         <button class="gallery-filter" data-filter="event">
            Events
         </button>
      </div>
   </div>

</section>

<section class="pt-0">
   <div class="container">
      <div
         id="galleryGrid"
         class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">
         <!-- Item -->
         <div
            class="gallery-item break-inside-avoid group"
            data-category="volunteer">

            <a
               href="assets/images/about-main.webp"
               class="gallery-popup relative block overflow-hidden rounded-[10px]">

               <img
                  src="assets/images/about-main.webp"
                  alt=""
                  class="w-full rounded-[10px] transition duration-700 group-hover:scale-105">

               <!-- Overlay -->
               <div
                  class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300">
                  <!-- Eye Icon -->
                  <div class="absolute inset-0 flex items-center justify-center">
                     <div
                        class="w-12 h-12 rounded-full bg-white text-primary flex items-center justify-center">
                        <i class="ri-eye-line text-xl"></i>
                     </div>
                  </div>
                  <!-- Bottom Content -->
                  <div
                     class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                     <div
                        class="absolute bottom-5 left-5 right-5">
                        <h5 class="text-white mb-1">
                           Volunteer Activities
                        </h5>
                        <p class="text-white/80 text-sm">
                           Community Engagement Program
                        </p>
                     </div>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>

<section class="pt-0">
   <div class="container">
      <div
         class="text-center"
         data-aos="fade-up">
         <button
            id="loadMoreGallery"
            class="btn-primary">
            Load More Photos
         </button>
      </div>
   </div>
</section>

<?php
include './includes/footer.php';
?>