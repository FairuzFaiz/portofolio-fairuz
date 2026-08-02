<a href="/admin/create" class="bg-blue-500 text-white px-4 py-2">Add</a>

<table class="mt-4 w-full">
@foreach($projects as $p)
<tr>
    <td>{{$p->title}}</td>
    <td>
        <a href="/admin/edit/{{$p->id}}">Edit</a>
        <a href="/admin/delete/{{$p->id}}">Delete</a>
    </td>
</tr>
@endforeach
</table>