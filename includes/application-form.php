
	<div id="rental-application" class="container-fluid">
		<style>
			#frmApplyOnline .required:after {
				content:" *"; 
				color: red;
			}

			#frmApplyOnline h3 {
				margin-top: 75px;
				margin-bottom: 50px;
			}
		</style>

			<form method="post" action="<?php echo $postURL ?>" id="frmApplyOnline" name="frmApplyOnline">
			
			<!--hidden parameters-->
				<input type="hidden" name="rmwebsvc_corpID" value="bjscpa" />
				<!--TODO need to add pull from query string-->
				<input type="hidden" name="rmwebsvc_location" value="<?php echo $location ?>" />
				<input type="hidden" name="rmwebsvc_propshortname" value="<?php echo $propshortname ?>" />

				<!--Application Date - This is set with JS-->
				<input type="hidden" name="rmwebsvc_applicationdate" id="rmwebsvc_applicationdate" />

			
				<!--begin visible form-->
				
				<h1>Apply</h1>

				<span>
					Each applicant over 18 must submit a separate application. There will be a $35 charge per applicant.
				</span>
				
				<h3>Interested Property</h3>

				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_pudf_Interested_Property">Property</label>
							<!--this gets set by JS is query string params location exists-->
							<select id="rmwebsvc_pudf_Interested_Property" name="rmwebsvc_pudf_Interested_Property" type="text" class="form-control" disabled>
								<option value="EagleP">Dorel Eagle Pass</option>
								<option value="Killee">Dorel Killeen</option>
								<option value="Spring">La Contessa</option>
								<option value="laredo">Dorel Laredo</option>
								<option value="kyle">The Strand</option>
							</select>
						</div>
						<div class="form-group">
							<label for="rmwebsvc_pudf_Interested_Unit_Type">Unit Type</label>
							<select id="rmwebsvc_pudf_Interested_Unit_Type" name="rmwebsvc_pudf_Interested_Unit_Type" class="form-control">
                                <?php if($location == 'Spring') {?>
                                <option value=""></option>
                                <option value="1 Bedroom">1 Bedroom</option>
                                <option value="1 BR Studio">1 Bedroom Studio</option>
                                <option value="2 Bedroom">2 Bedroom</option>
                                <option value="3 Bedroom">3 Bedroom</option>
                                <option value="3 BR Town Home Apt">3 Bedroom Town Home Apartment</option>
                                <?php } else { ?>
                                <option value=""></option>
                                <option value="1 Bedroom">1 Bedroom</option>
                                <option value="2 Bedroom">2 Bedroom</option>
                                <option value="3 Bedroom">3 Bedroom</option>
                                <?php }?>
								
							</select>
						</div>
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Requested_Move_in_date">Requested Move In Date</label>
                            <input name="rmwebsvc_pudf_Requested_Move_in_date" type="date" class="form-control" />
                        </div>
					</div>
					<div class="col-md-6 col-sm-6">
						<label style="height: 14px;" for="rmwebsvc_pudf_Property_Comments">Comments</label>
						<textarea rows="8" id="rmwebsvc_pudf_Property_Comments" name="rmwebsvc_pudf_Property_Comments" class="form-control"></textarea>
					</div>
				 </div>
			

			   <h3>General Information</h3>
			
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_fname" class="required">First Name</label>
							<input id="rmwebsvc_fname" class="form-control" name="rmwebsvc_fname" type="text" required />
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_lname" class="required">Last Name</label>
							<input id="rmwebsvc_lname" class="form-control" name="rmwebsvc_lname" type="text" required />
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_email" class="required">Email</label>
							<input id="rmwebsvc_email" class="input-email form-control" name="rmwebsvc_email" type="email" required pattern="[^ @]+@[^ @]+.[a-z]+" />
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_ssn" class="required">SSN</label>
							<input id="rmwebsvc_ssn" class="input-ssn form-control" pattern="^\d{3}[-\s]?\d{2}[-\s]?\d{4}$" name="rmwebsvc_ssn" type="text" required />
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_hphone" class="required">Phone Number</label>
							<input id="rmwebsvc_hphone" class="input-phone form-control" name="rmwebsvc_hphone" type="tel" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" required />
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_bdate" class="required">Birth Date</label>
							<input id="rmwebsvc_bdate" class="input-date form-control" name="rmwebsvc_bdate" type="date" required />
						</div>
					</div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_license" class="required">Driver's License #</label>
                            <input id="rmwebsvc_license" class="form-control" name="rmwebsvc_license" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_License_State" class="required">License State</label>
                            <input id="rmwebsvc_pudf_License_State" class="form-control" name="rmwebsvc_pudf_License_State" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Number_of_Occupants" class="required">Total # of Occupants</label>
                            <input id="rmwebsvc_pudf_Number_of_Occupants" class="form-control" name="rmwebsvc_pudf_Number_of_Occupants" min="1" max="10" type="number" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Pets">Do you have pets?</label>
                            <select id="rmwebsvc_pudf_Pets" name="rmwebsvc_pudf_Pets" class="form-control">
                                <option value=""></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_How_Did_You_Hear_About_Us?">How did you hear about us?</label>
                            <input id="rmwebsvc_pudf_How_Did_You_Hear_About_Us?" name="rmwebsvc_pudf_How_Did_You_Hear_About_Us?" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Requested_Lease_Term">Requested Lease Term</label>
                            <input id="rmwebsvc_pudf_Requested_Lease_Term" name="rmwebsvc_pudf_Requested_Lease_Term" type="text" class="form-control" />
                        </div>
                    </div>
				</div>

           
				 <h3>Residence/Rental History</h3>
				
				

				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_street1" class="required">Street</label>
							<input id="rmwebsvc_street1" class="required form-control" name="rmwebsvc_street1" type="text" required/>
						</div>
					</div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_city" class="required">City</label>
                            <input id="rmwebsvc_city" class="required form-control" name="rmwebsvc_city" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_state" class="required">State</label>
                            <input id="rmwebsvc_state" class="required form-control" name="rmwebsvc_state" min="2" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_zip" class="required">Zip</label>
                            <input id="rmwebsvc_zip" class="input-zip required form-control" name="rmwebsvc_zip" type="text" pattern="^\d{5}(?:[-\s]\d{4})?$" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Landlord" class="required">Landlord/Manager Name</label>
                            <input id="rmwebsvc_pudf_Landlord" class="form-control" name="rmwebsvc_pudf_Landlord" min="3" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Monthly_Payment" class="required">Monthly Rent</label>
                            <input id="rmwebsvc_pudf_Monthly_Payment " class="form-control" name="rmwebsvc_pudf_Monthly_Payment" type="number" pattern="$?[0-9]+,?[0-9]+?" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Reason_For_Leaving" class="required">Reason for Leaving</label>
                            <input id="rmwebsvc_pudf_Reason_For_Leaving" class="form-control" name="rmwebsvc_pudf_Reason_For_Leaving" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Landlord_Phone" class="required">Landlord/Manager Phone</label>
                            <input id="rmwebsvc_pudf_Landlord_Phone" class="form-control" name="rmwebsvc_pudf_Landlord_Phone" type="tel" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" required=required />
                        </div>
                    </div>
				</div>

				<h3>Employment/Income History</h3>
                
				<div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_employer" class="required">Employer Name</label>
                            <input id="rmwebsvc_employer" class="form-control" name="rmwebsvc_employer" type="text" required=required />
                        </div>
					</div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Current_Employed_City" class="required">City</label>
                            <input id="rmwebsvc_pudf_Current_Employed_City" class="form-control" name="rmwebsvc_pudf_Current_Employed_City" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Current_Employer_Phone" class="required">Employer Phone</label>
                            <input id="rmwebsvc_pudf_Current_Employer_Phone" class="input-phone form-control" name="rmwebsvc_pudf_Current_Employer_Phone" type="tel" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Current_Employed_Start_Date" class="required">Start Date</label>
                            <input id="rmwebsvc_pudf_Current_Employed_Start_Date" class="input-date form-control" name="rmwebsvc_pudf_Current_Employed_Start_Date" type="date" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Current_Employed_Length_of_Employment">Length of Employment</label>
                            <input id="rmwebsvc_pudf_Current_Employed_Length_of_Employment" name="rmwebsvc_pudf_Current_Employed_Length_of_Employment" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rwembsvc_pudf_Current_Employer_Address" class="required">Address</label>
                            <input id="rmwebsvc_pudf_Current_Employer_Address" class="form-control" name="rmwebsvc_pudf_Current_Employer_Address" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Current_Monthly_Gross_Pay" class="required">Monthly Gross Pay</label>
                            <input id="rmwebsvc_pudf_Current_Monthly_Gross_Pay" class="form-control" name="rmwebsvc_pudf_Current_Monthly_Gross_Pay" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Current_Occupation" class="required">Occupation</label>
                            <input id="rmwebsvc_pudf_Current_Occupation" class="form-control" name="rmwebsvc_pudf_Current_Occupation" type="text" required=required />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="rmwebsvc_pudf_Military_Rank">Military Rank, if applicable</label>
                            <input id="rmwebsvc_pudf_Military_Rank" name="rmwebsvc_pudf_Military_Rank" type="text" class="form-control" />
                        </div>
                    </div>
				</div>

				<h3>References</h3>
                
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_pudf_Reference_1_Name" class="required">Reference Name 1</label>
							<input id="rmwebsvc_pudf_Reference_1_Name" class="required form-control" name="rmwebsvc_pudf_Reference_1_Name" type="text" required autocomplete="off"/>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_pudf_Reference_1_Phone" class="required">Reference Phone 1</label>
							<input id="rmwebsvc_pudf_Reference_1_Phone" class="input-phone required form-control" name="rmwebsvc_pudf_Reference_1_Phone" type="text" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" required autocomplete="off"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_pudf_Reference_2_Name" class="required">Reference Name 2</label>
							<input id="rmwebsvc_pudf_Reference_2_Name" class="required form-control" name="rmwebsvc_pudf_Reference_2_Name" type="text" required autocomplete="off"/>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_pudf_Reference_2_Phone" class="required">Reference Phone 2</label>
							<input id="rmwebsvc_pudf_Reference_2_Phone" class="input-phone required form-control" name="rmwebsvc_pudf_Reference_2_Phone" type="tel" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" required autocomplete="off"/>
						</div>
					</div>
				</div>


				<h3>Emergency Contact</h3>

				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_pudf_Emergency_Contact" class="required">Name</label>
							<input id="rmwebsvc_pudf_Emergency_Contact" class="form-control" name="rmwebsvc_pudf_Emergency_Contact" type="text" autocomplete="off" required/>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label for="rmwebsvc_pudf_Emergency_Contact_Phone" class="required">Phone</label>
							<input id="rmwebsvc_pudf_Emergency_Contact_Phone" class="input-phone form-control" name="rmwebsvc_pudf_Emergency_Contact_Phone" type="tel" pattern="[0-9]{3}-?[0-9]{3}-?[0-9]{4}" autocomplete="off" required />
						</div>
					</div>
				</div>


				<h3>Comments</h3>

				<div class="row">
					<div class="col-md-6">
						<textarea rows="8" id="rmwebsvc_pudf_Comments" name="rmwebsvc_pudf_Comments" class="form-control"></textarea>
					</div>
				</div>

            
				<h3>Application Agreement</h3>

				<div class="row">
					<p>
						I understand that this is a routine application to establish credit, character, employment, and rental history.
						I also understand that this is NOT an agreement to rent and that all applications must be approved. I authorize
						verification of references given. I declare that the statements above are true and correct, and I agree that the
						landlord may terminate my agreement entered into in reliance on any misstatement made above.
					</p>
					<strong>Before signing a lease.</strong>
					<p>
						You and any co-applicants may not withdraw your application or the application deposit. If, before signing the
						lease contract, you or any co-applicant withdraws an application or notifies us that you've changed your mind
						about renting the dwelling unit, we'll be entitled to retain all application deposits and/or security deposit
						as liquidated damages, and the parties will then have no further obligation to each other. If your application
						is denied, your application fee will not be refunded.
					</p>
					<div class="checkbox">
						<label for="rmwebsvc_pudf_Agreement" class="required" >
							<input id="rmwebsvc_pudf_Agreement"name="rmwebsvc_pudf_Agreement" type="checkbox" required/> <strong>I Agree</strong> 
						</label>
                    
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
                        
						<br />
						<div class="form-group">
							<label class="required">Captcha</label><br />
                            <img src="<?php echo $url ?>" /><br />
							<input  type="text" name="CaptchaChallenge" id="CaptchaChallenge" class="form-control pull-left" required />
							
						</div>
						
						<input type="hidden" name="CaptchaKey" value="<?php echo $key ?>" />
					</div>
				</div>

          
            
				<br />
				<!--<input type="button" value="Print a Copy" class="btn" />-->
				<input type="submit" value="Submit Application" class="btn" />
			</form>
		</div>
