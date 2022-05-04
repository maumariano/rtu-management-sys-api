@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main">
			<div class="left"> 
			 <h2>Services</h2>
			 <br>
				<ul class="serv__listitemdrop">
				  <li><a href="{{ route('brgy_clearance') }}">Barangay Clearance</a></li>
				  <li><a href="{{ route('brgy_cert') }}">Barangay Certificate</a></li>
				  <li><a href="{{ route('indigency') }}">Certificate of Indigency</a></li>
				  <li><a href="{{ route('permit') }}">Permit for Telecommunication</a></li>
				  <li><a href="{{ route('spc') }}">Solo Parent Certification</a></li>
				</ul>
			</div>
            <div class="center__p">
               <div class="testbox">
				  <form action="{{ route('brgy_cert') }}" method="post">
					  @csrf
					<div class="banner__p">
					  <h1>Certificate of Indigency</h1>
					</div><br>
					<div class="note1">
					<p class="top-info"> Note: <br>
										Please input your personal information below which should match one of your valid IDs. We will be requiring a valid ID to authorize pick up</p>
					</div> <br>
					<div class="personal">
					<table class="Service">
						<tr>
							<td><p>Name<span class="required">*</span></p></td>
						</tr>
						<tr>
							<td>
								<input type="text" name="first_name" placeholder="First Name" required/>
								
							</td>
							<td><input type="text" name="middle_name" placeholder="Middle Name"/></td>
							<td><input type="text" name="last_name" placeholder="Last Name" required/></td>
							<td><input type="text" name="suffx" placeholder="Suffix"/></td>
						</tr>
						<tr>
							<td><p>Birthdate<span class="required">*</span></p></td>
							<td><p>Age<span class="required">*</span></p></td>
						</tr>
						<tr>
							<td><input type="date" name="birthdate" required/>
								<i class="fas fa-calendar-alt"></i></td>
							<td><input type="text" name="age" placeholder="Age"></td>
						</tr>
					 
						<tr>
							<td><p>Adresss<span class="required">*</span></p></td>
						</tr>
						<tr>
							<td><input type="text" name="addr1" placeholder="Unit/ Apartment No"/></td>
							<td><input type="text" name="addr2" placeholder="Floor"/></td>
							<td><input type="text" name="addr3" placeholder="Building Name"/></td> 
						</tr>
						<tr>
							<td><input type="text" name="addr4" placeholder="House/ Building No" required/></td>
							<td><input type="text" name="addr5" placeholder="Street Name" required/></td>
							<td><input type="text" name="addr6" placeholder="Village/District"/></td>
						</tr>
						<tr>
							<td><p>Purpose<span class="required">*</span></p></td>
						</tr>
						<tr>
							<td colspan="12"><textarea type="text" name="purpose" rows="10" required></textarea></td>
						</tr>
						<!-- <tr>
						<td colspan="4"><p>Copy of Valid ID</p></td>
						</tr>
						<tr>
						<td colspan="2"><input class="upload" type="file" name="file" size="100" accept="file/*"></td>
						</tr> -->
					</table>
					</div>
					<br>
						<h3>Let Us Contact You</h3>
						<div class="note1">
							<p>Note: We will have to contact you for further details, i.e. Pick-up schedule, etc </p><br>
						</div><br>

						<div class="contact">	
						<table class="Service">
						<tr>
							<td><p>E-mail<span class="required">*</span></p></td>
						</tr>
						<tr>
							<td><input type="text" name="email" required/></td>
						</tr>
						<tr>
						   <td><p>Phone Number<span class="required">*</span></p></td>
						</tr>
						<tr>
							<td><input type="text" name="mobile_number" required/><td>
								<input type="hidden" name="doc_type" value="indigency"/>
						</tr>
						</table>
						</div>
						
						<div class="question">
						<table class="Service">
							<tr>
							<td> <p>Please make sure you have reviewed all answers and uploaded all necessary documents, if any. No changes shall be possible after submission.</p>
							</td>
						</tr>	  
							<div class="question-answer">
							<tr>
								<td><input type="checkbox" value="none" id="checkbox_btn1" name="references" />
									<label for="checkbox_btn1" class="checkbox_btn"><span>Agree to Data Privacy Statement</span></label></td>
							</tr>
							<div class="question-answer">
							<tr>
									<td><input type="checkbox" value="none" id="checkbox_btn2" name="references" />
									<label for="checkbox_btn2" class="checkbox_btn"><span>I have reviewed my reply and uploaded the correct documents and attest that they are all correct.</span></label>
								</td>
							</tr>	
							</div>
						</form>
							</div>
						</table>
						</div>

						<div class="btn-block">
							<form action="{{ route('welcome') }}"></form>
								@csrf
						  		<button type="submit">Cancel</button> &nbsp;&nbsp;
							</form>
						  <button type="submit" data-toggle="modal" data-target="#modal">Submit</button>
						</div>
						</div>
				</div> <!--end textbox-->	
			</div>
		</div>
	</div>
	
@include('layouts.footer')

@endsection