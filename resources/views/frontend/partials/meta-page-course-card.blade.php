@php
  $course = $course ?? $qualification;
@endphp

<div class="bg-surface-container-lowest rounded-xl overflow-hidden ambient-shadow flex flex-col group border border-outline-variant/15">
  <div class="h-56 overflow-hidden">
    <img
      class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
      src="{{ $course['image'] }}"
      alt="{{ $course['alt'] ?? $course['title'] }}"
    >
  </div>
  <div class="p-8 flex-grow">
    <h4 class="font-headline font-bold text-xl text-primary mb-2">{{ $course['title'] }}</h4>
    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">{{ $course['description'] }}</p>
    @if (!empty($course['url']))
      <a class="block w-full py-3 bg-primary text-on-primary rounded-lg font-semibold text-center transition-all hover:bg-primary-container" href="{{ $course['url'] }}">
        Apply Now
      </a>
    @else
      <button onclick="applicationOpenModal()" class="w-full py-3 bg-primary text-on-primary rounded-lg font-semibold transition-all hover:bg-primary-container" type="button">
        Apply Now
      </button>
    @endif
  </div>
</div>

  <!-- Modal Overlay -->
<div id="applicationModal"    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 backdrop-blur-sm px-4">
    <!-- Modal Box -->
    <div class="bg-white w-full max-w-3xl rounded-2xl shadow-2xl overflow-hidden animate-fadeIn">

        <!-- Header -->
        <div class="bg-[#002147] text-white px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-bold">Application form</h2>

            <button onclick="applicationCloseModal()" class="text-white text-2xl leading-none hover:rotate-90 transition">
                &times;
            </button>
        </div>

        <!-- Body -->
        <div class="p-6 max-h-[85vh] overflow-y-auto">

            <form action="#" method="POST" class="space-y-5">

                <div class="grid md:grid-cols-2 gap-5">

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Full Name</label>
                        <input type="text"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="Enter full name">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Phone Number</label>
                        <input type="text"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="Enter phone number">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Email Address</label>
                        <input type="email"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="Enter email">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Industry</label>
                        <select
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">
                            <option>Select Industry</option>
                            <option>Aged Care</option>
                            <option>Disability Support</option>
                            <option>Leadership</option>
                            <option>Project Management</option>
                            <option>Business Admin</option>
                        </select>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Experience</label>
                        <select
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">
                            <option>Select Experience</option>
                            <option>Less than 2 Years</option>
                            <option>2 - 5 Years</option>
                            <option>5 - 10 Years</option>
                            <option>10+ Years</option>
                        </select>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Country</label>
                        <input type="text"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="Enter country">
                    </div>

                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-700">Message</label>
                    <textarea rows="4"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"
                        placeholder="Write message"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-[#002147] text-white py-3 rounded-xl font-semibold hover:bg-blue-900 transition">
                        Submit Now
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<script>
function applicationOpenModal() {
    document.getElementById('applicationModal').classList.remove('hidden');
    document.getElementById('applicationModal').classList.add('flex');
}

function applicationCloseModal() {
    document.getElementById('applicationModal').classList.add('hidden');
    document.getElementById('applicationModal').classList.remove('flex');
}
</script>

<!-- Animation -->
<style>
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(.92);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.animate-fadeIn {
    animation: fadeIn .3s ease;
}
</style>