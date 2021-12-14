
@extends('layout.ceria')

@section('title', 'Edit Kursi')

@section('isikonten')

@section('judulhalaman', 'Edit Data Kursi')

    <br>
	<a href="/kursi"> Kembali</a>

	@foreach($kursi as $k)
	<form action="/kursi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->kodekursi}}"> <br/>
		Merk Kursi<input class="form-control mt-2" type="text" required="required" name="merk" value="{{ $k->merkkursi }}"> <br/>
		Stock Kursi <input class="form-control mt-2" type="text" required="required" name="stock" value="{{ $k->stockkursi }}"> <br/>
		Tersedia
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="ada" name="tersedia" value="A" @if ($k->tersedia === "A") checked="checked" @endif>
            <label for="ada">Ada</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidak" name="tersedia" value="T" @if ($k->tersedia === "T") checked="checked" @endif>
            <label for="tidak">Tidak Tersedia</label><br>
        </div>
        <div class="text-center">
		    <input type="submit"  value="Simpan Data">
        </div>
	</form>
	@endforeach

    @endsection
