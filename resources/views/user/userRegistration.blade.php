<x-main-layout>
    <div class="relative min-h-[100vh] flex flex-col items-center justify-center pt-32 pb-16 px-4"
        style="background: url('/img/search-bg2.jpg') center/cover no-repeat fixed; font-family: 'Be Vietnam Pro', sans-serif;">
        
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/75 pointer-events-none"></div>

        <!-- Glassmorphism Card -->
        <div class="relative z-10 w-full max-w-2xl bg-white/10 backdrop-blur-xl border border-white/20 rounded-[32px] p-8 sm:p-10 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.5)]">
            
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-white mb-2">Create an Account</h1>
                <p class="text-white/70">Join TurfEase and start booking instantly</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Full Name -->
                    <div>
                        <label for="f_name" class="block text-sm font-semibold text-white/90 mb-2">Full Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-white/50">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <input id="f_name" type="text" name="f_name" value="{{ old('f_name') }}" required autofocus
                                   class="w-full pl-11 pr-4 py-3.5 bg-white/10 border border-white/20 rounded-xl text-white placeholder-white/40 focus:bg-white/20 focus:border-[#06B24E] focus:ring-1 focus:ring-[#06B24E] transition-all"
                                   placeholder="Mr John">
                        </div>
                        <x-input-error :messages="$errors->get('f_name')" class="mt-2 text-red-400 text-sm font-medium" />
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-white/90 mb-2">Phone Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-white/50">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                   class="w-full pl-11 pr-4 py-3.5 bg-white/10 border border-white/20 rounded-xl text-white placeholder-white/40 focus:bg-white/20 focus:border-[#06B24E] focus:ring-1 focus:ring-[#06B24E] transition-all"
                                   placeholder="017XXXXXXXX">
                        </div>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2 text-red-400 text-sm font-medium" />
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-white/90 mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-white/50">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                               class="w-full pl-11 pr-4 py-3.5 bg-white/10 border border-white/20 rounded-xl text-white placeholder-white/40 focus:bg-white/20 focus:border-[#06B24E] focus:ring-1 focus:ring-[#06B24E] transition-all"
                               placeholder="john@example.com">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm font-medium" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-white/90 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-white/50">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <input id="password" type="password" name="password" required autocomplete="new-password"
                                   class="w-full pl-11 pr-4 py-3.5 bg-white/10 border border-white/20 rounded-xl text-white placeholder-white/40 focus:bg-white/20 focus:border-[#06B24E] focus:ring-1 focus:ring-[#06B24E] transition-all"
                                   placeholder="••••••••">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm font-medium" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-white/90 mb-2">Confirm Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-white/50">
                                <i class="fa-solid fa-lock opacity-60"></i>
                            </div>
                            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                                   class="w-full pl-11 pr-4 py-3.5 bg-white/10 border border-white/20 rounded-xl text-white placeholder-white/40 focus:bg-white/20 focus:border-[#06B24E] focus:ring-1 focus:ring-[#06B24E] transition-all"
                                   placeholder="••••••••">
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400 text-sm font-medium" />
                    </div>
                </div>

                <!-- Submit Button (Explicit color to prevent Tailwind override) -->
                <button type="submit" 
                        class="w-full mt-4 py-4 px-6 rounded-xl text-white font-bold text-lg shadow-[0_10px_25px_-5px_rgba(6,178,78,0.4)] hover:shadow-[0_15px_30px_-5px_rgba(6,178,78,0.6)] hover:-translate-y-1 transition-all duration-300"
                        style="background: linear-gradient(135deg, #06B24E, #048238); color: white !important;">
                    Complete Registration
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-white/70">
                    Already registered? 
                    <a href="{{ route('login') }}" class="text-[#06B24E] font-bold hover:text-white transition-colors">Log in here</a>
                </p>
            </div>
            
        </div>
    </div>
</x-main-layout>