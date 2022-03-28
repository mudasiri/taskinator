@extends('layout.app')

@section('content')

    <div class=" mt-8">
        <h1 class="text-3xl font-bold text-center">
            Welcome To Taskinator Task manager
        </h1>

        <div class="flex justify-center mt-4 ">
            <form class="inline p-3" method="post" action="{{route('task.store')}}">
                @csrf
                <input type="text" name="description" class=" w-6/12 p-4 rounded-lg border-2 mx-3">
                <button type="submit" class="bg-blue-500 text-white p-4 rounded">Add Task</button>
            </form>
        </div>

        <h1 class="text-center mb-4">You Have Completed {{$tasks->where('status','Completed')->count()}} out {{$tasks->count()}} Tasks</h1>

        @foreach($tasks as $task)
        <div class="flex justify-center mb-2">
          <div class="bg-white w-8/12 p-5 ">
              <div class="flex justify-between items-center">
                  <p>{{$task->description}}</p>
                  <div>
                      <button class="bg-orange-300 px-4 py-2 rounded text-white"><a href="{{route('task.update',$task)}}">{{$task->status}}</a></button>
                      <button class="bg-blue-500 rounded px-4 py-2 text-white"><a href="{{route('task.destroy', $task)}}">Delete</a></button>
                  </div>

              </div>
          </div>
        </div>

        @endforeach

    </div>




@endsection
