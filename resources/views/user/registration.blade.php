    <div class="min-w-screen mt-20 flex items-center justify-center px-5 py-5 font-OpenSans">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full">
                <div class="hidden mx-auto md:block w-1/2 bg-slate-200 py-10 px-10">
                    <img src="img/login-bg.png" class="p-10">
                    <h2 class="text-center text-[#333333] font-Audiowide text-3xl font-bold">Elevate Your Game to a
                        New
                        Dimension</h2>
                </div>
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">REGISTER</h1>
                        <p>Enter your information to register</p>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-3 relative">
                                    <label for="" class="text-xs font-semibold px-1">Full Name</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="text" name="f_name"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="Mr John" value="{{ old('f_name') }}">
                                    </div>
                                    <span class="text-xs font-semibold text-red-400 absolute left-4">
                                        @error('f_name')
                                            {{ $message = 'Name is required' }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-3 relative">
                                    <label for="" class="text-xs font-semibold px-1">Email</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="email" name="email"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="johnsmith@example.com" value="{{ old('email') }}">
                                    </div>
                                    <span class="text-xs font-semibold text-red-400 absolute left-4">
                                        @error('email')
                                            {{ $message = 'The Email field is required' }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-3 relative">
                                    <label for="" class="text-xs font-semibold px-1">Phone</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="tel" name="phone"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="01XX-XXXXXX" value="{{ old('phone') }}">
                                    </div>
                                    <span class="text-xs font-semibold text-red-400 absolute left-4">
                                        @error('phone')
                                            {{ $message = 'Phone field is required' }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-3 relative">
                                    <label for="" class="text-xs font-semibold px-1">Password</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="password" name="password"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="************">
                                    </div>
                                    <span class="text-xs font-semibold text-red-400 absolute left-4">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-10 relative">
                                    <label for="" class="text-xs font-semibold px-1">Confirm Password</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="password" name="password_confirmation"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="************">
                                    </div>
                                    <span class="text-xs font-semibold text-red-400 absolute left-4">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>


                            <div class="flex -mx-3">
                                <div class="w-full px-3">
                                    {{-- <button
                                    class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">REGISTER
                                    NOW</button> --}}
                                    <input type="submit"
                                        class="block w-full cursor-pointer max-w-xs mx-auto bg-green-500 hover:bg-green-700 focus:bg-green-700 text-white rounded-lg px-3 py-3 font-semibold"
                                        value="Register Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
