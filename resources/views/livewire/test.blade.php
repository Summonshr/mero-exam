<div class=" @if($question->parent) max-w-5xl @else max-w-3xl @endif mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="flex justify-between @if($question->parent) max-w-5xl @else max-w-3xl @endif relative">
            <div class="p-4 max-w-3xl w-full" id="question">
                <div class="flex @if($question->is_compare) justify-around @endif   w-full mt-4">
                    <p>{!!$question->question!!}</p>
                </div>
                <div id="options" class="mt-4">
                    @foreach($question->options as $option)
                    <label class="block flex w-full items-center py-1 my-1">
                        <input name="question{{$question->id}}" wire:click="checkAnswer('{{$option->key}}')" type="{{$question->multiple ? 'checkbox' : 'radio'}}" @if(in_array($option->key, $history->answer ?? [])) checked @endif value="{{$option->key}}">
                        <p class="pl-2">{{$option->value}}</p>
                    </label>
                    @endforeach
                </div>
                {!! $list->links()!!}
            </div>
            @if($question->parent)
            <div class="max-w-sm p-2 pt-4 h-96 overflow-auto" id="parent">
                <p class="w-full">{{$question->parent}}</p>
            </div>
           
            @endif
            @if($question->image)
                <div class="max-w-xs p-2 border-l p-4 flex items-center">
                    <img src="{{$question->image}}" alt="{{$question->image}}">
                </div>
            @endif
        </div>
    </div>
    <span class="hidden">$\frac{1}{4}$</span>
</div>