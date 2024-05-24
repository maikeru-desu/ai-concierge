@extends('user.layouts.guest')

@section('content')
<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
  <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
      <img class="w-10 h-10 mr-2" src="/custom-logo.png" alt="logo">
      AI-Concierge
  </a>
    <div class="mx-auto max-w-5xl">

      <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
        <section class="bg-white dark:bg-gray-900">
          <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
              <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                  <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Designed for travellers like You!</h2>
                  <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Embark on a journey of discovery with our comprehensive app, guiding you to captivating destinations around Japan.</p>
              </div>
              <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                  <!-- Pricing Card -->
                  <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white mt-8">
                      <h3 class="mb-4 text-2xl font-semibold">Starter</h3>
                      <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400"><B></B>Best option for users who are only staying for a short period.</p>
                      <div class="flex justify-center items-baseline my-8">
                          <span class="mr-2 text-5xl font-extrabold">¥29</span>
                          <span class="text-gray-500 dark:text-gray-400">1 Week</span>
                      </div>
                      <!-- List -->
                      <ul role="list" class="mb-8 space-y-4 text-left">
                          <li class="flex items-center space-x-3">
                              <!-- Icon -->
                              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                              <span>Individual configuration</span>
                          </li>
                          <li class="flex items-center space-x-3">
                              <!-- Icon -->
                              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                              <span>No setup, or hidden fees</span>
                          </li>
                          <li class="flex items-center space-x-3">
                              <!-- Icon -->
                              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                              <span>Premium support</span>
                          </li>
                      </ul>
                      <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                  </div>
                  <!-- Pricing Card -->
                  <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                      <h3 class="mb-4 text-2xl font-semibold">Traveler</h3>
                      <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Relevant for users that will stay for a month.</p>
                      <div class="flex justify-center items-baseline my-8">
                          <span class="mr-2 text-5xl font-extrabold">¥99</span>
                          <span class="text-gray-500 dark:text-gray-400">1 month</span>
                      </div>
                      <!-- List -->
                      <ul role="list" class="mb-8 space-y-4 text-left">
                          <li class="flex items-center space-x-3">
                              <!-- Icon -->
                              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                              <span>Individual configuration</span>
                          </li>
                          <li class="flex items-center space-x-3">
                              <!-- Icon -->
                              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                              <span>No setup, or hidden fees</span>
                          </li>
                          <li class="flex items-center space-x-3">
                              <!-- Icon -->
                              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                              <span>Premium support</span>
                          </li>
                      </ul>
                      <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                  </div>
                  <!-- Pricing Card -->
                  <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                      <h3 class="mb-4 text-2xl font-semibold">Soujourner</h3>
                      <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best for users that will stay more than a month.</p>
                      <div class="flex justify-center items-baseline my-8">
                          <span class="mr-2 text-5xl font-extrabold">¥499</span>
                          <span class="text-gray-500 dark:text-gray-400">3 months</span>
                      </div>
                      <!-- List -->
                      <ul role="list" class="mb-8 space-y-4 text-left">
                          <li class="flex items-center space-x-3">
                              <!-- Icon -->
                              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                              <span>Individual configuration</span>
                          </li>
                          <li class="flex items-center space-x-3">
                              <!-- Icon -->
                              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                              <span>No setup, or hidden fees</span>
                          </li>
                          <li class="flex items-center space-x-3">
                              <!-- Icon -->
                              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                              <span>Premium support</span>
                          </li>
                      </ul>
                      <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                  </div>
              </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
@endpush
