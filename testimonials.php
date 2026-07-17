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
            Testimonials
            </span>
         </nav>
         <h1
            class="text-white mb-6"
            data-aos="fade-up"
            data-aos-delay="100">
            Testimonials & Experiences
         </h1>
         <p
            class="text-lg text-white/80 max-w-2xl"
            data-aos="fade-up"
            data-aos-delay="200">
            Hear from volunteers, development professionals,
            partners, and community members who have been
            part of RUNVAN’s journey and impact.
         </p>
      </div>
   </div>
</section>

<section>
   <div class="container">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
         <!-- Image -->
         <div
            class="relative"
            data-aos="fade-right">
            <img
               src="assets/images/testimonial-overview.webp"
               alt="Testimonials" loading="lazy"
               class="w-full max-w-[500px] h-[350px] object-cover rounded-[10px]">
            <!-- <div
               class="absolute -bottom-6 -right-6 bg-white rounded-[10px] shadow-lg p-5">
               <div class="text-3xl font-semibold text-primary">
                  250+
               </div>
               <p class="text-muted text-sm">
                  Shared Experiences
               </p>
            </div> -->
         </div>
         <!-- Content -->
         <div data-aos="fade-left">
            <span
               class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-5">
            <i class="ri-chat-quote-line"></i>
            Voices of Impact
            </span>
            <h2 class="mb-5">
               Stories from Volunteers and Partners
            </h2>
            <p class="text-muted mb-6">
               RUNVAN values the experiences and insights of
               returned United Nations Volunteers, development
               professionals, partners, and community members.
               Their stories demonstrate the power of volunteerism,
               collaboration, and sustainable development.
            </p>
            <ul class="space-y-4">
               <li class="flex items-center gap-3">
                  <i class="ri-check-line text-primary"></i>
                  Returned UN Volunteers
               </li>
               <li class="flex items-center gap-3">
                  <i class="ri-check-line text-primary"></i>
                  Development Professionals
               </li>
               <li class="flex items-center gap-3">
                  <i class="ri-check-line text-primary"></i>
                  Community Leaders
               </li>
               <li class="flex items-center gap-3">
                  <i class="ri-check-line text-primary"></i>
                  Partner Organizations
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>

<section class="pt-0 overflow-hidden">
   <div class="container">
      <div
         class="bg-white border border-border rounded-[10px] overflow-hidden shadow-sm"
         data-aos="zoom-in">
         <div class="grid lg:grid-cols-5">
            <!-- Image -->
            <div class="lg:col-span-2">
               <img
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500"
                  alt="Dr. Sarah Sharma" loading="lazy"
                  class="w-full h-full object-cover max-h-[450px]">
            </div>
            <!-- Content -->
            <div
               class="lg:col-span-3 p-8 md:p-12 flex flex-col justify-center">
               <div
                  class="w-16 h-16 rounded-[10px] bg-primary/10 text-primary flex items-center justify-center text-3xl mb-6">
                  <i class="ri-double-quotes-l"></i>
               </div>
               <p
                  class="text-xl leading-relaxed text-dark mb-8">
                  RUNVAN has created a valuable platform where
                  returned UN Volunteers can continue contributing
                  their expertise, collaborate with development
                  partners, and support meaningful community
                  initiatives across Nepal.
               </p>
               <div>
                  <h4 class="mb-1">
                     Dr. Sarah Sharma
                  </h4>
                  <p class="text-muted">
                     Former UN Volunteer
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="pt-0">
   <div class="container">
      <div
         class="flex flex-wrap justify-center gap-3"
         data-aos="fade-up">
         <button
            class="testimonial-filter active-filter"
            data-filter="all">
         All
         </button>
         <button
            class="testimonial-filter"
            data-filter="volunteer">
         Volunteers
         </button>
         <button
            class="testimonial-filter"
            data-filter="partner">
         Partners
         </button>
         <button
            class="testimonial-filter"
            data-filter="community">
         Community Leaders
         </button>
         <button
            class="testimonial-filter"
            data-filter="organization">
         Organizations
         </button>
      </div>
   </div>
</section>

<section class="pb-0">
   <div class="container">
      <div
         id="testimonialGrid"
         class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
         <!-- Card 1 -->
         <article
            class="testimonial-card"
            data-category="volunteer"
            data-aos="fade-up">
            <div class="testimonial-top">
               <img
                  src="https://randomuser.me/api/portraits/men/32.jpg"
                  alt="Rajesh Adhikari" loading="lazy">
               <div>
                  <h5>
                     Rajesh Adhikari
                  </h5>
                  <span>
                  Former UN Volunteer
                  </span>
               </div>
            </div>
            <p>
               RUNVAN has provided a strong platform for
               professional collaboration and continued
               engagement after UN volunteer service.
            </p>
         </article>
         <!-- Card 2 -->
         <article
            class="testimonial-card"
            data-category="partner"
            data-aos="fade-up"
            data-aos-delay="100">
            <div class="testimonial-top">
               <img
                  src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=500"
                  alt="Maya Karki" loading="lazy">
               <div>
                  <h5>
                     Maya Karki
                  </h5>
                  <span>
                  Development Partner
                  </span>
               </div>
            </div>
            <p>
               RUNVAN's commitment to volunteerism and
               community development continues to inspire
               meaningful partnerships.
            </p>
         </article>
         <!-- Card 3 -->
         <article
            class="testimonial-card"
            data-category="organization"
            data-aos="fade-up"
            data-aos-delay="200">
            <div class="testimonial-top">
               <img
                  src="./assets/images/logo.avif"
                  alt="Community Action Nepal" loading="lazy">
               <div>
                  <h5>
                     Community Action Nepal
                  </h5>
                  <span>
                  Partner Organization
                  </span>
               </div>
            </div>
            <p>
               Through collaboration with RUNVAN, we have
               strengthened volunteer engagement and
               expanded community outreach initiatives.
            </p>
         </article>
      </div>
   </div>
</section>

<?php
   include './includes/pagination.php';
   ?>

<!-- Testimonial Modal -->
<div
   id="testimonialModal"
   class="fixed inset-0 z-[9999] hidden">
   <!-- Overlay -->
   <div
      class="absolute inset-0 bg-slate-900/70 backdrop-blur-md"></div>
   <!-- Modal -->
   <div
      class="absolute inset-0 flex items-center justify-center p-4 lg:p-8">
      <div
         class="relative bg-white rounded-[10px] overflow-hidden shadow-2xl w-full max-w-6xl max-h-[90vh] animate-modal">
         <!-- Close -->
         <button
            id="closeTestimonialModal"
            class="absolute top-5 right-5 z-20 w-10 h-10 rounded-[10px] bg-white shadow-md flex items-center justify-center hover:bg-gray-50 transition">
         <i class="ri-close-line text-xl"></i>
         </button>
         <div class="grid lg:grid-cols-2">
            <!-- Left Side -->
            <div
               class="hidden lg:flex flex-col relative bg-gradient-to-br from-[var(--primary)] to-[var(--primary-dark)] text-white p-10 lg:p-14 overflow-hidden">
               <!-- Decoration -->
               <div
                  class="absolute -top-24 -left-24 w-72 h-72 border border-white/10 rounded-full">
               </div>
               <div
                  class="absolute -bottom-32 -right-32 w-96 h-96 border border-white/10 rounded-full">
               </div>
               <!-- Image -->
               <div
                  class="relative mb-8">
                  <img
                     src="assets/images/testimonial-overview.webp"
                     alt="Your Experience Matters" loading="lazy"
                     class="w-full h-[240px] object-cover rounded-[10px] shadow-lg">
               </div>
               <!-- Quote -->
               <div
                  class="w-16 h-16 rounded-[10px] bg-white/10 flex items-center justify-center text-3xl mb-6">
                  <i class="ri-double-quotes-l"></i>
               </div>
               <h3
                  class="text-white mb-5">
                  Your Experience Matters
               </h3>
     `          <!-- <p
                  class="text-white/80 leading-relaxed mb-6">
                  Every volunteer journey, partnership, and
                  community engagement story contributes to the
                  collective impact of RUNVAN. Share your
                  experience and inspire future volunteers and
                  development professionals.
               </p>` -->
               <div
                  class="border-l-4 border-white/30 pl-4">
                  <p class="text-white/90 italic">
                     “Stories create connections. Your voice can
                     motivate others to participate, contribute,
                     and create positive change.”
                  </p>
               </div>
            </div>
            <!-- Right Side -->
            <div
               class="p-8 lg:p-12 overflow-y-auto max-h-[90vh]">
               <div class="mb-8">
                  <span
                     class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4">
                  <i class="ri-chat-quote-line"></i>
                  Submit Testimonial
                  </span>
                  <h3 class="mb-3">
                     Share Your Experience
                  </h3>
                  <p class="text-muted">
                     We'd love to hear about your journey with
                     RUNVAN.
                  </p>
               </div>
               <form>
                  <div class="grid md:grid-cols-2 gap-5 mb-5">
                     <input
                        type="text"
                        placeholder="Full Name"
                        class="form-input">
                     <input
                        type="text"
                        placeholder="Organization"
                        class="form-input">
                  </div>
                  <div class="grid md:grid-cols-2 gap-5 mb-5">
                     <input
                        type="email"
                        placeholder="Email Address"
                        class="form-input">
                     <select class="form-input">
                        <option>Select Category</option>
                        <option>Volunteer</option>
                        <option>Partner</option>
                        <option>Community Leader</option>
                        <option>Organization</option>
                     </select>
                  </div>
                  <input
                     type="text"
                     placeholder="Designation / Role"
                     class="form-input mb-5">
                  <textarea
                     rows="6"
                     placeholder="Share your experience..."
                     class="form-input mb-5"></textarea>
                  <div class="mb-6">
                     <label
                        class="block mb-2 text-sm font-medium">
                     Upload Photo (Optional)
                     </label>
                     <input
                        type="file"
                        class="form-input !h-auto py-3">
                  </div>
                  <div class="flex gap-4">
                     <button
                        type="submit"
                        class="btn-primary">
                     Submit Testimonial
                     </button>
                     <button
                        type="button"
                        id="cancelModal"
                        class="px-6 py-3 border border-border rounded-[10px] hover:bg-gray-50 transition">
                     Cancel
                     </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
   include './includes/footer.php';
   ?>