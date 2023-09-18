<x-app-layout>
    <div class="w-11/12 mx-auto mt-16">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Employee') }}
        </h2>
    </div>
    <div class="container mx-auto p-4 ">
    <form class=" bg-white p-6 rounded shadow-md" action="{{ route('employee.update', $employees['id']) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-10">
        <!-- Employee Name -->
        <div class="mb-4">
            <label for="name"
                class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" value="{{$employees['name']}}"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
        <!-- Email -->
        <div class="mb-4">
            <label for="email"
                class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" id="email" name="email" value="{{$employees['email']}}"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>

        <!-- Address -->
        <div class="mb-4">
            <label for="address"
                class="block text-gray-700 text-sm font-bold mb-2">Address</label>
            <textarea id="address" name="address" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight">{{$employees['address']}}</textarea>
        </div>

        <!-- Designation -->
        <div class="mb-4">
            <label for="designation"
                class="block text-gray-700 text-sm font-bold mb-2">Designation</label>
            <select id="designation" name="designation"
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="Manager" {{ $employees['designation'] == "Manager" ? 'selected' : '' }}>Manager</option>
                <option value="Cook" {{ $employees['designation'] == "Cook" ? 'selected' : '' }}>Cook</option>
                <option value="Delivery" {{ $employees['designation'] == "Delivery" ? 'selected' : '' }}>Delivery</option>
                <option value="Sales" {{ $employees['designation'] == "Sales" ? 'selected' : '' }}>Sales</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <!-- Started on -->
        <div class="mb-4">
            <label for="startedOn" class="block text-gray-700 text-sm font-bold mb-2">Started
                on</label>
            <input type="date" id="startedOn" name="startedOn"  value="{{ date('Y-m-d', strtotime($employees['started_on'])) }}"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
        <!-- Ended on -->
        <div class="mb-4">
            <label for="endedOn" class="block text-gray-700 text-sm font-bold mb-2">Ended
                on</label>
            <input type="date" id="endedOn" name="endedOn" value="{{$employees['ended_on']}}"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
        <!-- Accomadation -->
        <div class="mb-4">
            <label for="accomadation"
                class="block text-gray-700 text-sm font-bold mb-2">Accomadation</label>
            <input type="text" id="accomadation" name="accomadation" value="accomadation"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
        <!-- Allowance -->
        <div class="mb-4">
            <label for="allowance"
                class="block text-gray-700 text-sm font-bold mb-2">Allowance</label>
            <input type="text" id="allowance" name="allowance" value="allowance"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
        <!-- Transportation Expence -->
        <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Transportation
                Expence</label>
            <input type="text" id="transportation_expence"  value="transportation_expence"
                name="transportation_expence"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
        <!-- Mobile -->
        <div class="mb-4">
            <label for="mobile"
                class="block text-gray-700 text-sm font-bold mb-2">Mobile</label>
            <input type="text" id="mobile" name="mobile" value="mobile"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
        <!-- Vehicle-->
        <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Vehicle</label>
            <input type="text" id="vehicle"
                name="vehicle" value="vehicle"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
          <!-- Yearly Ticket-->
          <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Yearly Ticket</label>
            <input type="text" id="yearly_ticket"
                name="yearly_ticket" value="yearly_ticket"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
              <!-- Medical Payment-->
              <div class="mb-4">
                <label for="transportation_expence"
                    class="block text-gray-700 text-sm font-bold mb-2"> Medical Payment</label>
                <input type="text" id="medical_payment"
                    name="medical_payment" value="medical_payment"
                    class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
            </div>
                  <!-- Bonus-->
        <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Bonus</label>
            <input type="text" id="bonus"
                name="bonus" value="bonus"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
        </div>
              <!-- Visa Charge-->
              <div class="mb-4">
                <label for="transportation_expence"
                    class="block text-gray-700 text-sm font-bold mb-2">Visa Charge</label>
                <input type="text" id="visa_charge"
                    name="visa_charge"  value="visa_charge"
                    class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
            </div>
                  <!-- Insurance-->
        <div class="mb-4">
            <label for="transportation_expence"
                class="block text-gray-700 text-sm font-bold mb-2">Insurance</label>
            <input type="text" id="insurance"
                name="insurance"  value="insurance"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
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
