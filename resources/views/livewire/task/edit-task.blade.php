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
                        <tbody>
                        @foreach($tasks as $task)
                            <tr wire:key="{{$task->id}}">
                                <th scope="row">{{$task->id}}</th>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>
                                <td>
                                    <x-secondary-button wire:click="$dispatch('openModal', { component: 'task.update-task', arguments: { id: {{$task->id}} }})">
                                        Edit
                                    </x-secondary-button>
                                </td>
                                <td>
                                    <x-secondary-button wire:click="$dispatch('openModal', { component: 'task.delete', arguments: { task: {{$task->id}} }})">
                                        Delete
                                    </x-secondary-button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
