<form class="container">
	<div class="title">
		<h3>Emergency Contact and Medical Information</h3>
	</div>
	
	<div class="group">
		<div class="row">
			<div class="col-50 input-group single">
				<label>Name</label>
				<div class="col-24">
					<input type="text">
					<p>First</p>
				</div>
				<div class="col-41">
					<input type="text">
					<p>Last</p>
				</div>
			</div>
			<div class="col-50">
				<label>Gender</label>
				<select>
					<option>Male</option>
				</select>
			</div>
			<div class="col-50 input-group complex">
				<label>Date of birth</label>
				<div class="col-7">
					<input type="text" maxlength="2">
					<p>MM</p>
				</div>
				<div class="divider">/</div>
				<div class="col-7">
					<input type="text" maxlength="2">
					<p>DD</p>
				</div>
				<div class="divider">/</div>
				<div class="col-13">
					<input type="text" maxlength="4">
					<p>YYYY</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="group">
		<h4>Emergency Contact</h4>
		<div class="row">
			<div class="col-50 input-group">
				<label>Name</label>
				<div class="col-24">
					<input type="text">
					<p>First</p>
				</div>
				<div class="col-41">
					<input type="text">
					<p>Last</p>
				</div>
			</div>
			<div class="col-50">
				<label>Relationship</label>
				<input type="text">
			</div>
			<div class="col-full">
				<label>Address</label>
				<input type="text">
				<p>Street Address</p>
			</div>
			<div class="col-full">
				<input type="text">
				<p>Address Line 2</p>
			</div>
			<div class="col-50">
				<input type="text">
				<p>City</p>
			</div>
			<div class="col-50">
				<input type="text">
				<p>State / Province / Region</p>
			</div>
			<div class="col-50">
				<input type="text">
				<p>Postal / Zip Code</p>
			</div>
			<div class="col-50">
				<select></select>
				<p>Country</p>
			</div>
			<div class="col-50 input-group complex lower">
				<label>Home Phone</label>
				<div class="col-10">
					<input type="text" maxlength="3">
					<p>###</p>
				</div>
				<span class="divider">-</span>
				<div class="col-10">
					<input type="text" maxlength="3">
					<p>###</p>
				</div>
				<span class="divider">-</span>
				<div class="col-13">
					<input type="text" maxlength="4">
					<p>####</p>
				</div>
			</div>
			<div class="col-50 input-group complex lower">
				<label>Work Phone</label>
				<div class="col-10">
					<input type="text" maxlength="3">
					<p>###</p>
				</div>
				<span class="divider">-</span>
				<div class="col-10">
					<input type="text" maxlength="3">
					<p>###</p>
				</div>
				<span class="divider">-</span>
				<div class="col-13">
					<input type="text" maxlength="4">
					<p>####</p>
				</div>
			</div>
		</div>
	</div>

	<div class="group">
		<h4>Medical Information</h4>
		<div class="row">
			
			<div class="col-full">
				<label>Hospital /Clinic Preference</label>
				<input type="text">
			</div>
			<div class="col-50">
				<label>Insurance Company</label>
				<input type="text">
			</div>
			<div class="col-50">
				<label>Policy Number</label>
				<input type="text">
			</div>
			<div class="col-50">
				<label>Physician's Name</label>
				<input type="text">
			</div>
			<div class="col-50 input-group complex">
				<label>Phone Number</label>
				<div class="col-10">
					<input type="text" maxlength="3">
					<p>###</p>
				</div>
				<span class="divider">-</span>
				<div class="col-10">
					<input type="text" maxlength="3">
					<p>###</p>
				</div>
				<span class="divider">-</span>
				<div class="col-13">
					<input type="text" maxlength="4">
					<p>####</p>
				</div>
			</div>
			<div class="col-full">
				<label>Allergies / Special Health Considerations</label>
				<textarea cols="30" rows="9"></textarea>
			</div>
			<div class="col-full">
				<input type="submit">
			</div>
		</div>
	</div>
</form>


