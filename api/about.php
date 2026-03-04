<?php
$pageTitle = "About Us | HeyForsagee";
$headerBg = "bg-noir/90 backdrop-blur-md border-b border-white/10";
include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative pt-40 pb-20 lg:pt-48 lg:pb-32 overflow-hidden px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
        <!-- Text Column -->
        <div class="space-y-8 relative z-20">
            <span
                class="text-brand font-bold tracking-[0.2em] text-xs uppercase border border-brand/30 px-4 py-2 rounded-sm inline-block bg-brand/5">
                Who We Are
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-serif leading-tight">
                Luxury Rentals<br>
                <span class="text-white/50 italic">& Lifestyle</span> Experiences
            </h1>
            <div class="space-y-6 text-white/70 font-light leading-relaxed max-w-lg text-sm md:text-base">
                <p>HeyForsagee is Nigeria's foremost luxury mobility brand, redefining travel with premium car rentals,
                    VIP airport protocols, and exclusive concierge services. Every vehicle in our fleet is impeccably
                    maintained, and our professionally trained drivers and support staff deliver a service experience
                    worthy of royalty.</p>
                <p>Renowned for our highly anticipated monthly promo offers, we bring creativity to luxury, giving
                    clients more reasons to ride with us. Beyond exceptional service, we make every journey meaningful
                    as a portion of our profits supports HelpForsagee, an initiative dedicated to lending a hand to
                    those in need.</p>
                <p class="font-semibold text-white/90 text-[18px] font-serif italic border-l-2 border-brand pl-4">With
                    HeyForsagee, every ride is seamless, stylish, and distinctly elevated.</p>
            </div>
        </div>

        <!-- Image Column -->
        <div class="relative group h-full min-h-[400px] lg:min-h-[600px] w-full">
            <div
                class="absolute inset-0 bg-gradient-to-tr from-brand/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 z-10 pointer-events-none">
            </div>
            <img src="assets/images/forsagee.jpeg" alt="HeyForsagee Vision"
                class="w-full h-full object-cover object-center border border-white/10 shadow-2xl filter brightness-90 group-hover:brightness-105 transition-all duration-700 block relative z-0">

            <!-- Decorative Elements -->
            <div
                class="absolute -bottom-6 -left-6 w-32 h-32 border-b-2 border-l-2 border-brand/50 z-0 hidden lg:block opacity-70">
            </div>
            <div
                class="absolute -top-6 -right-6 w-32 h-32 border-t-2 border-r-2 border-brand/50 z-0 hidden lg:block opacity-70">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-24 px-6 bg-charcoal border-y border-white/5 relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-5 pointer-events-none"
        style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 relative z-10">
        <!-- Vision -->
        <div class="space-y-6 glass p-10 md:p-14 hover:border-brand/40 transition-colors duration-500 group">
            <div
                class="w-16 h-16 rounded-full bg-brand/10 flex items-center justify-center mb-8 border border-brand/20 group-hover:scale-110 transition-transform duration-500">
                <svg class="w-8 h-8 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                    </path>
                </svg>
            </div>
            <h2 class="text-3xl font-serif">Our Vision</h2>
            <p class="text-white/60 font-light leading-relaxed">To be Africa's most trusted and sought-after luxury
                mobility and lifestyle brand, setting the standard for elegance, efficiency, and exceptional
                experiences.</p>
        </div>

        <!-- Mission -->
        <div class="space-y-6 glass p-10 md:p-14 hover:border-brand/40 transition-colors duration-500 group">
            <div
                class="w-16 h-16 rounded-full bg-brand/10 flex items-center justify-center mb-8 border border-brand/20 group-hover:scale-110 transition-transform duration-500">
                <svg class="w-8 h-8 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z"></path>
                </svg>
            </div>
            <h2 class="text-3xl font-serif">Our Mission</h2>
            <p class="text-white/60 font-light leading-relaxed">To provide world-class luxury rentals and lifestyle
                services with unmatched flexibility, attention to detail, and genuine care for our clients, while using
                a portion of our profits to uplift lives and create a sustainable future.</p>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-32 px-6 text-center relative overflow-hidden bg-noir">
    <div class="absolute inset-0 z-0">
        <div
            class="absolute inset-0 bg-brand/10 hover:-translate-y-4 transition-transform duration-[20s] blur-3xl rounded-full w-[40rem] h-[40rem] mx-auto opacity-30 mt-20 pointer-events-none">
        </div>
    </div>

    <div class="max-w-3xl mx-auto space-y-10 relative z-10">
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif">Experience distinctly elevated travel.</h2>
        <p class="text-white/50 text-base md:text-lg font-light max-w-xl mx-auto">Join the echelon of global leaders who
            trust HeyForsagee with their most demanding journeys.</p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center pt-8">
            <a href="cars.php" class="btn-primary">Explore Our Fleet</a>
            <a href="contact.php" class="btn-outline">Contact Us</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
