 <form method="POST" action="" id="multiStepForm">
     @csrf

     <div class="bg-white overflow-hidden">

         {{-- Progress --}}
         <div class="p-6 border-b">
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
         <div class="p-8">

             {{-- STEP 1 --}}
             <div class="step">

                 <h2 class="text-2xl font-bold mb-6 text-slate-800">
                     Basic Information
                 </h2>

                 <div class="space-y-5">

                     <div>
                         <label class="font-semibold block mb-2">1. What is your age?</label>
                         <select name="age" class="w-full border rounded-xl p-3">
                             <option value="">Select Age</option>
                             <option>Under 18</option>
                             <option>18–24</option>
                             <option>25–34</option>
                             <option>35+</option>
                         </select>
                     </div>

                     <div>
                         <label class="font-semibold block mb-2">2. Current employment status?</label>
                         <select name="employment_status" class="w-full border rounded-xl p-3">
                             <option value="">Select</option>
                             <option>Employed (Full-time)</option>
                             <option>Employed (Part-time/Casual)</option>
                             <option>Self-employed</option>
                             <option>Unemployed</option>
                             <option>Student</option>
                         </select>
                     </div>

                     <div>
                         <label class="font-semibold block mb-2">
                             3. Worked in care/support role?
                         </label>

                         <select name="care_role" class="w-full border rounded-xl p-3">
                             <option value="">Select</option>
                             <option>Yes</option>
                             <option>No</option>
                         </select>
                     </div>

                 </div>

             </div>

             {{-- STEP 2 --}}
             <div class="step hidden">

                 <h2 class="text-2xl font-bold mb-6 text-slate-800">
                     Experience Details
                 </h2>

                 <div class="space-y-5">

                     <div>
                         <label class="font-semibold block mb-2">
                             4. Which sector have you worked in?
                         </label>

                         <div class="grid md:grid-cols-2 gap-3">
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
                             <label class="border rounded-xl p-3 flex gap-2 items-center">
                                 <input type="checkbox" name="sector[]" value="{{ $sector }}">
                                 <span>{{ $sector }}</span>
                             </label>
                             @endforeach
                         </div>
                     </div>

                     <div>
                         <label class="font-semibold block mb-2">
                             5. Years of relevant experience?
                         </label>

                         <select name="experience_years" class="w-full border rounded-xl p-3">
                             <option value="">Select</option>
                             <option>Less than 6 months</option>
                             <option>6–12 months</option>
                             <option>1–2 years</option>
                             <option>2–5 years</option>
                             <option>5+ years</option>
                         </select>
                     </div>

                     <div>
                         <label class="font-semibold block mb-2">
                             6. Can you communicate effectively?
                         </label>

                         <select name="communication" class="w-full border rounded-xl p-3">
                             <option value="">Select</option>
                             <option>Yes</option>
                             <option>No</option>
                         </select>
                     </div>

                 </div>

             </div>

             {{-- STEP 3 --}}
             <div class="step hidden">

                 <h2 class="text-2xl font-bold mb-6 text-slate-800">
                     Documents & Eligibility
                 </h2>

                 <div class="space-y-5">

                     <div>
                         <label class="font-semibold block mb-2">
                             7. Available Documents
                         </label>

                         <div class="grid md:grid-cols-2 gap-3">

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
                             <label class="border rounded-xl p-3 flex gap-2 items-center">
                                 <input type="checkbox" name="documents[]" value="{{ $doc }}">
                                 <span>{{ $doc }}</span>
                             </label>
                             @endforeach

                         </div>
                     </div>

                     <div>
                         <label class="font-semibold block mb-2">
                             8. Able to provide evidence within 1–2 weeks?
                         </label>

                         <select name="evidence_ready" class="w-full border rounded-xl p-3">
                             <option value="">Select</option>
                             <option>Yes</option>
                             <option>No</option>
                         </select>
                     </div>

                     <div>
                         <label class="font-semibold block mb-2">
                             9. Interested in fast-tracking qualification through RPL?
                         </label>

                         <select name="fast_track" class="w-full border rounded-xl p-3">
                             <option value="">Select</option>
                             <option>Yes</option>
                             <option>No</option>
                         </select>
                     </div>

                 </div>

             </div>

             {{-- STEP 4 --}}
             <div class="step hidden">

                 <h2 class="text-2xl font-bold mb-6 text-slate-800">
                     Contact Details
                 </h2>

                 <div class="space-y-5">

                     <input type="text"
                         name="name"
                         placeholder="Full Name"
                         class="w-full border rounded-xl p-3">

                     <input type="text"
                         name="phone"
                         placeholder="Mobile Number"
                         class="w-full border rounded-xl p-3">

                     @error('phone')
                     <p class="text-red-500 text-sm">{{ $message }}</p>
                     @enderror

                     <input type="email"
                         name="email"
                         placeholder="Email Address"
                         class="w-full border rounded-xl p-3">

                     <select name="course" class="w-full border rounded-xl p-3">
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
             <div class="flex justify-between mt-8">

                 <button type="button"
                     onclick="prevStep()"
                     id="prevBtn"
                     class="hidden bg-slate-200 px-6 py-3 rounded-xl font-semibold">
                     Back
                 </button>

                 <button type="button"
                     onclick="nextStep()"
                     id="nextBtn"
                     class="ml-auto bg-[#002147] hover:bg-[#002147] text-white px-8 py-3 rounded-xl font-semibold">
                     Next
                 </button>

                 <button type="submit"
                     id="submitBtn"
                     class="hidden ml-auto bg-[#002147] hover:bg-[#002147] text-white px-8 py-3 rounded-xl font-semibold">
                     Submit Application
                 </button>

             </div>

         </div>

     </div>

 </form>


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