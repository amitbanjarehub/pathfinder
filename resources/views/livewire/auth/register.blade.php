<x-layouts.auth>
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf
            <!-- Name -->
            <flux:input name="name" :label="__('Name')" :value="old('name')" type="text" required autofocus
                autocomplete="name" :placeholder="__('Full name')" />

           

            <!-- Role Selection -->
            <flux:select name="role" :label="__('I am registering as')" required>
                <option value="student" selected>{{ __('Student') }}</option>
                <option value="counsellor">{{ __('Counsellor') }}</option>
                <option value="professional">{{ __('Professional') }}</option>
                <option value="institute">{{ __('Institute') }}</option>
            </flux:select>

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full" data-test="register-user-button">
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <flux:link :href="route('login')" class="text-primary-600 dark:text-primary-400 hover:underline"
                wire:navigate>{{ __('Log in') }}</flux:link>
        </div>
    </div>

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
</x-layouts.auth>
