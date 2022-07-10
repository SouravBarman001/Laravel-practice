<h1>Login Page</h1>

<form action="loginExample" method="POST">
@csrf
<input type="text" name="username">
<p></p>
<input type="password" name="password">
<p></p>
<button type="submit">Submit</button>
</form>