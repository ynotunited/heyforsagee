<?php
$pageTitle = "Frequently Asked Questions | HeyForsagee";
$headerBg = "bg-noir/90 backdrop-blur-md border-b border-white/10";
include 'includes/header.php';

$faqs = [
    "General information" => [
        [
            "q" => "What types of vehicles are available for rent?",
            "a" => "We offer a curated fleet of premium vehicles including executive sedans, luxury SUVs, convertibles, sports cars, and armoured options — tailored to suit every occasion and client preference."
        ],
        [
            "q" => "Where are your rental locations?",
            "a" => "Our services are currently available in major cities across Nigeria including Lagos, Abuja, and Port Harcourt. We also accommodate interstate bookings and special location requests."
        ],
        [
            "q" => "What are your hours of operation?",
            "a" => "We operate 24/7, including holidays. Our support and rental team is always on standby to serve your needs at any time, day or night."
        ]
    ],
    "Booking and reservations" => [
        [
            "q" => "How do I make a reservation?",
            "a" => "You can book directly via our website, mobile app (coming soon), or by contacting our customer service team via phone or WhatsApp. Advance booking is recommended for special vehicles or high-demand dates."
        ],
        [
            "q" => "Can I modify or cancel my reservation?",
            "a" => "Yes. You can modify or cancel your reservation up to 24 hours before the scheduled time at no extra cost. Cancellations within 24 hours may incur a charge, depending on the booking type."
        ],
        [
            "q" => "What is your cancellation policy?",
            "a" => "We offer flexible cancellations. For full refunds, cancellations must be made at least 24 hours in advance. For last-minute changes, partial refunds may apply depending on the vehicle and availability."
        ]
    ],
    "Pricing and payment" => [
        [
            "q" => "What forms of payment do you accept?",
            "a" => "We accept bank transfers, debit/credit cards (Naira & Dollar), Paystack, Flutterwave, and cash at select locations. Payment must be confirmed before vehicle dispatch."
        ],
        [
            "q" => "Are there any hidden fees?",
            "a" => "No. All our pricing is transparent. Your invoice includes the vehicle rental fee, chauffeur (if applicable), and optional add-ons. Any extra charges like extended time, fuel, or out-of-town travel will be clearly communicated beforehand."
        ],
        [
            "q" => "Do you require a deposit?",
            "a" => "Yes. A refundable security deposit is required for self-drive rentals. The amount depends on the vehicle class and is returned after the rental period if no damages or violations occur."
        ]
    ],
    "Vehicle information" => [
        [
            "q" => "Are your vehicles insured?",
            "a" => "Absolutely. All our vehicles are fully insured, and we also provide comprehensive coverage and third-party liability for added peace of mind."
        ],
        [
            "q" => "Do you offer vehicles with automatic transmission?",
            "a" => "Yes — the majority of our fleet is automatic for maximum ease and comfort. Manual transmission vehicles are available upon request."
        ],
        [
            "q" => "Can I choose a specific vehicle model?",
            "a" => "Of course. While availability may vary, we do our best to accommodate specific model requests. Early booking increases your chances of getting the exact vehicle you want."
        ]
    ]
];
?>

<!-- Hero Section -->
<section class="pt-40 pb-20 lg:pt-48 lg:pb-32 px-6">
    <div class="max-w-4xl mx-auto text-center space-y-6">
        <span
            class="text-brand font-bold tracking-[0.2em] text-xs uppercase border border-brand/30 px-4 py-2 rounded-sm inline-block bg-brand/5">
            Knowledge Base
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-serif leading-tight">
            Frequently Asked <span class="text-white/50 italic">Questions.</span>
        </h1>
        <p class="text-white/60 text-lg font-light leading-relaxed pt-4 max-w-2xl mx-auto">
            Everything you need to know about our luxury fleet, booking procedures, and premium concierge services. If
            you can't find your answer here, our team is available 24/7.
        </p>
    </div>
</section>

<!-- FAQs Section -->
<section class="py-16 px-6 bg-charcoal border-y border-white/5 relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
        style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="max-w-4xl mx-auto relative z-10 space-y-16">

        <?php foreach ($faqs as $category => $questions): ?>
            <div class="space-y-8">
                <div class="flex items-center gap-4">
                    <div class="h-px bg-brand/30 flex-grow"></div>
                    <h2 class="text-2xl font-serif text-brand uppercase tracking-widest text-sm">
                        <?php echo $category; ?>
                    </h2>
                    <div class="h-px bg-brand/30 w-12 lg:w-32"></div>
                </div>

                <div class="space-y-4">
                    <?php foreach ($questions as $faq): ?>
                        <details
                            class="group glass transition-all duration-300 open:bg-white/5 border border-white/5 hover:border-brand/30">
                            <summary class="flex justify-between items-center p-8 cursor-pointer list-none focus:outline-none">
                                <span class="text-lg font-serif tracking-wide pr-8">
                                    <?php echo htmlspecialchars($faq['q']); ?>
                                </span>
                                <span class="text-brand transition-transform duration-300 group-open:rotate-180 flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="px-8 pb-8 text-white/60 font-light leading-relaxed">
                                <?php echo htmlspecialchars($faq['a']); ?>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

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
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif">Still have questions?</h2>
        <p class="text-white/50 text-base md:text-lg font-light max-w-xl mx-auto">Our dedicated concierge team is
            standing by to provide immediate assistance tailored precisely to your needs.</p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center pt-8">
            <a href="contact.php" class="btn-primary">Contact Support</a>
            <a href="cars.php" class="btn-outline">Explore Fleet</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>