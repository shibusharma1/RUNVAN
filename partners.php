<?php
include './includes/header.php';
?>
<section class="relative pt-40 pb-24 overflow-hidden bg-gradient-to-br from-[var(--primary)] to-[var(--primary-dark)]">
   <!-- Background Effects -->
   <div class="absolute inset-0 bg-black/10"></div>
   <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
   <div class="absolute bottom-0 right-0 w-[450px] h-[450px] bg-white/5 rounded-full blur-3xl"></div>
   <div class="container relative z-10">
      <div class="max-w-3xl">
         <nav
            class="flex flex-wrap items-center gap-2 text-white/70 text-sm mb-6"
            data-aos="fade-up">
            <a href="./" class="hover:text-white transition">
               Home
            </a>
            <i class="ri-arrow-right-s-line"></i>
            <span>
               Partners & Affiliations
            </span>
         </nav>
         <h1
            class="text-white mb-6"
            data-aos="fade-up"
            data-aos-delay="100">
            Working Together for Greater Impact
         </h1>
         <p
            class="text-lg text-white/80 max-w-2xl"
            data-aos="fade-up"
            data-aos-delay="200">
            RUNVAN collaborates with national and international organizations,
            institutions, and development partners to promote volunteerism,
            strengthen communities, and advance sustainable development.
         </p>
      </div>
   </div>
</section>

<section class="section-light">
   <div class="container">
      <div class="max-w-4xl mx-auto text-center">
         <h2 class="mb-5">
            Building Meaningful Partnerships
         </h2>
         <p>
            Collaboration is at the heart of RUNVAN’s work. Through strategic
            partnerships and institutional affiliations, we strengthen our
            collective capacity to create sustainable and lasting impact for
            communities across Nepal.
         </p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
         <!-- Partner -->
         <div
            class="bg-white rounded-[10px] border border-[var(--border)] overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <div class="h-44 flex items-center justify-center p-8 border-b border-[var(--border)]">
               <img
                  src="./assets/images/partners/unv.jpg"
                  alt="UN Volunteers"
                  class="max-h-24 object-contain">
            </div>
            <div class="p-7">
               <h4 class="mb-3">
                  United Nations Volunteers (UNV)
               </h4>
               <p class="text-muted">
                  A global UN organization that promotes volunteerism as a
                  powerful means of achieving peace and sustainable development.
               </p>
            </div>
         </div>
         <!-- Partner -->
         <div
            class="bg-white rounded-[10px] border border-[var(--border)] overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <div class="h-44 flex items-center justify-center p-8 border-b border-[var(--border)]">
               <img
                  src="./assets/images/partners/undp.jpg"
                  alt="UNDP"
                  class="max-h-24 object-contain">
            </div>
            <div class="p-7">
               <h4 class="mb-3">
                  United Nations Development Programme
               </h4>
               <p class="text-muted">
                  Supporting sustainable development, poverty reduction,
                  resilience, and inclusive growth across communities.
               </p>
            </div>
         </div>
         <!-- Partner -->
         <div
            class="bg-white rounded-[10px] border border-[var(--border)] overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <div class="h-44 flex items-center justify-center p-8 border-b border-[var(--border)]">
               <img
                  src="./assets/images/partners/ngo.png"
                  alt="Partner Organization"
                  class="max-h-24 object-contain">
            </div>
            <div class="p-7">
               <h4 class="mb-3">
                  Partner Organization Name
               </h4>
               <p class="text-muted">
                  Brief description about the organization, partnership
                  objectives, and areas of collaboration with RUNVAN.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
include './includes/footer.php';
?>