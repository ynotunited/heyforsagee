<?php
/**
 * HeyForsagee - HelpForSagee NGO Page
 * Dedicated page for philanthropy and social impact.
 */
$pageTitle = "HelpForSagee NGO | Social Impact by HeyForsagee";
$metaDesc = "Learn about HelpForSagee, the philanthropic arm of HeyForsagee dedicated to empowering communities and creating meaningful social impact across Nigeria.";
include '../includes/header.php';
?>

<main class="pt-32 pb-24">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Hero Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-24 animate-fade-in">
            <!-- Text Content -->
            <div class="order-2 lg:order-1 relative z-20">
                <span
                    class="bg-brand text-white text-xs font-bold uppercase tracking-widest py-1 px-3 rounded mb-6 inline-block">
                    NGO Initiative
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif leading-tight text-white mb-6">
                    Percentage of every rental<br>
                    <span class="text-brand italic">goes directly into community</span><br>
                    and humanitarian projects.
                </h1>
                <p class="text-white/70 text-lg leading-relaxed font-light">
                    HelpForsagee is the humanitarian heart of the Forsagee brand — a social impact initiative powered by
                    a percentage of proceeds from HeyForsagee. Our goal is simple: to give back by touching lives,
                    supporting vulnerable communities, and creating opportunities for people to thrive.
                </p>
            </div>

            <!-- Image Content -->
            <div
                class="order-1 lg:order-2 relative rounded-sm overflow-hidden h-[400px] lg:h-[600px] border border-white/10 shadow-2xl group">
                <div
                    class="absolute inset-0 bg-brand/10 z-10 p-8 flex flex-col justify-end lg:justify-center transition-all duration-500 group-hover:bg-transparent">
                </div>
                <img src="assets/images/ngo.jpeg" alt="HelpForsagee Community Impact"
                    class="absolute inset-0 w-full h-full object-cover grayscale mix-blend-overlay group-hover:grayscale-0 group-hover:mix-blend-normal transition-all duration-700">
            </div>
        </div>

        <!-- Mission Section -->
        <section class="mb-24 text-center max-w-3xl mx-auto">
            <h2 class="text-brand uppercase tracking-widest text-sm font-semibold mb-6">Our Mission</h2>
            <p
                class="text-2xl lg:text-3xl font-serif text-white leading-relaxed italic border-l-2 border-brand pl-6 md:pl-0 md:border-l-0 text-left md:text-center">
                “To turn luxury into lasting impact — ensuring that every ride booked with HeyForsagee contributes to
                real change in the lives of those who need it most.”
            </p>
        </section>

        <!-- What We Do Grid -->
        <section class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif text-white">What We Do</h2>
                <div class="w-16 h-1 bg-brand mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white/5 border border-white/10 p-8 hover:bg-white/10 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center mb-6 text-brand">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-2h2v2zm0-4h-2V7h2v6z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-serif text-white mb-3">Medical & Financial Aid</h3>
                    <p class="text-white/50 text-sm leading-relaxed font-light">
                        Provide support for individuals facing health emergencies or severe financial hardship.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white/5 border border-white/10 p-8 hover:bg-white/10 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center mb-6 text-brand">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-serif text-white mb-3">Community Outreach</h3>
                    <p class="text-white/50 text-sm leading-relaxed font-light">
                        Food drives, donations, and relief programmes for less privileged neighborhoods.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white/5 border border-white/10 p-8 hover:bg-white/10 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center mb-6 text-brand">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-serif text-white mb-3">Youth Empowerment</h3>
                    <p class="text-white/50 text-sm leading-relaxed font-light">
                        Scholarships, vocational sponsorships, and business grants for young talents.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white/5 border border-white/10 p-8 hover:bg-white/10 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center mb-6 text-brand">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-serif text-white mb-3">Emergency Response</h3>
                    <p class="text-white/50 text-sm leading-relaxed font-light">
                        Swift support for victims of disasters, crises, or violence.
                    </p>
                </div>
            </div>
        </section>

        <!-- Why Support Section -->
        <section class="max-w-5xl mx-auto bg-charcoal border border-white/5 p-8 lg:p-16 mb-24 rounded-sm shadow-2xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif text-white">Why Support HelpForsagee?</h2>
                <div class="w-16 h-1 bg-brand mx-auto mt-6"></div>
            </div>

            <div class="space-y-8">
                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <div
                        class="w-10 h-10 shrink-0 rounded border border-brand/50 flex items-center justify-center text-brand font-bold bg-brand/10">
                        01</div>
                    <div>
                        <h3 class="text-xl font-serif text-white mb-2">Ride with Purpose</h3>
                        <p class="text-white/60 font-light leading-relaxed">Every booking with HeyForsagee automatically
                            contributes to helping someone in need.</p>
                    </div>
                </div>

                <div class="w-full h-px bg-white/5"></div>

                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <div
                        class="w-10 h-10 shrink-0 rounded border border-brand/50 flex items-center justify-center text-brand font-bold bg-brand/10">
                        02</div>
                    <div>
                        <h3 class="text-xl font-serif text-white mb-2">100% Transparent Impact</h3>
                        <p class="text-white/60 font-light leading-relaxed">We show you where the money goes — and who
                            it helps.</p>
                    </div>
                </div>

                <div class="w-full h-px bg-white/5"></div>

                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <div
                        class="w-10 h-10 shrink-0 rounded border border-brand/50 flex items-center justify-center text-brand font-bold bg-brand/10">
                        03</div>
                    <div>
                        <h3 class="text-xl font-serif text-white mb-2">Real Change, Real People</h3>
                        <p class="text-white/60 font-light leading-relaxed">Focused on practical assistance that
                            transforms lives — not just temporary relief.</p>
                    </div>
                </div>

                <div class="w-full h-px bg-white/5"></div>

                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <div
                        class="w-10 h-10 shrink-0 rounded border border-brand/50 flex items-center justify-center text-brand font-bold bg-brand/10">
                        04</div>
                    <div>
                        <h3 class="text-xl font-serif text-white mb-2">Community First</h3>
                        <p class="text-white/60 font-light leading-relaxed">Built by Nigerians, for Nigerians — driven
                            by love and responsibility.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <div class="text-center">
            <h3 class="text-2xl font-serif mb-6 text-white">Join us in driving real impact today.</h3>
            <a href="cars.php" class="btn-primary inline-block">Explore Our Fleet & Give Back</a>
        </div>

    </div>
</main>

<?php include '../includes/footer.php'; ?>
