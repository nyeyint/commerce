<form id="form-address" action="{{route('customer.addAddress')}}" method="post">
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" required="">
	</div>

	<div class="form-group">
		<label>Postal Code</label>
		<input type="text" name="post_code" class="form-control" required="">
	</div>

	<div class="form-group">
		<label>Address</label>
		<textarea name="street" class="form-control" required=""></textarea>
	</div>

	<div class="form-group">
		<label>Province</label>
		<select name="province_id" class="form-control" required="" data-province data-target="#label_province"></select>
		<input type="hidden" name="province_label" id="label_province">
	</div>

	<div class="form-group">
		<label>City</label>
		<select name="city_id" class="form-control" required="" data-city data-target="#label_city"></select>
		<input type="hidden" name="city_label" id="label_city">
	</div>

	<div class="form-group">
		<label>Subdistrict</label>
		<select name="subdistrict_id" class="form-control" required="" data-subdistrict data-target="#label_subdistrict"></select>
		<input type="hidden" name="subdistrict_label" id="label_subdistrict">
	</div>
</form>
