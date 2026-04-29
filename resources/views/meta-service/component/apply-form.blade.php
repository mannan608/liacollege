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