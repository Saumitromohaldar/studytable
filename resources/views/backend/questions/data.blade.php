<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>Question</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>

	@foreach($questions as $question)

	 <tr>
	  <td>{{ $question->question }}</td>
	  <?php $slug=explode('?',$question->question)[0]; ?>
	  <td><a href="{{url('admin/edit/question')}}/{{$question->id}}">Edit</a> | <a href="{{url('admin/delete/question')}}/{{$question->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> | <a href="{{url('question')}}/{{preg_replace('/\s+/u', '-', trim($slug))}}/{{$question->id}}" target="_blank">View</a></td>
	  
	</tr>

	@endforeach

	</tfoot>
</table>
{{$questions->links()}}