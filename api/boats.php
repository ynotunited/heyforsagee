<?php
/**
 * HeyForsagee - Boat & Yacht Charters
 */
$pageTitle = "Maritime Excellence | HeyForsagee - Luxury Yacht Charters";
$metaDesc = "Experience ultimate privacy and luxury on the water. Private yacht and speed boat charters with full crew and catering options.";
$headerBg = "bg-noir/80 backdrop-blur-lg border-b border-white/5";
include '../includes/header.php';
?>

<main class="pt-24 lg:pt-32">
    <!-- Page Header -->
    <section class="py-12 px-6">
        <div class="max-w-7xl mx-auto space-y-4">
            <h2 class="text-brand uppercase tracking-widest text-sm font-semibold">Maritime Elite</h2>
            <h1 class="text-5xl lg:text-7xl font-serif">Command the Waters.</h1>
            <p class="text-white/40 max-w-2xl font-light">Experience the ultimate in private maritime luxury. From
                sunset cruises to high-stakes executive retreats on the water.</p>
        </div>
    </section>

    <!-- Fleet Grid -->
    <section class="py-16 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">

            <!-- Yacht 1: Prestige 520 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 lg:col-span-2">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="aspect-video lg:aspect-auto overflow-hidden">
                        <img src="assets/images/yacht.png" alt="Luxury Yacht"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            loading="lazy" decoding="async">
                    </div>
                    <div class="p-8 lg:p-16 space-y-6 flex flex-col justify-center">
                        <div class="space-y-2">
                            <span class="text-xs uppercase tracking-[0.3em] text-brand font-bold">The Flagship</span>
                            <h4 class="text-4xl lg:text-5xl font-serif italic">Prestige 520 Luxury Yacht</h4>
                        </div>
                        <p class="text-white/40 text-lg font-light leading-relaxed">
                            A masterpiece of maritime engineering. Featuring a spacious flybridge, 3 guest cabins, and a
                            professional crew to cater to your every need.
                        </p>
                        <div class="grid grid-cols-2 gap-8 border-y border-white/5 py-8">
                            <div>
                                <span
                                    class="block text-white/40 text-[10px] uppercase tracking-widest mb-1">Capacity</span>
                                <span class="text-sm uppercase font-bold text-brand">12 PAX Luxe</span>
                            </div>
                            <div>
                                <span
                                    class="block text-white/40 text-[10px] uppercase tracking-widest mb-1">Length</span>
                                <span class="text-sm uppercase font-bold text-brand">52 FT Elite</span>
                            </div>
                            <div>
                                <span
                                    class="block text-white/40 text-[10px] uppercase tracking-widest mb-1">Amenities</span>
                                <span class="text-sm uppercase font-bold text-brand">Full Wet Bar</span>
                            </div>
                            <div>
                                <span class="block text-white/40 text-[10px] uppercase tracking-widest mb-1">Rate</span>
                                <span class="text-sm uppercase font-bold text-brand">₦1.2m / HR</span>
                            </div>
                        </div>
                        <div class="pt-4">
                            <button class="btn-primary w-full lg:w-auto py-5 px-12 text-xs">Charter This Vessel
                                &rarr;</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boat 2: Executive Speedboat -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5">
                <div class="aspect-video overflow-hidden bg-onyx flex items-center justify-center relative">
                    <p class="text-white/10 italic font-serif">Maritime Image Pending</p>
                    <img src="assets/images/yacht.png"
                        class="absolute inset-0 w-full h-full object-cover opacity-10 filter blur-sm">
                </div>
                <div class="p-8 space-y-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Speed &
                                Protocol</span>
                            <h4 class="text-2xl font-serif">Executive Chase Boat</h4>
                        </div>
                        <div class="text-right">
                            <span class="text-lg font-bold">₦450k</span>
                            <span class="text-[10px] text-white/40 block uppercase">/ Hour</span>
                        </div>
                    </div>
                    <p class="text-white/40 text-sm font-light">Fast, efficient, and discreet. Ideal for quick island
                        transfers and executive security details on water.</p>
                    <button
                        class="w-full py-4 border border-white/10 text-[10px] uppercase tracking-[0.2em] font-bold hover:bg-white hover:text-noir transition-all duration-300">Reserve
                        Vessel</button>
                </div>
            </div>

            <!-- Boat 3: Sunset Pontoon -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5">
                <div class="aspect-video overflow-hidden bg-onyx flex items-center justify-center relative">
                    <p class="text-white/10 italic font-serif">Maritime Image Pending</p>
                    <img src="assets/images/yacht.png"
                        class="absolute inset-0 w-full h-full object-cover opacity-10 filter blur-sm">
                </div>
                <div class="p-8 space-y-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Leisure
                                /
                                Events</span>
                            <h4 class="text-2xl font-serif">Elite Party Pontoon</h4>
                        </div>
                        <div class="text-right">
                            <span class="text-lg font-bold">₦350k</span>
                            <span class="text-[10px] text-white/40 block uppercase">/ Hour</span>
                        </div>
                    </div>
                    <p class="text-white/40 text-sm font-light">Perfect for relaxed social gatherings. Featuring an
                        integrated sound system and lounging area.</p>
                    <button
                        class="w-full py-4 border border-white/10 text-[10px] uppercase tracking-[0.2em] font-bold hover:bg-white hover:text-noir transition-all duration-300">Reserve
                        Vessel</button>
                </div>
            </div>

        </div>
    </section>

    <!-- Charter Experiences -->
    <section class="py-24 px-6 bg-charcoal">
        <div class="max-w-7xl mx-auto text-center space-y-16">
            <div class="space-y-4">
                <h2 class="text-brand uppercase tracking-widest text-sm font-semibold">Charter Experiences</h2>
                <h3 class="text-4xl lg:text-7xl font-serif">Tailored to Your Vision.</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-12 glass border border-brand/10 hover:border-brand transition-colors space-y-6">
                    <h4 class="text-2xl font-serif italic text-brand">The Executive Retreat</h4>
                    <p class="text-sm text-white/50 leading-relaxed font-light">A floating boardroom for high-stakes
                        decision making. Complete with satellite internet and private catering.</p>
                </div>
                <div class="p-12 glass border border-brand/10 hover:border-brand transition-colors space-y-6">
                    <h4 class="text-2xl font-serif italic text-brand">Sunset Soireé</h4>
                    <p class="text-sm text-white/50 leading-relaxed font-light">Curated evening cruises with live music,
                        professional mixologists, and the finest Hors d'oeuvres.</p>
                </div>
                <div class="p-12 glass border border-brand/10 hover:border-brand transition-colors space-y-6">
                    <h4 class="text-2xl font-serif italic text-brand">Island Expedition</h4>
                    <p class="text-sm text-white/50 leading-relaxed font-light">Explore secluded beaches and private
                        islands with our specialized chase boats and expert guides.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
