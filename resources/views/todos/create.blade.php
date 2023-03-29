<div>
     <h2>Add New Todo</h2>
 </div>
 <div>
     <a href="{{ route('todos.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('todos.store') }}" method="POST">
     @csrf
 
     <div>
         <strong>Name:</strong>
         <input type="text" name="name" placeholder="Name">
     </div>
     <div>
         <strong>Description:</strong>
         <textarea style="height:150px" name="description" placeholder="Description"></textarea>
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>