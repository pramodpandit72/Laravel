<div>
@foreach($students as $student)

    @if($student['marks'] >= 33)
        {{ $student['name'] }} - {{ $student['marks'] }} - Pass
    @else
        {{ $student['name'] }} - {{ $student['marks'] }} - Fail
    @endif

    <br>

@endforeach
</div>
