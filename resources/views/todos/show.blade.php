<div>
     <h2> Show Todo</h2>
 </div>
 <div>
     <a href="{{ route('todos.index') }}"> Back</a>
 </div>
 
 <div>
     <strong>Name:</strong>
     {{$todo->name}}
 </div>
 
 <div>
     <strong>Description:</strong>
     {{$todo->description}}
 </div>