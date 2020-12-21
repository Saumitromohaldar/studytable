    <?php $counter=($questions->currentPage()-1)*10; ?>  
    
    @foreach($questions as $key=>$question)

    <?php $counter++; $slug=explode('?',$question->question)[0]; ?>
    <div class="question_anser" >
        
        <a class="question" href="{{url('question')}}/{{preg_replace('/\s+/u', '-', trim($slug))}}/{{$question->id}}"> <span>{{$counter}}.</span> {{$question->question}}</a>
        <div class="answer_option">
        <label><strong>a)</strong> {{$question->answer_a }}</label>
        <label><strong>b)</strong> {{$question->answer_b }}</label>
        <label><strong>c)</strong> {{$question->answer_c }}</label>
        <label><strong>d)</strong> {{$question->answer_d }}</label>
        </div>
        @if(!empty($question->correct_answer))
        <?php $correct_answer='answer_'.$question->correct_answer; ?>
        <div class="correct_answer" id="divAnswer_{{$question->id}}">Answer: {{$question->correct_answer }}) {{$question->$correct_answer }}</div>
       
        <a class="view_answer" href="javascript:void(0)" onclick="$('#divAnswer_{{$question->id}}').slideToggle('slow')">View Answer</a>
        @endif
    </div>
    @endforeach
  
<!-- {{$questions->links()}} -->