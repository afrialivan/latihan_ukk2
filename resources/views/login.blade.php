<form action="/login" method="POST">
    @csrf
    username
    <input type="text" name="username">
    password
    <input type="password" name="password">
    <button type="submit">login</button>
</form>
<a href="/register">register</a>
