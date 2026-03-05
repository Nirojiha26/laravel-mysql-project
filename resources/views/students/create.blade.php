<!doctype html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h2>Create Student</h2>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Name</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email</label><br>
        <input type="text" name="email" value="{{ old('email') }}"><br><br>

        <label>Phone</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}"><br><br>

        <button type="submit">Save</button>
        <a href="{{ route('students.index') }}">Back</a>
    </form>
</body>
</html>