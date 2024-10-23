<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poka Codes</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100">
    <!-- Main Container -->
    <div class="min-h-screen flex flex-col justify-center items-center">
      <!-- Form Container -->
      <div class="bg-white shadow-lg rounded-lg w-full max-w-lg">
        <!-- Header -->
        <div class="bg-blue-400 text-white text-center py-4 rounded-t-lg">
          <h1 class="text-3xl font-bold">User Details</h1>
        </div>

        <!-- Form Body -->
        <div class="p-8">
            @if(session('success'))
            <script>
                Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
                });
            </script>
            @endif
          <form action="{{url('Rekebisha',$user_detail->id) }}" method="POST">
            @csrf
            <div class="flex gap-2">
            <!-- First Name -->
            <div class="mb-6">
              <label for="firstname" class="block text-gray-700 font-semibold mb-2">First Name</label>
              <input type="text" id="firstname" name="firstname" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Firstname" value="{{$user_detail->firstname}}" required>
            </div>
            <!-- Middle Name -->
            <div class="mb-6">
              <label for="middlename" class="block text-gray-700 font-semibold mb-2">Middle Name</label>
              <input type="text" id="middlename" name="middlename" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Middlename" value="{{$user_detail->middlename}}">
            </div>
            <!-- Last Name -->
            <div class="mb-6">
              <label for="lastname" class="block text-gray-700 font-semibold mb-2">Last Name</label>
              <input type="text" id="lastname" name="lastname" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Lastname" required value="{{$user_detail->lastname}}">
            </div>
        </div>
        <div class="flex gap-2"
            <!-- Age -->
            <div class="mb-6">
              <label for="age" class="block text-gray-700 font-semibold mb-2">Age</label>
              <input type="number" id="age" name="age" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Age" required value="{{$user_detail->age}}">
            </div>
            <!-- Address -->
            <div class="mb-6">
              <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
              <input type="text" id="address" name="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Address" required value="{{$user_detail->address}}">
            </div>
            <!-- Email -->
            <div class="mb-6">
              <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
              <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Email" required value="{{$user_detail->email}}">
            </div>
        </div>

            <!-- Gender -->
            <div class="mb-8">
              <label for="gender" class="block text-gray-700 font-semibold mb-2">Gender</label>
              <select id="gender" name="gender" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                <option value="">Select Gender</option>
                <option value="male" {{ $user_detail->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $user_detail->gender == 'female' ? 'selected' : '' }}>Female</option>
              </select>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
              <button type="submit" class="w-full bg-blue-300 text-white py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">Update</button>
            </div>

          </form>
        </div>
      </div>

    </div>
  </body>
</html>
