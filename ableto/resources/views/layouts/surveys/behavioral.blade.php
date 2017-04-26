@extends('layouts.app')

@section('title', 'Behavioral Questionnaire | ')

@section('content')
<div id="question_wrap" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

			<div class="progress">
				<div class="progress-bar progress-bar-striped active" data-progress="0"></div>
			</div>			


			@foreach($questions as $question)	
				    

			    <div class="panel panel-primary question_panel">


			      <div class="panel-heading question_title" data-question="{{ $question->question_name }}">{{ $question->question_name }}</div>

			      <div class="panel-body" id="ans_Wrap">

					<form class="survey_form" onsubmit="return false">

					<div class="list-group">

					@foreach($answers as $answer)

						@if($question->id == $answer->question_id)
						

						<div class="list-group-item" data-answer="{{ $answer->answer_name }}">{{ $answer->answer_name }}</div>

						@endif

					@endforeach

					</div>

					</form>



			      </div>
			    </div>

			@endforeach


		</div>
	</div>
</div>
@endsection