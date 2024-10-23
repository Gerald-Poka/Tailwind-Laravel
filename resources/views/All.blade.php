<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Poka Codes</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
<!-- Table Container -->
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
<div class="bg-white shadow-lg rounded-lg w-full max-w-4xl p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">User Information Table</h2>

    <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 text-center">
        <thead>
        <tr class="bg-blue-400 text-white">
            <th class="py-3 px-6">First Name</th>
            <th class="py-3 px-6">Middle Name</th>
            <th class="py-3 px-6">Last Name</th>
            <th class="py-3 px-6">Age</th>
            <th class="py-3 px-6">Address</th>
            <th class="py-3 px-6">Email</th>
            <th class="py-3 px-6">Gender</th>
            <th class="py-3 px-6">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($user_detail as $user_detail)

            <tr class="bg-gray-50 hover:bg-gray-100">
                <td class="py-4 px-6 border-b border-gray-200">{{$user_detail->firstname}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{$user_detail->middlename}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{$user_detail->lastname}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{$user_detail->age}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{$user_detail->address}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{$user_detail->email}}</td>
                <td class="py-4 px-6 border-b border-gray-200">{{$user_detail->gender}}</td>
                <td class="py-4 px-6 border-b border-gray-200 flex gap-2">
                    <div>
                        <a href="{{url('Reke',$user_detail->id)}}" class="hover:bg-green-400 p-2 rounded-md text-gray-200 bg-blue-500">Update</a>
                    </div>
                    <div>
                        <a href="{{url('Futa',$user_detail->id)}}" class="hover:bg-green-400 p-2 rounded-md text-gray-200 bg-red-500">Delete</a>
                    </div>
                </td>
              </tr>

            @endforeach
        </tbody>
    </table>
    </div>
</div>
</body>
</html>
