<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
    <title>Student's Datas</title>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            @foreach($siswa as $siswa)

            <div class="pa2 mb3 striped--near-white">

                <header class="b mb2">{{ $user->name }}</header>

                <div class="pl2">

                    <p class="mb2">id: {{ $siswa->id }}</p>

                    <p class="mb2">NAMA: {{ $siswa->nama }}</p>

                    <p class="mb2">JURUSAN: {{ $siswa->jurusan}}</p>\

                    <p class="mb2">NIS: {{ $siswa->nis }}</p>



                </div>

            </div>

            @endforeach

        </div>