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
               Certifications
            </span>
         </nav>
         <h1
            class="text-white mb-6"
            data-aos="fade-up"
            data-aos-delay="100">
            Certifications &
            Recognitions
         </h1>
         <p
            class="text-lg text-white/80 max-w-2xl"
            data-aos="fade-up"
            data-aos-delay="200">
            Explore the certifications, memberships, affiliations,
            and recognitions that reflect RUNVAN's commitment to
            professional excellence, transparency, and impactful
            volunteer engagement.
         </p>
      </div>
   </div>
</section>

<section class="bg-white">
   <div class="container">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
         <!-- Image Side -->
         <div
            class="relative"
            data-aos="fade-right">
            <img
               src="./assets/images/certifications/overview.webp"
               alt="RUNVAN Certifications"
               class="rounded-[10px] shadow-lg w-full">
         </div>
         <!-- Content Side -->
         <div
            data-aos="fade-left">
            <span
               class="inline-flex items-center gap-2 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium">
               <i class="ri-shield-check-line"></i>
               Commitment to Excellence
            </span>
            <h2 class="mb-6">
               Recognized for Professional Standards and Impact
            </h2>
            <p class="text-muted leading-relaxed mb-5">
               RUNVAN continuously strengthens its contribution to
               volunteerism, leadership development, and community
               engagement through recognized memberships,
               certifications, affiliations, and institutional
               partnerships.
            </p>

            <!-- Highlights -->
            <div class="grid sm:grid-cols-2 gap-4">
               <div
                  class="flex gap-3 p-4 rounded-[10px] bg-[var(--bg-light)]">
                  <i
                     class="ri-checkbox-circle-fill text-[var(--primary)] text-xl mt-1">
                  </i>
                  <div>
                     <h6 class="mb-1">
                        Verified Organization
                     </h6>
                     <p class="text-sm text-muted">
                        Operates with recognized governance
                        standards.
                     </p>
                  </div>
               </div>
               <div
                  class="flex gap-3 p-4 rounded-[10px] bg-[var(--bg-light)]">
                  <i
                     class="ri-checkbox-circle-fill text-[var(--primary)] text-xl mt-1">
                  </i>
                  <div>
                     <h6 class="mb-1">
                        Volunteer Excellence
                     </h6>
                     <p class="text-sm text-muted">
                        Supporting professional volunteer
                        engagement.
                     </p>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</section>

<section class="bg-[var(--bg-light)]">
   <div class="container">
      <!-- Section Header -->
      <div
         class="max-w-3xl mx-auto text-center mb-12"
         data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-5">
            <i class="ri-folders-line"></i>
            Certification Categories
         </span>
         <h2 class="mb-5">
            Diverse Forms of Recognition
         </h2>
         <p class="text-muted leading-relaxed">
            Our achievements and affiliations span across professional
            certifications, institutional partnerships, memberships,
            and awards that strengthen our impact and credibility.
         </p>
      </div>
      <!-- Categories Grid -->
      <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
         <!-- Memberships -->
         <div
            class="group bg-white rounded-[10px] p-8 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2"
            data-aos="fade-up">
            <div
               class="w-16 h-16 rounded-[10px] bg-primary/10 text-[var(--primary)] flex items-center justify-center text-3xl mb-6 group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-500">
               <i class="ri-team-line"></i>
            </div>
            <h4 class="mb-3">
               Memberships
            </h4>
            <p class="text-muted leading-relaxed">
               Active participation in professional associations,
               volunteer networks, and development communities.
            </p>
         </div>
         <!-- Awards -->
         <div
            class="group bg-white rounded-[10px] p-8 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2"
            data-aos="fade-up"
            data-aos-delay="100">
            <div
               class="w-16 h-16 rounded-[10px] bg-primary/10 text-[var(--primary)] flex items-center justify-center text-3xl mb-6 group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-500">
               <i class="ri-award-line"></i>
            </div>
            <h4 class="mb-3">
               Awards
            </h4>
            <p class="text-muted leading-relaxed">
               Recognitions received for leadership, volunteer
               contributions, and community development initiatives.
            </p>
         </div>
         <!-- Certifications -->
         <div
            class="group bg-white rounded-[10px] p-8 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2"
            data-aos="fade-up"
            data-aos-delay="200">
            <div
               class="w-16 h-16 rounded-[10px] bg-primary/10 text-[var(--primary)] flex items-center justify-center text-3xl mb-6 group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-500">
               <i class="ri-shield-check-line"></i>
            </div>
            <h4 class="mb-3">
               Certifications
            </h4>
            <p class="text-muted leading-relaxed">
               Formal certifications reflecting organizational
               standards, compliance, and operational excellence.
            </p>
         </div>
         <!-- Partnerships -->
         <div
            class="group bg-white rounded-[10px] p-8 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2"
            data-aos="fade-up"
            data-aos-delay="300">
            <div
               class="w-16 h-16 rounded-[10px] bg-primary/10 text-[var(--primary)] flex items-center justify-center text-3xl mb-6 group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-500">
               <i class="ri-hand-heart-line"></i>
            </div>
            <h4 class="mb-3">
               Partnerships
            </h4>
            <p class="text-muted leading-relaxed">
               Strategic collaborations with institutions,
               development organizations, and stakeholder networks.
            </p>
         </div>
      </div>
   </div>
</section>

<section id="certifications">
   <div class="container">
      <!-- Section Header -->
      <div
         class="max-w-3xl mx-auto text-center mb-14"
         data-aos="fade-up">
         <span
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-5">
            <i class="ri-award-line"></i>
            Certifications & Recognitions
         </span>
         <h2 class="mb-5">
            Our Certifications and Affiliations
         </h2>
         <p class="text-muted">
            Explore the certifications, memberships, recognitions,
            and partnerships that strengthen RUNVAN's commitment
            to volunteerism and sustainable development.
         </p>
      </div>
      <!-- Filters -->
      <div
         class="flex flex-wrap justify-center gap-3 mb-14"
         data-aos="fade-up">
         <button
            class="cert-filter active-filter"
            data-filter="all">
            All
         </button>
         <button
            class="cert-filter"
            data-filter="certification">
            Certifications
         </button>
         <button
            class="cert-filter"
            data-filter="award">
            Awards
         </button>
         <button
            class="cert-filter"
            data-filter="membership">
            Memberships
         </button>
         <button
            class="cert-filter"
            data-filter="partnership">
            Partnerships
         </button>
      </div>
      <!-- Grid -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-3 gap-8"
         id="certificationGrid">
         <article
            class="certification-card certification"
            data-aos="fade-up">
            <div class="group bg-white rounded-[10px] overflow-hidden shadow-sm border border-border hover:shadow-xl transition-all duration-500">
               <!-- Image -->
               <div class="overflow-hidden">
                  <img
                     src="./assets/images/certifications/certificate-1.webp"
                     alt=""
                     class="w-full h-64 object-cover transition duration-700 group-hover:scale-110">
               </div>
               <!-- Content -->
               <div class="p-6">
                  <span
                     class="inline-flex py-1 rounded-full bg-primary/10 text-[var(--primary)] text-xs font-medium mb-2">
                     Certification
                  </span>
                  <h4 class="mb-3">
                     Organizational Excellence Certification
                  </h4>
                  <p class="text-sm text-muted mb-2">
                     Issued By: Development Standards Council
                  </p>
                  <p class="text-sm text-muted mb-4">
                     Issued: January 2026
                  </p>
                  <p class="text-muted text-sm leading-relaxed mb-5">
                     Recognition of organizational governance,
                     transparency, and volunteer management practices.
                  </p>
                  <button
                     class="view-certificate text-[var(--primary)] font-medium inline-flex items-center gap-2"
                     data-image="./assets/images/certifications/certificate-1.webp"
                     data-title="Organizational Excellence Certification"
                     data-category="Certification"
                     data-issuer="Development Standards Council"
                     data-date="January 2026"
                     data-number="CERT-001"
                     data-description="Recognition of organizational governance, transparency, and volunteer management practices."
                     data-pdf="./assets/images/certifications/certificate-1.webp">
                     View Certificate
                     <i class="ri-arrow-right-line"></i>
                  </button>
               </div>
            </div>
         </article>
      </div>
   </div>
</section>

<!-- Certificate Modal -->
<div
   id="certificateModal"
   class="fixed inset-0 z-[9999] hidden">
   <!-- Overlay -->
   <div
      class="absolute inset-0 bg-black/70 backdrop-blur-sm">
   </div>
   <!-- Modal -->
   <div
      class="absolute inset-0 flex items-center justify-center p-4">
      <div
         class="relative bg-white rounded-[10px] overflow-hidden shadow-2xl w-full max-w-5xl max-h-[90vh] animate-modal">
         <!-- Close -->
         <button
            id="closeCertificateModal"
            class="absolute top-5 right-5 z-20 w-10 h-10 rounded-[10px] bg-white shadow-md flex items-center  hover:bg-[var(--primary)] hover:text-white justify-center">
            <i class="ri-close-line text-xl"></i>
         </button>
         <div class="grid lg:grid-cols-2">
            <!-- Certificate Image -->
            <div class="bg-[var(--bg-light)] p-6">
               <img
                  id="modalCertificateImage"
                  src=""
                  alt=""
                  class="w-full rounded-[10px] shadow-md">
            </div>
            <!-- Certificate Details -->
            <div class="p-8 lg:p-10">
               <span
                  id="modalCategory"
                  class="inline-flex px-3 py-1 rounded-full bg-primary/10 text-[var(--primary)] text-sm mb-4">
                  Certification
               </span>
               <h3
                  id="modalTitle"
                  class="mb-4">
                  Certificate Title
               </h3>
               <p
                  id="modalDescription"
                  class="text-muted leading-relaxed mb-8">
                  Certificate description.
               </p>
               <div class="space-y-5">
                  <div>
                     <p class="text-sm text-muted mb-1">
                        Issued By
                     </p>
                     <h6 id="modalIssuer">
                        Organization Name
                     </h6>
                  </div>
                  <div>
                     <p class="text-sm text-muted mb-1">
                        Issue Date
                     </p>
                     <h6 id="modalDate">
                        January 2026
                     </h6>
                  </div>
                  <div>
                     <p class="text-sm text-muted mb-1">
                        Certificate Number
                     </p>
                     <h6 id="modalNumber">
                        CERT-001
                     </h6>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
<?php
include './includes/footer.php';
?>