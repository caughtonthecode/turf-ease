<x-main-layout>
    <div class="relative min-h-[100vh] flex flex-col items-center justify-center pt-32 pb-16 px-4"
        style="background: url('{{ asset('assets/img/login-bg.png') }}') center/cover no-repeat fixed; font-family: 'Be Vietnam Pro', sans-serif;">
        
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/90 pointer-events-none"></div>

        <!-- Glassmorphism Card -->
        <div class="relative z-10 w-full max-w-lg bg-white/10 backdrop-blur-xl border border-white/20 rounded-[32px] p-8 sm:p-10 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.5)]">
            
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/10 border border-white/20 mb-4 text-white">
                    <i class="fa-solid fa-user text-2xl"></i>
                </div>
                <h1 class="text-3xl font-bold text-white mb-2">Welcome Back!</h1>
                <p class="text-white/70">Sign in to book your favorite turfs</p>
            </div>

            <x-auth-session-status class="mb-4 text-center text-[#06B24E] font-semibold" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-white/90 mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-white/50">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                               class="w-full pl-11 pr-4 py-3.5 bg-white/10 border border-white/20 rounded-xl text-white placeholder-white/40 focus:bg-white/20 focus:border-[#06B24E] focus:ring-1 focus:ring-[#06B24E] transition-all"
                               placeholder="john@example.com">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm font-medium" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-white/90 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-white/50">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="w-full pl-11 pr-4 py-3.5 bg-white/10 border border-white/20 rounded-xl text-white placeholder-white/40 focus:bg-white/20 focus:border-[#06B24E] focus:ring-1 focus:ring-[#06B24E] transition-all"
                               placeholder="••••••••">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm font-medium" />
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mt-4">
                    <label for="remember_me" class="flex items-center gap-2 cursor-pointer group">
                        <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 rounded border-white/20 bg-white/10 text-[#06B24E] focus:ring-[#06B24E]">
                        <span class="text-sm text-white/70 group-hover:text-white transition-colors">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm font-semibold text-[#06B24E] hover:text-white transition-colors">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <!-- Submit Button (Explicit color to prevent Tailwind override) -->
                <button type="submit" 
                        class="w-full py-4 px-6 rounded-xl text-white font-bold text-lg shadow-[0_10px_25px_-5px_rgba(6,178,78,0.4)] hover:shadow-[0_15px_30px_-5px_rgba(6,178,78,0.6)] hover:-translate-y-1 transition-all duration-300"
                        style="background: linear-gradient(135deg, #06B24E, #048238); color: white !important;">
                    Sign In
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-white/70">
                    Don’t have an account yet? 
                    <a href="{{ route('register') }}" class="text-[#06B24E] font-bold hover:text-white transition-colors">Register Now</a>
                </p>
            </div>
            
        </div>
    </div>
</x-main-layout>
