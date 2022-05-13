

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="main">
			<!-- <div class="left"> 
			 <h2>Services</h2>
			 <br>
				<ul class="serv__listitemdrop">
				  <li><a href="<?php echo e(route('brgy_clearance')); ?>">Barangay Clearance</a></li>
				  <li><a href="<?php echo e(route('brgy_cert')); ?>">Barangay Certificate</a></li>
				  <li><a href="<?php echo e(route('indigency')); ?>">Certificate of Indigency</a></li>
				  <li><a href="<?php echo e(route('permit')); ?>">Permit for Telecommunication</a></li>
				  <li><a href="<?php echo e(route('spc')); ?>">Solo Parent Certification</a></li>
				</ul>
			</div> -->
            <div class="center__p">
               <div class="testbox">
				  <form action="<?php echo e(route('brgy_cert')); ?>" method="post">
					  <?php echo csrf_field(); ?>
					<div class="banner__p">
					  <h1>Barangay Clearance</h1>
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
							<td><input type="text" id="middle_name" name="middle_name" placeholder="Middle Name"/></td>
							<td><input type="text" name="last_name" placeholder="Last Name" required/></td>
							<td><input type="text" name="suffx" placeholder="Suffix"/></td>
						</tr>
						<tr>
							<td><p>Birthdate<span class="required">*</span></p></td>
							<td><p>Age<span class="required">*</span></p></td>
						</tr>
						<tr>
							<td><input type="date" id="birthdate" name="birthdate" required/>
								<i class="fas fa-calendar-alt"></i></td>
							<td><input type="text" id="age" name="age" placeholder="Age"></td>
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
							<td>
								<select name="street" id="street">
									<option value="KALAYAAN AVENUE">KALAYAAN AVENUE</option>
									<option value="PALAWAN ST. AND KALAYAAN AVENUE">PALAWAN ST. AND KALAYAAN AVENUE</option>
									<option value="BASILAN ST. COR. KALAYAAN AVENUE">BASILAN ST. COR. KALAYAAN AVENUE</option>
									<option value="KALAYAAN AVENUE COR. PALAWAN ST.">KALAYAAN AVENUE COR. PALAWAN ST.</option>
									<option value="KALAYAAN AVENUE COR. MINDORO ST.">KALAYAAN AVENUE COR. MINDORO ST.</option>
									<option value="KALAYAAN AVENUE COR. LUZON ST.">KALAYAAN AVENUE COR. LUZON ST.</option>
									<option value="KALAYAAN AVENUE COR. SULU">KALAYAAN AVENUE COR. SULU</option>
									<option value="PALAWAN ST.">PALAWAN ST.</option>
									<option value="PANAY ST.">PANAY ST.</option>
									<option value="D.V LAURILLA ST.">D.V LAURILLA ST.</option>
									<option value="CAMIGUIN ST.">CAMIGUIN ST.</option>
									<option value="CEBU ST.">CEBU ST.</option>
									<option value="MARINDUQUE ST.">MARINDUQUE ST.</option>
									<option value="CATANDUANES ST.">CATANDUANES ST.</option>
									<option value="LAURILA ST.">LAURILA ST.</option>
									<option value="CORREGIDOR ST.">CORREGIDOR ST.</option>
									<option value="SIQUIJOR ST.">SIQUIJOR ST.</option>
									<option value="BELLEZA ST.">BELLEZA ST.</option>
									<option value="LUZON ST.">LUZON ST.</option>
									<option value="BASILAN ST.">BASILAN ST.</option>
									<option value="SULU ST.">SULU ST.</option>
									<option value="SIQUIJOR ST.">SIQUIJOR ST.</option>
									<option value="MACTAN ST.">MACTAN ST.</option>
									<option value="BILIRAN ST.">BILIRAN ST.</option>
									<option value="NEGROS ST.">NEGROS ST.</option>
									<option value="CAMOTES ST.">CAMOTES ST.</option>
									<option value="MASBATE ST.">MASBATE ST.</option>
									<option value="ROMBLON ST.">ROMBLON ST.</option>
									<option value="LIMAWASA ST.">LIMAWASA ST.</option>
									<option value="SAMAR ST.">SAMAR ST.</option>
									<option value="BOHOL ST.">BOHOL ST.</option>
									<option value="PANAY ST.">PANAY ST.</option>
									<option value="MINDORO ST.">MINDORO ST.</option>
									<option value="LEYTE ST.">LEYTE ST.</option>
									<option value="SURIGAO ST">SURIGAO ST</option>
									<option value="HOMONHON ST.">HOMONHON ST.</option>
									<option value="CEBU ST.">CEBU ST.</option>
									<option value="AKLAN ST.">AKLAN ST.</option>
									<option value="GUIMARAS ST.">GUIMARAS ST.</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><p>Purpose<span class="required">*</span></p></td>
						</tr>
						<tr>
							<td colspan="12">
								<select name="purpose" id="purpose">
									<option value="Personal Transactions">Personal Transactions</option>
									<option value="Scholarship">Scholarship</option>
									<option value="School Requirements">School Requirements</option>
									<option value="Job Requirement">Job Requirement</option>
									<option value="DSWD">DSWD</option>
									<option value="SPES/GIP">SPES/GIP</option>
									<option value="Yellow Card">Yellow Card</option>
									<option value="Makatizen Card">Makatizen Card</option>
								</select>
							</td>
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
								<input type="hidden" name="doc_type" value="brgy_clearance"/>
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
							<form action="<?php echo e(route('welcome')); ?>"></form>
								<?php echo csrf_field(); ?>
						  		<button type="submit">Cancel</button> &nbsp;&nbsp;
							</form>
						  <button type="submit" data-toggle="modal" data-target="#modal">Submit</button>
						</div>
						</div>
				</div> <!--end textbox-->	
			</div>
		</div>
	</div>
	
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rtu-management-sys-api\resources\views/services/brgy_clearance.blade.php ENDPATH**/ ?>