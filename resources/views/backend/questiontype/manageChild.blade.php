<ul>

@foreach($childs as $child)

	<li>
		<i class="indicator glyphicon glyphicon-plus-sign"></i>
	    {{ $child->title }}

		@if(count($child->childs))

            @include('backend.category.manageChild',['childs' => $child->childs])

        @endif

	</li>

@endforeach

</ul>