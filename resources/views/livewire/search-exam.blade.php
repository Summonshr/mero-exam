<div class="p-2 max-w-md">
    <p>Search for exams</p>
    <input type="text" wire:model="search" class="w-full" placeholder="Search for exams">
    @foreach($results as $result)
        <div class="flex justify-between p-2">
            <div class="flex">
                <div class="rounded rounded-full bg-green-800 inline-block h-12 w-12 flex items-center justify-center text-green-100">{{$result->course}}</div>
                <div class="flex-grow pl-2 hover:">
                    <p>{{$result->subject}}</p>
                    <p>Set ID: {{$result->set_id}}</p>
                </div>
            </div>
            <div>
                <p>
                Total questions: {{$result->questions_count}}
                </p>
                <button wire:click="enroll({{$result->set_id}})" type="button" class="bg-green-200 text-green-900 hover:text-green-100 hover:bg-green-900 w-24 float-right rounded">Take</button>
            </div>
        </div>
    @endforeach
</div>
