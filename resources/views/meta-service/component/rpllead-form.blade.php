<form method="POST" action="" id="multiStepForm">
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

                    <input type="text"
                        name="name"
                        placeholder="Full Name"
                        class="w-full border rounded-xl p-3 text-sm md:text-base">

                    <input type="text"
                        name="phone"
                        placeholder="Mobile Number"
                        class="w-full border rounded-xl p-3 text-sm md:text-base">

                    @error('phone')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                    <input type="email"
                        name="email"
                        placeholder="Email Address"
                        class="w-full border rounded-xl p-3 text-sm md:text-base">

                    <select name="course" class="w-full border rounded-xl p-3 text-sm md:text-base">
                        <option value="">Select Course</option>
                        <option>CHC33021 Certificate III in Individual Support</option>
                        <option>CHC43015 Certificate IV in Ageing Support</option>
                        <option>CHC52021 Diploma of Community Services</option>
                        <option>CHC52025 Diploma of Community Services</option>
                        <option>BSB50420 Diploma of Leadership and Management</option>
                        <option>BSB50820 Diploma of Project Management</option>
                    </select>

                </div>

            </div>

            {{-- Buttons --}}
            <div class="flex justify-between mt-6 md:mt-8">

                <button type="button"
                    onclick="prevStep()"
                    id="prevBtn"
                    class="hidden bg-slate-200 px-4 md:px-6 py-3 rounded-xl font-semibold text-sm md:text-base">
                    Back
                </button>

                <button type="button"
                    onclick="nextStep()"
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
     class="hidden fixed inset-0 bg-black/60 z-50 flex items-center justify-center">

    <div class="bg-white rounded-3xl p-8 max-w-xl text-center">

        <div class="text-5xl mb-4">✅</div>

        <h2 class="text-3xl font-bold mb-4">
            Thank You for Your Submission!
        </h2>

        <p class="mb-6 text-gray-600">
            We have successfully received your RPL eligibility check.
            Our team will contact you within 24 hours.
        </p>

        <a href="https://wa.me/61468092989"
           target="_blank"
           class="bg-green-500 text-white px-6 py-3 rounded-xl">
            WhatsApp Now
        </a>

        <div class="mt-4">
            <button onclick="closeModal()"
                class="text-gray-500">
                Close
            </button>
        </div>

    </div>

</div>


<script>
    let currentStep = 0;
    const steps = document.querySelectorAll('.step');

    function showStep(index) {
        steps.forEach((step, i) => {
            step.classList.toggle('hidden', i !== index);
        });

        document.getElementById('prevBtn').classList.toggle('hidden', index === 0);
        document.getElementById('nextBtn').classList.toggle('hidden', index === steps.length - 1);
        document.getElementById('submitBtn').classList.toggle('hidden', index !== steps.length - 1);

        document.getElementById('stepText').innerText = `Step ${index + 1} of ${steps.length}`;

        let progress = ((index + 1) / steps.length) * 100;
        document.getElementById('progressBar').style.width = progress + '%';
    }

    function nextStep() {
        if (currentStep < steps.length - 1) {
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

    showStep(currentStep);
</script>

<script>

document.getElementById('rplForm').addEventListener('submit', async function(e){

    e.preventDefault();

    let form = this;
    let button = document.getElementById('submitBtn');
    let errors = document.getElementById('errors');

    errors.innerHTML = '';
    button.innerText = 'Submitting...';
    button.disabled = true;

    let formData = new FormData(form);

    let response = await fetch("{{ route('check-eligibility.store') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json"
        },
        body: formData
    });

    let result = await response.json();

    button.innerText = 'Submit';
    button.disabled = false;

    if(response.status === 422){

        let html = '';

        Object.values(result.errors).forEach(error => {
            html += `<p>${error[0]}</p>`;
        });

        errors.innerHTML = html;
        return;
    }

    if(result.status){

        form.reset();

        document
            .getElementById('successModal')
            .classList.remove('hidden');
    }

});

function closeModal()
{
    document
        .getElementById('successModal')
        .classList.add('hidden');
}

</script>