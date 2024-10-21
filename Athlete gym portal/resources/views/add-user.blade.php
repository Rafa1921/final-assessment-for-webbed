<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if(session('error'))
                    <div class="w-full alert alert-danger">{{session('error')}}</div>
                @endif
                {{-- @if(session('error1'))
                    <div class="w-full alert alert-danger">{{session('error1')}}</div>
                @endif
                @if(session('error2'))
                    <div class="w-full alert alert-danger">{{session('error2')}}</div>
                @endif
                @if(session('error3'))
                    <div class="w-full alert alert-danger">{{session('error3')}}</div>
                @endif  --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                    <form method="POST" action="/new-user" id="addUserForm">
                        @csrf

                        <!-- Name -->
                        <div>
                            <label for="name" value="Name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name"/>
                        </div>
            
                        <!-- Email -->
                        <div class="mt-3">
                            <label for="email" value="Email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email"/>
                            <span id="email-error" class="text-red-500 text-sm" style="display:none;">Invalid email format. Please include an "@" and a domain.</span>
                        </div>
            
                        <!-- Temporary Password -->
                        <div class="mt-3">
                            <label for="password" value="Password" class="block text-sm font-medium text-gray-700">Temporary Password</label>
                            <input id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" />
                            <span id="password-error" class="text-red-500 text-sm" style="display:none;">Password must be at least 8 characters.</span>
                        </div>

                        <!-- Hidden User Type -->
                        <div>
                            <input id="usertype" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="hidden" name="usertype" value="user"/>
                        </div>

                        <!-- Age -->
                        <div class="mt-3">
                            <label for="age" value="Age" class="block text-sm font-medium text-gray-700">Age</label>
                            <input id="age" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="age"/>
                        </div>

                        <!-- Address -->
                        <div class="mt-3">
                            <label for="address" value="Address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input id="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="address"/>
                            <span id="address-error" class="text-red-500 text-sm" style="display:none;">Address is required and must be at least 5 characters long.</span>
                        </div>

                        <!-- Phone -->
                        <div class="mt-3">
                            <label for="phone" value="Phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input id="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="phone"/>
                            <span id="phone-error" class="text-red-500 text-sm" style="display:none;">Phone number must be between 11 digits.</span>
                        </div>

                        <!-- Contract -->
                        <div class="mt-3">
                            <label for="contract" value="Contract" class="block text-sm font-medium text-gray-700">Contract</label>
                            <input id="contract" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="contract"/>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6 flex justify-end">
                            <button class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                                Add User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Client-Side Validation -->
    <script>
        document.getElementById('email').addEventListener('blur', function() {
            var emailField = document.getElementById('email');
            var email = emailField.value;
            var emailError = document.getElementById('email-error');

            // Check if the email contains "@" and has a valid format
            if (email.indexOf('@') === -1 || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                emailError.style.display = 'block'; // Show the error message
            } else {
                emailError.style.display = 'none'; // Hide the error message
            }
        });

        document.getElementById('password').addEventListener('blur', function() {
            var passwordField = document.getElementById('password');
            var password = passwordField.value;
            var passwordError = document.getElementById('password-error');

            // Check if the password has at least 8 characters
            if (password.length < 8) {
                passwordError.style.display = 'block'; // Show the error message
            } else {
                passwordError.style.display = 'none'; // Hide the error message
            }
        });

    //    document.getElementById('address').addEventListener('blur', function() {
    //         var addressField = document.getElementById('address');
    //         var address = addressField.value;
    //         var addressError = document.getElementById('address-error');

    //         // Check if the address is at least 5 characters
    //         if (address.length < 5) {
    //             addressError.style.display = 'block'; // Show the error message
    //         } else {
    //             addressError.style.display = 'none'; // Hide the error message
    //         }
    //     });


        document.getElementById('phone').addEventListener('blur', function() {
            var phoneField = document.getElementById('phone');
            var phone = phoneField.value;
            var phoneError = document.getElementById('phone-error');

            // Check if the phone number has 11 digits
            if (!/^\d{11}$/.test(phone)) {
                phoneError.style.display = 'block'; // Show the error message
            } else {
                phoneError.style.display = 'none'; // Hide the error message
            }
        });

        // Age validation
        document.getElementById('age').addEventListener('blur', function() {
            var ageField = document.getElementById('age');
            var age = ageField.value;
            var ageError = document.getElementById('age-error');

            // Check if age is a valid number between 1 and 100
            if (isNaN(age) || age < 16 || age > 65) {
                ageError.style.display = 'block'; // Show the error message
            } else {
                ageError.style.display = 'none'; // Hide the error message
            }
        });
    </script>
</x-app-layout>
