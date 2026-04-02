<x-main-layout>
<div class="auth-page">
    <div class="auth-overlay"></div>
    
    <div class="auth-card">
        <div class="auth-header">
            <h2 class="auth-title">Welcome Back</h2>
            <p class="auth-subtitle">Sign in to book your favorite turfs</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" style="color: #06B24E; font-size: 0.9rem; text-align: center; margin-bottom: 20px;" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="auth-group">
                <label for="email" class="auth-label">Email Address</label>
                <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Enter your email">
                <x-input-error :messages="$errors->get('email')" class="auth-error" />
            </div>

            <!-- Password -->
            <div class="auth-group">
                <label for="password" class="auth-label">Password</label>
                <input id="password" class="auth-input" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                <x-input-error :messages="$errors->get('password')" class="auth-error" />
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="auth-check-group">
                <label for="remember_me" class="checkbox-wrap">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="auth-forgot" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif
            </div>

            <button type="submit" class="btn-auth">
                Log In
            </button>
        </form>

        <div class="auth-footer">
            Don't have an account? <a href="{{ route('register') }}">Create one</a>
        </div>
    </div>
</div>
</x-main-layout>