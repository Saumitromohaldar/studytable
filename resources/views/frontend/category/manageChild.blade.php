<ul>

@foreach($childs as $child)
	
	<li class="child-category">
		
	    <a href="{{url('category')}}/{{preg_replace('/\s+/u', '-', trim($child->title))}}/{{$child->id}}">{{ $child->title }}</a>

		@if(count($child->childs))

            @include('frontend.category.manageChild',['childs' => $child->childs])

        @endif

	</li>

@endforeach

</ul>