<!-- Booking Modal -->
<div id="booking-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-6 sm:p-12 overflow-y-auto">
    <div class="absolute inset-0 bg-noir/90 backdrop-blur-xl" id="modal-overlay"></div>
    <div class="relative bg-charcoal border border-white/10 w-full max-w-2xl transform transition-all duration-500 scale-95 opacity-0"
        id="modal-content">
        <button id="modal-close" class="absolute top-6 right-6 text-white/50 hover:text-white transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="p-8 sm:p-12">
            <h3 class="text-3xl lg:text-4xl font-serif mb-2">Secure Your Movement</h3>
            <p class="text-white/40 text-sm mb-8">Our executive concierge will finalize your request via WhatsApp.</p>

            <form id="booking-form" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Row 1: Name & Email -->
                <div class="space-y-2">
                    <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Your Full Name</label>
                    <input type="text" name="full_name" required
                        class="w-full bg-noir border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors"
                        placeholder="John Doe">
                </div>
                <div class="space-y-2">
                    <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Your Email Address</label>
                    <input type="email" name="email" required
                        class="w-full bg-noir border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors"
                        placeholder="john@example.com">
                </div>

                <!-- Row 2: Date & Booking Type -->
                <div class="space-y-2">
                    <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Booking Date</label>
                    <input type="text" name="booking_date" id="booking-date-picker" required
                        class="w-full bg-noir border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors cursor-pointer"
                        placeholder="Select Date">
                </div>
                <div class="space-y-2">
                    <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Booking Type</label>
                    <select name="booking_type" id="booking-type" required
                        class="w-full bg-noir border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors appearance-none">
                        <option value="">Select Type</option>
                        <option value="Hourly">Hourly</option>
                        <option value="Daily">Daily</option>
                        <option value="Promo Rate">Promo Rate</option>
                        <option value="Airport Services">Airport Services</option>
                        <option value="Midnight Rental">Midnight Rental</option>
                        <option value="Interstate Trip">Interstate Trip</option>
                    </select>
                </div>

                <!-- Row 3: Specify Hour (Always visible or shared?) -->
                <div class="space-y-2">
                    <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Specify the Hour</label>
                    <input type="text" name="specific_hour"
                        class="w-full bg-noir border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors"
                        placeholder="e.g. 10:00 AM">
                </div>

                <!-- Smart Logic: Daily Options -->
                <div id="daily-logic" class="hidden space-y-2">
                    <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Daily Rental
                        Duration</label>
                    <select name="daily_duration"
                        class="w-full bg-noir border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors appearance-none">
                        <option value="6-Hours">6-Hours</option>
                        <option value="9-Hours">9-Hours</option>
                        <option value="12-Hours">12-Hours</option>
                        <option value="24-Hours">24-Hours</option>
                    </select>
                </div>

                <!-- Smart Logic: Airport Options -->
                <div id="airport-logic" class="hidden md:col-span-2 space-y-2">
                    <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Airport Service
                        Options</label>
                    <select name="airport_option"
                        class="w-full bg-noir border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors appearance-none">
                        <option value="Pickup">Pickup</option>
                        <option value="Drop Off">Drop Off</option>
                        <option value="Security Needed">Security Needed</option>
                        <option value="Protocol Needed">Protocol Needed</option>
                    </select>
                </div>

                <!-- Smart Logic: Hourly Vehicles -->
                <div id="hourly-logic" class="hidden md:col-span-2 space-y-2">
                    <div class="flex justify-between items-end">
                        <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Vehicle Type</label>
                        <span class="text-[9px] text-white/50 italic mb-1">Rental prices starts from as low as
                            N59,000</span>
                    </div>
                    <select id="vehicleSelect" name="vehicle_type"
                        class="w-full bg-noir border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors appearance-none">
                        <option value="Toyota Prado">Toyota Prado</option>
                        <option value="Toyota Prado 2023">Toyota Prado 2023</option>
                        <option value="Toyota Prado 2025">Toyota Prado 2025</option>
                        <option value="Lexus GX460">Lexus GX460</option>
                        <option value="Hilux 2020">Hilux 2020</option>
                        <option value="Hilux 2023">Hilux 2023</option>
                        <option value="Land Cruiser 2020">Land Cruiser 2020</option>
                        <option value="Land Cruiser 2025">Land Cruiser 2025</option>
                        <option value="Land Cruiser 2025 Bulletproof">Land Cruiser 2025 Bulletproof</option>
                        <option value="Lexus LX570">Lexus LX570</option>
                        <option value="Lexus LX600 2025">Lexus LX600 2025</option>
                        <option value="Mercedes-Maybach S600">Mercedes-Maybach S600</option>
                        <option value="Mercedes-Benz S580 2025">Mercedes-Benz S580 2025</option>
                        <option value="Cadillac Escalade">Cadillac Escalade</option>
                        <option value="Bentley Bentayga">Bentley Bentayga</option>
                        <option value="Rolls-Royce Phantom">Rolls-Royce Phantom</option>
                        <option value="G-Wagon">G-Wagon</option>
                        <option value="Rolls-Royce Ghost">Rolls-Royce Ghost</option>
                        <option value="Range Rover Vogue">Range Rover Vogue</option>
                        <option value="Mercedes Sprinter">Mercedes Sprinter</option>
                        <option value="Hiace Bus">Hiace Bus</option>
                        <option value="Coaster Bus">Coaster Bus</option>
                    </select>
                </div>

                <div class="md:col-span-2 space-y-2">
                    <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Special Requests</label>
                    <textarea name="remarks" rows="3"
                        class="w-full bg-noir border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors"
                        placeholder="Chauffeur preferences, security detail needs, etc."></textarea>
                </div>

                <div class="md:col-span-2 pt-4">
                    <button type="submit" class="btn-primary w-full py-5 text-sm uppercase tracking-widest">Send Booking
                        Request &rarr;</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer id="contact" class="bg-noir py-24 px-6 border-t border-white/5">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-24">
        <div class="space-y-6 lg:col-span-1">
            <a href="index.php" class="block">
                <img src="assets/images/HEYFORSAGEE-logo-300x57.png" alt="HeyForSagee Logo"
                    class="h-8 w-auto object-contain">
            </a>
            <p class="text-white/40 text-sm font-light leading-relaxed">Providing high-end mobility solutions for the
                most discerning clients across Nigeria and beyond.</p>
            <div class="flex space-x-4">
                <a href="https://www.snapchat.com/add/heyforsagee?share_id=C4LJXNRjR_WvR0ilbEy9WQ&locale=en_DZ"
                    target="_blank"
                    class="w-10 h-10 border border-white/10 flex items-center justify-center hover:border-brand hover:text-brand transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M11.956 1.103c-2.473 0-4.636 1.884-5.32 4.288-.346 1.218-.328 2.508-.124 3.738.032.193.076.386.136.574-.298.397-.736.643-1.196.793-.65.212-1.343.256-1.996.064-.526-.153-1.04-.42-1.396-.864-.265-.333-.906-.217-1.1.18-.335.688.084 1.638.74 2.012 1.42.81 3.2.735 4.757.94-.038.196-.056.398-.106.592l-.203.784c-.22.847-.07 1.737.408 2.454.493.738 1.282 1.258 2.148 1.472l.492.115c.57.14 1.144.258 1.725.323.755.085 1.498.053 2.184-.287.41-.202.822-.44 1.216-.628.4-.19 1.096-.282 1.408-.023.238.198.423.475.642.705.418.438.995.666 1.587.75l.138.02.138-.02c.592-.084 1.168-.312 1.587-.75.22-.23.404-.507.642-.705.312-.26 1.008-.167 1.408.023.394.188.806.426 1.216.628.686.34 1.428.372 2.184.287.58-.065 1.154-.183 1.724-.323l.493-.115c.866-.214 1.655-.734 2.148-1.472.48-.717.628-1.607.408-2.454l-.203-.784c-.05-.194-.068-.396-.106-.592 1.556-.205 3.336-.13 4.756-.94.656-.374 1.075-1.324.74-2.012-.194-.397-.835-.513-1.1-.18-.356.444-.87.71-1.396.864-.653.192-1.346.148-1.996-.064-.46-.15-.898-.396-1.196-.793.06-.188.104-.38.136-.574.204-1.23.222-2.52-.124-3.738-.684-2.404-2.847-4.288-5.32-4.288z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/heyforsagee?igsh=M25kYnN5cGQ1ZnVr&utm_source=qr" target="_blank"
                    class="w-10 h-10 border border-white/10 flex items-center justify-center hover:border-brand hover:text-brand transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.31.974.974 1.248 2.242 1.31 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.31 3.608-.974.974-2.242 1.248-3.608 1.31-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.31-.974-.974-1.248-2.242-1.31-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.336-2.633 1.31-3.608.974-.974 2.242-1.248 3.608-1.31 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.337 2.618 6.78 6.98 6.98 1.281.058 1.689.073 4.948.073s3.667-.014 4.947-.072c4.337-.2 6.78-2.618 6.98-6.98.058-1.281.072-1.689.072-4.948s-.014-3.667-.072-4.947c-.2-4.337-2.618-6.78-6.98-6.98-1.281-.058-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="space-y-6">
            <h4 class="uppercase tracking-widest text-[10px] font-bold text-white/40">Quick Links</h4>
            <nav class="flex flex-col space-y-4 text-sm font-light">
                <a href="index.php" class="hover:text-brand transition-colors">Home</a>
                <a href="index.php#who-we-are" class="hover:text-brand transition-colors">About Us</a>
                <a href="cars.php" class="hover:text-brand transition-colors">Fleet Management</a>
                <a href="helpforsagee.php"
                    class="hover:text-brand/80 transition-colors text-brand flex items-center gap-2">HelpForSagee <span
                        class="bg-brand text-white text-[8px] px-1 rounded uppercase">NGO</span></a>
                <a href="#" class="hover:text-brand transition-colors">Charter Policies</a>
                <a href="#" class="hover:text-brand transition-colors">Privacy Policy</a>
            </nav>
        </div>

        <div class="space-y-6">
            <h4 class="uppercase tracking-widest text-[10px] font-bold text-white/40">Contact Support</h4>
            <div class="space-y-4 text-sm font-light">
                <p class="text-white/60">109 Remilade Opadokun street, Lagos, Nigeria</p>
                <p class="text-white/60 hover:text-brand"><a href="mailto:hi@heyforsagee.ng">hi@heyforsagee.ng</a></p>
                <p class="text-white/60 hover:text-brand"><a
                        href="mailto:forsageeltd@gmail.com">forsageeltd@gmail.com</a></p>
                <p class="text-brand font-bold">+234 904 071 0228</p>
            </div>
        </div>

        <div class="space-y-6">
            <h4 class="uppercase tracking-widest text-[10px] font-bold text-white/40">Newsletter</h4>
            <p class="text-white/40 text-xs leading-relaxed">Subscribe for exclusive fleet updates and private travel
                events.</p>
            <form class="flex border-b border-white/20 pb-2">
                <input type="email" placeholder="Your Email" class="bg-transparent text-sm outline-none w-full">
                <button type="submit" class="text-brand font-bold text-xs uppercase tracking-widest">Join</button>
            </form>
        </div>
    </div>
    <div
        class="max-w-7xl mx-auto mt-24 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] uppercase tracking-[0.2em] text-white/20">
        <p>&copy; 2026 HeyForsagee. All Rights Reserved.</p>
        <p>Designed by <a href="https://webxpresstech.com.ng/" target="_blank"
                class="text-brand hover:text-white transition-colors opacity-80 hover:opacity-100">Webxpress
                Technologies MadeIT</a></p>
    </div>
</footer>

<script>
    // Header scroll effect
    const header = document.getElementById('main-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('bg-noir/80', 'backdrop-blur-lg', 'py-4', 'shadow-2xl');
            header.classList.remove('py-6');
        } else {
            header.classList.remove('bg-noir/80', 'backdrop-blur-lg', 'py-4', 'shadow-2xl');
            header.classList.add('py-6');
        }
    });

    // Mobile Menu Logic
    const menuToggle = document.getElementById('menu-toggle');
    const menuClose = document.getElementById('menu-close');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-x-full');
    });

    menuClose.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
    });

    // Initialize Flatpickr for Premium Calendar
    flatpickr("#booking-date-picker", {
        minDate: "today",
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        disableMobile: "true",
        animate: true
    });

    // Booking Modal Logic
    const bookingModal = document.getElementById('booking-modal');
    const modalOverlay = document.getElementById('modal-overlay');
    const modalContent = document.getElementById('modal-content');
    const modalClose = document.getElementById('modal-close');
    const bookingForm = document.getElementById('booking-form');
    const bookingTypeSelect = document.getElementById('booking-type');

    // Logic containers
    const dailyLogic = document.getElementById('daily-logic');
    const airportLogic = document.getElementById('airport-logic');
    const hourlyLogic = document.getElementById('hourly-logic');

    const toggleSmartLogic = (type) => {
        dailyLogic.classList.add('hidden');
        airportLogic.classList.add('hidden');
        hourlyLogic.classList.add('hidden');

        if (type === 'Daily') dailyLogic.classList.remove('hidden');
        if (type === 'Airport Services') airportLogic.classList.remove('hidden');
        if (type === 'Hourly') hourlyLogic.classList.remove('hidden');
    };

    bookingTypeSelect.addEventListener('change', (e) => toggleSmartLogic(e.target.value));

    const openModal = (vehicle = '', type = '') => {
        bookingForm.reset();
        if (type) {
            bookingTypeSelect.value = type;
            toggleSmartLogic(type);
        }

        if (vehicle && type === 'Hourly') {
            const vehicleSelect = hourlyLogic.querySelector('select');

            // First pass: try exact match
            let found = false;
            for (let option of vehicleSelect.options) {
                if (option.value.toLowerCase() === vehicle.toLowerCase()) {
                    vehicleSelect.value = option.value;
                    found = true;
                    break;
                }
            }

            // Second pass: try partial match
            if (!found) {
                for (let option of vehicleSelect.options) {
                    if (option.value.toLowerCase().includes(vehicle.toLowerCase()) ||
                        vehicle.toLowerCase().includes(option.value.toLowerCase())) {
                        vehicleSelect.value = option.value;
                        break;
                    }
                }
            }
        }

        bookingModal.classList.remove('hidden');
        bookingModal.classList.add('flex');
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 10);
        document.body.style.overflow = 'hidden';
    };

    const closeModal = () => {
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            bookingModal.classList.add('hidden');
            bookingModal.classList.remove('flex');
        }, 500);
        document.body.style.overflow = '';
    };

    // Event delegation for booking buttons
    document.addEventListener('click', (e) => {
        const btn = e.target.closest('a[href="#book"], button');
        if (btn) {
            const btnText = btn.innerText.toUpperCase();
            if (btnText.includes('BOOK') || btnText.includes('RESERVE') || btnText.includes('CHARTER')) {
                e.preventDefault();

                const card = btn.closest('.group');
                const vehicleName = card ? card.querySelector('h4').innerText : '';

                // Default to Hourly if coming from a car card to show vehicle selection
                openModal(vehicleName, 'Hourly');
            }
        }
    });

    modalClose.addEventListener('click', closeModal);
    modalOverlay.addEventListener('click', closeModal);

    // WhatsApp Logic
    bookingForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(bookingForm);
        const data = Object.fromEntries(formData.entries());

        const whatsappNumber = "2348000000000"; // Real number should be inserted here

        let smartDetails = "";
        if (data.booking_type === 'Daily') smartDetails = `\n*Duration:* ${data.daily_duration}`;
        if (data.booking_type === 'Airport Services') smartDetails = `\n*Service Option:* ${data.airport_option}`;
        if (data.booking_type === 'Hourly') smartDetails = `\n*Vehicle:* ${data.vehicle_type}`;

        const message = `*HeyForsagee Reservation*
            
*Client:* ${data.full_name}
*Email:* ${data.email}
*Date:* ${data.booking_date}
*Time:* ${data.specific_hour}
*Type:* ${data.booking_type}${smartDetails}
*Remarks:* ${data.remarks || 'None'}

_Sent via Sagee Elite Web Portal_`;

        const encodedMessage = encodeURIComponent(message);
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

        window.open(whatsappUrl, '_blank');
        closeModal();
        bookingForm.reset();
        toggleSmartLogic('');
    });

    // Scroll reveal animation
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-slide-up');
                entry.target.classList.remove('opacity-0');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('section > div').forEach(el => {
        el.classList.add('opacity-0', 'transition-all', 'duration-1000');
        revealObserver.observe(el);
    });

    // Smooth scroll for anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if (this.getAttribute('href').startsWith('#') && this.getAttribute('href').length > 1) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
</script>
</body>

</html>