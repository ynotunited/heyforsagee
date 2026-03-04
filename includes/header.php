<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'HeyForsagee | Luxury Mobility'; ?></title>
    <meta name="description"
        content="<?php echo $metaDesc ?? 'Experience the pinnacle of luxury with HeyForsagee. Premium car and boat rentals for CEOs, diplomats, and high-net-worth individuals.'; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://heyforsagee.com/">
    <meta property="og:title" content="<?php echo $pageTitle ?? 'HeyForsagee | Luxury Mobility'; ?>">
    <meta property="og:description"
        content="<?php echo $metaDesc ?? 'Premium car and boat rentals for the world\'s most influential leaders.'; ?>">
    <meta property="og:image" content="https://heyforsagee.com/assets/images/mercedes.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://heyforsagee.com/">
    <meta property="twitter:title" content="<?php echo $pageTitle ?? 'HeyForsagee | Luxury Mobility'; ?>">
    <meta property="twitter:description"
        content="<?php echo $metaDesc ?? 'Premium car and boat rentals for the world\'s most influential leaders.'; ?>">
    <meta property="twitter:image" content="https://heyforsagee.com/assets/images/mercedes.png">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Google Fonts: Cormorant Garamond (Serif) & Inter (Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Inter:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- Flatpickr for Premium Calendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        noir: '#000000',
                        charcoal: '#0C0A09',
                        brand: {
                            DEFAULT: '#32646D',
                            light: '#428591',
                            dark: '#254a51'
                        },
                        onyx: '#171717',
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'serif'],
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 1s ease-out forwards',
                        'slide-up': 'slideUp 0.8s ease-out forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply bg-noir text-white font-sans antialiased selection:bg-brand selection:text-white;
            }
            h1, h2, h3, h4 {
                @apply font-serif;
            }
        }
        @layer components {
            .btn-primary {
                @apply bg-brand text-white px-8 py-3 font-semibold uppercase tracking-widest transition-all duration-300 hover:bg-brand-light hover:scale-105 active:scale-95;
            }
            .btn-outline {
                @apply border border-brand text-brand px-8 py-3 font-semibold uppercase tracking-widest transition-all duration-300 hover:bg-brand hover:text-white hover:scale-105 active:scale-95;
            }
            .glass {
                @apply bg-white/5 backdrop-blur-md border border-white/10;
            }
        }

        /* Flatpickr Custom Brand Styling */
        .flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange, 
        .flatpickr-day.selected.prevMonthDay, .flatpickr-day.selected.nextMonthDay, 
        .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, 
        .flatpickr-day.endRange:hover, .flatpickr-day.selected.focus, 
        .flatpickr-day.startRange.focus, .flatpickr-day.endRange.focus {
            background: #32646D !important;
            border-color: #32646D !important;
        }
        .flatpickr-months .flatpickr-month, .flatpickr-current-month .flatpickr-monthDropdown-months,
        .flatpickr-current-month input.cur-year {
            font-family: 'Cormorant Garamond', serif !important;
            font-weight: 700 !important;
        }
    </style>
</head>

<body class="overflow-x-hidden">

    <!-- Header -->
    <header id="main-header"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-500 py-6 px-6 lg:px-12 <?php echo isset($headerBg) ? $headerBg : ''; ?>">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="index.php" class="block">
                <img src="assets/images/HEYFORSAGEE-logo-300x57.png" alt="HeyForSagee Logo"
                    class="h-8 lg:h-12 w-auto object-contain">
            </a>

            <!-- Mobile Menu Toggler -->
            <button id="menu-toggle" class="lg:hidden text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M4 6h16M4 12h16m-16 6h16"></path>
                </svg>
            </button>

            <!-- Desktop Nav -->
            <nav
                class="hidden lg:flex items-center space-x-8 uppercase text-xs tracking-widest font-semibold h-full relative">

                <!-- Who We Are Dropdown -->
                <div class="group h-full flex items-center relative py-6">
                    <span class="hover:text-brand transition-colors cursor-pointer flex items-center gap-1">Who We Are
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </span>

                    <!-- Dropdown Menu -->
                    <div
                        class="absolute top-[100%] left-0 w-56 bg-noir border border-white/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] shadow-2xl flex flex-col">
                        <a href="about.php"
                            class="px-6 py-4 hover:bg-white/5 hover:text-brand transition-colors text-white/80 border-b border-white/5">About
                            Us</a>
                        <a href="testimonials.php"
                            class="px-6 py-4 hover:bg-white/5 hover:text-brand transition-colors text-white/80 border-b border-white/5">Testimonials</a>
                        <a href="faqs.php"
                            class="px-6 py-4 hover:bg-white/5 hover:text-brand transition-colors text-white/80">FAQs</a>
                    </div>
                </div>

                <a href="index.php#services" class="hover:text-brand transition-colors py-6">Services</a>
                <a href="cars.php" class="hover:text-brand transition-colors">Our Cars</a>
                <a href="boats.php" class="hover:text-brand transition-colors">Boat Rentals</a>
                <a href="helpforsagee.php" class="hover:text-brand transition-colors text-brand/80">HelpForSagee</a>
                <a href="contact.php"
                    class="hover:text-brand transition-colors border-l border-white/20 pl-8">Contact</a>
                <a href="#book" class="btn-primary py-2 px-6">Book Now</a>
            </nav>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-noir/95 z-[60] flex flex-col items-center justify-center space-y-8 text-2xl font-serif uppercase tracking-widest translate-x-full transition-transform duration-500">
        <button id="menu-close" class="absolute top-8 right-8 text-white">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Mobile Who We Are Dropdown -->
        <div class="flex flex-col items-center w-full group">
            <button onclick="document.getElementById('mobile-who-dropdown').classList.toggle('hidden')"
                class="hover:text-brand flex items-center gap-2 uppercase tracking-widest outline-none transition-colors">
                Who We Are
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="mobile-who-dropdown" class="hidden flex-col items-center space-y-5 mt-5 text-[18px]">
                <a href="about.php" class="hover:text-brand text-white/70">About Us</a>
                <a href="testimonials.php" class="hover:text-brand text-white/70">Testimonials</a>
                <a href="faqs.php" class="hover:text-brand text-white/70">FAQs</a>
            </div>
        </div>

        <a href="index.php#services" class="hover:text-brand">Services</a>
        <a href="cars.php" class="hover:text-brand">Our Cars</a>
        <a href="boats.php" class="hover:text-brand">Boat Rentals</a>
        <a href="helpforsagee.php" class="hover:text-brand text-brand/80 text-[20px]">HelpForSagee <span
                class="text-[10px] bg-brand p-1 text-white rounded block text-center mt-1">NGO</span></a>
        <a href="contact.php" class="hover:text-brand">Contact</a>
        <a href="#book" class="btn-primary text-lg">Book Now</a>
    </div>