<html>
<body>
<form action="/regc" method="get">
    @csrf
<center>
    <h1>Sign Up</h1>
<table>
<tr>
    <td>User ID</td>
<td><input type="text" name="id"></td>
</tr><tr>
   <td></td> <td>
    @error('id')
        {{$message}}
        @enderror
    </td></tr>
    <tr>
    <td>Name</td>
<td><input type="text" name="name"></td>
</tr><tr>
   <td></td> <td>
    @error('name')
        {{$message}}
        @enderror
    </td></tr>
<tr>
    <td>Password</td>
<td><input type="password" name="password"></td>
</tr><tr>
    <td></td><td>
    @error('password'){{$message}}
    @enderror
    </td>
    </tr>

<tr>
    <td><input type="submit" name="submit" value="submit"></td>
    <td><a href="/users">Log In</a></td>
</tr>
</table>
</center>
</form>
</body>
</html>