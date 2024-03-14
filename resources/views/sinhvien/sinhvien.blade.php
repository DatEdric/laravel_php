<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php 
    $scores = [3, 4, 8, 6, 1, 5, 7, 3, 9, 8];
    $scores = [];
    @endphp

    <table  border="1">
        <tr>
            <th>stt</th>
            <th>score</th>
            <th>note</th>
        </tr>
        {{-- @foreach($scores as $score)
        <tr class="{{ $loop->even ? 'backgroundGray' : '' }}">
            <td>{{$loop->iteration}}</td>
            <td>{{$score}}</td>
            <td>{{$score > 5 ? 'dat' : 'khong dat'}}</td>
        </tr>
        @endforeach --}}

        @forelse ($scores as $score)
        <tr class="{{ $loop->even ? 'backgroundGray' : '' }}">
            <td>{{$loop->iteration}}</td>
            <td>{{$score}}</td>
            <td>{{$score > 5 ? 'dat' : 'khong dat'}}</td>
        @empty
            <tr>
                <td colspan="3">no data</td>
            </tr>
        @endforelse
    </table>
</body>
</html>