<section 
    class="relative min-h-screen bg-cover bg-center bg-no-repeat" 
    style="background-image: url('{{ asset('images/prx-bg-image.png') }}');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/20"></div>

    <!-- Main Content -->
    <div class="relative z-10 max-w-7xl mx-auto p-6 grid grid-cols-1 lg:grid-cols-4 gap-6 text-yellow-100">

        <!-- Left Column -->
        <aside class="space-y-6">
            <!-- Login Box -->
          @livewire('game_auth.login')

            <!-- News & Events Panel -->
                <div class="card-corner relative">
                    <!-- Header -->
                    <div class="panel-header">
                        News & Events
                    </div>
                    <!-- Body -->
                    <div class="panel-body space-y-4">
                        <div>
                            <h3 class="panel-subtitle">About Us</h3>
                            <p class="panel-meta">Published by January 16th</p>
                            <p class="panel-text">Lorem ipsum dolor sit amet...</p>
                            <a href="#" class="panel-link">Read More</a>
                        </div>
                        <div>
                            <p class="panel-text">Lorami ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <a href="#" class="panel-link">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links Panel -->
                <div class="card-corner relative">
                    <button class="quick-link-btn">QUICK LINKS <span>&gt;</span></button>
                    <button class="quick-link-btn">REGISTRATION <span>&gt;</span></button>
                    <button class="quick-link-btn">DOWNLOAD <span>&gt;</span></button>
                    <button class="quick-link-btn">VOTE FOR POINTS <span>&gt;</span></button>
                    <button class="quick-link-btn">REVIEWS <span>&gt;</span></button>
                </div>
        </aside>

        <!-- Center Content -->
        <main class="lg:col-span-2 space-y-6">
            {{-- <div class="flex flex-col items-center text-center">
                <img src="{{ asset('images/prx-new-logo.png') }}" alt="PRX Ragnarok Online" class="w-150">
                <h1 class="text-3xl font-bold mt-4">PRX Ragnarok Online</h1>
            </div> --}}

            <div class="lg:col-span-2 space-y-10"> <!-- increased space-y -->
                <!-- Logo Section -->
                <div class="relative flex flex-col items-center text-center mt-10 mb-10">
                    <!-- Radial overlay -->
                    <div class="absolute w-[500px] h-[500px] bg-gradient-radial from-black/40 via-transparent to-transparent rounded-full blur-2xl"></div>

                    <!-- Rune magic circle -->
                    {{-- <div class="absolute w-[400px] h-[400px] bg-[url('/images/rune-circle.png')] bg-contain bg-no-repeat opacity-20"></div> --}}

                    <img src="{{ asset('images/prx-new-logo.png') }}" alt="PRX Ragnarok Online" class="w-120 relative z-10">
                    {{-- <h1 class="text-3xl font-bold mt-4 ragna-title relative z-10">PRX Ragnarok Online</h1> --}}
            </div>


            <!-- About & Event -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="card-corner">
                    <h2 class="text-xl font-bold text-[#D1A13A] mb-2">About Us</h2>
                    <p class="text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <a href="#" class="text-[#FFD700] hover:underline text-sm">Read More</a>
                </div>
                <div class="card-corner">
                    <h2 class="text-xl font-bold text-[#D1A13A] mb-2">Latest Event</h2>
                    <p class="text-sm mt-2">Exciting events await you, check out our schedule!</p>
                    <a href="#" class="text-[#FFD700] hover:underline text-sm">Read More</a>
                </div>
            </div>
        </main>

        <!-- Right Sidebar -->
        <aside class="space-y-6">
            <!-- Download -->
            <div class="card-corner text-center">
                <img src="{{ asset('images/prx-mascot.png') }}" alt="Mascot" class="mx-auto mb-2 w-24">
                <button class="w-full btn-corner">DOWNLOAD NOW</button>
            </div>

            <!-- War of Emperium -->
            <div class="card-corner">
                <h2 class="font-bold mb-2 text-[#D1A13A]">War of Emperium</h2>
                <p class="mb-2">Castle Name</p>
                <button class="w-full btn-corner">SCHEDULE</button>
            </div>

            <!-- Rankings -->
            <div class="card-corner text-center">
                <h2 class="font-bold mb-2 text-[#D1A13A]">Rankings</h2>
                <p class="mb-2">Top WOE Player</p>
                <button class="w-full btn-corner">VIEW</button>
            </div>
        </aside>
    </div>
</section>
