<div
    id="teamProfileModal"
    class="fixed inset-0 bg-black/60 z-[9999] hidden items-center justify-center p-4 transition-all duration-300">

    <div
        class="bg-white
      rounded-[10px]
      w-full
      max-w-4xl
  
      overflow-y-auto
      max-h-[calc(95vh-240px)]
      lg:max-h-[90vh]
      overflow-hidden
      relative">
        <button
            id="closeTeamModal"
            class="absolute top-3 right-3 sm:top-4 sm:right-4 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-white shadow-md flex items-center justify-center text-gray-500 hover:bg-[var(--primary)] hover:text-white z-20">
            <i class="ri-close-line"></i>
        </button>
        <div class="grid
         grid-cols-1
         lg:grid-cols-[350px_1fr]
         h-full">
            <div class="bg-[var(--bg-light)]">
                <img
                    id="modalTeamImage"
                    src=""
                    alt="Ram Sharma" loading="lazy"
                    class="w-full
               h-60
               sm:h-72
               md:h-80
               lg:h-full
               object-cover">
            </div>
            <div class="p-5
            sm:p-6
            lg:p-8
            overflow-y-auto">
                <span
                    id="modalTeamPosition"
                    class="inline-flex py-1 rounded-full bg-primary/10 text-[var(--primary)] text-sm font-medium mb-4">
                </span>
                <h3
                    id="modalTeamName"
                    class="mb-3
               text-2xl
               sm:text-3xl">
                </h3>
                <p
                    id="modalTeamDescription"
                    class="text-muted
               text-sm
               sm:text-base
               leading-relaxed
               mb-5
               sm:mb-6">
                </p>
                <div class=" space-y-3
               sm:space-y-4
               mb-8
               sm:mb-10">
                    <div class="flex items-center gap-3">
                        <i class="ri-mail-line text-[var(--primary)]"></i>
                        <span id="modalTeamEmail"></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="ri-linkedin-line text-[var(--primary)]"></i>
                        <a
                            id="modalTeamLinkedin"
                            href="#"
                            target="_blank"
                            class="text-[var(--primary)]">
                            LinkedIn Profile
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>