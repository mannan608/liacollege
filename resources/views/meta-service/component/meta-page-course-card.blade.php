@php
  $course = $course ?? $qualification;
@endphp

<div class="bg-white rounded-2xl overflow-hidden shadow-lg border flex flex-col group">
    
    <div class="h-56 overflow-hidden">
        <img
            src="{{ $course['image'] }}"
            alt="{{ $course['alt'] ?? $course['title'] }}"
            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
    </div>

    <div class="p-6 flex flex-col justify-between flex-grow">

        <div>
            <h3 class="text-base md:text-xl font-bold text-[#002147] mb-2">
                {{ $course['title'] }}
            </h3>

            <p class="text-gray-600 text-xs md:text-sm mb-5">
                {{ $course['description'] }}
            </p>
        </div>

        <div class="grid grid-cols-2 gap-5 ">
            <a href="{{ url('/fast-track/'.$course['slug']) }}"
               class="w-full text-center text-sm border rounded-xl py-2 hover:bg-gray-100 transition">
                Details
            </a>

            <button
                type="button"
                onclick="applicationOpenModal('{{ $course['title'] }}')"
                class="w-full bg-[#002147] text-white rounded-xl py-2 text-sm hover:bg-blue-900 transition">
                Apply Now
            </button>
        </div>
    </div>
</div>




<div id="applicationModal"
     class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 backdrop-blur-sm px-4">

    <div class="bg-white w-full max-w-3xl rounded-2xl overflow-hidden shadow-2xl animate-fadeIn">

        {{-- Header --}}
        <div class="bg-[#002147] text-white px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-bold">Quick Application</h2>

            <button type="button"
                    onclick="applicationCloseModal()"
                    class="text-3xl leading-none hover:rotate-90 transition">
                &times;
            </button>
        </div>

        {{-- Body --}}
        <div class="p-6 max-h-[85vh] overflow-y-auto">

            <div id="applyErrors" class="mb-4"></div>

            <form id="applyForm"
                  method="POST"
                  action="{{ route('qualification-lead.store') }}">

                @csrf

                <input type="hidden" name="course" id="courseInput">

                <div class="grid md:grid-cols-2 gap-5">
                    <div>
                        <label class="block mb-2 font-medium">Full Name</label>

                        <input type="text"
                               name="name"
                               class="w-full border rounded-xl px-4 py-3"
                               placeholder="Enter full name">
                                @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Phone Number</label>

                        <input type="text"
                               name="phone"
                               class="w-full border rounded-xl px-4 py-3"
                               placeholder="Enter phone number">
                                @error('phone')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Email Address</label>

                        <input type="email"
                               name="email"
                               class="w-full border rounded-xl px-4 py-3"
                               placeholder="Enter email">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Preferred Date & Time</label>

                        <input type="datetime-local"
                               name="availability"
                               class="w-full border rounded-xl px-4 py-3">
                    </div>

                </div>

                <button type="submit"
                        id="applySubmitBtn"
                        class="w-full bg-[#002147] text-white py-3 rounded-xl font-semibold hover:bg-blue-900 transition mt-12">
                    Submit Now
                </button>

            </form>

        </div>
    </div>
</div>

<div id="successModal"
    class="hidden fixed inset-0 bg-black/60 z-50 flex items-center justify-center p-4 overflow-auto">

    <div class="bg-white rounded-3xl p-6 sm:p-8 w-full max-w-xl text-center shadow-xl">
        <div class="space-y-6 text-center">
            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-secondary/15 text-secondary">
                <span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            </div>
            <div>
                <h3 class="font-headline text-lg sm:text-xl font-bold text-primary">Thank You for Your Submission!</h3>
                <p class="mt-3 text-sm sm:text-base text-on-surface-variant">We have successfully received your qualifications application. Our team will contact you shortly.</p>
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
const modal = document.getElementById('applicationModal');
const form  = document.getElementById('applyForm');
const successModal = document.getElementById('successModal');
const applyErrors = document.getElementById('applyErrors');

/* -------------------------
OPEN / CLOSE APPLICATION MODAL
------------------------- */
function applicationOpenModal(courseTitle)
{
    document.getElementById('courseInput').value = courseTitle;
    
    // Clear any previous errors when opening modal
    clearErrors();
    
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function applicationCloseModal()
{
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    
    form.reset();
    clearErrors(); // Clear errors when closing
}

/* Clear all error displays */
function clearErrors() {
    applyErrors.innerHTML = '';
    
    // Remove any inline error messages
    document.querySelectorAll('.field-error').forEach(el => el.remove());
    document.querySelectorAll('.error-input').forEach(el => {
        el.classList.remove('error-input', 'border-red-500');
    });
}

/* Display validation errors */
function displayErrors(errors) {
    // Clear previous errors first
    clearErrors();
    
    // Display summary errors at the top
    if (errors.name || errors.phone || errors.email) {
        const errorSummary = document.createElement('div');
        errorSummary.className = 'bg-red-50 border border-red-200 rounded-xl p-4 mb-4';
        
        if (errors.name) errorSummary.innerHTML += `<li>${errors.name[0]}</li>`;
        if (errors.phone) errorSummary.innerHTML += `<li>${errors.phone[0]}</li>`;
        if (errors.email) errorSummary.innerHTML += `<li>${errors.email[0]}</li>`;
        
        errorSummary.innerHTML += '</ul>';
        applyErrors.appendChild(errorSummary);
    }
    
    // Display inline errors for each field
    if (errors.name) {
        addInlineError('name', errors.name[0]);
    }
    
    if (errors.phone) {
        addInlineError('phone', errors.phone[0]);
    }
    
    if (errors.email) {
        addInlineError('email', errors.email[0]);
    }
}

/* Add inline error message below a specific field */
function addInlineError(fieldName, errorMessage) {
    const field = document.querySelector(`[name="${fieldName}"]`);
    if (field) {
        // Add error class to input
        field.classList.add('border-red-500', 'error-input');
        
        // Check if error message already exists
        let existingError = field.parentElement.querySelector('.field-error');
        if (!existingError) {
            const errorDiv = document.createElement('p');
            errorDiv.className = 'text-red-500 text-xs mt-2 field-error';
            errorDiv.textContent = errorMessage;
            field.parentElement.appendChild(errorDiv);
        }
    }
}

/* -------------------------
AJAX SUBMIT
------------------------- */
form.addEventListener('submit', async function(e){

    e.preventDefault();

    let btn = document.getElementById('applySubmitBtn');
    
    // Clear previous errors before new submission
    clearErrors();

    btn.disabled = true;
    btn.innerText = 'Submitting...';

    try{

        const response = await fetch(form.action,{
            method:'POST',
            headers:{
                'X-CSRF-TOKEN':'{{ csrf_token() }}',
                'Accept':'application/json'
            },
            body:new FormData(form)
        });

        const result = await response.json();

        btn.disabled = false;
        btn.innerText = 'Submit Now';

        if (response.ok && result.status) {
            // Success
            applicationCloseModal();
            successModal.classList.remove('hidden');
            successModal.classList.add('flex');
            form.reset(); // Reset form after successful submission
        } else if (response.status === 422 && result.errors) {
            // Validation errors (unprocessable entity)
            displayErrors(result.errors);
            
            // Scroll to show errors
            applyErrors.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        } else if (result.message) {
            // Other errors with message
            applyErrors.innerHTML = `
                <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                    <p class="text-red-600">${result.message}</p>
                </div>
            `;
        }

    } catch(error){
        console.error('Error:', error);
        btn.disabled = false;
        btn.innerText = 'Submit Now';
        
        applyErrors.innerHTML = `
            <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                <p class="text-red-600">Something went wrong. Please try again.</p>
            </div>
        `;
    }

});

/* Remove error styling when user starts typing */
form.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', function() {
        this.classList.remove('border-red-500', 'error-input');
        const errorMsg = this.parentElement.querySelector('.field-error');
        if (errorMsg) errorMsg.remove();
    });
});

/* -------------------------
SUCCESS MODAL
------------------------- */
function closeSuccessModal()
{
    successModal.classList.add('hidden');
    successModal.classList.remove('flex');
}

/* close success modal on outside click */
successModal.addEventListener('click', function(e){
    if(e.target === successModal){
        closeSuccessModal();
    }
});
</script>




<style>
@keyframes fadeIn{
    from{
        opacity:0;
        transform:scale(.92);
    }
    to{
        opacity:1;
        transform:scale(1);
    }
}

.animate-fadeIn{
    animation:fadeIn .25s ease;
}
</style>