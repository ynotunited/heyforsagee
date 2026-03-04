<?php
/**
 * HeyForsagee - Luxury Car & Boat Rental
 * Main Landing Page
 */
$pageTitle = "HeyForsagee | Drive Prestige. Sail Power. Arrive Different.";
$metaDesc = "The ultimate mobility solution for global leaders. Premium armored car rentals, private yacht charters, and VIP protocol services in Nigeria.";
include '../includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-noir">
        <!-- Cinematic Image Sequence (Canvas) -->
        <canvas id="hero-canvas"
            class="absolute inset-0 w-full h-full object-cover z-0 opacity-0 transition-opacity duration-1000"></canvas>
        <div class="absolute inset-0 bg-gradient-to-b from-noir/60 via-transparent to-noir/90 z-10"></div>

        <div class="relative z-20 text-center px-6 max-w-5xl mx-auto space-y-6">
            <p class="uppercase tracking-[0.4em] text-xs lg:text-sm text-brand-light animate-fade-in mb-4">Elite
                Chauffeur & Charter Services</p>
            <h1 class="text-5xl lg:text-8xl font-bold font-serif leading-tight animate-slide-up">
                Drive Prestige.<br>Sail Power.
            </h1>
            <p
                class="text-lg lg:text-xl text-white/70 font-light max-w-2xl mx-auto animate-slide-up [animation-delay:200ms]">
                The ultimate mobility solution for the world's most influential leaders, executives, and visionaries.
            </p>
            <div
                class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8 animate-slide-up [animation-delay:400ms]">
                <a href="#book" class="btn-primary w-full sm:w-auto">Book A Rental</a>
                <a href="cars.php" class="btn-outline w-full sm:w-auto">Explore Fleet</a>
            </div>

            <!-- Philanthropy Badge -->
            <div class="pt-16 animate-slide-up [animation-delay:600ms]">
                <a href="helpforsagee.php"
                    class="inline-flex items-center gap-4 px-6 py-3 border border-white/10 rounded-full bg-noir/50 backdrop-blur-md hover:bg-white/5 hover:border-brand/40 transition-all duration-300 group shadow-2xl">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-brand"></span>
                    </span>
                    <span
                        class="text-xs lg:text-sm text-white/80 font-light tracking-[0.15em] uppercase group-hover:text-white transition-colors flex items-center gap-2">
                        <span class="font-bold text-brand">% Profit</span>
                        <span class="opacity-80">From Rentals Go To</span>
                        <span
                            class="font-serif italic normal-case text-lg text-white ml-1 group-hover:text-brand transition-colors">HelpForsagee</span>
                    </span>
                    <svg class="w-4 h-4 text-brand/70 group-hover:text-brand group-hover:translate-x-1 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div
            class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 opacity-30 animate-bounce">
            <span class="uppercase text-[8px] tracking-[0.3em] font-semibold">Discovery</span>
            <div class="w-[1px] h-12 bg-gradient-to-b from-brand to-transparent"></div>
        </div>
    </section>

    <script>
        // Hero Image Sequence Logic
        const canvas = document.getElementById('hero-canvas');
        const context = canvas.getContext('2d');
        const frameCount = 80;
        const images = [];

        const getUrl = (index) => {
            const num = index.toString().padStart(3, '0');
            return `assets/images/toyota_land_cruiser_prado_motion/Toyota_land_cruiser_prado_motion_1df5196592_${num}.jpg`;
        };

        // Preload images
        let loadedCount = 0;
        for (let i = 0; i < frameCount; i++) {
            const img = new Image();
            img.src = getUrl(i);
            img.onload = () => {
                loadedCount++;
                if (loadedCount === frameCount) {
                    canvas.classList.remove('opacity-0');
                    startAnimation();
                }
            };
            images.push(img);
        }

        function resize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            render(0);
        }

        function render(index) {
            const img = images[index];
            if (!img) return;

            const canvasRatio = canvas.width / canvas.height;
            const imgRatio = img.width / img.height;
            let drawWidth, drawHeight, offsetX, offsetY;

            if (canvasRatio > imgRatio) {
                drawWidth = canvas.width;
                drawHeight = canvas.width / imgRatio;
                offsetX = 0;
                offsetY = (canvas.height - drawHeight) / 2;
            } else {
                drawWidth = canvas.height * imgRatio;
                drawHeight = canvas.height;
                offsetX = (canvas.width - drawWidth) / 2;
                offsetY = 0;
            }

            context.clearRect(0, 0, canvas.width, canvas.height);
            context.drawImage(img, offsetX, offsetY, drawWidth, drawHeight);
        }

        function startAnimation() {
            let frame = 0;
            function animate() {
                render(frame);
                frame = (frame + 1) % frameCount;
                setTimeout(() => requestAnimationFrame(animate), 50);
            }
            animate();
        }

        window.addEventListener('resize', resize);
        resize();
    </script>

    <!-- Section: Featured Fleet -->
    <section id="fleet" class="py-24 px-6 bg-charcoal">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-16 gap-6">
                <div class="space-y-4">
                    <h2 class="text-brand uppercase tracking-widest text-sm font-semibold">Featured Fleet</h2>
                    <h3 class="text-4xl lg:text-6xl font-serif">Engineered for Excellence.</h3>
                </div>
                <a href="cars.php"
                    class="text-brand border-b border-brand/30 pb-1 hover:border-brand transition-all uppercase text-xs tracking-widest font-bold">View
                    Full Fleet &rarr;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car Card 1 -->
                <div class="group relative overflow-hidden bg-noir border border-white/5 cursor-pointer"
                    onclick="openModal('Toyota Prado 2025', 'Hourly')">
                    <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                        <img src="assets/images/web-toyota-prado-2025.jpg" alt="Toyota Prado 2025"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500"
                            loading="lazy" decoding="async">
                    </div>
                    <div class="p-8 space-y-4 relative z-20">
                        <div class="flex justify-between items-start">
                            <div>
                                <span
                                    class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                    SUV</span>
                                <h4 class="text-xl font-serif">Toyota Prado 2025</h4>
                            </div>
                        </div>
                        <p class="text-white/40 text-sm font-light line-clamp-2 mt-4">Command the road with the latest
                            in refined performance and prestige styling, equipped for ultimate executive comfort.</p>
                        <button class="btn-primary w-full py-4 text-[10px] mt-4">Reserve This Vehicle</button>
                    </div>
                </div>

                <!-- Car Card 2 -->
                <div class="group relative overflow-hidden bg-noir border border-white/5 cursor-pointer"
                    onclick="openModal('Lexus GX460', 'Hourly')">
                    <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                        <img src="assets/images/web-LEXUS-GX460.jpg" alt="Lexus GX460"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500"
                            loading="lazy" decoding="async">
                    </div>
                    <div class="p-8 space-y-4 relative z-20">
                        <div class="flex justify-between items-start">
                            <div>
                                <span
                                    class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                    SUV</span>
                                <h4 class="text-xl font-serif">Lexus GX460</h4>
                            </div>
                        </div>
                        <p class="text-white/40 text-sm font-light line-clamp-2 mt-4">The ultimate blend of dynamic
                            elegance and formidable capability. Perfect for making a quiet but powerful statement.</p>
                        <button class="btn-primary w-full py-4 text-[10px] mt-4">Reserve This Vehicle</button>
                    </div>
                </div>

                <!-- Car Card 3 -->
                <div class="group relative overflow-hidden bg-noir border border-white/5 cursor-pointer"
                    onclick="openModal('Land Cruiser 2020', 'Hourly')">
                    <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                        <img src="assets/images/web-LANDCRUISER-2020.jpg" alt="Land Cruiser 2020"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500"
                            loading="lazy" decoding="async">
                    </div>
                    <div class="p-8 space-y-4 relative z-20">
                        <div class="flex justify-between items-start">
                            <div>
                                <span
                                    class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                    SUV</span>
                                <h4 class="text-xl font-serif">Land Cruiser 2020</h4>
                            </div>
                        </div>
                        <p class="text-white/40 text-sm font-light line-clamp-2 mt-4">The undisputed king of the fleet.
                            Trusted globally by VIPs and dignitaries for unmatched reliability and presence.</p>
                        <button class="btn-primary w-full py-4 text-[10px] mt-4">Reserve This Vehicle</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Services -->
    <section id="services" class="py-24 px-6 bg-noir relative overflow-hidden">
        <!-- Decorative Gradient -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-brand/5 blur-[120px] -z-10"></div>

        <div class="max-w-7xl mx-auto">
            <div class="text-center space-y-4 mb-20">
                <h2 class="text-brand uppercase tracking-widest text-sm font-semibold">Our Specialized Services</h2>
                <h3 class="text-4xl lg:text-7xl font-serif">More Than Just a Rental.</h3>
                <p class="text-white/40 max-w-2xl mx-auto font-light">Bespoke mobility solutions tailored for the elite.
                    We manage the details; you enjoy the journey.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1px bg-white/10 border border-white/10">
                <!-- Service Card 1 -->
                <div
                    class="bg-noir p-12 hover:bg-charcoal transition-colors group cursor-pointer border-b md:border-b-0 border-white/5 lg:border-r border-white/5">
                    <div
                        class="w-12 h-12 border border-brand/30 flex items-center justify-center mb-8 group-hover:bg-brand group-hover:text-noir transition-all duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-serif mb-4">Airport & Protocol</h4>
                    <p class="text-white/40 text-sm font-light leading-relaxed">VIP arrival and departure management.
                        Meet-and-greet services at the aircraft door.</p>
                </div>

                <!-- Service Card 2 -->
                <div
                    class="bg-noir p-12 hover:bg-charcoal transition-colors group cursor-pointer border-b md:border-b-0 border-white/5 lg:border-r border-white/5">
                    <div
                        class="w-12 h-12 border border-brand/30 flex items-center justify-center mb-8 group-hover:bg-brand group-hover:text-noir transition-all duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-serif mb-4">Convoy & Escort</h4>
                    <p class="text-white/40 text-sm font-light leading-relaxed">Highly trained security teams and
                        tactical vehicles for high-profile interstate movements.</p>
                </div>

                <!-- Service Card 3 -->
                <div
                    class="bg-noir p-12 hover:bg-charcoal transition-colors group cursor-pointer border-b md:border-b-0 border-white/5">
                    <div
                        class="w-12 h-12 border border-brand/30 flex items-center justify-center mb-8 group-hover:bg-brand group-hover:text-noir transition-all duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 019-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-serif mb-4">Mid-Night Special</h4>
                    <p class="text-white/40 text-sm font-light leading-relaxed">Discreet, late-night executive
                        transport. No questions asked, absolute privacy guaranteed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Who We Are -->
    <section id="who-we-are" class="py-24 px-6 bg-charcoal relative">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8 animate-fade-in">
                <h2 class="text-brand uppercase tracking-widest text-sm font-semibold">About Us</h2>
                <h3 class="text-4xl lg:text-7xl font-serif">Elegance, efficiency, and<br>exclusivity.</h3>
                <p class="text-white/60 text-lg leading-relaxed font-light">
                    HeyForsagee is Nigeria's foremost luxury mobility brand, redefining travel with premium car rentals,
                    VIP airport protocols, and exclusive concierge services. Every vehicle in our fleet is impeccably
                    maintained, and our professionally trained drivers and support staff deliver a service experience
                    worthy of royalty.
                </p>

                <div class="pt-4 space-y-6">
                    <div>
                        <h4 class="text-2xl font-serif text-white mb-2">Effortless Booking Experience</h4>
                        <p class="text-white/40 text-sm font-light leading-relaxed">Our seamless booking system is
                            designed for speed, simplicity, and security — so you can reserve your luxury ride with zero
                            hassle and full confidence.</p>
                    </div>
                    <div>
                        <h4 class="text-2xl font-serif text-white mb-2">Protocol Services</h4>
                        <p class="text-white/40 text-sm font-light leading-relaxed">From touchdown to takeoff, we handle
                            every step. Our VIP airport protocol ensures smooth pickups and drop-offs, fast-tracking you
                            through immigration, customs, and baggage claim. With discreet coordination and unmatched
                            efficiency, your travel experience stays seamless, private, and stress-free.</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-[4/5] overflow-hidden border border-white/10">
                    <img src="assets/images/forsagee.jpeg" alt="HeyForsagee Foundation"
                        class="w-full h-full object-cover">
                </div>
                <!-- Overlapping Decorative Box -->
                <div class="absolute -bottom-10 -left-10 w-48 h-48 border border-brand/20 -z-10 hidden lg:block"></div>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
