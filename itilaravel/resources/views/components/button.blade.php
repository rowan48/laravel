
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
        @if($type=='primary')
        
        @elseif($type=='secondary')
        <a href="{{$link}}" class="btn btn-{{$type}}">
        <span>edit</span>
        </a>
        @elseif($type=='danger')
        <a href="" class="btn btn-{{$type}} delete-user">
        <span>delete</span>
        </a>
        @endif

