<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Kalkulator Suhu</title>
    
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <h3 class="navbar-text text-center" style="font-weight: bold">
          Aplikasi Kalkulator Penghitung Suhu
        </h3>
      </nav>
      <br>
      <br>
    <div class="container">
        <div class="row">
            <form action="/" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="suhu" class="form-label">Suhu</label>
                    <input type="number" class="form-control" id="suhu" name="suhu">
                </div>

                <div class="mb-3">
                    <label for="satuan_suhu" class="form-label">Pilih satuan suhu kamu</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="satuan_suhu" value="reamur" id="reamur"
                            checked>
                        <label class="form-check-label" for="reamur">
                            Reamur
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="satuan_suhu" value="celcius" id="celcius">
                        <label class="form-check-label" for="celcius">
                            Celcius
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="satuan_suhu" value="fahrenheit"
                            id="fahrenheit">
                        <label class="form-check-label" for="fahrenheit">
                            Fahrenheit
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="satuan_suhu" value="kelvin" id="kelvin">
                        <label class="form-check-label" for="kelvin">
                            Kelvin
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Hitung</button>
            </form>
        </div>
        <br>
        <div class="row">            
            @if (isset($gabungan_suhu))
            {{-- {{$gabungan_suhu}} --}}
                @foreach ($gabungan_suhu as $suhu)
                    <div class="col-md-3 ">
                        <div class="card d-flex" style="width: 18rem; height: 14rem;">
                            <div class="card-body align-items-center d-flex justify-content-center flex-column">
                                <h5 class="card-title " style="font-size: 50px; font-weight: bold">{{ $suhu->nilai }}°
                                </h5><br>
                                <h6 class="card-subtitle">{{ $suhu->nama }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</body>

</html>
