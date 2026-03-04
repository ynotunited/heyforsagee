<?php
/**
 * HeyForsagee - Contact Page
 * Premium Support & Location
 */
$pageTitle = "Contact Us | HeyForsagee - 24/7 VIP Concierge";
$metaDesc = "Reach out to HeyForsagee for premium car rentals and boat charters. Our concierge team is available 24/7 to assist you.";
include 'includes/header.php';
?>

<main class="pt-32 pb-24">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Header Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-24 items-center">
            <div class="space-y-8 animate-fade-in">
                <h2 class="text-brand uppercase tracking-widest text-sm font-semibold">Elevate Your Experience</h2>
                <h1 class="text-5xl lg:text-7xl font-serif leading-tight text-white">
                    Don't hesitate to<br><span class="text-brand italic">reach out to us.</span>
                </h1>
                <p class="text-white/60 text-lg leading-relaxed font-light max-w-xl">
                    We’re here to help. Start a live chat or reach out directly — let’s connect and elevate your
                    experience.
                </p>

                <div class="bg-white/5 border border-white/10 p-6 rounded-sm inline-block">
                    <p class="text-brand-light text-sm font-semibold flex items-center gap-3">
                        <span class="relative flex h-3 w-3">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-brand"></span>
                        </span>
                        Available 24/7 for immediate response.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-12">
                <!-- Info Item 1 -->
                <div class="space-y-3">
                    <h3 class="uppercase text-[10px] tracking-widest text-white/40 font-bold">Direct Line</h3>
                    <p class="text-2xl font-serif text-white hover:text-brand transition-colors">
                        <a href="tel:+2349040710228">+234 904 071 0228</a>
                    </p>
                </div>
                <!-- Info Item 2 -->
                <div class="space-y-3">
                    <h3 class="uppercase text-[10px] tracking-widest text-white/40 font-bold">Official Email</h3>
                    <p class="text-xl font-serif text-white hover:text-brand transition-colors">
                        <a href="mailto:hi@heyforsagee.ng">hi@heyforsagee.ng</a>
                    </p>
                </div>
                <!-- Info Item 3 -->
                <div class="space-y-3">
                    <h3 class="uppercase text-[10px] tracking-widest text-white/40 font-bold">Backup Support</h3>
                    <p class="text-xl font-serif text-white hover:text-brand transition-colors">
                        <a href="mailto:forsageeltd@gmail.com">forsageeltd@gmail.com</a>
                    </p>
                </div>
                <!-- Info Item 4 -->
                <div class="space-y-3">
                    <h3 class="uppercase text-[10px] tracking-widest text-white/40 font-bold">Elite HQ</h3>
                    <p class="text-lg font-serif text-white leading-snug">
                        109 Remilade Opadokun street,<br>Lagos, Nigeria
                    </p>
                </div>
            </div>
        </div>

        <!-- Form & Map Section -->
        <div
            class="grid grid-cols-1 lg:grid-cols-2 gap-1px bg-white/10 border border-white/10 mb-24 overflow-hidden shadow-2xl">
            <!-- Contact Form -->
            <div class="bg-noir p-8 lg:p-16">
                <h3 class="text-3xl font-serif mb-8">Send a Message</h3>
                <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="uppercase text-[10px] tracking-widest text-brand font-bold">First Name</label>
                        <input type="text" name="first_name" required
                            class="w-full bg-charcoal border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors"
                            placeholder="John">
                    </div>
                    <div class="space-y-2">
                        <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Last Name</label>
                        <input type="text" name="last_name" required
                            class="w-full bg-charcoal border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors"
                            placeholder="Doe">
                    </div>
                    <div class="space-y-2">
                        <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Email Address</label>
                        <input type="email" name="email" required
                            class="w-full bg-charcoal border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors"
                            placeholder="john@example.com">
                    </div>
                    <div class="space-y-2">
                        <label
                            class="uppercase text-[10px] tracking-widest text-brand font-bold">Mobile/WhatsApp</label>
                        <input type="tel" name="phone" required
                            class="w-full bg-charcoal border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors"
                            placeholder="+234 ...">
                    </div>

                    <div class="space-y-2">
                        <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Message Type</label>
                        <select name="message_type" required
                            class="w-full bg-charcoal border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors appearance-none text-white/60">
                            <option value="">Please Select</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Booking Support">Booking Support</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Partnership">Partnership</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Priority Level</label>
                        <select name="priority" required
                            class="w-full bg-charcoal border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors appearance-none text-white/60">
                            <option value="">Please Select</option>
                            <option value="Standard">Standard</option>
                            <option value="High">High (Urgent Movement)</option>
                            <option value="Critical">Immediate/Emergency</option>
                        </select>
                    </div>

                    <div class="md:col-span-2 space-y-2">
                        <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Preferred Contact
                            Method</label>
                        <select name="contact_method" required
                            class="w-full bg-charcoal border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors appearance-none text-white/60">
                            <option value="">Please Select</option>
                            <option value="WhatsApp">WhatsApp</option>
                            <option value="Phone Call">Phone Call</option>
                            <option value="Email">Email</option>
                        </select>
                    </div>

                    <div class="md:col-span-2 space-y-2">
                        <label class="uppercase text-[10px] tracking-widest text-brand font-bold">Your Message</label>
                        <textarea name="message" rows="5" required
                            class="w-full bg-charcoal border border-white/10 p-4 text-sm focus:border-brand outline-none transition-colors"
                            placeholder="How can we assist you today?"></textarea>
                    </div>

                    <div class="md:col-span-2 pt-4">
                        <button type="submit" class="btn-primary w-full py-5 text-sm uppercase tracking-widest">
                            Send Secure Message &rarr;
                        </button>
                    </div>
                </form>
            </div>

            <!-- Google Map -->
            <div class="bg-charcoal min-h-[400px] relative grayscale hover:grayscale-0 transition-all duration-700">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.55239!2d3.3!3d6.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzAnMDAuMCJOIDPCsDE4JzAwLjAiRQ!5e0!3m2!1sen!2sng!4v1600000000000!5m2!1sen!2sng"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    title="Sagee Elite Location">
                </iframe>
                <div class="absolute inset-0 pointer-events-none border-l border-white/10 hidden lg:block"></div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center py-16 bg-brand/5 border border-brand/10">
            <h3 class="text-3xl font-serif mb-4 text-white italic">Prefer Instant Support?</h3>
            <p class="text-white/50 mb-8 max-w-lg mx-auto">Skip the form and connect with our elite concierge team
                directly on WhatsApp for real-time fleet availability.</p>
            <a href="https://wa.me/2349040710228" target="_blank" class="btn-primary inline-flex items-center gap-4">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                </svg>
                Launch Live Chat
            </a>
        </div>
    </div>
</main>

<script>
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        const data = Object.fromEntries(formData.entries());

        const whatsappNumber = "2349040710228";

        const message = `*HeyForsagee - Contact Submission*

*Client:* ${data.first_name} ${data.last_name}
*Email:* ${data.email}
*Phone:* ${data.phone}

*Type:* ${data.message_type}
*Priority:* ${data.priority}
*Preferred Contact:* ${data.contact_method}

*Message:*
${data.message}

_Sent via Sagee Elite Web Portal_`;

        const encodedMessage = encodeURIComponent(message);
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

        window.open(whatsappUrl, '_blank');
        this.reset();
    });
</script>

<?php include 'includes/footer.php'; ?>