<div>

    @push('styles')
        <style>
            .text-red{
                color: #CC0000;
            }
        </style>
    @endpush

    <form class="quform" method="post" enctype="multipart/form-data" wire:submit.prevent="submit">

        <div class="quform-elements">

            <div class="row">

                <!-- Begin Text input element -->
                <div class="col-md-6">
                    <div class="quform-element">
                        <label for="name">Your Name <span class="quform-required">*</span></label>
                        <div class="quform-input">
                            <input class="form-control"
                                   id="name"
                                   wire:model="name"
                                   type="text"
                                   name="name"
                                   placeholder="Your name here" />
                            @error('name') <span class="text-red quform-required">{!! $message !!}</span> @enderror

                        </div>
                    </div>

                </div>
                <!-- End Text input element -->

                <!-- Begin Text input element -->
                <div class="col-md-6">
                    <div class="quform-element">
                        <label for="email">Your Email <span class="quform-required">*</span></label>
                        <div class="quform-input">
                            <input
                                class="form-control"
                                id="email"
                                type="text"
                                wire:model="email"
                                name="email" placeholder="Your email here" />

                            @error('email') <span class="text-red quform-required">{!! $message !!}</span> @enderror
                        </div>
                    </div>
                </div>
                <!-- End Text input element -->

                <!-- Begin Text input element -->
                <div class="col-md-6">
                    <div class="quform-element">
                        <label for="subject">Your Subject <span class="quform-required">*</span></label>
                        <div class="quform-input">
                            <input
                                wire:model="subject"
                                class="form-control"
                                id="subject"
                                type="text" name="subject" placeholder="Your subject here" />

                            @error('subject') <span class="text-red quform-required">{!! $message !!}</span> @enderror
                        </div>
                    </div>

                </div>
                <!-- End Text input element -->

                <!-- Begin Text input element -->
                <div class="col-md-6">
                    <div class="quform-element">
                        <label for="phone">Contact Number</label>
                        <div class="quform-input">
                            <input  wire:model="tel"
                                    class="form-control"
                                    id="phone"
                                    type="text"
                                    name="phone" placeholder="Your phone here" />

                            @error('tel') <span class="text-red quform-required">{!! $message !!}</span> @enderror
                        </div>
                    </div>

                </div>
                <!-- End Text input element -->

                <!-- Begin Textarea element -->
                <div class="col-md-12">
                    <div class="quform-element">
                        <label for="message">Message <span class="quform-required">*</span></label>
                        <div class="quform-input">
                            <textarea  wire:model="message" class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>

                            @error('message') <span class="text-red quform-required">{!! $message !!}</span> @enderror

                        </div>
                    </div>
                </div>
                <!-- End Textarea element -->


                <!-- Begin Submit button -->
                <div class="col-md-12">
                    <div class="quform-submit-inner">
                        <button class="butn"><span>Send Message</span></button>
                    </div>
                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                </div>
                <!-- End Submit button -->

            </div>

        </div>

    </form>


</div>
