<div>
    <input wire:model.live.debounce.250ms="search" type="search" placeholder="Search task by title...">

    <select wire:model.live.debounce.250ms="statusFilter">
        <option value="all">All</option>
        <option value="pending">Pending</option>
        <option value="complete" >Complete</option>
        <option value="in_progress">In Progress</option>
    </select>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title
                <x-secondary-button wire:click="sortBy('title')">
                    <i class="ph-fill ph-arrow-down"></i>
                </x-secondary-button>
            </th>
            <th scope="col">Description</th>
            <th scope="col">Status
                <x-secondary-button wire:click="sortBy('status')">
                    <i class="ph-fill ph-arrow-down"></i>
                </x-secondary-button>
            </th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr wire:key="{{$task->id}}">
                <th scope="row">{{$task->id}}</th>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->status}}</td>
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
