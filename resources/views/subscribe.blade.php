@extends('layouts.app')

@section('main')

    <link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
    <div data-barba="container">

        <section class="pt-8">
            <div class="p-8 md:p-12 lg:px-12 lg:py-12">
                <div class="max-w-lg mx-auto text-center lg:max-w-full">
                    <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                        Subscribe to Urbanitarian
                    </h2>
                    <p class="pt-8 mx-auto text-base text-gray-500 md:text-lg lg:max-w-4xl">
                        Urbanitarian is the world's leading community-based, scalable, didactic, free, open, and
                        comprehensive dataset and archive of urban design projects and resources.
                    </p>
                    <div class="max-w-4xl mx-auto">

                        <div class="sib-form" style="text-align: center;">
                            <div id="sib-form-container" class="sib-form-container">
                                <div id="error-message" class="sib-form-message-panel"
                                    style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px;">
                                    <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                                            <path
                                                d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
                                        </svg>
                                        <span class="sib-form-message-panel__inner-text">
                                            Your subscription could not be saved. Please try again.
                                        </span>
                                    </div>
                                </div>
                                <div></div>
                                <div id="success-message" class="sib-form-message-panel"
                                    style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#085229; background-color:#e7faf0; border-radius:3px; border-color:#13ce66;max-width:540px;">
                                    <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                                            <path
                                                d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
                                        </svg>
                                        <span class="sib-form-message-panel__inner-text">
                                            Your subscription has been successful.
                                        </span>
                                    </div>
                                </div>
                                <div></div>
                                <div id="sib-container" class="sib-container--large sib-container--vertical"
                                    style="text-align:center; background-color:rgba(255,255,255,1); max-width:540px; border-width:0px; border-color:#C0CCD9; border-style:solid; direction:ltr">
                                    <form id="sib-form" method="POST"
                                        action="https://ddee9ea1.sibforms.com/serve/MUIEADQelXEuC6ynvFNEqqPyQlFU9SNHYBWnyFeHq0AVBtGuermvExYRomTpqulaB5N9QGm0IDzq3C2RzkJqS__5nMC9h-Jdp0VQW6x_xJDUcYQeZkMmHUVJ9nQP9JNDNWr8pDHOqdjxYnpASVb-3ulcxOdyyiyRuGd9490TitbwYe6SprcxCLkendWpHMyaa7OnMqK8S7rUKmpz"
                                        data-type="subscription">
                                        <div style="padding: 8px 0;">
                                            <div class="sib-input sib-form-block">
                                                <div class="form__entry entry_block">
                                                    <div class="form__label-row ">
                                                        <label class="entry__label"
                                                            style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;"
                                                            for="EMAIL" data-required="*">Enter your email address to
                                                            subscribe</label>

                                                        <div class="entry__field">
                                                            <input class="input " type="text" id="EMAIL"
                                                                name="EMAIL" autocomplete="off" placeholder="EMAIL"
                                                                data-required="true" required />
                                                        </div>
                                                    </div>

                                                    <label class="entry__error entry__error--primary"
                                                        style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                                                    </label>
                                                    <label class="entry__specification"
                                                        style="font-size:12px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#8390A4; text-align:left">
                                                        Provide your email address to subscribe. For e.g abc@xyz.com
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 8px 0;">
                                            <div class="sib-checkbox-group sib-form-block" data-required="true">
                                                <div class="form__entry entry_mcq">
                                                    <div class="form__label-row ">
                                                        <label class="entry__label"
                                                            style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#3c4858;"
                                                            data-required="*">Choose your subscriptions</label>
                                                        <div class="max-w-4xl">
                                                            <div class="entry__choice">
                                                                <label class="flex cursor-pointer">
                                                                    <div class="flex justify-between">
                                                                        <span class="mr-2">Urbanitarian weekly
                                                                            update &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </span>
                                                                        <div class="relative">
                                                                            <input type="checkbox" class="hidden peer"
                                                                                name="lists_28[]"
                                                                                data-value="Urbanitarian weekly update"
                                                                                value="4" data-required="true" />
                                                                            <div
                                                                                class="w-10 h-5 bg-gray-400 rounded-full shadow-inner">
                                                                            </div>
                                                                            <div
                                                                                class="absolute top-0.5 left-0.5 w-4 h-4 bg-black rounded-full shadow transition-transform duration-300 transform peer-checked:translate-x-5 peer-checked:bg-green-500">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="entry__choice">
                                                                <label class="flex cursor-pointer">
                                                                    <div class="flex justify-between">
                                                                        <span class="mr-2">Urbanitarian
                                                                        WEBSPACE events  &nbsp;</span>
                                                                        <div class="relative">
                                                                            <input type="checkbox" class="hidden peer"
                                                                                name="lists_28[]"
                                                                                data-value="Urbanitarian weekly update"
                                                                                value="6" data-required="true" />
                                                                            <div
                                                                                class="w-10 h-5 bg-gray-400 rounded-full shadow-inner">
                                                                            </div>
                                                                            <div
                                                                                class="absolute top-0.5 left-0.5 w-4 h-4 bg-black rounded-full shadow transition-transform duration-300 transform peer-checked:translate-x-5 peer-checked:bg-green-500">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                       
                                                          <div class="entry__choice">
                                                                <label class="flex cursor-pointer">
                                                                    <div class="flex justify-between">
                                                                        <span class="mr-2">Urbanitarian
                                                                        MASTERPLAN daily</span>
                                                                        <div class="relative">
                                                                            <input type="checkbox" class="hidden peer"
                                                                                name="lists_28[]"
                                                                                data-value="Urbanitarian weekly update"
                                                                                value="5" data-required="true" />
                                                                            <div
                                                                                class="w-10 h-5 bg-gray-400 rounded-full shadow-inner">
                                                                            </div>
                                                                            <div
                                                                                class="absolute top-0.5 left-0.5 w-4 h-4 bg-black rounded-full shadow transition-transform duration-300 transform peer-checked:translate-x-5 peer-checked:bg-green-500">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="entry__error entry__error--primary"
                                                        style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 8px 0;">
                                            <div class="sib-optin sib-form-block">
                                                <div class="form__entry entry_mcq">
                                                    <div class="form__label-row ">
                                                        <div class="entry__choice" style="">
                                                            <label>
                                                                <input type="checkbox" class="input_replaced"
                                                                    value="1" id="OPT_IN" name="OPT_IN" />
                                                                <span class="checkbox checkbox_tick_positive"
                                                                    style="margin-left:"></span>
                                                                <span>
                                                                    <p class="text-xs text-gray-600">I agree to receive your newsletters and accept the
                                                                        data privacy statement.</p>
                                                                </span> </label>
                                                        </div>
                                                    </div>
                                                    <label class="entry__error entry__error--primary"
                                                        style="font-size:16px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                                                    </label>
                                                    <label class="entry__specification"
                                                        style="font-size:12px; text-align:left; font-family:&quot;Helvetica&quot;, sans-serif; color:#8390A4; text-align:left">
                                                        You may unsubscribe at any time using the link in our newsletter.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 8px 0;">
                                            <div class="g-recaptcha"
                                                data-sitekey="6LegwmMkAAAAAJ8o8JF7GapcTUQPyPCeFu4-rn1V"
                                                data-callback="invisibleCaptchaCallback" data-size="invisible"
                                                onclick="executeCaptcha"></div>
                                        </div>
                                        <div style="padding: 8px 0;">
                                            <div class="sib-form-block" style="text-align: center">
                                                <button class="sib-form-block__button sib-form-block__button-with-loader"
                                                    style="font-size:16px; text-align:center; font-weight:700; font-family:&quot;Helvetica&quot;, sans-serif; color:#FFFFFF; background-color:#000000; border-radius:9px; border-width:0px;"
                                                    form="sib-form" type="submit">
                                                    <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
                                                    </svg>
                                                    SUBSCRIBE
                                                </button>
                                            </div>
                                        </div>

                                        <input type="text" name="email_address_check" value=""
                                            class="input--hidden">
                                        <input type="hidden" name="locale" value="en">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END - We recommend to place the below code where you want the form in your website html  -->

                        <!-- START - We recommend to place the below code in footer or bottom of your website html  -->
                        <script>
                            window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
                            window.LOCALE = 'en';
                            window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE =
                                "The information provided is invalid. Please review the field format and try again.";

                            window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

                            window.GENERIC_INVALID_MESSAGE =
                                "The information provided is invalid. Please review the field format and try again.";



                            window.REQUIRED_MULTISELECT_MESSAGE = 'Please select at least 1 option';

                            window.translation = {
                                common: {
                                    selectedList: '{quantity} list selected',
                                    selectedLists: '{quantity} lists selected'
                                }
                            };

                            var AUTOHIDE = Boolean(0);
                        </script>
                        <script defer src="https://sibforms.com/forms/end-form/build/main.js"></script>

                        <script src="https://www.google.com/recaptcha/api.js?hl=en"></script>

                        <!-- END - We recommend to place the above code in footer or bottom of your website html  -->
                        <!-- End Sendinblue Form -->

                    </div>

                </div>
        </section>
    </div>
@endsection
