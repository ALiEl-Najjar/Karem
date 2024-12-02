<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit a Complaint</title>
    <style>
        /* يمكنك وضع نفس التنسيق من الكود الأصلي هنا */
    </style>
</head>
<body>

<h2>Submit a Complaint</h2>
<!-- نموذج تقديم الشكوى -->
<form method="POST" action="{{ route('complaints.store') }}">
    @csrf
    <label for="title">Complaint Title:</label>
    <input type="text" id="title" name="title" required><br><br>

    <label for="mobile_phone">Mobile Phone:</label>
    <input type="text" id="mobile_phone" name="mobile_phone" required><br><br>

    <label for="summary">Summary:</label>
    <textarea id="summary" name="summary" rows="4" required></textarea><br><br>

    <button type="submit">Submit Complaint</button>
</form>

</body>
</html>
