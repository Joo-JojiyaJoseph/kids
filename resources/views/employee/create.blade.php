<x-app-layout>
    <div class="w-11/12 mx-auto mt-16">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Employee') }}
        </h2>
    </div>
    <div class="container mx-auto p-4 ">
    <form class=" bg-white p-6 rounded shadow-md" action="{{ route('employee.store') }}" method="POST">
        @csrf
        <div class="grid md:grid-cols-2 gap-10">
        <!-- Employee Name -->
        <div class="mb-4">
            <label for="name"
                class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" name="name"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <!-- Email -->
        <div class="mb-4">
            <label for="email"
                class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" id="email" name="email"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>

        <!-- Address -->
        <div class="mb-4">
            <label for="address"
                class="block text-gray-700 text-sm font-bold mb-2">Address</label>
            <textarea id="address" name="address" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight"></textarea>
        </div>

        <!-- Designation -->
        <div class="mb-4">
            <label for="designation"
                class="block text-gray-700 text-sm font-bold mb-2">Designation</label>
            <select id="designation" name="designation"
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="Manager">Manager</option>
                <option value="Cook">Cook</option>
                <option value="Delivery">Delivery</option>
                <option value="Sales">Sales</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <!-- Started on -->
        <div class="mb-4">
            <label for="startedOn" class="block text-gray-700 text-sm font-bold mb-2">Started
                on</label>
            <input type="date" id="startedOn" name="startedOn"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <!-- Ended on -->
        <div class="mb-4">
            <label for="endedOn" class="block text-gray-700 text-sm font-bold mb-2">Ended
                on</label>
            <input type="date" id="endedOn" name="endedOn"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <!-- Accomadation -->
        <div class="mb-4">
            <label for="accomadation"
                class="block text-gray-700 text-sm font-bold mb-2">Accomadation</label>
            <input type="text" id="accomadation" name="accomadation"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <!-- Allowance -->
        <div class="mb-4">
            <label for="allowance"
                class="block text-gray-700 text-sm font-bold mb-2">Allowance</label>
            <input type="text" id="allowance" name="allowance"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <!-- Transportation Expence -->
        <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Transportation
                Expence</label>
            <input type="text" id="transportation_expence"
                name="transportation_expence"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <!-- Mobile -->
        <div class="mb-4">
            <label for="mobile"
                class="block text-gray-700 text-sm font-bold mb-2">Mobile</label>
            <input type="text" id="mobile" name="mobile"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
        <!-- Vehicle-->
        <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Vehicle</label>
            <input type="text" id="vehicle"
                name="vehicle"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
          <!-- Yearly Ticket-->
          <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Yearly Ticket</label>
            <input type="text" id="yearly_ticket"
                name="yearly_ticket"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
              <!-- Medical Payment-->
              <div class="mb-4">
                <label for="transportation_expence"
                    class="block text-gray-700 text-sm font-bold mb-2"> Medical Payment</label>
                <input type="text" id="medical_payment"
                    name="medical_payment"
                    class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
            </div>
                  <!-- Bonus-->
        <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Bonus</label>
            <input type="text" id="bonus"
                name="bonus"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
              <!-- Visa Charge-->
              <div class="mb-4">
                <label for="transportation_expence"
                    class="block text-gray-700 text-sm font-bold mb-2">Visa Charge</label>
                <input type="text" id="visa_charge"
                    name="visa_charge"
                    class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
            </div>
                  <!-- Insurance-->
        <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Insurance</label>
            <input type="text" id="insurance"
                name="insurance"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        </div>
    </div>
        <!-- Submit Button -->
        <div class="flex justify-end gap-5 p-10">
            <x-primary-button>
                Save
            </x-primary-button>
        </div>
    </form>
</div>
</div>
</x-app-layout>
