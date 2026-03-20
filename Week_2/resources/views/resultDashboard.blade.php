<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
     <h1 style="color:blue; text-align:center"> RESULT DASHBOARD</h1>

     <table border=2>
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>CGPA</th>
            <th>Status</th>
        </tr>
        @foreach($students as $student)
        <tr <span style="color: {{$student["CGPA"] >= 5 ? "green" : "red"}};"></span>>
            <td>{{$student["id"]}}</td>
            <td>{{$student["name"]}}</td>
            <td>{{$student["CGPA"]}}</td>
            <td>{{$student["CGPA"] >= 5 ? "PASS" : "FAIL"}}</td>
        </tr>
        @endforeach 
     </table>
</div>
