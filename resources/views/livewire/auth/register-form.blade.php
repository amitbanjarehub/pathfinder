<div class="flex flex-col gap-6">
    <h2 class="text-xl font-bold text-center">Create Account</h2>

    <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-4">
        @csrf

        <input name="name" type="text" placeholder="Full name" class="border p-2 rounded" required>

        {{-- <!-- Mobile Number -->
        <div>
            <label>WhatsApp Number</label>

            <div class="flex gap-2">
                <input type="text" name="mobile_no" id="mobile_no" class="border p-2 rounded w-full" maxlength="10"
                    placeholder="Enter WhatsApp Number">

                <button type="button" onclick="sendOtp()" class="bg-blue-600 text-white px-4 rounded">
                    Send OTP
                </button>
            </div>
        </div>

        <!-- OTP -->
        <div id="otp-box" style="display:none;">
            <label>Enter OTP</label>

            <div class="flex gap-2">
                <input type="text" id="otp" class="border p-2 rounded w-full" placeholder="Enter OTP">

                <button type="button" onclick="verifyOtp()" class="bg-green-600 text-white px-4 rounded">
                    Verify OTP
                </button>
            </div>
        </div>

        <input type="hidden" name="otp_verified" id="otp_verified" value="0"> --}}

        <!-- Mobile Number -->
        <div>
            <label class="block mb-1 font-medium">
                WhatsApp Number
            </label>

            <input type="text" name="mobile_no" id="mobile_no" class="border p-2 rounded w-full" maxlength="10"
                placeholder="Enter WhatsApp Number" oninput="handleMobileInput(this)">

            <small id="mobile-status" class="text-sm"></small>
        </div>

        <!-- OTP BOX -->
        <div id="otp-box" style="display:none;">
            <label class="block mb-1 font-medium mt-3">
                Enter OTP
            </label>

            <input type="text" id="otp" class="border p-2 rounded w-full" maxlength="6"
                placeholder="Enter OTP" oninput="handleOtpInput(this)">

            <small id="otp-status" class="text-sm"></small>
        </div>

        <!-- HIDDEN -->
        <input type="hidden" name="otp_verified" id="otp_verified" value="0">

        {{-- <input name="email" type="email" placeholder="Email" class="border p-2 rounded" required> --}}

        {{-- <input name="password" type="password" placeholder="Password" class="border p-2 rounded" required> --}}

        {{-- <input name="password_confirmation" type="password" placeholder="Confirm Password" class="border p-2 rounded" required> --}}

        <select name="role" class="border p-2 rounded">
            <option value="student">Student</option>
            <option value="counsellor">Counsellor</option>
            <option value="professional">Professional</option>
            <option value="institute">Institute</option>
        </select>

        <button type="submit" class="bg-indigo-600 text-white py-2 rounded">
            Create Account
        </button>
    </form>
</div>|

{{-- <script>
    function sendOtp() {

        let mobile = document.getElementById('mobile_no').value;

        fetch("{{ route('send.otp') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    mobile_no: mobile
                })
            })
            .then(res => res.json())
            .then(data => {

                alert(data.message);

                if (data.success) {
                    document.getElementById('otp-box').style.display = 'block';
                }
            });
    }

    function verifyOtp() {

        let otp = document.getElementById('otp').value;

        let mobile = document.getElementById('mobile_no').value;

        fetch("{{ route('verify.otp') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    otp: otp,
                    mobile_no: mobile
                })
            })
            .then(res => res.json())
            .then(data => {

                alert(data.message);

                if (data.success) {

                    // ✅ HIDDEN FIELD UPDATE
                    document.getElementById('otp_verified').value = 1;

                    console.log(document.getElementById('otp_verified').value);

                    alert('OTP Verified Successfully');
                }
            });
    }
</script> --}}

<script>

let otpSending = false;
let otpVerifying = false;

function handleMobileInput(input)
{
    let mobile = input.value;

    // only numbers
    input.value = mobile.replace(/\D/g, '');

    if(input.value.length === 10 && !otpSending)
    {
        sendOtp();
    }
}

function handleOtpInput(input)
{
    let otp = input.value;

    // only numbers
    input.value = otp.replace(/\D/g, '');

    if(input.value.length === 6 && !otpVerifying)
    {
        verifyOtp();
    }
}

function sendOtp()
{
    otpSending = true;

    let mobile = document.getElementById('mobile_no').value;

    document.getElementById('mobile-status').innerHTML =
        'Sending OTP...';

    fetch("{{ route('send.otp') }}", {
        method: "POST",

        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },

        body: JSON.stringify({
            mobile_no: mobile
        })
    })
    .then(res => res.json())
    .then(data => {

        otpSending = false;

        if(data.success)
        {
            document.getElementById('otp-box').style.display = 'block';

            document.getElementById('mobile-status').innerHTML =
                'OTP sent successfully';
        }
        else
        {
            document.getElementById('mobile-status').innerHTML =
                'Failed to send OTP';
        }
    });
}

function verifyOtp()
{
    otpVerifying = true;

    let otp = document.getElementById('otp').value;

    let mobile = document.getElementById('mobile_no').value;

    document.getElementById('otp-status').innerHTML =
        'Verifying OTP...';

    fetch("{{ route('verify.otp') }}", {

        method: "POST",

        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },

        body: JSON.stringify({
            otp: otp,
            mobile_no: mobile
        })

    })
    .then(res => res.json())
    .then(data => {

        otpVerifying = false;

        if(data.success)
        {
            document.getElementById('otp_verified').value = 1;

            document.getElementById('otp-status').innerHTML =
                'OTP Verified Successfully';
        }
        else
        {
            document.getElementById('otp-status').innerHTML =
                'Invalid OTP';

            document.getElementById('otp_verified').value = 0;
        }
    });
}

</script>
