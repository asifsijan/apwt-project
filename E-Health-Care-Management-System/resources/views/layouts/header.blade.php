<div class="col-3 ml-auto text-right py-5 mx-5 d-flex flex-row-reverse bd-highlight container">
<!-- <button class="button btn-outline-secondary"><a href="/doctor/login">login</button>		
	<button class="button btn-outline-secondary"><a href="/doctor/register">register</button>	 -->





		<div class="p-2 bd-highlight">
			<select class="form-select btn btn-secondary" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
				<option value="" selected="" disabled="">Login</option>
				<option value="/doctor/login">As a Doctor</option>
				<option value="#">As a Patients</option>
				<option value="#">As a MSPS</option>
			</select>
		</div>

		<div class="p-2 bd-highlight">
			<select class="form-select btn btn-secondary" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
				<option value="" selected="" disabled="">Register</option>
				<option value="/doctor/register">As a Doctor</option>
				<option value="#">As a Patients</option>
				<option value="#">As a MSPS</option>
			</select>
		</div>


	</div>
	<div class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
		<div class="">

			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#"><h2>E-Health Care</h2></a>

				</li>


			</ul>

		</div>
	</div>
	

