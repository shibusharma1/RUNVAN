<?php
include './includes/header.php';
?>

<section class="hero overflow-hidden">
   <div class="container mx-auto">
      <div class="grid lg:grid-cols-2 gap-8 items-center">
         <!-- Left -->
         <div data-aos="fade-right">
            <span
               class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-6">
               <i class="ri-global-line"></i>
               Returned United Nations Volunteers Association
            </span>
            <h1 class="mb-6">
               Empowering Communities Through
               <span class="text-[var(--primary)] block mt-2"
                  id="heroText"
                  data-text="Volunteer Leadership">
               </span>
            </h1>
            <p class="text-light text-lg mb-8 max-w-xl">
               RUNVAN Nepal is committed to promoting volunteerism,
               community development, leadership, and sustainable
               social impact through returned United Nations
               volunteers and dedicated professionals.
            </p>
            <div class="flex flex-wrap gap-4">
               <a href="./about.php"
                  class="btn-primary">
                  Learn More
               </a>
               <a href="./contact.php"
                  class="btn-outline">
                  Contact Us
               </a>
            </div>
         </div>
         <!-- Right -->
         <div
            class="hidden lg:block relative"
            data-aos="fade-left">
            <div class="swiper heroSwiper rounded-[20px] overflow-hidden shadow-2xl">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <img src="assets/images/hero-1.png"
                        class="w-full h-[600px] object-cover">
                  </div>
                  <div class="swiper-slide">
                     <img src="assets/images/hero-2.png"
                        class="w-full h-[600px] object-cover">
                  </div>
                  <div class="swiper-slide">
                     <img src="assets/images/hero-3.png"
                        class="w-full h-[600px] object-cover">
                  </div>
               </div>
            </div>
            <!-- Floating Card -->
            <div
               class="absolute bottom-6 left-6 bg-white p-5 rounded-xl shadow-lg hidden md:block">
               <h4 class="font-semibold text-[var(--primary)]">
                  Community Impact
               </h4>
               <p class="text-sm text-light">
                  Empowering local communities through volunteer action.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="about" class="section-light">
   <div class="container">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
         <!-- Images -->
         <div
            class="relative"
            data-aos="fade-right">
            <img
               src="./assets/images/about-main.png"
               alt="RUNVAN Activities"
               class="rounded-[10px] shadow-lg w-full h-[500px] object-cover">
            <!-- Floating Card -->
            <div
               class="absolute -bottom-6 -right-6 bg-white p-6 rounded-[10px] shadow-xl max-w-[250px] hidden md:block">
               <div class="flex items-center gap-3 mb-3">
                  <div
                     class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                     <i class="ri-team-line text-[var(--primary)] text-xl"></i>
                  </div>
                  <h4 class="text-lg font-semibold">
                     Volunteer Network
                  </h4>
               </div>
               <p class="text-muted text-sm">
                  Building stronger communities through global volunteer experience.
               </p>
            </div>
         </div>
         <!-- Content -->
         <div data-aos="fade-left">
            <span
               class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-5">
               <i class="ri-information-line"></i>
               About RUNVAN
            </span>
            <h2 class="mb-6">
               Returned United Nations Volunteers Association Nepal
            </h2>
            <p class="text-muted mb-5">
               RUNVAN is a professional network of returned United Nations Volunteers dedicated to promoting volunteerism, leadership, community development, and sustainable social impact throughout Nepal.
            </p>
            <p class="text-muted mb-8">
               The association brings together experienced professionals who have served internationally and nationally, leveraging their expertise to strengthen local communities, support development initiatives, and contribute to national progress.
            </p>
            <!-- Highlights -->
            <div class="grid sm:grid-cols-2 gap-5 mb-8">
               <div class="card">
                  <div
                     class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                     <i class="ri-global-line text-[var(--primary)] text-xl"></i>
                  </div>
                  <h5 class="mb-2">
                     Global Experience
                  </h5>
                  <p class="text-sm text-muted">
                     Knowledge and expertise gained through international volunteer service.
                  </p>
               </div>
               <div class="card">
                  <div
                     class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                     <i class="ri-community-line text-[var(--primary)] text-xl"></i>
                  </div>
                  <h5 class="mb-2">
                     Community Impact
                  </h5>
                  <p class="text-sm text-muted">
                     Supporting sustainable development and local empowerment.
                  </p>
               </div>
            </div>
            <a href="./about.php" class="btn-primary">
               Learn More
               <i class="ri-arrow-right-line"></i>
            </a>
         </div>
      </div>
   </div>
</section>

<section class="section-white">
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-4">
            <i class="ri-focus-3-line"></i>
            Our Foundation
         </span>
         <h2>
            Vision, Mission & Objectives
         </h2>
         <p>
            Guiding principles that drive RUNVAN's commitment to volunteerism,
            leadership, and sustainable development.
         </p>
      </div>
      <div
         class="w-24 h-1 bg-primary mx-auto rounded-full"
         data-aos="zoom-in">
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
         <!-- Vision -->
         <div class="card text-center" data-aos="fade-up">
            <div
               class="w-20 h-20 rounded-full bg-primary/10 mx-auto flex items-center justify-center mb-6">
               <i class="ri-eye-line text-[var(--primary)] text-4xl"></i>
            </div>
            <h3 class="mb-4">
               Vision
            </h3>
            <p class="text-muted">
               To create a society where volunteerism contributes
               significantly to sustainable development, social inclusion,
               and community empowerment.
            </p>
         </div>
         <!-- Mission -->
         <div
            class="card text-center"
            data-aos="fade-up"
            data-aos-delay="150">
            <div
               class="w-20 h-20 rounded-full bg-primary/10 mx-auto flex items-center justify-center mb-6">
               <i class="ri-flag-line text-[var(--primary)] text-4xl"></i>
            </div>
            <h3 class="mb-4">
               Mission
            </h3>
            <p class="text-muted">
               To promote volunteerism, share professional expertise,
               strengthen communities, and support national development
               through collective action.
            </p>
         </div>
         <!-- Objectives -->
         <div
            class="card text-center"
            data-aos="fade-up"
            data-aos-delay="300">
            <div
               class="w-20 h-20 rounded-full bg-primary/10 mx-auto flex items-center justify-center mb-6">
               <i class="ri-target-line text-[var(--primary)] text-4xl"></i>
            </div>
            <h3 class="mb-4">
               Objectives
            </h3>
            <p class="text-muted">
               Foster leadership, encourage civic engagement, facilitate
               knowledge exchange, and support sustainable community
               development initiatives.
            </p>
         </div>
      </div>
   </div>
</section>
<section class="section-light">
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-4">
            <i class="ri-community-line"></i>
            What We Do
         </span>
         <h2>
            Programs & Activities
         </h2>
         <p>
            RUNVAN actively promotes volunteerism, leadership,
            community engagement, and sustainable development
            through diverse initiatives and collaborative programs.
         </p>
      </div>
      <div
         class="w-24 h-1 bg-primary mx-auto rounded-full"
         data-aos="zoom-in">
      </div>
      <!-- Featured Program -->
      <div
         class="card overflow-hidden mb-10 p-0"
         data-aos="fade-up">
         <div class="grid lg:grid-cols-2">
            <img
               src="./assets/images/program-main.png"
               alt=""
               class="w-full h-full min-h-[350px] object-cover">
            <div class="p-8 lg:p-12">
               <span
                  class="inline-block px-3 py-1 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
                  Featured Initiative
               </span>
               <h3 class="mb-4" style="  font-size: clamp(1.625rem, 2.8vw, 2.25rem) !important;line-height: 1.2;font-weight: 700 !important;">
                  Community Development & Volunteer Mobilization
               </h3>
               <p class="text-muted mb-6">
                  Through collaborative efforts and volunteer-driven
                  initiatives, RUNVAN works closely with communities,
                  institutions, and development partners to strengthen
                  local capacity and promote sustainable social impact.
               </p>
               <p class="text-muted mb-6">
                  Through collaborative efforts and volunteer-driven
                  initiatives, RUNVAN works closely with communities,
                  institutions, and development partners to strengthen
                  local capacity and promote sustainable social impact.
               </p>
               <p class="text-muted mb-6">
                  Through collaborative efforts and volunteer-driven
                  initiatives, RUNVAN works closely with communities,
                  institutions, and development partners to strengthen
                  local capacity and promote sustainable social impact.
               </p>
               <p class="text-muted mb-6">
                  Through collaborative efforts and volunteer-driven
                  initiatives, RUNVAN works closely with communities,
                  institutions, and development partners to strengthen
                  local capacity and promote sustainable social impact.
               </p>
               <a href="./programs.php"
                  class="btn-primary">
                  Explore Program
                  <i class="ri-arrow-right-line"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- Program Cards -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
         <!-- Card -->
         <div
            class="card"
            data-aos="fade-up">
            <div
               class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-6">
               <i class="ri-team-line text-3xl text-[var(--primary)]"></i>
            </div>
            <h4 class="mb-4">
               Volunteer Engagement
            </h4>
            <p class="text-muted mb-5">
               Promoting volunteer participation and strengthening
               networks of experienced professionals.
            </p>
            <a href="./programs.php"
               class="text-[var(--primary)] font-semibold">
               Learn More →
            </a>
         </div>
         <!-- Card -->
         <div
            class="card"
            data-aos="fade-up"
            data-aos-delay="150">
            <div
               class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-6">
               <i class="ri-graduation-cap-line text-3xl text-[var(--primary)]"></i>
            </div>
            <h4 class="mb-4">
               Capacity Building
            </h4>
            <p class="text-muted mb-5">
               Training, mentoring, and knowledge sharing programs
               for communities and institutions.
            </p>
            <a href="./programs.php"
               class="text-[var(--primary)] font-semibold">
               Learn More →
            </a>
         </div>
         <!-- Card -->
         <div
            class="card"
            data-aos="fade-up"
            data-aos-delay="300">
            <div
               class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-6">
               <i class="ri-earth-line text-3xl text-[var(--primary)]"></i>
            </div>
            <h4 class="mb-4">
               Sustainable Development
            </h4>
            <p class="text-muted mb-5">
               Supporting initiatives that contribute to long-term
               social, economic, and environmental development.
            </p>
            <a href="./programs.php"
               class="text-[var(--primary)] font-semibold">
               Learn More →
            </a>
         </div>
      </div>
   </div>
</section>
<section class="section-white">
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-4">
            <i class="ri-user-star-line"></i>
            Leadership Team
         </span>
         <h2>
            Meet Our Core Team
         </h2>
         <p>
            Dedicated leaders and experienced professionals guiding
            RUNVAN's mission of volunteerism, development, and community impact.
         </p>
      </div>
      <div
         class="w-24 h-1 bg-primary mx-auto rounded-full"
         data-aos="zoom-in">
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
         <!-- Team Member -->
         <div class="team-card card text-center"
            data-aos="fade-up">
            <div class="relative mb-6">
               <img
                  src="https://randomuser.me/api/portraits/men/32.jpg"
                  alt=""
                  class="w-44 h-44 mx-auto rounded-full object-cover border-4 border-white shadow-lg">
            </div>
            <h4 class="mb-1">
               John Doe
            </h4>
            <p class="text-[var(--primary)] font-medium mb-4">
               Chairperson
            </p>
            <p class="text-sm text-muted mb-5">
               Former United Nations Volunteer with extensive experience
               in community development and leadership.
            </p>
            <a href="./teams-details.php"
               class="font-semibold text-[var(--primary)]">
               View Profile
            </a>
         </div>
         <!-- Team Member -->
         <div class="team-card card text-center"
            data-aos="fade-up"
            data-aos-delay="100">
            <div class="relative mb-6">
               <img
                  src="https://randomuser.me/api/portraits/men/75.jpg"
                  alt=""
                  class="w-44 h-44 mx-auto rounded-full object-cover border-4 border-white shadow-lg">
            </div>
            <h4 class="mb-1">
               Jane Smith
            </h4>
            <p class="text-[var(--primary)] font-medium mb-4">
               Vice Chairperson
            </p>
            <p class="text-sm text-muted mb-5">
               Passionate advocate for volunteer engagement and youth empowerment.
            </p>
            <a href="./teams-details.php"
               class="font-semibold text-[var(--primary)]">
               View Profile
            </a>
         </div>
         <!-- Team Member -->
         <div class="team-card card text-center"
            data-aos="fade-up"
            data-aos-delay="200">
            <div class="relative mb-6">
               <img
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500"
                  alt=""
                  class="w-44 h-44 mx-auto rounded-full object-cover border-4 border-white shadow-lg">
            </div>
            <h4 class="mb-1">
               Michael Brown
            </h4>
            <p class="text-[var(--primary)] font-medium mb-4">
               Secretary
            </p>
            <p class="text-sm text-muted mb-5">
               Experienced development professional supporting strategic planning.
            </p>
            <a href="./teams-details.php"
               class="font-semibold text-[var(--primary)]">
               View Profile
            </a>
         </div>
         <!-- Team Member -->
         <div class="team-card card text-center"
            data-aos="fade-up"
            data-aos-delay="300">
            <div class="relative mb-6">
               <img
                  src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=500"
                  alt=""
                  class="w-44 h-44 mx-auto rounded-full object-cover border-4 border-white shadow-lg">
            </div>
            <h4 class="mb-1">
               Sarah Wilson
            </h4>
            <p class="text-[var(--primary)] font-medium mb-4">
               Treasurer
            </p>
            <p class="text-sm text-muted mb-5">
               Managing resources and ensuring transparency in organizational activities.
            </p>
            <a href="./teams-details.php"
               class="font-semibold text-[var(--primary)]">
               View Profile
            </a>
         </div>
      </div>
      <!-- CTA -->
      <div
         class="text-center mt-12"
         data-aos="fade-up">
         <a href="./teams.php"
            class="btn-outline">
            View Complete Team
            <i class="ri-arrow-right-line ml-2"></i>
         </a>
      </div>
   </div>
</section>
<section class="section-light overflow-hidden relative">
   <div
      class="absolute top-0 left-0 w-72 h-72 bg-primary/5 rounded-full blur-3xl">
   </div>
   <div
      class="absolute bottom-0 right-0 w-72 h-72 bg-primary/5 rounded-full blur-3xl">
   </div>
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-4">
            <i class="ri-chat-quote-line"></i>
            Testimonials
         </span>
         <h2>
            Voices of Impact
         </h2>
         <p>
            Experiences shared by volunteers, partners, and community members
            who have worked alongside RUNVAN.
         </p>
      </div>
      <div
         class="swiper testimonialSwiper"
         data-aos="fade-up">
         <div class="swiper-wrapper">
            <!-- Testimonial -->
            <div class="swiper-slide">
               <div
                  class="bg-white rounded-[10px] shadow-lg p-8 md:p-12 text-center max-w-4xl mx-auto">
                  <div
                     class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center mb-6">
                     <i
                        class="ri-double-quotes-l text-[var(--primary)] text-5xl"></i>
                  </div>
                  <p
                     class="text-lg md:text-xl text-muted leading-relaxed mb-8">
                     Working with RUNVAN has provided opportunities to
                     apply international volunteer experience to local
                     development initiatives and create meaningful
                     community impact.
                  </p>
                  <img
                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500"
                     class="w-20 h-20 rounded-full mx-auto object-cover mb-4">
                  <h5>
                     John Doe
                  </h5>
                  <span class="text-[var(--primary)] text-sm">
                     Returned UN Volunteer
                  </span>
               </div>
            </div>
            <!-- Testimonial -->
            <div class="swiper-slide">
               <div
                  class="bg-white rounded-[10px] shadow-lg p-8 md:p-12 text-center max-w-4xl mx-auto">
                  <div
                     class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center mb-6">
                     <i
                        class="ri-double-quotes-l text-[var(--primary)] text-5xl"></i>
                  </div>
                  <p
                     class="text-lg md:text-xl text-muted leading-relaxed mb-8">
                     RUNVAN's commitment to volunteerism and sustainable
                     development has strengthened local communities and
                     inspired collaborative action.
                  </p>
                  <img
                     src="https://randomuser.me/api/portraits/men/32.jpg"
                     class="w-20 h-20 rounded-full mx-auto object-cover mb-4">
                  <h5>
                     Jane Smith
                  </h5>
                  <span class="text-[var(--primary)] text-sm">
                     Development Partner
                  </span>
               </div>
            </div>
         </div>
         <!-- Pagination -->
         <div class="swiper-pagination mt-8"></div>
      </div>
   </div>
</section>
<section class="bg-white overflow-hidden">
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-4">
            <i class="ri-award-line"></i>
            Recognition & Certifications
         </span>
         <h2>
            Trusted & Recognized
         </h2>
         <p>
            RUNVAN continues to strengthen its credibility through national
            and international affiliations, certifications, and recognition
            for community service and volunteer engagement.
         </p>
      </div>
      <div
         class="swiper certificationSwiper"
         data-aos="fade-up"
         data-aos-delay="200">
         <div class="swiper-wrapper">
            <!-- Card -->
            <div class="swiper-slide">
               <div
                  class="bg-white border border-slate-200 rounded-[10px] p-8 text-center hover:shadow-lg transition-all duration-300">
                  <div
                     class="w-20 h-20 mx-auto mb-6 rounded-full bg-primary/10 flex items-center justify-center">
                     <i class="ri-award-line text-4xl text-[var(--primary)]"></i>
                  </div>
                  <h4 class="mb-3">
                     National Recognition
                  </h4>
                  <p class="text-muted">
                     Honored for outstanding contribution to volunteerism
                     and community development initiatives.
                  </p>
               </div>
            </div>
            <!-- Card -->
            <div class="swiper-slide">
               <div
                  class="bg-white border border-slate-200 rounded-[10px] p-8 text-center hover:shadow-lg transition-all duration-300">
                  <div
                     class="w-20 h-20 mx-auto mb-6 rounded-full bg-primary/10 flex items-center justify-center">
                     <i class="ri-global-line text-4xl text-[var(--primary)]"></i>
                  </div>
                  <h4 class="mb-3">
                     International Affiliation
                  </h4>
                  <p class="text-muted">
                     Connected with global volunteer networks and
                     development partners.
                  </p>
               </div>
            </div>
            <!-- Card -->
            <div class="swiper-slide">
               <div
                  class="bg-white border border-slate-200 rounded-[10px] p-8 text-center hover:shadow-lg transition-all duration-300">
                  <div
                     class="w-20 h-20 mx-auto mb-6 rounded-full bg-primary/10 flex items-center justify-center">
                     <i class="ri-verified-badge-line text-4xl text-[var(--primary)]"></i>
                  </div>
                  <h4 class="mb-3">
                     Registered Organization
                  </h4>
                  <p class="text-muted">
                     Officially registered and operating under recognized
                     organizational standards.
                  </p>
               </div>
            </div>
            <!-- Card -->
            <div class="swiper-slide">
               <div
                  class="bg-white border border-slate-200 rounded-[10px] p-8 text-center hover:shadow-lg transition-all duration-300">
                  <div
                     class="w-20 h-20 mx-auto mb-6 rounded-full bg-primary/10 flex items-center justify-center">
                     <i class="ri-medal-line text-4xl text-[var(--primary)]"></i>
                  </div>
                  <h4 class="mb-3">
                     Excellence Award
                  </h4>
                  <p class="text-muted">
                     Recognized for impactful volunteer engagement and
                     sustainable development efforts.
                  </p>
               </div>
            </div>
         </div>
         <!-- <div
            class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 items-center opacity-70">
            <img src="./assets/images/logo.jpg" alt="" class="h-16 mx-auto grayscale hover:grayscale-0 transition duration-300">
            <img src="./assets/images/logo.jpg" alt="" class="h-16 mx-auto grayscale hover:grayscale-0 transition duration-300">
            <img src="./assets/images/logo.jpg" alt="" class="h-16 mx-auto grayscale hover:grayscale-0 transition duration-300">
            <img src="./assets/images/logo.jpg" alt="" class="h-16 mx-auto grayscale hover:grayscale-0 transition duration-300">
         </div>
      </div> -->
      </div>
</section>
<section class="section-light">
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-4">
            <i class="ri-newspaper-line"></i>
            Publications & Updates
         </span>
         <h2>
            Latest News & Publications
         </h2>
         <p>
            Stay updated with our reports, success stories, events,
            newsletters, and community initiatives.
         </p>
      </div>
      <div class="grid lg:grid-cols-2 gap-8 mt-16">
         <!-- Featured Post -->
         <div
            class="group bg-white rounded-[10px] overflow-hidden shadow-md hover:shadow-lg transition duration-300"
            data-aos="fade-right">
            <div class="overflow-hidden">
               <img
                  src="./assets/images/blog-featured.png"
                  alt=""
                  class="w-full h-[350px] object-cover group-hover:scale-105 transition duration-500">
            </div>
            <div class="p-8">
               <span
                  class="inline-block px-3 py-1 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
                  Annual Report
               </span>
               <h3 class="mb-4">
                  RUNVAN Annual Impact Report 2025
               </h3>
               <p class="text-muted mb-6">
                  Discover achievements, volunteer contributions,
                  partnerships, and community impact highlights from the
                  past year.
               </p>
               <a href="./publication-details.php"
                  class="font-semibold text-[var(--primary)] inline-flex items-center gap-2">
                  Read More
                  <i class="ri-arrow-right-line"></i>
               </a>
            </div>
         </div>
         <!-- Side Posts -->
         <div
            class="space-y-6"
            data-aos="fade-left">
            <!-- Post -->
            <div
               class="bg-white rounded-[10px] shadow-md hover:shadow-lg transition duration-300 p-5 flex gap-5">
               <img
                  src="./assets/images/blog1.png"
                  class="w-28 h-28 rounded-lg object-cover">
               <div>
                  <span class="text-[var(--primary)] text-sm">
                     Newsletter
                  </span>
                  <h5 class="mt-2 mb-2">
                     Quarterly Volunteer Newsletter
                  </h5>
                  <a href="./publication-details.php" class="text-[var(--primary)] text-sm">
                     Read Article →
                  </a>
               </div>
            </div>
            <!-- Post -->
            <div
               class="bg-white rounded-[10px] shadow-md hover:shadow-lg transition duration-300 p-5 flex gap-5">
               <img
                  src="./assets/images/blog1.png"
                  class="w-28 h-28 rounded-lg object-cover">
               <div>
                  <span class="text-[var(--primary)] text-sm">
                     Event Update
                  </span>
                  <h5 class="mt-2 mb-2">
                     National Volunteer Gathering
                  </h5>
                  <a href="./publication-details.php" class="text-[var(--primary)] text-sm">
                     Read Article →
                  </a>
               </div>
            </div>
            <!-- Post -->
            <div
               class="bg-white rounded-[10px] shadow-md hover:shadow-lg transition duration-300 p-5 flex gap-5">
               <img
                  src="./assets/images/blog1.png"
                  class="w-28 h-28 rounded-lg object-cover">
               <div>
                  <span class="text-[var(--primary)] text-sm">
                     Success Story
                  </span>
                  <h5 class="mt-2 mb-2">
                     Empowering Communities Through Volunteerism
                  </h5>
                  <a href="./publication-details.php" class="text-[var(--primary)] text-sm">
                     Read Article →
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- CTA -->
      <div
         class="text-center mt-14"
         data-aos="fade-up">
         <a href="./publications.php"
            class="btn btn-primary">
            View All Publications
         </a>
      </div>
   </div>
</section>
<section class="bg-white overflow-hidden">
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-[var(--primary)] text-sm font-semibold mb-4">
            <i class="ri-gallery-line"></i>
            Gallery
         </span>
         <h2>
            Moments That Inspire Change
         </h2>
         <p>
            Explore highlights from our volunteer activities, community
            programs, workshops, and events across Nepal.
         </p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
         <!-- Large Image -->
         <div
            class="md:col-span-2 md:row-span-2 overflow-hidden rounded-[10px] group relative"
            data-aos="zoom-in">
            <a
               href="./assets/images/program-main.png"
               class="gallery-popup block h-full">
               <img
                  src="./assets/images/program-main.png"
                  alt=""
                  class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
               <!-- Overlay -->
               <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300">
                  <!-- Eye Icon -->
                  <div class="absolute inset-0 flex items-center justify-center">
                     <div class="w-12 h-12 rounded-full bg-white text-primary flex items-center justify-center">
                        <i class="ri-eye-line text-xl"></i>
                     </div>
                  </div>

                  <!-- Gradient -->
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent">
                     <!-- Text -->
                     <div class="absolute bottom-5 left-5 right-5">
                        <h5 class="text-white mb-1">
                           Volunteer Activities
                        </h5>
                        <p class="text-white/80 text-sm">
                           Community Development & Engagement Program
                        </p>
                     </div>
                  </div>
               </div>
            </a>
         </div>

         <!-- Image 2 -->
         <div
            class="gallery-item group"
            data-aos="zoom-in"
            data-aos-delay="100">
            <a
               href="./assets/images/about-main.png"
               class="gallery-popup relative block overflow-hidden rounded-[10px]">
               <img
                  src="./assets/images/about-main.png"
                  alt="Community Outreach"
                  class="w-full h-64 object-cover transition duration-700 group-hover:scale-105">

                  <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300">
                  <div class="absolute inset-0 flex items-center justify-center">
                     <div class="w-12 h-12 rounded-full bg-white text-primary flex items-center justify-center">
                        <i class="ri-eye-line text-xl"></i>
                     </div>
                  </div>
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                     <div class="absolute bottom-5 left-5 right-5">
                        <h5 class="text-white mb-1">
                           Community Outreach
                        </h5>
                        <p class="text-white/80 text-sm">
                           Local Community Engagement
                        </p>
                     </div>
                  </div>
               </div>
            </a>
         </div>

         <!-- Image 3 -->
         <div
            class="gallery-item group"
            data-aos="zoom-in"
            data-aos-delay="200">
            <a
               href="./assets/images/blog-featured.png"
               class="gallery-popup relative block overflow-hidden rounded-[10px]">
               <img
                  src="./assets/images/blog-featured.png"
                  alt="Training Workshop"
                  class="w-full h-64 object-cover transition duration-700 group-hover:scale-105">
               <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300">
                  <div class="absolute inset-0 flex items-center justify-center">
                     <div class="w-12 h-12 rounded-full bg-white text-primary flex items-center justify-center">
                        <i class="ri-eye-line text-xl"></i>
                     </div>
                  </div>
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                     <div class="absolute bottom-5 left-5 right-5">
                        <h5 class="text-white mb-1">
                           Training Workshop
                        </h5>
                        <p class="text-white/80 text-sm">
                           Capacity Building Session
                        </p>
                     </div>
                  </div>
               </div>
            </a>
         </div>

         <!-- Image 4 -->
         <div
            class="gallery-item group"
            data-aos="zoom-in"
            data-aos-delay="300">
            <a
               href="./assets/images/blog1.png"
               class="gallery-popup relative block overflow-hidden rounded-[10px]">
               <img
                  src="./assets/images/blog1.png"
                  alt="Leadership Program"
                  class="w-full h-64 object-cover transition duration-700 group-hover:scale-105">
               <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300">
                  <div class="absolute inset-0 flex items-center justify-center">
                     <div class="w-12 h-12 rounded-full bg-white text-primary flex items-center justify-center">
                        <i class="ri-eye-line text-xl"></i>
                     </div>
                  </div>
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                     <div class="absolute bottom-5 left-5 right-5">
                        <h5 class="text-white mb-1">
                           Leadership Development
                        </h5>
                        <p class="text-white/80 text-sm">
                           Volunteer Leadership Training
                        </p>
                     </div>
                  </div>
               </div>
            </a>
         </div>

         <!-- Image 5 -->
         <div
            class="gallery-item group"
            data-aos="zoom-in"
            data-aos-delay="400">
            <a
               href="./assets/images/hero-1.png"
               class="gallery-popup relative block overflow-hidden rounded-[10px]">
               <img
                  src="./assets/images/hero-1.png"
                  alt="National Event"
                  class="w-full h-64 object-cover transition duration-700 group-hover:scale-105">

               <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300">
                  <div class="absolute inset-0 flex items-center justify-center">
                     <div class="w-12 h-12 rounded-full bg-white text-primary flex items-center justify-center">
                        <i class="ri-eye-line text-xl"></i>
                     </div>
                  </div>

                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                     <div class="absolute bottom-5 left-5 right-5">
                        <h5 class="text-white mb-1">
                           National Volunteer Event
                        </h5>
                        <p class="text-white/80 text-sm">
                           Collaboration & Networking
                        </p>
                     </div>
                  </div>
               </div>
            </a>
         </div>
      </div>
      <div
         class="text-center mt-14"
         data-aos="fade-up">
         <a href="./gallery.php"
            class="btn btn-primary">
            View Full Gallery
         </a>
      </div>
   </div>
</section>
<!-- <section class="relative overflow-hidden">
   <div
      class="absolute inset-0 bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)]">
   </div>
   <div
      class="absolute -top-20 -left-20 w-72 h-72 bg-white/10 rounded-full blur-3xl">
   </div>
   <div
      class="absolute -bottom-20 -right-20 w-72 h-72 bg-white/10 rounded-full blur-3xl">
   </div>
   <div class="container relative z-10">
      <div
         class="max-w-4xl mx-auto text-center text-white"
         data-aos="zoom-in">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/15 text-white text-sm font-medium mb-6">
            <i class="ri-heart-line"></i>
            Join Our Mission
         </span>
         <h2 class="text-white mb-6">
            Together We Can Create Lasting Change
         </h2>
         <p
            class="text-white/80 text-lg leading-relaxed max-w-3xl mx-auto mb-10">
            Become part of a growing network of returned UN volunteers,
            development professionals, and change-makers committed to
            strengthening communities across Nepal.
         </p>
         <div
            class="flex flex-wrap justify-center gap-4">
            <a href="#"
               class="bg-white text-[var(--primary)] px-8 py-4 rounded-[10px] font-semibold hover:-translate-y-1 transition-all duration-300">
               Become a Member
            </a>
            <a href="#"
               class="border border-white/30 text-white px-8 py-4 rounded-[10px] font-semibold hover:bg-white/10 transition-all duration-300">
               Partner With Us
            </a>
            <a href="./contact.php"
               class="border border-white/30 text-white px-8 py-4 rounded-[10px] font-semibold hover:bg-white/10 transition-all duration-300">
               Contact Us
            </a>
         </div>
         <div
            class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 text-center">
            <div>
               <h3 class="text-white">500+</h3>
               <p class="text-white/70">Volunteers</p>
            </div>
            <div>
               <h3 class="text-white">120+</h3>
               <p class="text-white/70">Programs</p>
            </div>
            <div>
               <h3 class="text-white">50+</h3>
               <p class="text-white/70">Partners</p>
            </div>
            <div>
               <h3 class="text-white">25+</h3>
               <p class="text-white/70">Districts</p>
            </div>
         </div>
      </div>
   </div>
</section> -->

<?php
include './includes/footer.php';
?>