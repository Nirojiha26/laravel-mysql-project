<!doctype html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label><br>
        <input type="text" name="name" value="{{ old('name', $student->name) }}"><br><br>

        <label>Email</label><br>
        <input type="text" name="email" value="{{ old('email', $student->email) }}"><br><br>

        <label>Phone</label><br>
        <input type="text" name="phone" value="{{ old('phone', $student->phone) }}"><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('students.index') }}">Back</a>
    </form>
</body>
</html>