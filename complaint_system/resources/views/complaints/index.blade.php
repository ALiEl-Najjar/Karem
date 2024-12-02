<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints List</title>
    <style>
        /* يمكنك إضافة التنسيق هنا */
    </style>
</head>
<body>

<h2>Complaints List</h2>

<table>
    <tr>
        <th>Complaint ID</th>
        <th>Title</th>
        <th>Mobile Phone</th>
        <th>Summary</th>
        <th>Created At</th>
    </tr>

    @foreach($complaints as $complaint)
    <tr>
        <td>{{ $complaint->id }}</td>
        <td>{{ $complaint->title }}</td>
        <td>{{ $complaint->mobile_phone }}</td>
        <td>{{ $complaint->summary }}</td>
        <td>{{ $complaint->created_at }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
