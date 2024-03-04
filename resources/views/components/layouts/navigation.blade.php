<a href="{{route('todo')}}" @class(['current'=> request()->is('/')])>todo</a>
<a href="{{route('counter')}}" @class(['current'=> request()->is('livewire/counter')])>counter</a>
<a href="{{route('search-filter')}}" @class(['current'=> request()->is('livewire/search')])>search</a>