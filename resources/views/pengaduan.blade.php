<form action="/pengaduan" method="POST">
    @csrf
    tgl_pengaduan
    <input type="date" name="tgl_pengaduan">
    @error('tgl_pengaduan')
        {{ $message }}
    @enderror
    nik
    <input type="text" name="nik" value="{{ auth()->user()->nik }}">
    @error('nik')
        {{ $message }}
    @enderror
    isi_laporan
    <textarea name="isi_laporan" id="" cols="30" rows="10"></textarea>
    @error('isi_laporan')
        {{ $message }}
    @enderror
    foto
    <input type="text" name="foto">
    @error('foto')
        {{ $message }}
    @enderror


    <button type="submit">lapor</button>
</form>
<a href="/">back</a>