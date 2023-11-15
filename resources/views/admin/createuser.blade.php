<h1>Create User</h1>
<form action="/admin/storeuser" method="POST">
    @csrf
    <input type="text" name="name"><br><br>
    <input type="email" name="email"><br><br>
    <select name="level">
        <option value="">Pilih Level User</option>
        <option value="editor">Editor</option>
        <option value="admin">Admin</option>
    </select>
    <br><br>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="save"><br><br>
</form>