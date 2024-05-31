<div>
    <input type="text" placeholder="Add todo list" class="input input-bordered max-w-xs" wire:model="task"
        wire:keydown.enter="addTodo" />
    <div class="btn btn-primary " wire:click="addTodo">Set Date</div>

    <div class="mt-3 flex flex-col gap-y-2 w-[45%]">
        @forelse ($todos as $todo)
            @if ($todo->status === 'done')
            <div class="max-w-sm p-2 border border-blue">
                <div class="grid grid-cols-3" wire:key="{{ $todo->id }}">
                    <div class="col-span-1">
                        <p> {{ $todo->task }} </p>
                    </div>
                    <div class="col-span-1">

                        <div class="inline-flex gap-2">

                            <div class="w-5 h-5 inline-flex items-center justify-center cursor-pointer"
                                wire:click="deleteTodo({{ $todo }})">
                                ❌
                            </div>

                            <div class="w-5 h-5 inline-flex items-center justify-center cursor-pointer"
                                wire:click="doneTodo({{ $todo }})">
                                ✅
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            @endif
        @empty

            <p>Nothing todo.</p>
        @endforelse
    </div>
</div>
