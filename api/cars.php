<?php
/**
 * HeyForsagee - Luxury Car Fleet
 */
$pageTitle = "Elite Fleet | HeyForsagee - Luxury & Armored Vehicles";
$metaDesc = "Explore the finest collection of luxury sedans, armored SUVs, and exotic vehicles. Meticulously maintained for absolute prestige and safety.";
$headerBg = "bg-noir/80 backdrop-blur-lg border-b border-white/5";
include '../includes/header.php';
?>

<main class="pt-24 lg:pt-32">
    <!-- Page Header -->
    <section class="py-12 px-6">
        <div class="max-w-7xl mx-auto space-y-4">
            <h2 class="text-brand uppercase tracking-widest text-sm font-semibold">Elite Fleet</h2>
            <h1 class="text-5xl lg:text-7xl font-serif">Luxury in Motion.</h1>
            <p class="text-white/40 max-w-2xl font-light">Choose from our curated selection of world-class automobiles.
                From armored command centers to open-top exotics.</p>
        </div>
    </section>

    <!-- Fleet Grid -->
    <section class="py-16 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Toyota Prado', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-toyota-prado-b.jpg" alt="Toyota Prado"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                SUV</span>
                            <h4 class="text-xl font-serif">Toyota Prado</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Toyota Prado 2023 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Toyota Prado 2023', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-toyota-prado-2023.jpg" alt="Toyota Prado 2023"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                SUV</span>
                            <h4 class="text-xl font-serif">Toyota Prado 2023</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Toyota Prado 2025 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Toyota Prado 2025', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-toyota-prado-2025.jpg" alt="Toyota Prado 2025"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                SUV</span>
                            <h4 class="text-xl font-serif">Toyota Prado 2025</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Lexus GX460 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Lexus GX460', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-LEXUS-GX460.jpg" alt="Lexus GX460"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                SUV</span>
                            <h4 class="text-xl font-serif">Lexus GX460</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Hilux 2020 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Hilux 2020', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-hilux-2020.jpg" alt="Hilux 2020"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Utility
                                Vehicle</span>
                            <h4 class="text-xl font-serif">Hilux 2020</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Hilux 2023 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Hilux 2023', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-hilux-2023.jpg" alt="Hilux 2023"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Utility
                                Vehicle</span>
                            <h4 class="text-xl font-serif">Hilux 2023</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Land Cruiser 2020 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Land Cruiser 2020', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-LANDCRUISER-2020.jpg" alt="Land Cruiser 2020"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                SUV</span>
                            <h4 class="text-xl font-serif">Land Cruiser 2020</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Land Cruiser 2025 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Land Cruiser 2025', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-LANDCRUISER-2025.jpg" alt="Land Cruiser 2025"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                SUV</span>
                            <h4 class="text-xl font-serif">Land Cruiser 2025</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Land Cruiser 2025 Bulletproof -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Land Cruiser 2025 Bulletproof', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-LANDCRUISER-2025-BULLETPROOF.jpg" alt="Land Cruiser 2025 Bulletproof"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                    <div class="absolute bottom-4 left-4 z-20">
                        <span
                            class="bg-brand text-noir text-[8px] font-bold px-2 py-1 uppercase tracking-tighter">Armored
                            Vehicle</span>
                    </div>
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Security
                                SUV</span>
                            <h4 class="text-xl font-serif">Land Cruiser 2025 Bulletproof</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Lexus LX570 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Lexus LX570', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-LX570.jpg" alt="Lexus LX570"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                SUV</span>
                            <h4 class="text-xl font-serif">Lexus LX570</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Lexus LX600 2025 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Lexus LX600 2025', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-LX600-2025.jpg" alt="Lexus LX600 2025"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                SUV</span>
                            <h4 class="text-xl font-serif">Lexus LX600 2025</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Mercedes-Maybach S600 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Mercedes-Maybach S600', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-S600-MAYBACH.jpg" alt="Mercedes-Maybach S600"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                    <div class="absolute bottom-4 left-4 z-20">
                        <span
                            class="bg-brand text-noir text-[8px] font-bold px-2 py-1 uppercase tracking-tighter">Premium
                            Choice</span>
                    </div>
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Ultra
                                Luxury</span>
                            <h4 class="text-xl font-serif">Mercedes-Maybach S600</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Mercedes-Benz S580 2025 -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Mercedes-Benz S580 2025', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-S580-2025.jpg" alt="Mercedes-Benz S580 2025"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                Sedan</span>
                            <h4 class="text-xl font-serif">Mercedes-Benz S580 2025</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Cadillac Escalade -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Cadillac Escalade', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-CADILLAC-ESCALADE.jpg" alt="Cadillac Escalade"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Luxury
                                SUV</span>
                            <h4 class="text-xl font-serif">Cadillac Escalade</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Bentley Bentayga -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Bentley Bentayga', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-BENTLEY-BENTAYGA.jpg" alt="Bentley Bentayga"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                    <div class="absolute bottom-4 left-4 z-20">
                        <span
                            class="bg-brand text-noir text-[8px] font-bold px-2 py-1 uppercase tracking-tighter">Premium
                            Choice</span>
                    </div>
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Ultra
                                Luxury SUV</span>
                            <h4 class="text-xl font-serif">Bentley Bentayga</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Rolls-Royce Phantom -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Rolls-Royce Phantom', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-ROLLS-ROYCE-PHANTOM.jpg" alt="Rolls-Royce Phantom"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                    <div class="absolute bottom-4 left-4 z-20">
                        <span
                            class="bg-brand text-noir text-[8px] font-bold px-2 py-1 uppercase tracking-tighter">Premium
                            Choice</span>
                    </div>
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Ultra
                                Luxury</span>
                            <h4 class="text-xl font-serif">Rolls-Royce Phantom</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: G-Wagon -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('G-Wagon', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-G-WAGON.jpg" alt="G-Wagon"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Exotic
                                SUV</span>
                            <h4 class="text-xl font-serif">G-Wagon</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Rolls-Royce Ghost -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Rolls-Royce Ghost', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-ROLLS-ROYCE-GHOST.jpg" alt="Rolls-Royce Ghost"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Premium
                                Sedan</span>
                            <h4 class="text-xl font-serif">Rolls-Royce Ghost</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Range Rover Vogue -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Range Rover Vogue', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-RANGE-ROVER-VOGUE.jpg" alt="Range Rover Vogue"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Premium
                                SUV</span>
                            <h4 class="text-xl font-serif">Range Rover Vogue</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Mercedes Sprinter -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Mercedes Sprinter', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-MERCEDES-SPRINTER.jpg" alt="Mercedes Sprinter"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span
                                class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Executive
                                Van</span>
                            <h4 class="text-xl font-serif">Mercedes Sprinter</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Hiace Bus -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Hiace Bus', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-HIACE-BUS.jpg" alt="Hiace Bus"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span
                                class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Passenger
                                Van</span>
                            <h4 class="text-xl font-serif">Hiace Bus</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

            <!-- Vehicle: Coaster Bus -->
            <div class="group relative overflow-hidden bg-charcoal border border-white/5 cursor-pointer"
                onclick="openModal('Coaster Bus', 'Hourly')">
                <div class="aspect-[16/10] overflow-hidden bg-onyx flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-noir/80 to-transparent z-10"></div>
                    <img src="assets/images/web-COASTER-BUS.jpg" alt="Coaster Bus"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="p-8 space-y-4 relative z-20">
                    <div class="flex justify-between items-start">
                        <div>
                            <span
                                class="text-[10px] uppercase tracking-widest text-brand font-bold mb-1 block">Passenger
                                Bus</span>
                            <h4 class="text-xl font-serif">Coaster Bus</h4>
                        </div>
                    </div>
                    <button class="btn-primary w-full py-4 text-[10px]">Reserve This Vehicle</button>
                </div>
            </div>

        </div>
    </section>

    <!-- Fleet Policy Section -->
    <section class="py-24 px-6 bg-noir">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="aspect-video glass overflow-hidden relative border border-brand/20">
                <div class="absolute inset-0 bg-gradient-to-tr from-brand/10 to-transparent"></div>
                <div class="p-12 h-full flex flex-col justify-end">
                    <h5 class="text-brand uppercase tracking-[0.3em] text-[10px] font-bold mb-4">Quality
                        Standard</h5>
                    <p class="text-2xl lg:text-3xl font-serif italic text-white/80">"Every mile is
                        monitored. Every
                        detail is inspected. Every client is protected."</p>
                </div>
            </div>
            <div class="space-y-6">
                <h3 class="text-3xl font-serif">Lease & Rental Guidelines</h3>
                <ul class="space-y-4 text-sm text-white/60 font-light">
                    <li class="flex items-start gap-3">
                        <span class="text-brand mt-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        Minimum 24-hour booking required for armored assets.
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-brand mt-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        Chauffeur vetting reports available upon request for corporate clients.
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-brand mt-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        Interstate movements require advance protocol clearance and pilot vehicles.
                    </li>
                </ul>
                <div class="pt-6">
                    <a href="index.php#faq" class="btn-outline inline-block text-[10px]">Read Full
                        Policy</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
