<form class="contact_form"  wire:submit.prevent="submitForm"  >
    @csrf
    <div class="row">
        <div class="w-full md:w-1/2">
            <div class="mx-3">
                <div class="single_form mt-8">
                    <input wire:model="name" name="name" id="name" type="text" placeholder="Name" class="w-full rounded-md py-4 px-6 border border-solid border-body-color" >
                </div> <!-- single form -->
            </div>
        </div>
        <div class="w-full md:w-1/2">
            <div class="mx-3">
                <div class="single_form mt-8">
                    <input wire:model="email" name="email" id="email" type="email" placeholder="Email" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                </div> <!-- single form -->
            </div>
        </div>
        <div class="w-full">
            <div class="mx-3">
                <div class="single_form mt-8">
                    <textarea wire:model="message" name="message" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                </div> <!-- single form -->
            </div>
        </div>
        <p class="form-message mx-3"></p>
        <div class="w-full">
            <div class="mx-3">
                <div class="single_form mt-8">
                    <button
                        type="submit"
                            class=" gradient-btn contact-btn">Send</button>
                </div> <!-- single form -->
            </div>
        </div>
    </div> <!-- row -->
</form> <!-- contact form -->
