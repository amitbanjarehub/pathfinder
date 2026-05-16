
<div
    style="max-width: 1000px; margin: auto; padding: 20px; font-family: 'Inter', sans-serif; color: #333; background-color: #f4f4f4; scroll-behavior: smooth;">

    <!-- Section 1: Introduction -->
    <div
        style="background: white; padding: 40px; border-radius: 12px; margin-bottom: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-top: 5px solid #e31e24;">
        <h1 style="color: #111; font-size: 32px; margin-bottom: 20px; font-weight: 800;">Personality Result</h1>
        <p style="line-height: 1.6; font-size: 16px; color: #444;">
            As a <strong>Personality Type</strong>, you possess a unique blend of traits that set you apart. Your
            results below reflect your natural tendencies and preferences, aligned with the <strong>Miracles</strong>
            approach to personal growth.
        </p>
    </div>

    <!-- Section 2: Personality Traits -->
    <div
        style="background: white; padding: 40px; border-radius: 12px; margin-bottom: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
        <div style="display: flex; align-items: center; margin-bottom: 30px;">
            <span
                style="background: #e31e24; color: white; border-radius: 50%; width: 35px; height: 35px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; font-weight: bold; box-shadow: 0 2px 5px rgba(227,30,36,0.3);">1</span>
            <h2 style="margin: 0; font-size: 24px; color: #111; font-weight: 700;">Personality Traits</h2>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 300px; gap: 40px;">
            <!-- Left Side: Dynamic Traits -->
            <div>
                @foreach ($attempt->traitResults as $result)
                    <div style="margin-bottom: 25px;">
                        <div
                            style="display: flex; justify-content: space-between; margin-bottom: 8px; font-weight: 700; color: #111;">
                            <span>{{ $result->trait_name }}</span>
                            <span style="color: #e31e24;">{{ $result->percentage }}%</span>
                        </div>
                        <!-- Miracles Theme Progress Bar -->
                        <div style="height: 14px; background: #eee; border-radius: 10px; position: relative;">
                            <div
                                style="width: {{ $result->percentage }}%; height: 100%; background: linear-gradient(90deg, #111, #e31e24); border-radius: 10px;">
                            </div>
                            <!-- Gold Indicator Dot -->
                            <div
                                style="position: absolute; left: {{ $result->percentage }}%; top: 50%; transform: translate(-50%, -50%); width: 18px; height: 18px; background: #f9b000; border: 3px solid white; border-radius: 50%; box-shadow: 0 0 8px rgba(249,176,0,0.5);">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Right Side: Highlight Box -->
            <div style="background: #111; border-radius: 12px; padding: 25px; text-align: center; color: white;">
                <p
                    style="font-weight: bold; color: #f9b000; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">
                    Dominant Trait</p>
                <div
                    style="font-size: 24px; font-weight: 800; margin-bottom: 15px; border-bottom: 2px solid #e31e24; display: inline-block; padding-bottom: 5px;">
                    {{ $attempt->traitResults->first()->trait_name ?? 'N/A' }}
                </div>
                <p style="font-size: 14px; color: #ccc; line-height: 1.6; font-style: italic;">
                    "Where magic happens through understanding your inner strengths."
                </p>
            </div>
        </div>
    </div>

    <!-- Section 3: Influential Traits (Locked) -->
    <div
        style="background: white; padding: 40px; border-radius: 12px; margin-bottom: 20px; position: relative; border-left: 5px solid #f9b000;">
        <h3 style="margin-top: 0; margin-bottom: 25px; color: #111; font-weight: 700;">Influential Traits</h3>

        <div style="display: flex; justify-content: space-around; filter: blur(3px); opacity: 0.3;">
            @php $lockedTraits = ['Perfectionism', 'Ambition', 'Motivation', 'Leadership']; @endphp
            @foreach ($lockedTraits as $lt)
                <div style="text-align: center;">
                    <div
                        style="width: 65px; height: 65px; border: 2px solid #111; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
                        <span style="font-size: 20px;">🔒</span>
                    </div>
                    <span style="font-size: 14px; font-weight: 600; color: #111;">{{ $lt }}</span>
                </div>
            @endforeach
        </div>

        <!-- Unlock Overlay -->
        <div
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(255,255,255,0.95); padding: 30px; border-radius: 12px; border: 2px dashed #e31e24; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 70%;">
            <p style="margin: 0 0 20px 0; font-weight: 800; color: #111; font-size: 18px;">Ready to see the full magic?
            </p>
            <a href="#premium-section"
                style="display: inline-block; background: #e31e24; color: white; padding: 12px 30px; border-radius: 30px; font-weight: bold; text-decoration: none; transition: 0.3s; box-shadow: 0 4px 10px rgba(227,30,36,0.3);">
                Get access now ✨
            </a>
        </div>
    </div>

    <!-- Section 4: Strengths & Weaknesses -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div style="background: white; padding: 30px; border-radius: 12px; border-bottom: 4px solid #f9b000;">
            <h3 style="color: #111; margin-top: 0; display: flex; align-items: center;">
                <span style="color: #f9b000; margin-right: 10px;">★</span> Your Strengths
            </h3>
            <ul style="list-style: none; padding: 0; font-size: 14px; color: #444;">
                <li style="margin-bottom: 12px;"><strong>Insightful:</strong> You see beyond the surface.</li>
                <li style="margin-bottom: 12px;"><strong>Empathetic:</strong> Strong connection with others.</li>
            </ul>
        </div>

        <div style="background: white; padding: 30px; border-radius: 12px; border-bottom: 4px solid #e31e24;">
            <h3 style="color: #111; margin-top: 0; display: flex; align-items: center;">
                <span style="color: #e31e24; margin-right: 10px;">⚠</span> Areas to Mentor
            </h3>
            <ul style="list-style: none; padding: 0; font-size: 14px; color: #444;">
                <li style="margin-bottom: 12px;"><strong>Overthinking:</strong> Can lead to delayed action.</li>
                <li style="margin-bottom: 12px;"><strong>Self-Criticism:</strong> High standards for yourself.</li>
            </ul>
        </div>
    </div>

    <!-- Section 5: Premium CTA (Target of Scroll) -->
    {{-- <div id="premium-section" style="background: #111; border-radius: 16px; padding: 60px 40px; margin-top: 40px; display: flex; align-items: center; justify-content: space-between; gap: 40px; color: white; position: relative; border: 1px solid #333;">
        
        <div style="flex: 1; text-align: center;">
            <img src="https://www.16personalities.com/static/images/profile/reports/protagonist/upgrade.svg" 
                 alt="Miracles Upgrade" style="max-width: 100%; height: auto; filter: drop-shadow(0 0 10px rgba(227,30,36,0.2));">
        </div>

        <div style="flex: 1.5;">
            <div style="display: inline-block; background: #e31e24; color: white; padding: 5px 15px; border-radius: 4px; font-size: 12px; font-weight: bold; margin-bottom: 15px;">
                UNLOCK FULL POTENTIAL
            </div>
            <h2 style="font-size: 32px; margin: 0 0 20px 0; font-weight: 800; color: #f9b000;">Learn what’s really driving you</h2>
            <p style="color: #bbb; line-height: 1.7; margin-bottom: 25px;">
                Your full report explains the mechanics – why you react the way you do, and how to harness your unique <strong>Miracles</strong>. Includes a 33-page personal growth guide and AI mentor.
            </p>
            <div style="font-size: 48px; font-weight: 800; color: white; margin-bottom: 30px;">
                ₹199 <span style="font-size: 16px; color: #888; font-weight: normal;">(One-time access)</span>
            </div>
            <a href="#" style="display: inline-block; background: #e31e24; color: white; padding: 18px 45px; border-radius: 8px; text-decoration: none; font-size: 18px; font-weight: bold; box-shadow: 0 10px 20px rgba(227,30,36,0.3);">
                Unlock full results →
            </a>
            <p style="color: #666; font-size: 12px; margin-top: 20px;">30-day money-back guarantee.</p>
        </div>
    </div> --}}

    <!-- Section 5: Premium CTA -->
    <div id="premium-section"
        style="background: #111; border-radius: 16px; padding: 60px 40px; margin-top: 40px; display: flex; align-items: center; justify-content: space-between; gap: 40px; color: white; border: 1px solid #333;">
        <div style="flex: 1; text-align: center;">
            <img src="https://www.16personalities.com/static/images/profile/reports/protagonist/upgrade.svg"
                alt="Miracles Upgrade" style="max-width: 100%; height: auto;">
        </div>
        <div style="flex: 1.5;">
            <div
                style="display: inline-block; background: #e31e24; color: white; padding: 5px 15px; border-radius: 4px; font-size: 12px; font-weight: bold; margin-bottom: 15px;">
                UNLOCK FULL POTENTIAL</div>
            <h2 style="font-size: 32px; margin: 0 0 20px 0; font-weight: 800; color: #f9b000;">Learn what’s really
                driving you</h2>
            <p style="color: #bbb; line-height: 1.7; margin-bottom: 25px;">Your full report explains the mechanics – why
                you react the way you do.</p>
            <div style="font-size: 48px; font-weight: 800; color: white; margin-bottom: 30px;">₹199</div>

            <!-- Button to open Payment System -->
            <button
                onclick="document.getElementById('checkout-system').style.display = 'flex'; window.location.hash = 'checkout-system';"
                style="background: #e31e24; color: white; padding: 18px 45px; border-radius: 8px; border:none; cursor:pointer; font-size: 18px; font-weight: bold; box-shadow: 0 10px 20px rgba(227,30,36,0.3);">
                Unlock full results →
            </button>
        </div>
    </div>

    <!-- NEW: PAYMENT SYSTEM UI (Initially Hidden) -->
    <div id="checkout-system"
        style="display: none; margin-top: 40px; background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); overflow: hidden; min-height: 500px;">

        <!-- Left Side: Order Summary -->
        <div style="flex: 1; padding: 60px; border-right: 1px solid #eee; background: #fafafa;">
            <div style="display: flex; align-items: center; color: #666; margin-bottom: 40px; cursor: pointer;  ">
                <img src="{{ asset('logo.png') }}" width="120" alt="Logo"
                    style="background-color: black; padding: 8px">
            </div>
            <p style="color: #666; margin-bottom: 5px;">Pay Miracles Analytics Limited</p>
            <h1 style="font-size: 42px; margin: 0 0 40px 0;">₹199.00</h1>

            <div style="display: flex; gap: 15px; margin-bottom: 25px;">
                <div
                    style="width: 50px; height: 50px; background: #eee; border-radius: 8px; display:flex; align-items:center; justify-content:center;">
                    ✨</div>
                <div style="flex:1;">
                    <div style="display:flex; justify-content:space-between; font-weight: bold;">
                        <span>Premium Personality Report</span>
                        <span>₹199.00</span>
                    </div>
                    <p style="font-size: 13px; color: #777; margin: 5px 0;">Discover deep insights into your
                        perfectionism, resilience, and growth...</p>
                </div>
            </div>

            <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
            <div style="display:flex; justify-content:space-between; margin-bottom: 10px; color: #666;">
                <span>Subtotal</span>
                <span>₹199.00</span>
            </div>
            <div style="display:flex; justify-content:space-between; margin-bottom: 10px; color: #666;">
                <span>Tax <small>(i)</small></span>
                <span>₹0.00</span>
            </div>
            <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
            <div style="display:flex; justify-content:space-between; font-weight: bold; font-size: 18px;">
                <span>Total due</span>
                <span>₹199.00</span>
            </div>
        </div>

        <!-- Right Side: Contact & Payment Form -->
        <div style="flex: 1; padding: 60px;">
            <div
                style="display: flex; align-items: center; gap: 5px; font-weight: bold; color: #00d66f; margin-bottom: 30px;">
                <span
                    style="background: #00d66f; color: white; border-radius: 5px; padding: 2px 5px; font-size: 12px;">▶</span>
                link
            </div>

            <label style="display: block; font-weight: 600; margin-bottom: 10px;">Contact information</label>
            <input type="email" placeholder="email@example.com"
                style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 8px; margin-bottom: 30px; font-size: 16px;">

            <label style="display: block; font-weight: 600; margin-bottom: 10px;">Payment method</label>
            <div style="border: 1px solid #ddd; border-radius: 8px;">
                <!-- UPI Option -->
                <label
                    style="display: flex; align-items: center; padding: 15px; border-bottom: 1px solid #ddd; cursor: pointer;">
                    <input type="radio" name="pay" checked style="margin-right: 15px; accent-color: #00d66f;">
                    <span
                        style="background: #f0f0f0; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; margin-right: 10px;">UPI</span>
                    <span style="font-size: 15px;">UPI</span>
                </label>
                <!-- Card Option -->
                <label style="display: flex; align-items: center; padding: 15px; cursor: pointer;">
                    <input type="radio" name="pay" style="margin-right: 15px; accent-color: #00d66f;">
                    <span style="margin-right: 10px;">💳</span>
                    <span style="font-size: 15px; flex: 1;">Card</span>
                    <div style="opacity: 0.6;">
                        <small>VISA MC AMEX</small>
                    </div>
                </label>
            </div>

            <div style="margin-top: 30px; display: flex; align-items: flex-start; gap: 10px;">
                <input type="checkbox" checked style="margin-top: 5px; accent-color: #00d66f;">
                <div style="font-size: 13px; color: #555;">
                    <strong style="color: #333;">Save my information for faster checkout</strong><br>
                    Pay securely at Miracles Analytics Limited.
                </div>
            </div>

            <button id="pay-button" onclick="payWithRazorpay()"
                style="width: 100%; background: #00d66f; color: white; border: none; padding: 18px; border-radius: 10px; font-size: 18px; font-weight: bold; margin-top: 30px; cursor: pointer;">
                Pay ₹199.00
            </button>

            <p style="text-align: center; font-size: 12px; color: #999; margin-top: 20px;">
                Securely processed by <a href="#" style="color: #00d66f; text-decoration: none;">Link</a>
            </p>
        </div>
    </div>

    <!-- NEW: Email Result Section -->
    <div
        style="background: white; padding: 40px; border-radius: 16px; margin-top: 30px; margin-bottom: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border: 1px solid #eee;">

        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 30px;">

            <!-- Left Content -->
            <div style="flex: 1; min-width: 280px;">

                <div
                    style="display: inline-flex; align-items: center; justify-content: center; width: 60px; height: 60px; background: rgba(227,30,36,0.1); border-radius: 50%; margin-bottom: 20px;">

                    <span style="font-size: 28px;">📩</span>
                </div>

                <h2 style="margin: 0 0 15px 0; font-size: 28px; color: #111; font-weight: 800;">
                    Want your result on Email?
                </h2>

                <p style="margin: 0; color: #555; line-height: 1.7; font-size: 15px;">
                    Get your personality insights delivered directly to your inbox so you can access your report
                    anytime,
                    anywhere.
                </p>

                <div
                    style="margin-top: 18px; display: inline-flex; align-items: center; gap: 8px; background: #f9f9f9; padding: 8px 14px; border-radius: 30px; border: 1px solid #eee;">

                    <span style="color: #00b67a;">✔</span>
                    <span style="font-size: 13px; color: #444;">
                        Instant delivery • Secure • PDF ready
                    </span>
                </div>
            </div>

            <!-- Right Form -->
            <div
                style="flex: 1; min-width: 320px; background: #fafafa; padding: 30px; border-radius: 14px; border: 1px solid #eee;">

                <label style="display: block; margin-bottom: 12px; font-size: 14px; font-weight: 700; color: #222;">
                    Email Address
                </label>

                <input type="email" placeholder="Enter your email address"
                    style="width: 100%; padding: 16px; border-radius: 10px; border: 1px solid #ddd; font-size: 15px; outline: none; margin-bottom: 20px; transition: 0.3s; box-sizing: border-box;">

                <button
                    style="width: 100%; background: linear-gradient(135deg, #111, #e31e24); color: white; border: none; padding: 16px; border-radius: 10px; font-size: 16px; font-weight: 700; cursor: pointer; box-shadow: 0 8px 18px rgba(227,30,36,0.2); transition: 0.3s;">

                    Send Result to Email ✨
                </button>

                <p style="font-size: 12px; color: #888; margin-top: 15px; text-align: center; line-height: 1.5;">
                    We respect your privacy. Your email will only be used for report delivery.
                </p>
            </div>

        </div>
    </div>

</div>

<script>
    // Smooth scroll for internal link
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<script>
    function payWithRazorpay() {
        var options = {
            "key": "YOUR_RAZORPAY_KEY_ID", // Yahan apni Razorpay Dashboard se Key ID dalein
            "amount": "19900", // Amount paise mein hota hai (199 * 100)
            "currency": "INR",
            "name": "Miracles Analytics",
            "description": "Premium Personality Report",
            "image": "{{ asset('logo.png') }}",
            "handler": function(response) {
                // Jab payment successful ho jaye
                alert("Payment Successful! ID: " + response.razorpay_payment_id);

                // Yahan aap AJAX call kar ke database mein entry save kar sakte hain
                // window.location.href = "/payment-success?id=" + response.razorpay_payment_id;
            },
            "prefill": {
                "name": "User Name", // Aap yahan dynamic value daal sakte hain
                "email": document.querySelector('input[type="email"]').value,
            },
            "theme": {
                "color": "#e31e24" // Aapka branding red color
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>
</div>
