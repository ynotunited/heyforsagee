<?php
$pageTitle = "Testimonials | HeyForsagee";
$headerBg = "bg-noir/90 backdrop-blur-md border-b border-white/10";
include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="pt-40 pb-20 lg:pt-48 lg:pb-32 px-6">
    <div class="max-w-4xl mx-auto text-center space-y-6">
        <span
            class="text-brand font-bold tracking-[0.2em] text-xs uppercase border border-brand/30 px-4 py-2 rounded-sm inline-block bg-brand/5">
            Client Experiences
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-serif leading-tight">
            Words from our <span class="text-white/50 italic">Esteemed Clientele.</span>
        </h1>
        <p class="text-white/60 text-lg font-light leading-relaxed pt-4 max-w-2xl mx-auto">
            Our reputation is built on the impeccable execution of every journey. Here is what some of our distinguished
            clients recount about their time with HeyForsagee.
        </p>
    </div>
</section>

<!-- Testimonials Grid Section -->
<section class="py-16 px-6 bg-charcoal border-y border-white/5 relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
        style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 relative z-10">

        <?php
        $testimonials = [
            [
                "quote" => "HeyForsagee made my wedding day unforgettable. The red-carpet arrival in a blacked-out G-Wagon? Pure magic.",
                "name" => "Zainab A.",
                "title" => "Event Planner"
            ],
            [
                "quote" => "I've used luxury rentals abroad, but nothing comes close to the class and professionalism I experienced here. World-class service.",
                "name" => "David O.",
                "title" => "Business Executive"
            ],
            [
                "quote" => "Booked a midnight cruise for my anniversary — from the playlist to the route, everything was curated to perfection.",
                "name" => "Tola & Segun M.",
                "title" => "Couple"
            ],
            [
                "quote" => "Airport VIP service was flawless. No stress, no delays. Just smooth, premium treatment from touchdown to hotel.",
                "name" => "Adekunle F.",
                "title" => "Celebrity Artist"
            ],
            [
                "quote" => "Our embassy has worked with several transport providers, but HeyForsagee's discretion and efficiency is unmatched.",
                "name" => "Mariana K.",
                "title" => "Diplomatic Attaché"
            ],
            [
                "quote" => "As a frequent flyer, I've never had a pickup this punctual, this sleek, and this secure. 10/10.",
                "name" => "Henry C.",
                "title" => "Oil & Gas Executive"
            ],
            [
                "quote" => "I booked a surprise birthday ride for my partner, and they handled everything — champagne, flowers, a scenic route. Nailed it.",
                "name" => "Amaka N.",
                "title" => "Lifestyle Influencer"
            ],
            [
                "quote" => "The drivers are not just courteous — they're trained, sharp, and know how to move high-profile guests discreetly.",
                "name" => "Ahmed B.",
                "title" => "Talent Manager"
            ],
            [
                "quote" => "What sold me wasn't just the car — it was the feeling. The vibe. You don't just rent luxury — you live it.",
                "name" => "Stephanie O.",
                "title" => "Creative Director"
            ],
            [
                "quote" => "Flexible packages, smooth online booking, clean cars, and no hidden charges. What more could I ask for?",
                "name" => "Chuka E.",
                "title" => "Tech Founder"
            ],
            [
                "quote" => "Had a last-minute request for an interstate trip. Not only did they show up, they showed out. Respect.",
                "name" => "Francis D.",
                "title" => "Real Estate Investor"
            ],
            [
                "quote" => "From proposal rides to branding shoots, HeyForsagee always comes through with class and creativity.",
                "name" => "Wumi J.",
                "title" => "Fashion Designer"
            ]
        ];

        foreach ($testimonials as $t) {
            echo '<div class="glass p-10 group hover:-translate-y-2 transition-transform duration-500 border border-white/5 hover:border-brand/30 flex flex-col h-full">';
            echo '  <div class="mb-6 opacity-40 group-hover:opacity-100 group-hover:text-brand transition-all duration-500">';
            echo '      <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>';
            echo '  </div>';
            echo '  <p class="text-white/80 font-light leading-relaxed mb-8 flex-grow text-[15px] italic">"' . htmlspecialchars($t['quote']) . '"</p>';
            echo '  <div class="mt-auto border-t border-white/10 pt-6">';
            echo '      <h4 class="font-serif text-lg">' . htmlspecialchars($t['name']) . '</h4>';
            echo '      <span class="text-brand uppercase tracking-widest text-[10px] font-bold block mt-1">' . htmlspecialchars($t['title']) . '</span>';
            echo '  </div>';
            echo '</div>';
        }
        ?>

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
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif">Ready to write your own story?</h2>
        <p class="text-white/50 text-base md:text-lg font-light max-w-xl mx-auto">Experience the unparalleled luxury
            that Nigeria's most influential leaders are raving about.</p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center pt-8">
            <a href="cars.php" class="btn-primary">Reserve A Vehicle</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
