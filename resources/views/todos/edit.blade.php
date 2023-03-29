<div>
     <h2>Edit Todo</h2>
 </div>
 <div>
     <a href="{{ route('todos.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('todos.update',$todo->id) }}" method="POST">
     @csrf
     @method('PUT')
 
     <div>
         <strong>Name:</strong>
         <input type="text" name="name" value="{{ $todo->name }}" placeholder="Name">
     </div>
     <div>
         <strong>Description:</strong>
         <textarea style="height:150px" name="description" placeholder="description">{{ $todo->description }}</textarea>
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>