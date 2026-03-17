<!DOCTYPE html>
<html>
<head>
    <title>Student Result Card</title>
</head>

<body>

<h1>Student Result Card</h1>

<p><strong>Name:</strong> {{ $name }}</p>
<p><strong>Roll No:</strong> {{ $roll }}</p>

<h3>Marks</h3>

<table border="1" cellpadding="10">
<tr>
<th>Subject</th>
<th>Marks</th>
</tr>

<tr>
<td>Math</td>
<td>{{ $math }}</td>
</tr>

<tr>
<td>Science</td>
<td>{{ $science }}</td>
</tr>

<tr>
<td>English</td>
<td>{{ $english }}</td>
</tr>

<tr>
<td><strong>Total</strong></td>
<td>{{ $total }}</td>
</tr>

<tr>
<td><strong>Percentage</strong></td>
<td>{{ $percentage }}%</td>
</tr>

</table>

</body>
</html>