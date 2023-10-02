<input type="checkbox" class="hidden" name="{{$name}}" id="{{$name}}-{{$value}}" @if($checked)checked @endif>
<label for="{{$name}}-{{$value}}" class="nv-checkbox-label p-4 cursor-pointer border-{{$accentColor}} border-4 inline-flex items-center gap-x-2 text-xl rounded-md bg-opacity-5 bg-{{$accentColor}}">
    <span class="material-symbols-outlined checking text-{{$accentColor}} !text-2xl @if($checked)!hidden @endif">
        check_box_outline_blank
    </span>
    <span class="material-symbols-outlined checking text-{{$accentColor}} !text-2xl @if(!$checked)!hidden @endif" class="">
        check_box
    </span>

    <span class="nv-checkbox-label-text">{{$label}}</span>
    @if($helper)
    <span class="material-symbols-outlined text-{{$accentColor}} !text-2xl" data-helper-content="{{$helper}}">info</span>
    @endif
</label>
