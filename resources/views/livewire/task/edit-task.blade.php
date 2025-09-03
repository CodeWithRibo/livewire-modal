<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                @foreach($tasks as $task)
                            <tbody>
                            <tr wire:key="{{$task->id}}">
                                <th scope="row">{{$task->id}}</th>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>
                                <td>
                                <x-secondary-button>
                                    <a href={{route('show.update-task', $task->id)}}>Edit</a>
                                </x-secondary-button>
                                </td>
                                <td>
                                    @livewire('modals.some-modal', ['task' => $task->id])
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
