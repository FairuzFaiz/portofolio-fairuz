<form method="POST" action="/admin/store" enctype="multipart/form-data">
@csrf

<input type="text" name="title" placeholder="Title"><br>
<textarea name="description"></textarea><br>

<select name="category">
    <option value="graphic">Graphic</option>
    <option value="uiux">UI/UX</option>
</select><br>

<input type="file" name="image"><br>

<button type="submit">Save</button>
</form>