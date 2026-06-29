<?php
include './includes/header.php';
?>

<section class="relative pt-40 pb-24 bg-gradient-to-br from-primary to-primary-dark overflow-hidden">

    <div class="absolute inset-0 bg-black/10"></div>

    <div class="container relative z-10">

        <div class="max-w-3xl">

            <nav
                class="flex items-center gap-2 text-white/70 text-sm mb-6"
                data-aos="fade-up">

                <a href="/">Home</a>

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

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <div data-aos="fade-right">

                <img
                    src="assets/images/gallery-overview.jpg"
                    alt=""
                    class="w-full max-w-[500px] h-[350px] object-cover rounded-[10px]">

            </div>

            <div data-aos="fade-left">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-5">

                    <i class="ri-image-line"></i>

                    Visual Stories

                </span>

                <h2 class="mb-5">

                    Capturing Volunteerism in Action

                </h2>

                <p class="text-muted mb-6">

                    Through photographs, RUNVAN documents volunteer
                    engagement, community development initiatives,
                    knowledge sharing activities, and collaborative
                    efforts that contribute to positive social impact.

                </p>

                <ul class="space-y-4">

                    <li class="flex items-center gap-3">

                        <i class="ri-check-line text-[var(--primary)]"></i>

                        Volunteer Activities

                    </li>

                    <li class="flex items-center gap-3">

                        <i class="ri-check-line text-[var(--primary)]"></i>

                        Community Outreach Programs

                    </li>

                    <li class="flex items-center gap-3">

                        <i class="ri-check-line text-[var(--primary)]"></i>

                        Training & Workshops

                    </li>

                    <li class="flex items-center gap-3">

                        <i class="ri-check-line text-[var(--primary)]"></i>

                        Conferences & Events

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
                class="gallery-item break-inside-avoid"
                data-category="volunteer">

                <a
                    href="assets/images/gallery-1.jpg"
                    class="gallery-popup">

                    <img
                        src="assets/images/gallery-1.jpg"
                        alt=""
                        class="w-full rounded-[10px]">

                </a>

            </div>

            <!-- More Items -->

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