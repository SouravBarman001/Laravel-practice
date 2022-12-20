<h1>User login</h1>

<form action="submit" method="POST">
    @csrf
    <input type="text" placeholder="Enter user name"/><br><br>
    <input type="text" placeholder="Enter user password"/><br><br>
    <button>login</button>
</form>