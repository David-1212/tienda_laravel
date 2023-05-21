<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4" type="submit">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

        @if (session('status'))
            <div class="mt-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    </x-authentication-card>
</x-guest-layout>

@php
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
@endphp

@push('scripts')
    <script>
        // Ejecutar el código después de que se envíe el formulario
        document.addEventListener('DOMContentLoaded', function () {
            var registerForm = document.getElementById('register-form');

            registerForm.addEventListener('submit', function (event) {
                event.preventDefault(); // Evitar que se envíe el formulario de inmediato

                // Realizar una solicitud AJAX para registrar al usuario
                axios.post('{{ route('register') }}', new FormData(registerForm))
                    .then(function (response) {
                        // Éxito al registrar al usuario
                        // Enviar el correo electrónico personalizado
                        axios.post('{{ route('send-welcome-email') }}', {
                            email: registerForm.email.value
                        })
                        .then(function (response) {
                            console.log('Correo electrónico de bienvenida enviado.');
                        })
                        .catch(function (error) {
                            console.error('Error al enviar el correo electrónico de bienvenida:', error);
                        });

                        
                    })
                    .catch(function (error) {
                        // Error al registrar al usuario
                        console.error('Error al registrar al usuario:', error);
                    });
            });
        });
    </script>
@endpush