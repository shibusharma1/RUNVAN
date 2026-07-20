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
               Notice and Resource
            </span>
         </nav>
         <h1
            class="text-white mb-6"
            data-aos="fade-up"
            data-aos-delay="100">
            Notice and Resource
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

<section class="section-light">
   <div class="container">

      <div class="section-title" data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-4">
            <i class="ri-file-list-3-line"></i>
            Information Center
         </span>

         <h2>
            Notices & Reports
         </h2>

         <p>
            Stay informed with the latest organizational notices,
            reports, announcements, and important updates.
         </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-8 mt-16">

         <!-- Notices -->

         <div
            class="bg-white rounded-[10px] border border-[var(--border)] overflow-hidden">

            <div class="p-6 border-b border-[var(--border)]">
               <h3 class="mb-0">
                  Latest Notices
               </h3>
            </div>

            <div class="divide-y divide-[var(--border)]">

               <a href="./notice-reports-details.php"
                  class="block p-6 hover:bg-[var(--bg-light)] transition">

                  <div class="flex gap-4">

                     <div
                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                        <i class="ri-notification-3-line text-[var(--primary)]"></i>
                     </div>

                     <div>
                        <h5 class="mb-2">
                           Annual General Meeting Notice
                        </h5>

                        <div class="flex flex-wrap gap-3 text-sm text-muted">
                           <span>
                              <i class="ri-calendar-line"></i>
                              10 July 2026
                           </span>

                           <span>
                              Governance
                           </span>
                        </div>
                     </div>

                  </div>

               </a>

               <a href="./notice-reports-details.php"
                  class="block p-6 hover:bg-[var(--bg-light)] transition">

                  <div class="flex gap-4">

                     <div
                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                        <i class="ri-notification-3-line text-[var(--primary)]"></i>
                     </div>

                     <div>
                        <h5 class="mb-2">
                           Volunteer Membership Registration Open
                        </h5>

                        <div class="flex flex-wrap gap-3 text-sm text-muted">
                           <span>
                              <i class="ri-calendar-line"></i>
                              08 July 2026
                           </span>

                           <span>
                              Membership
                           </span>
                        </div>
                     </div>

                  </div>

               </a>

            </div>

            <div class="p-5 border-t border-[var(--border)]">
               <a href="#"
                  class="font-semibold text-[var(--primary)]">
                  View All Notices →
               </a>
            </div>

         </div>

         <!-- Reports -->

         <div
            class="bg-white rounded-[10px] border border-[var(--border)] overflow-hidden">

            <div class="p-6 border-b border-[var(--border)]">
               <h3 class="mb-0">
                  Reports & Resources
               </h3>
            </div>

            <div class="divide-y divide-[var(--border)]">

               <a href="./notice-reports-details.php"
                  class="block p-6 hover:bg-[var(--bg-light)] transition">

                  <div class="flex gap-4">

                     <div
                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                        <i class="ri-file-pdf-line text-[var(--primary)]"></i>
                     </div>

                     <div>
                        <h5 class="mb-2">
                           Annual Impact Report 2025
                        </h5>

                        <div class="text-sm text-muted">
                           Published July 2026
                        </div>
                     </div>

                  </div>

               </a>

               <a href="./notice-reports-details.php"
                  class="block p-6 hover:bg-[var(--bg-light)] transition">

                  <div class="flex gap-4">

                     <div
                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                        <i class="ri-file-chart-line text-[var(--primary)]"></i>
                     </div>

                     <div>
                        <h5 class="mb-2">
                           Volunteer Engagement Report
                        </h5>

                        <div class="text-sm text-muted">
                           Published June 2026
                        </div>
                     </div>

                  </div>

               </a>

            </div>

            <div class="p-5 border-t border-[var(--border)]">
               <a href="#"
                  class="font-semibold text-[var(--primary)]">
                  Explore Resources →
               </a>
            </div>

         </div>

      </div>

   </div>
</section>

<?php
include './includes/footer.php';
?>