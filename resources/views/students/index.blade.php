<!doctype html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h2>Students</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}">+ Add Student</a>

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top:10px;">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a href="{{ route('students.edit', $student) }}">Edit</a>

                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this student?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div style="margin-top:10px;">
        {{ $students->links() }}
    </div>
</body>
</html>