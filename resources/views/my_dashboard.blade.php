@extends('layout')


@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/my_dashboard.css') }}">

    <div class="my-dashboard">

        <div class="hero">

            <div class="welcome-profile">
                <p class="welcome">Welcome, <span class="bloggs">Joe Bloggs</span></p>
                <p class="profile-id">
                    Profile ID: 232456789001
                </p>
            </div>
            <div class="total">
                <div class="data-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46"
                        fill="none">
                        <path
                            d="M33.0834 0.500067C31.8498 0.500067 30.8363 1.51507 30.8363 2.74862V5.74861H29.3348C28.1013 5.74861 27.0819 6.76948 27.0819 8.00301V22.2471H25.5819V20.0381C25.5819 19.4458 25.3461 18.908 24.9711 18.5001C25.3458 18.0909 25.5819 17.5525 25.5819 16.9605V11.0367C25.5819 9.7824 24.5496 8.75008 23.2953 8.75008H3.12C1.8657 8.75008 0.833374 9.7824 0.833374 11.0367V16.9605C0.833374 17.5525 1.0695 18.0909 1.44421 18.5001C1.06913 18.908 0.833374 19.4458 0.833374 20.0381V25.962C0.833374 26.5533 1.06893 27.0909 1.44274 27.4986C1.06885 27.9063 0.833374 28.4439 0.833374 29.0352V34.9649C0.833374 36.2192 1.8657 37.2515 3.12 37.2515H23.2953C24.5496 37.2515 25.5819 36.2192 25.5819 34.9649V29.0352C25.5819 28.4439 25.3463 27.9063 24.9725 27.4986C25.3464 27.0909 25.5819 26.5533 25.5819 25.962V23.7471H27.0819V37.9986C27.0819 39.2321 28.1013 40.2516 29.3348 40.2516H30.8363V43.253C30.8363 44.4865 31.8498 45.5001 33.0834 45.5001H43.5863C44.8198 45.5001 45.8334 44.4865 45.8334 43.253V37.2515C45.8334 36.018 44.8198 34.9971 43.5863 34.9971H39.328L37.5013 33.6465C37.3718 33.5496 37.2147 33.4974 37.0531 33.4972H33.0834C31.8498 33.4972 30.8363 34.518 30.8363 35.7516V38.7516H29.3348C28.9064 38.7516 28.5819 38.4271 28.5819 37.9986V23.7472H30.8363V26.7486C30.8363 27.9822 31.8498 29.0016 33.0834 29.0016H43.5863C44.8198 29.0016 45.8334 27.9822 45.8334 26.7486V20.753C45.8334 19.5195 44.8198 18.4986 43.5863 18.4986H39.328L37.5013 17.1481C37.3718 17.0511 37.2147 16.999 37.0531 16.9987H33.0834C31.8498 16.9987 30.8363 18.0195 30.8363 19.2531V22.2472H28.5819V8.00306C28.5819 7.57458 28.9064 7.24868 29.3348 7.24868H30.8363V10.2501C30.8363 11.4837 31.8498 12.4972 33.0834 12.4972H43.5863C44.8198 12.4972 45.8334 11.4837 45.8334 10.2501V4.24866C45.8334 3.01514 44.8198 2.00161 43.5863 2.00161H39.328L37.5013 0.645144C37.3715 0.5499 37.2142 0.49916 37.0531 0.500011L33.0834 0.500067ZM32.3363 7.24862H44.3334V10.2501C44.3334 10.6785 44.0148 10.9971 43.5863 10.9971H33.0834C32.6549 10.9971 32.3363 10.6785 32.3363 10.2501V7.24862ZM3.12 10.2501H6.83483V17.7516H3.12C2.67073 17.7516 2.33483 17.4098 2.33483 16.9605V11.0367C2.33483 10.5874 2.67073 10.2501 3.12 10.2501ZM8.33631 10.2501H23.2953C23.7445 10.2501 24.0804 10.5874 24.0804 11.0367V16.9605C24.0804 17.4098 23.7445 17.7516 23.2953 17.7516H8.33631V10.2501ZM4.58338 13.2501C4.16916 13.2501 3.83336 13.5859 3.83336 14.0001C3.83336 14.4143 4.16916 14.7501 4.58338 14.7501C4.99758 14.7501 5.33337 14.4143 5.33337 14.0001C5.33337 13.5859 4.99758 13.2501 4.58338 13.2501ZM10.5834 13.2516C10.1715 13.2532 9.83794 13.5867 9.83629 13.9986C9.83464 14.4128 10.1692 14.7499 10.5834 14.7515H21.8334C22.2476 14.7499 22.5821 14.4128 22.5804 13.9986C22.5789 13.5867 22.2453 13.2531 21.8334 13.2515L10.5834 13.2516ZM3.12 19.253H6.83483V26.7486H3.12C2.67073 26.7486 2.33483 26.4112 2.33483 25.962V20.0381C2.33483 19.5889 2.67073 19.253 3.12 19.253ZM8.33631 19.253H23.2953C23.7445 19.253 24.0804 19.5889 24.0804 20.0381V22.2471V23.7471V25.962C24.0804 26.4112 23.7445 26.7486 23.2953 26.7486H8.33631V19.253ZM10.5834 22.2471C10.1692 22.2488 9.83468 22.5859 9.83629 23.0001C9.83794 23.412 10.1714 23.7456 10.5834 23.7471H21.8334C22.2453 23.7456 22.5788 23.412 22.5804 23.0001C22.5821 22.5859 22.2476 22.2487 21.8334 22.2471H10.5834ZM4.58338 22.25C4.16916 22.25 3.83336 22.5858 3.83336 23C3.83336 23.4142 4.16916 23.75 4.58338 23.75C4.99758 23.75 5.33337 23.4142 5.33337 23C5.33337 22.5858 4.99758 22.25 4.58338 22.25ZM32.3363 23.7471H44.3334V26.7485C44.3334 27.177 44.0148 27.5015 43.5863 27.5015H33.0834C32.6549 27.5015 32.3363 27.177 32.3363 26.7485V23.7471ZM3.12 28.2485H6.83483V35.7515H3.12C2.67073 35.7515 2.33483 35.4141 2.33483 34.9648V29.0351C2.33483 28.5859 2.67073 28.2485 3.12 28.2485ZM8.33631 28.2485H23.2953C23.7445 28.2485 24.0804 28.5859 24.0804 29.0351V34.9648C24.0804 35.4141 23.7445 35.7514 23.2953 35.7514H8.33631V28.2485ZM4.58338 31.25C4.16916 31.25 3.83336 31.5858 3.83336 32C3.83336 32.4142 4.16916 32.75 4.58338 32.75C4.99758 32.75 5.33337 32.4142 5.33337 32C5.33337 31.5858 4.99758 31.25 4.58338 31.25ZM10.5834 31.25C10.1692 31.2516 9.83468 31.5887 9.83629 32.0029C9.83794 32.4148 10.1714 32.7484 10.5834 32.75H21.8334C22.2453 32.7484 22.5788 32.4148 22.5804 32.0029C22.5821 31.5887 22.2476 31.2516 21.8334 31.25H10.5834ZM32.3363 40.2514H44.3334V43.2529C44.3334 43.6814 44.0148 44 43.5863 44H33.0834C32.6549 44 32.3363 43.6814 32.3363 43.2529V40.2514Z"
                            fill="url(#paint0_linear_209_57634)" />
                        <defs>
                            <linearGradient id="paint0_linear_209_57634" x1="10.8693" y1="6.69899" x2="42.9084"
                                y2="28.9086" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1C28C" />
                                <stop offset="1" stop-color="#60B1DF" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="total-number">
                    <p class="total-dataset">
                        Total Datasets
                    </p>
                    <p class="data-number">
                        5
                    </p>
                </div>
            </div>
            <div class="response">
                <div class="active-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="44" viewBox="0 0 38 44"
                        fill="none">
                        <path
                            d="M20.6667 2L2.8536 23.3757C2.15598 24.2128 1.80717 24.6314 1.80184 24.9849C1.79721 25.2922 1.93415 25.5846 2.1732 25.7778C2.44818 26 2.99304 26 4.08275 26H18.6667L16.6667 42L34.4798 20.6243C35.1774 19.7872 35.5262 19.3686 35.5315 19.0151C35.5362 18.7078 35.3992 18.4154 35.1602 18.2222C34.8852 18 34.3403 18 33.2506 18H18.6667L20.6667 2Z"
                            stroke="url(#paint0_linear_4187_6055)" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <defs>
                            <linearGradient id="paint0_linear_4187_6055" x1="9.32423" y1="7.5102" x2="35.8243"
                                y2="23.0007" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1C28C" />
                                <stop offset="1" stop-color="#60B1DF" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="active-number">
                    <p class="active-response">
                        Active Subscription
                    </p>
                    <p class="subscription">
                        5
                    </p>
                </div>
            </div>
        </div>

    </div>
    <hr>
@endsection
