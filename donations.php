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
                    Donations
                </span>
            </nav>
            <h1
                class="text-white mb-6"
                data-aos="fade-up"
                data-aos-delay="100">
                Support Volunteerism & Community Development
            </h1>
            <p
                class="text-lg text-white/80 max-w-2xl"
                data-aos="fade-up"
                data-aos-delay="200">
                Your contribution helps strengthen volunteer initiatives,
                community engagement, and sustainable development programs
                across Nepal.
            </p>
        </div>
    </div>
</section>

<section class="section-light">
    <div class="container">
        <div
            class="bg-white rounded-[10px] border border-[var(--border)] overflow-hidden">
            <div class="grid lg:grid-cols-2">
                <!-- Content -->
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <span
                        class="inline-flex items-center gap-2 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-2 w-fit">
                        <i class="ri-qr-code-line"></i>
                        Donate Now
                    </span>
                    <h2 class="mb-5">
                        Make a Contribution
                    </h2>
                    <p class="text-muted mb-6">
                        Scan the QR code using your preferred banking or
                        digital payment application to support RUNVAN's
                        volunteer and development initiatives.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <i class="ri-shield-check-line text-primary"></i>
                            Secure & transparent donations
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="ri-heart-line text-primary"></i>
                            Support community initiatives
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="ri-team-line text-primary"></i>
                            Strengthen volunteer programs
                        </div>
                    </div>
                </div>
                <!-- QR -->
                <div
                    class="bg-[var(--bg-light)] flex items-center justify-center p-10">
                    <div
                        class="bg-white p-6 rounded-[10px] shadow-sm border border-[var(--border)]">
                        <img
                            src="./assets/images/qr.webp"
                            alt="Donation QR"
                            class="w-64 h-64 object-contain">
                    </div>
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
                <i class="ri-hand-heart-line"></i>
                Transparency
            </span>
            <h2>
                Recent Donations
            </h2>
            <p>
                We are grateful for the support received from organizations,
                institutions, and partners who contribute to our mission.
            </p>
        </div>
        <div
            class="bg-white rounded-[10px] border border-[var(--border)] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[700px]">
                    <thead class="bg-[var(--bg-light)]">
                        <tr>
                            <th class="text-left p-5 font-semibold">
                                Organization
                            </th>
                            <th class="text-left p-5 font-semibold">
                                Donation Amount
                            </th>
                            <th class="text-left p-5 font-semibold">
                                Purpose
                            </th>
                            <th class="text-left p-5 font-semibold">
                                Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-[var(--border)]">
                            <td class="p-5">
                                United Nations Volunteers
                            </td>
                            <td class="p-5">
                                NPR 500,000
                            </td>
                            <td class="p-5">
                                Volunteer Capacity Building Program
                            </td>
                            <td class="p-5">
                                Jul 2026
                            </td>
                        </tr>
                        <tr class="border-t border-[var(--border)]">
                            <td class="p-5">
                                ABC Development Foundation
                            </td>
                            <td class="p-5">
                                NPR 250,000
                            </td>
                            <td class="p-5">
                                Community Awareness Campaign
                            </td>
                            <td class="p-5">
                                Jun 2026
                            </td>
                        </tr>
                        <tr class="border-t border-[var(--border)]">
                            <td class="p-5">
                                XYZ Social Initiative
                            </td>
                            <td class="p-5">
                                NPR 150,000
                            </td>
                            <td class="p-5">
                                Volunteer Training Workshop
                            </td>
                            <td class="p-5">
                                May 2026
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php
include './includes/footer.php';
?>