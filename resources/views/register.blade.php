<form action="/register" method="POST">
    @csrf
    nik
    <input type="text" name="nik">
    @error('nik')
        {{ $message }}
    @enderror
    nama
    <input type="text" name="nama">
    @error('nama')
        {{ $message }}
    @enderror
    username
    <input type="text" name="username">
    @error('username')
        {{ $message }}
    @enderror
    password
    <input type="password" name="password">
    @error('password')
        {{ $message }}
    @enderror
    telp
    <input type="text" name="telp">
    @error('telp')
        {{ $message }}
    @enderror

    <button type="submit">regis</button>
</form>
<a href="/login">login</a>