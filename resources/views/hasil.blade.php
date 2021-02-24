<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>hasil</title>
</head>

<body>
    @if(isset($gabungan_suhu))
    {{$gabungan_suhu}}
        {{-- @foreach ($gabungan_suhu as $suhu)
            <div class="col-md-3 ">
                <div class="card d-flex" style="width: 18rem; height: 14rem;">
                    <div class="card-body align-items-center d-flex justify-content-center flex-column">
                        <h5 class="card-title " style="font-size: 50px; font-weight: bold">{{ $suhu->nama }}
                        </h5><br>
                        <h6 class="card-subtitle">{{ $suhu->nilai }}</h6>
                    </div>
                </div>
            </div>
        @endforeach --}}
    @endif
</body>

</html>
