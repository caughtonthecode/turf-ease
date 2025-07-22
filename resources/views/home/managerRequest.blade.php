@include('home.homecss')
@include('home.header')

<div class="custom-container mx-auto mt-24">
    @if (Auth::id())
        @if ($requestStatus->user_status == 'pending')
            <div class="max-w-md mx-auto mt-8 text-center p-6">
                <h1 class="text-xl text-green-600">
                    You application has been sent.
                </h1>
                <p class="text-sm">Please wait for confirmation</p>
            </div>
        @else
            <div class="max-w-md mx-auto mt-8">
                <form method="POST" action="{{ route('managerRequest') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name"
                                value="{{ $userAll->f_name . ' ' . $userAll->l_name }}"
                                class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" value="{{ $userAll->email }}"
                                class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <div class="mt-1">
                            <input id="phone" name="phone" type="tel" value="{{ $userAll->phone }}"
                                class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        @endif
    @else
        <div class="text-center mt-20 mb-10">
            <h1 class="text-4xl">Please <a href="{{ url('login') }}" class="text-green-600 hover:underline">Login</a>
                or
                <a href="{{ url('register') }}" class="text-green-600 hover:underline">Register</a> First
            </h1>
        </div>
    @endif
</div>

@include('home.footer')
