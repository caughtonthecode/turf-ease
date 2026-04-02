<x-main-layout>
<div class="auth-page">
    <div class="auth-overlay"></div>
    
    <div class="auth-card auth-register">
        <div class="auth-header">
            <h2 class="auth-title">Create an Account</h2>
            <p class="auth-subtitle">Join TurfEase and book grounds instantly</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="auth-grid">
                <!-- Name -->
                <div class="auth-group">
                    <label for="name" class="auth-label">Full Name</label>
                    <input id="name" class="auth-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="John Doe">
                    <x-input-error :messages="$errors->get('name')" class="auth-error" />
                </div>

                <!-- Phone -->
                <div class="auth-group">
                    <label for="phone" class="auth-label">Phone Number</label>
                    <input id="phone" class="auth-input" type="number" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="017XXXXXXXX">
                    <x-input-error :messages="$errors->get('phone')" class="auth-error" />
                </div>
            </div>

            <div class="auth-grid">
                <!-- Email -->
                <div class="auth-group">
                    <label for="email" class="auth-label">Email Address</label>
                    <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="example@email.com">
                    <x-input-error :messages="$errors->get('email')" class="auth-error" />
                </div>

                <!-- Address -->
                <div class="auth-group">
                    <label for="u_address" class="auth-label">Address</label>
                    <input id="u_address" class="auth-input" type="text" name="u_address" value="{{ old('u_address') }}" required autocomplete="u_address" placeholder="Uttara, Dhaka">
                    <x-input-error :messages="$errors->get('u_address')" class="auth-error" />
                </div>
            </div>

            <div class="auth-grid">
                <!-- Password -->
                <div class="auth-group">
                    <label for="password" class="auth-label">Password</label>
                    <input id="password" class="auth-input" type="password" name="password" required autocomplete="new-password" placeholder="Create password">
                    <x-input-error :messages="$errors->get('password')" class="auth-error" />
                </div>

                <!-- Confirm Password -->
                <div class="auth-group">
                    <label for="password_confirmation" class="auth-label">Confirm Password</label>
                    <input id="password_confirmation" class="auth-input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="auth-error" />
                </div>
            </div>

            <button type="submit" class="btn-auth" style="margin-top: 10px;">
                Complete Registration
            </button>
        </form>

        <div class="auth-footer">
            Already registered? <a href="{{ route('login') }}">Log in here</a>
        </div>
    </div>
</div>
</x-main-layout>
