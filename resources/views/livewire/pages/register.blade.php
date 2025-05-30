<div class="min-h-screen flex flex-col md:flex-row w-full items-stretch">
    <div
        class="w-full md:w-1/2 h-screen flex items-center justify-center bg-primary-200 md:fixed md:left-0 md:top-0 md:h-full">
        @include('livewire.components.pattern-side')
    </div>

    <!-- Login Side -->
    <div
        class="w-full md:fixed md:right-0 md:top-0 md:h-full md:w-1/2 bg-primary-400 flex items-center justify-center max-h-screen">
        <div class="w-full max-w-sm p-8 rounded-2xl shadow ring-1 ring-secondary-200 bg-secondary-200">
            <div class="text-center mb-6">
                <h2 class="text-200 font-bold text-primary-100">Daftar akun cepuin.</h2>
            </div>

            <form action="/register" method="POST" class="space-y-6">
                @csrf
                <input type="text" name="name" placeholder="Nama"
                    class="w-full rounded-md border px-4 py-3 text-secondary-100 font-medium" />
                <input type="text" name="username" placeholder="Username"
                    class="w-full rounded-md border px-4 py-3 text-secondary-100 font-medium" />
                <input type="email" name="email" placeholder="Email address"
                    class="w-full rounded-md border px-4 py-3 text-secondary-100 font-medium" />

                <!-- Password -->
                <div class="relative w-full">
                    <input id="passwordInput" type="password" name="password" placeholder="Password"
                        class="w-full rounded-md border px-4 py-3 text-secondary-100 font-medium pr-12" />
                    <span id="togglePassword"
                        class="{{ config('constants.icon.eye') }} text-xl text-gray-500 absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer"></span>
                </div>
                <div class="relative w-full">
                    <input id="confirmPasswordInput" type="password" name="password_confirmation"
                        placeholder="Konfirmasi Password"
                        class="w-full rounded-md border px-4 py-3 text-secondary-100 font-medium pr-12" />
                    <span id="toggleConfirmPassword"
                        class="{{ config('constants.icon.eye') }} text-xl text-gray-500 absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer"></span>
                </div>

                <button type="submit"
                    class="w-full py-3 bg-primary-400 text-white font-bold rounded-md">Daftar</button>

            </form>
            <form action="{{ route('google.login') }}" method="GET" class="space-y-6">
                @csrf
                <button type="submit"
                    class="w-full py-2 mt-2 bg-primary-100 text-white rounded-md font-semibold flex items-center justify-center gap-2">
                    <span class="{{ config('constants.icon.google') }} text-xl"></span>
                    Login pakai Google
                </button>
            </form>
            <p class="text-center text-sm mt-4 text-primary-200">
                Tidak punya akun? <a href="login" class="text-primary-100 font-bold">masuk</a>
            </p>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const setups = [{
                inputId: 'passwordInput',
                toggleId: 'togglePassword'
            },
            {
                inputId: 'confirmPasswordInput',
                toggleId: 'toggleConfirmPassword'
            },
        ];

        setups.forEach(({
            inputId,
            toggleId
        }) => {
            const toggle = document.getElementById(toggleId);
            const input = document.getElementById(inputId);

            if (toggle && input) {
                toggle.addEventListener('click', function() {
                    const isPassword = input.type === 'password';
                    input.type = isPassword ? 'text' : 'password';
                    this.classList.toggle('fa-eye');
                    this.classList.toggle('fa-eye-slash');
                });
            }
        });
    });
</script>
