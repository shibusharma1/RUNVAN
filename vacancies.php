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
                    Career Opportunities
                </span>
            </nav>
            <h1
                class="text-white mb-6"
                data-aos="fade-up"
                data-aos-delay="100">
                Join Our Team
            </h1>
            <p
                class="text-lg text-white/80 max-w-2xl"
                data-aos="fade-up"
                data-aos-delay="200">
                Explore opportunities to contribute your skills, experience,
                and passion towards volunteerism, community development,
                and sustainable impact.
            </p>
        </div>
    </div>
</section>

<section class="section-light">
    <div class="container">
        <div class="section-title">
            <span
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
                <i class="ri-briefcase-4-line"></i>
                Open Positions
            </span>
            <h2>
                Current Vacancies
            </h2>
            <p>
                Explore current opportunities available within RUNVAN.
            </p>
        </div>
        <div class="space-y-6">
            <!-- Vacancy -->
            <div class="bg-white rounded-[10px] border border-[var(--border)] p-8 shadow-sm">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <div>
                        <h4 class="mb-3">
                            Program Coordinator
                        </h4>
                        <div class="flex flex-wrap gap-3 text-sm">
                            <span class="px-3 py-1 rounded-full bg-primary/10 text-primary">
                                Full Time
                            </span>
                            <span class="px-3 py-1 rounded-full bg-slate-100">
                                Kathmandu, Nepal
                            </span>
                            <span class="px-3 py-1 rounded-full bg-slate-100">
                                Application Deadline: 15 Aug 2026
                            </span>
                        </div>
                        <p class="text-muted mt-4">
                            Coordinate volunteer programs, stakeholder engagement,
                            and project implementation activities.
                        </p>
                    </div>
                    <a href="#"
                        class="btn btn-primary shrink-0">
                        Apply Now
                    </a>
                </div>
            </div>
            <!-- Vacancy -->
            <div class="bg-white rounded-[10px] border border-[var(--border)] p-8 shadow-sm">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <div>
                        <h4 class="mb-3">
                            Communications Officer
                        </h4>
                        <div class="flex flex-wrap gap-3 text-sm">
                            <span class="px-3 py-1 rounded-full bg-primary/10 text-primary">
                                Contract
                            </span>
                            <span class="px-3 py-1 rounded-full bg-slate-100">
                                Hybrid
                            </span>
                            <span class="px-3 py-1 rounded-full bg-slate-100">
                                Application Deadline: 20 Aug 2026
                            </span>
                        </div>
                        <p class="text-muted mt-4">
                            Support communication, content development,
                            media outreach, and visibility initiatives.
                        </p>
                    </div>
                    <a href="#"
                        class="btn btn-primary shrink-0">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="section-title">
            <span
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
                <i class="ri-file-user-line"></i>
                Application Form
            </span>
            <h2>
                Apply for a Position
            </h2>
            <p>
                Complete the form below and upload the required documents.
                Our team will review your application and contact shortlisted candidates.
            </p>
        </div>
        <div class="max-w-5xl mx-auto">
            <form class="bg-[var(--bg-light)] rounded-[10px] p-8 md:p-10">
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Full Name -->
                    <div>
                        <label class="block mb-2 font-medium">
                            Full Name *
                        </label>
                        <input
                            type="text"
                            class="w-full border border-[var(--border)] rounded-[10px] px-4 py-3 focus:outline-none focus:border-[var(--primary)]"
                            placeholder="Enter your full name">
                    </div>
                    <!-- Email -->
                    <div>
                        <label class="block mb-2 font-medium">
                            Email Address *
                        </label>
                        <input
                            type="email"
                            class="w-full border border-[var(--border)] rounded-[10px] px-4 py-3 focus:outline-none focus:border-[var(--primary)]"
                            placeholder="Enter your email">
                    </div>
                    <!-- Phone -->
                    <div>
                        <label class="block mb-2 font-medium">
                            Phone Number *
                        </label>
                        <input
                            type="text"
                            class="w-full border border-[var(--border)] rounded-[10px] px-4 py-3 focus:outline-none focus:border-[var(--primary)]"
                            placeholder="Enter phone number">
                    </div>
                    <!-- Vacancy -->
                    <div>
                        <label class="block mb-2 font-medium">
                            Position Applying For *
                        </label>
                        <select
                            class="w-full border border-[var(--border)] rounded-[10px] px-4 py-3 focus:outline-none focus:border-[var(--primary)]">
                            <option>Select Position</option>
                            <option>Program Coordinator</option>
                            <option>Communications Officer</option>
                            <option>Project Officer</option>
                        </select>
                    </div>
                </div>
                <!-- Address -->
                <div class="mt-6">
                    <label class="block mb-2 font-medium">
                        Address
                    </label>
                    <input
                        type="text"
                        class="w-full border border-[var(--border)] rounded-[10px] px-4 py-3 focus:outline-none focus:border-[var(--primary)]"
                        placeholder="Enter your address">
                </div>
                <!-- Cover Letter -->
                <div class="mt-6">
                    <label class="block mb-2 font-medium">
                        Cover Letter / Motivation
                    </label>
                    <textarea
                        rows="6"
                        class="w-full border border-[var(--border)] rounded-[10px] px-4 py-3 focus:outline-none focus:border-[var(--primary)]"
                        placeholder="Tell us why you would like to join RUNVAN"></textarea>
                </div>
                <!-- Resume Upload -->
                <div class="mt-6">
                    <label class="block mb-2 font-medium">
                        Upload Resume/CV *
                    </label>
                    <input
                        type="file"
                        class="w-full border border-[var(--border)] rounded-[10px] px-4 py-3">
                </div>
                <!-- Cover Letter Upload -->
                <div class="mt-6">
                    <label class="block mb-2 font-medium">
                        Supporting Documents
                    </label>
                    <input
                        type="file"
                        class="w-full border border-[var(--border)] rounded-[10px] px-4 py-3">
                </div>
                <!-- Submit -->
                <div class="mt-8">
                    <button
                        type="submit"
                        class="btn btn-primary">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="bg-white hidden">
    <div class="container">
        <div
            class="max-w-3xl mx-auto text-center bg-[var(--bg-light)] rounded-[10px] p-10">
            <div
                class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center mb-6">
                <i class="ri-briefcase-line text-4xl text-[var(--primary)]"></i>
            </div>
            <h3 class="mb-4">
                No Current Openings
            </h3>
            <p class="text-muted">
                There are currently no active vacancies. We encourage you
                to check back regularly or contact us to learn about future
                opportunities.
            </p>
        </div>
    </div>
</section>

<section class="section-light">
    <div class="container">
        <div class="section-title">
            <span
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
                <i class="ri-file-list-3-line"></i>
                Recruitment Process
            </span>
            <h2>
                How to Apply
            </h2>
            <p>
                Our recruitment process is designed to be transparent,
                fair, and accessible.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-[10px] p-8 text-center">
                <div class="w-14 h-14 mx-auto rounded-full bg-primary/10 flex items-center justify-center mb-5">
                    <span class="font-semibold text-primary">01</span>
                </div>
                <h5 class="mb-3">
                    Submit Application
                </h5>
                <p class="text-muted">
                    Complete the application form and submit required documents.
                </p>
            </div>
            <div class="bg-white rounded-[10px] p-8 text-center">
                <div class="w-14 h-14 mx-auto rounded-full bg-primary/10 flex items-center justify-center mb-5">
                    <span class="font-semibold text-primary">02</span>
                </div>
                <h5 class="mb-3">
                    Review Process
                </h5>
                <p class="text-muted">
                    Applications are reviewed based on qualifications and experience.
                </p>
            </div>
            <div class="bg-white rounded-[10px] p-8 text-center">
                <div class="w-14 h-14 mx-auto rounded-full bg-primary/10 flex items-center justify-center mb-5">
                    <span class="font-semibold text-primary">03</span>
                </div>
                <h5 class="mb-3">
                    Selection & Notification
                </h5>
                <p class="text-muted">
                    Shortlisted candidates are contacted for further assessment.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include './includes/footer.php';
?>