<tr>
<td style="text-align:left">
{{ Form::label("record_type","record_type") }}
</td>
<td style="text-align:left">
{{ Form::text('record_type',$data_array_name['record_type']) }}
</td>
</tr>
<tr>
</tr>
<tr>
<td style="text-align:left">
{{ Form::label("field_name","field_name") }}
</td>
<td style='text-align:left'>
{{ Form::select('field_name',$lookups['field_name'] , $data_array_name['field_name']) }}
</td>
</tr>
