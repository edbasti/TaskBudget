@extends('layouts.master')

@section('content')

<h1>Budget List</h1>
<p class="lead">Here's a list of all your budget. <a href="/savings/create">Add a new one?</a></p>
<hr>

<div class="form-group">
    <select class="form-control" name="periods" id="periods">
    	<option value="">Please select ...</option>
    	@foreach($periods as $period)
      		<option value="{{$period->id}}">{{$period->description}}</option>
    	@endforeach
  	</select>
</div>

<h1>ASSETS</h1>
<div id="assets">
</div>
<h2>TOTAL ASSETS</h1>
<div id="total_assets">
</div>
<hr>
<h1>EXPENSES</h1>
<div id="expenses">
</div>
<h2>TOTAL EXPENSES</h1>
<div id="total_expenses">
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#periods').on('change', function(e){
		var period_id = this.value;

		//ajax
		$.get('/ajax-period?period_id=' + period_id, function(data){
			//success
			$('#assets').empty();
			$('#expenses').empty();
			$('#total_assets').empty();
			$('#total_expenses').empty();
			
			totalAssets = 0;
			totalExpenses = 0;
					
			$.each(data, function(index, savingObj){
					if (index == "assets")
					{
						$.each(savingObj, function(subIndex, SubSavingObj){
							totalAssets += SubSavingObj.amount;
							$('#assets').append('<h3>' + SubSavingObj.description + '</h3><p>' + SubSavingObj.amount + '</p><p><a href="/savings/' + SubSavingObj.id + '" class="btn btn-info">Edit</a><form method="POST" action="/savings/' + SubSavingObj.id + '" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden"value="{{ csrf_token() }}"><input class="btn btn-danger" type="submit" value="Delete"></form></p>');

						});
					}
					else
					{
					$.each(savingObj, function(subIndex, SubSavingObj){
						totalExpenses += SubSavingObj.amount;
							$('#expenses').append('<h3>' + SubSavingObj.description + '</h3><p>' + SubSavingObj.amount + '</p><p><a href="/savings/' + SubSavingObj.id + '" class="btn btn-info">Edit</a><form method="POST" action="/savings/' + SubSavingObj.id + '" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden"value="{{ csrf_token() }}"><input class="btn btn-danger" type="submit" value="Delete"></form></p>');
						});	
					}
				});
			$('#total_assets').append('<p>Php ' + totalAssets + '.00</p>');
			$('#total_expenses').append('<p>Php ' + totalExpenses + '.00</p>');
		});

	});
});
</script>

@stop