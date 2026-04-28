<form method="POST" action="{{ route('check-eligibility.store') }}" id="rplForm">
    @csrf

    <div class="bg-white overflow-hidden">

        {{-- Progress --}}
        <div class="p-4 md:p-6 border-b">
            <div class="flex justify-between text-sm text-slate-500 mb-2">
                <span>Progress</span>
                <span id="stepText">Step 1 of 4</span>
            </div>

            <div class="w-full bg-slate-200 rounded-full h-3">
                <div id="progressBar"
                    class="bg-[#002147] h-3 rounded-full transition-all duration-500"
                    style="width:25%">
                </div>
            </div>
        </div>
        <div class="p-4 md:p-8">

            {{-- STEP 1 --}}
            <div class="step">

                <h2 class="text-xl md:text-2xl font-bold mb-4 md:mb-6 text-slate-800">
                    Basic Information
                </h2>

                <div class="space-y-4 md:space-y-5">

                    <div>
                        <label class="font-semibold block mb-2 text-sm md:text-base">1. What is your age?</label>
                        <select name="age" class="w-full border rounded-xl p-3 text-sm md:text-base">
                            <option value="">Select Age</option>
                            <option>Under 18</option>
                            <option>18–24</option>
                            <option>25–34</option>
                            <option>35+</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-semibold block mb-2 text-sm md:text-base">2. Current employment status?</label>
                        <select name="employment_status" class="w-full border rounded-xl p-3 text-sm md:text-base">
                            <option value="">Select</option>
                            <option>Employed (Full-time)</option>
                            <option>Employed (Part-time/Casual)</option>
                            <option>Self-employed</option>
                            <option>Unemployed</option>
                            <option>Student</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-semibold block mb-2 text-sm md:text-base">
                            3. Worked in care/support role?
                        </label>

                        <select name="care_role" class="w-full border rounded-xl p-3 text-sm md:text-base">
                            <option value="">Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>

                </div>

            </div>

            {{-- STEP 2 --}}
            <div class="step hidden">

                <h2 class="text-xl md:text-2xl font-bold mb-4 md:mb-6 text-slate-800">
                    Experience Details
                </h2>

                <div class="space-y-4 md:space-y-5">

                    <div>
                        <label class="font-semibold block mb-2 text-sm md:text-base">
                            4. Which sector have you worked in?
                        </label>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            @php
                            $sectors = [
                            'Aged Care',
                            'Disability Support',
                            'Home & Community Care',
                            'Nursing/Healthcare Assistance',
                            'Childcare',
                            'Other'
                            ];
                            @endphp

                            @foreach($sectors as $sector)
                            <label class="border rounded-xl p-3 flex gap-2 items-center text-sm md:text-base">
                                <input type="checkbox" name="sector[]" value="{{ $sector }}">
                                <span>{{ $sector }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <label class="font-semibold block mb-2 text-sm md:text-base">
                            5. Years of relevant experience?
                        </label>

                        <select name="experience_years" class="w-full border rounded-xl p-3 text-sm md:text-base">
                            <option value="">Select</option>
                            <option>Less than 6 months</option>
                            <option>6–12 months</option>
                            <option>1–2 years</option>
                            <option>2–5 years</option>
                            <option>5+ years</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-semibold block mb-2 text-sm md:text-base">
                            6. Can you communicate effectively?
                        </label>

                        <select name="communication" class="w-full border rounded-xl p-3 text-sm md:text-base">
                            <option value="">Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>

                </div>

            </div>

            {{-- STEP 3 --}}
            <div class="step hidden">

                <h2 class="text-xl md:text-2xl font-bold mb-4 md:mb-6 text-slate-800">
                    Documents & Eligibility
                </h2>

                <div class="space-y-4 md:space-y-5">

                    <div>
                        <label class="font-semibold block mb-2 text-sm md:text-base">
                            7. Available Documents
                        </label>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

                            @php
                            $docs = [
                            'Resume / CV',
                            'Reference letters',
                            'Job descriptions',
                            'Payslips / contracts',
                            'Photos/videos of work',
                            'Certificates / training records'
                            ];
                            @endphp

                            @foreach($docs as $doc)
                            <label class="border rounded-xl p-3 flex gap-2 items-center text-sm md:text-base">
                                <input type="checkbox" name="documents[]" value="{{ $doc }}">
                                <span>{{ $doc }}</span>
                            </label>
                            @endforeach

                        </div>
                    </div>

                    <div>
                        <label class="font-semibold block mb-2 text-sm md:text-base">
                            8. Able to provide evidence within 1–2 weeks?
                        </label>

                        <select name="evidence_ready" class="w-full border rounded-xl p-3 text-sm md:text-base">
                            <option value="">Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-semibold block mb-2 text-sm md:text-base">
                            9. Interested in fast-tracking qualification through RPL?
                        </label>

                        <select name="fast_track" class="w-full border rounded-xl p-3 text-sm md:text-base">
                            <option value="">Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>

                </div>

            </div>

            {{-- STEP 4 --}}
            <div class="step hidden">

                <h2 class="text-xl md:text-2xl font-bold mb-4 md:mb-6 text-slate-800">
                    Contact Details
                </h2>

                <div class="space-y-4 md:space-y-5">

                    <div class="space-y-1">
                        <input type="text"
                            name="name"
                            placeholder="Full Name"
                            class="w-full border rounded-xl p-3 text-sm md:text-base">
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <input type="text"
                            name="phone"
                            placeholder="Mobile Number"
                            class="w-full border rounded-xl p-3 text-sm md:text-base">

                        @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <input type="email"
                        name="email"
                        placeholder="Email Address"
                        class="w-full border rounded-xl p-3 text-sm md:text-base">

                    <div class="space-y-1">
                        <select name="course" class="w-full border rounded-xl p-3 text-sm md:text-base">
                            <option value="">Select Course</option>
                            <option>CHC33021 Certificate III in Individual Support</option>
                            <option>CHC43015 Certificate IV in Ageing Support</option>
                            <option>CHC52021 Diploma of Community Services</option>
                            <option>CHC52025 Diploma of Community Services</option>
                            <option>BSB50420 Diploma of Leadership and Management</option>
                            <option>BSB50820 Diploma of Project Management</option>
                        </select>
                        @error('course')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

            </div>

            {{-- Buttons --}}
            <div class="flex justify-between mt-6 md:mt-8">

                <button type="button"                    
                    id="prevBtn"
                    class="hidden bg-slate-200 px-4 md:px-6 py-3 rounded-xl font-semibold text-sm md:text-base">
                    Back
                </button>

                <button type="button"
                    id="nextBtn"
                    class="ml-auto bg-[#002147] hover:bg-[#002147] text-white px-6 md:px-8 py-3 rounded-xl font-semibold text-sm md:text-base">
                    Next
                </button>

                <button type="submit"
                    id="submitBtn"
                    class="hidden ml-auto bg-[#002147] hover:bg-[#002147] text-white px-6 md:px-8 py-3 rounded-xl font-semibold text-sm md:text-base">
                    Submit Application
                </button>

            </div>

        </div>

    </div>

</form>


<div id="successModal"
    class="hidden fixed inset-0 bg-black/60 z-50 flex items-center justify-center p-4 overflow-auto">

    <div class="bg-white rounded-3xl p-6 sm:p-8 w-full max-w-xl text-center shadow-xl">
        <div class="space-y-6 text-center">
            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-secondary/15 text-secondary">
                <span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            </div>
            <div>
                <h3 class="font-headline text-lg sm:text-xl font-bold text-primary">Thank You for Your Submission!</h3>
                <p class="mt-3 text-sm sm:text-base text-on-surface-variant">We have successfully received your RPL eligibility check. Our team will contact you shortly.</p>
            </div>
        </div>

        <div class="mt-8 sm:mt-10">
            <a href="https://wa.me/61468092989"
                target="_blank"
                class="inline-flex w-full sm:w-auto justify-center bg-green-500 text-white px-5 py-3 rounded-xl text-sm sm:text-base">
                WhatsApp Now
            </a>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {

        /*
        |--------------------------------------------------------------------------
        | Elements
        |--------------------------------------------------------------------------
        */
        const form = document.getElementById('rplForm');
        const steps = document.querySelectorAll('.step');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');
        const progressBar = document.getElementById('progressBar');
        const stepText = document.getElementById('stepText');
        const modal = document.getElementById('successModal');

        if (!form || !steps.length) return;

        let currentStep = 0;
        const totalSteps = steps.length;

        /*
        |--------------------------------------------------------------------------
        | STEP UI
        |--------------------------------------------------------------------------
        */
        function showStep(index) {
            steps.forEach((step, i) => {
                step.classList.toggle('hidden', i !== index);
            });

            prevBtn?.classList.toggle('hidden', index === 0);
            nextBtn?.classList.toggle('hidden', index === totalSteps - 1);
            submitBtn?.classList.toggle('hidden', index !== totalSteps - 1);

            stepText.textContent = `Step ${index + 1} of ${totalSteps}`;
            progressBar.style.width = `${((index + 1) / totalSteps) * 100}%`;
        }

        function nextStep() {
            if (currentStep < totalSteps - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        function resetMultiStepForm() {
            currentStep = 0;
            form.reset();
            clearErrors();
            showStep(0);
        }

        /*
        |--------------------------------------------------------------------------
        | MODAL
        |--------------------------------------------------------------------------
        */
        function openModal() {
            modal?.classList.remove('hidden');
        }

        function closeModal() {
            modal?.classList.add('hidden');
        }

        modal?.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });

        /*
        |--------------------------------------------------------------------------
        | FIELD ERROR SYSTEM
        |--------------------------------------------------------------------------
        */

        function clearErrors() {
            document.querySelectorAll('.field-error').forEach(el => el.remove());

            form.querySelectorAll('.border-red-500').forEach(el => {
                el.classList.remove('border-red-500', 'ring-0', 'ring-red-500');
            });
        }

        function showFieldError(fieldName, message) {
            let field = form.querySelector(`[name="${fieldName}"]`);

            // array field support documents[] / sector[]
            if (!field) {
                field = form.querySelector(`[name="${fieldName}[]"]`);
            }

            if (!field) return;

            field.classList.add('border-red-500', 'ring-0', 'ring-red-500');

            const error = document.createElement('p');
            error.className = 'field-error text-red-500 text-sm ';
            error.textContent = message;

            field.insertAdjacentElement('afterend', error);

            // jump to step if hidden
            const parentStep = field.closest('.step');

            if (parentStep) {
                const stepIndex = [...steps].indexOf(parentStep);

                if (stepIndex !== -1) {
                    currentStep = stepIndex;
                    showStep(currentStep);
                }
            }

            field.focus();
        }

        /*
        |--------------------------------------------------------------------------
        | EVENTS
        |--------------------------------------------------------------------------
        */
        prevBtn?.addEventListener('click', prevStep);
        nextBtn?.addEventListener('click', nextStep);

        /*
        |--------------------------------------------------------------------------
        | AJAX SUBMIT
        |--------------------------------------------------------------------------
        */
        form.addEventListener('submit', async function(e) {

            e.preventDefault();

            clearErrors();

            submitBtn.disabled = true;
            submitBtn.innerText = 'Submitting...';

            try {

                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        'Accept': 'application/json'
                    },
                    body: new FormData(form)
                });

                const result = await response.json();

                submitBtn.disabled = false;
                submitBtn.innerText = 'Submit Application';

                /*
                |--------------------------------------------------------------------------
                | VALIDATION ERROR
                |--------------------------------------------------------------------------
                */
                if (response.status === 422) {

                    const firstErrorField = Object.keys(result.errors)[0];

                    Object.entries(result.errors).forEach(([field, messages]) => {
                        showFieldError(field, messages[0]);
                    });

                    return;
                }

                /*
                |--------------------------------------------------------------------------
                | SUCCESS
                |--------------------------------------------------------------------------
                */
                if (result.status) {
                    resetMultiStepForm();
                    openModal();
                }

            } catch (error) {

                console.error(error);

                submitBtn.disabled = false;
                submitBtn.innerText = 'Submit Application';
            }

        });

        /*
        |--------------------------------------------------------------------------
        | INIT
        |--------------------------------------------------------------------------
        */
        showStep(0);

        window.closeModal = closeModal;

    });
</script>