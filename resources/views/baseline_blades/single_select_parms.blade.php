@extends('layouts.main')
single select parms
@section('content')
<?php 
// *******************************
// these fields are passed in when made in getAdd
//$coming_from 						= $coming_from;
//$report_key 						= $report_key;
//$table_name 						= $table_name;
//$snippet_table 					= $snippet_table;
//$snippet_table_key_field_name		= $snippet_table_key_field_name);

//$encoded_lookups 					= $encoded_lookups;
//$encoded_field_name_array 		= $encoded_field_name_array;
//$encoded_record 					= $encoded_record;
//$encoded_old_name_new_name_array 	= $encoded_old_name_new_name_array;
//$encoded_generated_snippets_array = $encoded_generated_snippets_array;
// *******************************
//echo('<br><br>in add.blade<br>');
//print_r(Input::all());exit('xit add 17');

if (array_key_exists('coming_from',Input::all())){
	$coming_from = Input::get('coming_from');
}
else{
	$coming_from = $coming_from;
}


switch ($coming_from) {
	case "change_database_connection":
		//echo($coming_from);exit('xit 62');
		break;
	case "add_additional_database_table":
		//echo($coming_from);exit('xit 62');
		break;
	default:
		echo($coming_from);exit('unhandled coming_from');
		//$table_name = $generated_snippets_array['table_name'];
		break;
}
?>

<div id="admin" style="width:650px;height:99%">
	@if($errors->has())	
		<div id="form-errors">
			<p>The following errors must be corrected:</p>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ltrim($error)}}</li>
				@endforeach
			</ul>
		</div> 
		<!-- end form-errors -->			
	@endif
	</p>
	<div id="update_active_tasks" style="width:99%"><br>
		<p>
		<p>		
		<div id="div_inside_update_active_tasks" >	
		{{ Form::open(array('url'=>'admin/'.$node_name.'/edit6', 'method'=>'GET')) }}
		{{ Form::hidden('edit6_option'						,'update_database_config') }}
		{{ Form::hidden('node_name'							,$node_name) }}
		

		
		<table id="outer_tbl_0" class="table_inside_update_active_tasks">
				<th></th>
				<tr class="table_no_lines">
				<td colspan="2">	
					<table id="inner_tbl_0_0" class="table_no_lines">
						<tr class="table_no_lines">
						<td class="table_no_lines">
							{{ Form::submit($button_title) }}
							{{ Form::close() }}
						</td><td>	
							{{ Form::open(array('url'=>'admin/main', 'method'=>'GET')) }}
							{{ Form::submit('Main menu', array('class'=>'cart-btn')) }}
							{{ Form::close() }}
						</td><td>	
							{{ Form::open(array('url'=>'admin/'.$node_name, 'method'=>'GET')) }}
							{{-- Form::hidden('model_table',$table_name) --}}
							{{-- Form::hidden('snippet_table',Input::get('snippet_table')) --}}
							{{-- Form::submit($table_name.' menu', array('class'=>'cart-btn')) --}}
							{{ Form::close() }}
						</td></tr>
					</table>
				</td>
				</tr>
		
				<?php 
					$rowcount = -1;
					$save_shift = "";
					$classradio = "class=\'bottom_buttons\'";
					$new_name = "";
					//echo ('***1069 $coming_from***<br>');print_r($coming_from);echo ('***$Input::all()***<br>');print_r(Input::all());echo ('***$generated_snippets_array***<br>');print_r($generated_snippets_array);
				?>	
			 
				
					
				</table>
			{{ Form::select('db_connection_name_array[]',$connection_array,$current_connection,array('type' => 'numeric')) }}
				
		</div>   <!-- end div_inside_update_active_tasks -->				
	</div>   <!-- end update_active_tasks -->	
</div> <!-- end admin -->
	
	
@stop

