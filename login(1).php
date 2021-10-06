<h1>Login</h1>
<form
    method="post"
    action="dashboard.php"
>
    <div>
        <label for="email">Email</label>
        <input
            type="email"
            name="email"
            id="email"
            value=""
            required
        />
    </div>
    <br>
    <div>
        <label for="password">Password</label>
        <input
            type="password"
            name="password"
            id="password"
            value=""
            required
        />
    </div>
    <br>
    <input type="submit" value="Login" />
</form>