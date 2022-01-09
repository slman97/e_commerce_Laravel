<div class="relative  md:mt-0" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="wrap-search-form">
        <form wire:model.debounce.500ms="searchTerm"
        type="text"
        class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none "
        placeholder="Search"action="#" id="form-search-top" name="form-search-top">
            <input type="text" name="search" value="" placeholder="Search here...">
            <button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
            
        </form>
    </div>

    <ul>
        @if(!empty($searchTerm))
            <div class="wrap-list-cate">
                @foreach($users as $User)
                <ul class="list-cate">
                    <li class="level-1">
                            <img src="/storage/{{ $User->image }} ">
                            <a href="/profile/{{$User->user_id}}">
                                {{ $User->title }}
                            </a>
                    </li>
                </ul>
                   
                @endforeach
            </div>
        @endif
    </ul>

</div>
