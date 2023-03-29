<a href="{{ route('todos.create') }}"> Create New Todo</a>
 
 <table>
     <tr>
         <th>Name</th>
         <th>Description</th>
         <th>Action</th>
     </tr>
     @foreach ($todos as $todo)
     <tr>
         <td>{{ $todo->name }}</td>
         <td>{{ $todo->description }}</td>
         <td>
            <form action="{{ route('todos.destroy',$todo->id) }}" method="POST">
                <a href="{{ route('todos.show',$todo->id) }}">Show</a>
                <a href="{{ route('todos.edit',$todo->id) }}">Edit</a>
                 @csrf
                 @method('DELETE')
                 <button type="submit">Delete</button>
            </form>
         </td>
     </tr>
     @endforeach
 </table>