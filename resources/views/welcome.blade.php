 @extends('szablon')

@section('title')
     {{ $title }}
@endsection

@section('glowne_dane')

<div class="container">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">imię i nazwisko</th>
                <th scope="col">Email</th>
                <th scope="col">Data rejestracji</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uzytkownicy as $uzytkownik)
            <tr>
                <th scope="row">{{ $uzytkownik['id'] }}</th>
                <td>{{ $uzytkownik['name'] }}</td>
                <td>{{ $uzytkownik['email'] }}</td>
                <td>{{ $uzytkownik['created_at'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
