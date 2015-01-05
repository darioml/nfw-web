<h1 id="title">Student Applications</h1>


<?php /*
<!--

<BR />
<p>
Applications will be open shortly, however if you'd like to register your interest and receive email updates, please enter your email below.
</p>

<br />
<script type="text/javascript" src="em_sub/email.js"></script>

<div id="em_sub">

	<input id="em_txt" type="text" onkeypress="checkemail(this, event)" onkeyup="checkemail(this, event)"><img src="em_sub/blank.gif" id="em_gb">
	<input onclick="sub_email()" id="em_subbut" type="submit" value="submit" style="display: none;">
</div>

-->
*/ ?>


<form action="uploader.php" method="post" enctype="multipart/form-data" id="formID" class="formular" style="width:900px" >

<BR>

The deadline for applications is the 12th of December.
<br><br>

All fields marked * are required.
<BR><BR>

            <fieldset>
                <legend>
                    Contact Details
                </legend>

<table width=90%>
<tr>
<td width=50%>
                <label>
                    <span>First Name*</span>
                    <input value="" class="validate[required,custom[onlyLetterNumber],maxSize[30]] text-input" type="text" name="firstname" id="firstname" />
                </label>
    <td>            
                <label>
                <span>Middle Name</span>  
                    <input value="" class="validate[custom[onlyLetterNumber],maxSize[30]] text-input" type="text" name="middlename" id="middlename" />
                 </label>
	
<tr><td>   
                <label>
                <span>Last Name*</span>  
                    <input value="" class="validate[required,custom[onlyLetterNumber],maxSize[30]] text-input" type="text" name="lastname" id="lastname" />
                 </label>
                <td>         
              <label>
              <span>Phone number (home or mobile)</span>
        <input value="" class="validate[custom[onlyLetterNumber],maxSize[30]] text-input" type="text" name="number" id="number" />
                                                    </label>			
													
	
        <tr><td>   
              <label>
              <span>Email*</span>
        <input value="" class="validate[required,custom[email],maxSize[70]] text-input" type="text" name="email" id="email" />
                                                    </label>
                <td>         

                    </table>                                                       
            </fieldset>
            
			
			
                  <fieldset>
                          <legend>
About You
                                             </legend>
                                             

                                                    
  <label>
                                    <span>University*</span>
                                    <select name="university" id="university">
								<option>	Aarhus University </option>
								<option>	Albert-Ludwigs-Universitat Freiburg</option>
							<option>		Birkbeck, University of London</option>
<option>Bocconi University</option>
<option>Bristol University</option>
<option>California Institute of Technology</option>
<option>Cass Business School</option>
<option>Columbia University in the City of New York</option>
<option>Copenhagen Business School</option>
<option>Cranfield School of Management</option>
<option>Durham University</option>
<option>EADA Business School</option>
<option>EBA Vienna</option>
<option>EM Lyon Business School</option>
<option>EPFL - Ecole Polytechnique F&eacute;d&eacute;rale de Lausan</option>ne
<option>ESCP Europe Business School</option>
<option>ESSEC Business School</option>
<option>ETH Zurich</option>
<option>Goethe University of Frankfurt</option>
<option>Grenoble Graduate School of Business</option>
<option>Harvard Business School</option>
<option>Harvard University</option>
<option>HEC Paris</option>
<option>Henley Business School</option>
<option>Hong Kong University</option>
<option>Hong Kong University of Science and Technology</option>
<option>Humboldt Berlin University</option>
<option>IE (Instituto de Empresa) Business School</option>
<option>IESE (Instituto de Estudios Superiores de la Empresa) Business School</option>
<option>Imperial Business School</option>
<option>Imperial College London</option>
<option>INSEAD The Business School for the World</option>
<option>King's College London</option>
<option>Kyoto University</option>
<option>Lancaster University</option>
<option>Leuven Gent Management School</option>
<option>Liepzig Graduate School of Management</option>
<option>London Business School</option>
<option>London School of Economics and Political Science</option>
<option>Loughborough University</option>
<option>LUISS Guido Carli University</option>
<option>Maastricht University</option>
<option>Massachusetts Institute of Technology</option>
<option>Moscow State University</option>
<option>National University of Singapore</option>
<option>Penn: University of Pennsylvania</option>
<option>Plekhanov Russian Academy of Ecoomics</option>
<option>Princeton University</option>
<option>Rotterdam School of Management</option>
<option>Royal Holloway University of London</option>
<option>SciencesPo (Institut d'Etudes Politiques de Paris)</option>
<option>Solvay Brussels School</option>

<option>Stanford University</option>
<option>Stockholm School of Economics</option>
<option>Sussex University</option>
<option>The Careers Group University of London</option>
<option>The Chinese University of Hong Kong</option>
<option>The School of Oriental and African Studies (SOAS)</option>
<option>The University of Chicago</option>
<option>The University of Edinburgh</option>
<option>The University of Nottingham</option>
<option>The University of York</option>
<option>UC Berkely (University of California, Berkeley)</option>
<option>UCLA (University of California, Los Angeles)</option>
<option>Universit&agrave; Cattolica del Sacro Cuore</option>
<option>University College London</option>
<option>University of Amsterdam</option>
<option>University of Bath</option>
<option>University of Cambridge</option>
<option>University of Geneva</option>
<option>University of Oxford</option>
<option>University of Southampton</option>
<option>University of St. Andrews</option>
<option>University of St. Gallen</option>
<option>University of Tokyo</option>
<option>University of Warsaw</option>
<option>University of Warwick</option>
<option>Vlerick Business School</option>
<option>Yale University</option>          
<option>Other - include in Additional Details</option>           
                                    
                                    </select>
                                    
                                                                                        </label>
                                                                                                   
   <label>
                                     <span>Educational Level*</span>
                                     <select name="educationallevel" id="educationallevel">
                                     <option>BA</option>
                                     <option>BAcc</option>
                                     <option>BAcc (Hons)</option>
                                     <option>BEd</option>
                                     <option>BEd (Hons)</option>
									 <option>BEng</option>
									 <option>BEng (Hons)</option>
                                     <option>BSc</option>
                                     <option>BSc (Hons)</option>
                                     <option>BVC</option>
                                     <option>Foundation</option>
                                     <option>HNC</option>
                                     <option>HND</option>
                                     <option>LLB LLM</option>
                                     <option>LPC</option>
                                     <option>MA</option>
                                     <option>MBA</option>
                                     <option>MEd</option>
                                     <option>MEng</option>
                                     <option>MPhil</option>
                                     <option>MSc</option>
									 <option>MSci</option>
                                     <option>PGCE</option>
                                     <option>PgDip</option>
                                     <option>PhD</option>
                                     </select>
                                     
                                                                                         </label>
                                                                                                    
   <label>
        <span>Year of Graduation*</span>
              <select name="graduationyear" id="graduationyear">
                       <option>2007</option>
					   <option>2008</option>
					   <option>2009</option>
					   <option>2010</option>
					   <option>2011</option>
					   <option>2012</option>
                       <option>2013</option>
                       <option>2014</option>
                       <option>2015</option>
                       <option>2016</option>
                       <option>2017</option>
                       <option>2018+</option>
             </select>
                                                                                                                                        
 </label>
           <label>
           <span>Degree Field*</span>
           <select name="degreefield" id="degreefield">
           

<option>Aeronautical Engineering</option>
<option>Accounting and Finance</option>
<option>Archaelogy</option>
<option>Architecture</option>
<option>Art and Graphic Design</option>
<option>Biological Sciences</option>
<option>Business & Management Studies</option>
<option>Chemical Engineering</option>
<option>Chemistry</option>
<option>Civil Engineering</option>
<option>Economics</option>
<option>Education</option>
<option>Electronic and Electrical Engineering</option>
<option>English Language and Literature</option>
<option>Environmental Science</option>
<option>Film, Media & Cultural Studies</option>
<option>General Engineering</option>
<option>Geography, Geophysics and Geology</option>
<option>History</option>
<option>History of Art</option>
<option>Information & Communications Technology</option>
<option>Journalism</option>
<option>Land, Economy, Surveying and Property</option>
<option>Law</option>
<option>Leisure and Tourism</option>
<option>Linguistics</option>
<option>Materials Science and Engineering</option>
<option>Manufacturing Engineering</option>
<option>Marketing, Communications, PR</option>
<option>Maths & Statistics</option>
<option>Mechanical Engineering</option>
<option>Medical, Dental & Veterinarian</option>
<option>Modern Languages</option>
<option>Music</option>
<option>Philosophy</option>
<option>Physics</option>
<option>Politics</option>
<option>Psychology</option>
<option>Retail Management</option>
<option>Sociology</option>
<option>Sports Science</option>
<option>Theology and Religious Studies</option>
<option>Other</option>    
</select>
</label>
 <label>
       <span>Future Career of Interest</span>
       <input value="" class="validate[maxSize[40]] text-input" type="text" name="futurecareer" id="futurecareer" />

                       </label>
                                                                    




<label>
<span>Your Nationality*</span>

<select name="nationality" id="nationality">
<option>Afghan</option>
<option>Albanian</option>
 <option>Algerian</option>
 <option>American</option>
 <option>Andorran</option>
 <option>Angolan</option>
 <option>Antiguans</option>
 <option>Argentinean</option>
 <option>Armenian</option>
 <option>Australian</option>
 <option>Austrian</option>
 <option>Azerbaijani</option>
 <option>Bahamian</option>
 <option>Bahraini</option>
 <option>Bangladeshi</option>
 <option>Barbadian</option>
 <option>Barbudans</option>
 <option>Batswana</option>
 <option>Belarusian</option>
 <option>Belgian</option>
 <option>Belizean</option>
 <option>Beninese</option>
 <option>Bhutanese</option>
 <option>Bolivian</option>
 <option>Bosnian</option>
 <option>Brazilian</option>
 <option>British</option>
 <option>Bruneian</option>
 <option>Bulgarian</option>
 <option>Burkinabe</option>
 <option>Burmese</option>
 <option>Burundian</option>
 <option>Cambodian</option>
 <option>Cameroonian</option>
 <option>Canadian</option>
 <option>Cape Verdean</option>
 <option>Central African</option>
 <option>Chadian</option>
 <option>Chilean</option>
 <option>Chinese</option>
 <option>Colombian</option>
 <option>Comoran</option>
 <option>Congolese</option>
 <option>Costa Rican</option>
 <option>Croatian</option>
 <option>Cuban</option>
 <option>Cypriot</option>
 <option>Czech</option>
 <option>Danish</option>
 <option>Djibouti</option>
 <option>Dominican</option>
 <option>Dutch</option>
 <option>East Timorese</option>
 <option>Ecuadorean</option>
 <option>Egyptian</option>
 <option>Emirian</option>
 <option>Equatorial Guinean</option>
 <option>Eritrean</option>
 <option>Estonian</option>
 <option>Ethiopian</option>
 <option>Fijian</option>
 <option>Filipino</option>
 <option>Finnish</option>
 <option>French</option>
 <option>Gabonese</option>
 <option>Gambian</option>
 <option>Georgian</option>
 <option>German</option>
 <option>Ghanaian</option>
 <option>Greek</option>
 <option>Grenadian</option>
 <option>Guatemalan</option>
 <option>Guinea-Bissauan</option>
 <option>Guinean</option>
 <option>Guyanese</option>
 <option>Haitian</option>
 <option>Herzegovinian</option>
 <option>Honduran</option>
 <option>Hungarian</option>
 <option>I-Kiribati</option>
 <option>Icelander</option>
 <option>Indian</option>
 <option>Indonesian</option>
<option>Iranian</option>
 <option>Iraqi</option>
 <option>Irish</option>
 <option>Israeli</option>
 <option>Italian</option>
 <option>Ivorian</option>
 <option>Jamaican</option>
 <option>Japanese</option>
 <option>Jordanian</option>
 <option>Kazakhstani</option>
 <option>Kenyan</option>
 <option>Kittian and Nevisian</option>
 <option>Kuwaiti</option>
 <option>Kyrgyz</option>
 <option>Laotian</option>
 <option>Latvian</option>
 <option>Lebanese</option>
 <option>Liberian</option>
 <option>Libyan</option>
 <option>Liechtensteiner</option>
 <option>Lithuanian</option>
 <option>Luxembourger</option>
 <option>Macedonian</option>
 <option>Malagasy</option>
 <option>Malawian</option>
 <option>Malaysian</option>
 <option>Maldivan</option>
 <option>Malian</option>
 <option>Maltese</option>
 <option>Marshallese</option>
 <option>Mauritanian</option>
 <option>Mauritian</option>
 <option>Mexican</option>
 <option>Micronesian</option>
 <option>Moldovan</option>
 <option>Monacan</option>
 <option>Mongolian</option>
 <option>Moroccan</option>
 <option>Mosotho</option>
 <option>Motswana</option>
 <option>Mozambican</option>
 <option>Namibian</option>
 <option>Nauruan</option>
 <option>Nepalese</option>
 <option>New Zealander</option>
 <option>Nicaraguan</option>
 <option>Nigerian</option>
 <option>Nigerien</option>
 <option>North Korean</option>
 <option>Northern Irish</option>
 <option>Norwegian</option>
 <option>Omani</option>
 <option>Pakistani</option>
 <option>Palauan</option>
 <option>Panamanian</option>
 <option>Papua New Guinean</option>
 <option>Paraguayan</option>
 <option>Peruvian</option>
 <option>Polish</option>
 <option>Portuguese</option>
 <option>Qatari</option>
 <option>Romanian</option>
 <option>Russian</option>
 <option>Rwandan</option>
 <option>Saint Lucian</option>
 <option>Salvadoran</option>
 <option>Samoan</option>
 <option>San Marinese</option>
 <option>Sao Tomean</option>
 <option>Saudi</option>
 <option>Scottish</option>
 <option>Senegalese</option>
 <option>Serbian</option>
 <option>Seychellois</option>
 <option>Sierra Leonean</option>
 <option>Singaporean</option>
 <option>Slovakian</option>
 <option>Slovenian</option>
 <option>Solomon Islander</option>
 <option>Somali</option>
 <option>South African</option>
 <option>South Korean</option>
 <option>Spanish</option>
 <option>Sri Lankan</option>
 <option>Sudanese</option>
 <option>Surinamer</option>
 <option>Swazi</option>
 <option>Swedish</option>
 <option>Swiss</option>
 <option>Syrian</option>
 <option>Taiwanese</option>
 <option>Tajik</option>
 <option>Tanzanian</option>
 <option>Thai</option>
 <option>Togolese</option>
 <option>Tongan</option>
 <option>Trinidadian or Tobagonian</option>
 <option>Tunisian</option>
 <option>Turkish</option>
 <option>Tuvaluan</option>
 <option>Ugandan</option>
 <option>Ukrainian</option>
 <option>Uruguayan</option>
 <option>Uzbekistani</option>
 <option>Venezuelan</option>
 <option>Vietnamese</option>
 <option>Welsh</option>
 <option>Yemenite</option>
 <option>Zambian</option>
 <option>Zimbabwean</option>

</select>





</label>




<label>
<span>Additional Information - including address for Visa applications (if applicable, see bottom)</span>
<textarea name="additionalinformation" id=""additionalinformation">

</textarea>

</label>

<label>
<span>Which stream would you prefer for the day?</span>

<table><tr>
<td valign="bottom"><input type="radio" name="stream" value="IB"></td><td>Investment Banking</td></tr>
<tr>
<td valign="bottom"><input type="radio" name="stream" value="GM"></td><td>Global Markets</td></tr>
</table>

</label>

<br>



<label>
<span>Upload CV*</span>
<input type="file" name="CV" size="80"> 
CV MUST BE ATTACHED OR APPLICATION WILL BE INVALIDATED. Valid file formats are pdf, doc, docx, rtf, txt.
<BR><BR>

</label>




<label>
<span>Where did you hear about the ICFS NFW Conference?</span>
<select name=hearaboutconference>
<option>Other</option>
<option>Newspaper Advert</option>
<option>Department mailing list</option>
<option>Newspaper Advert</option>
<option>Website advert</option>
<option>Career centers</option>
<option>Flyer</option>
<option>Friend</option>
<option>Finance Societies</option>
<option>ICFS emails</option>
</select>
</label>
<br>

<table><tr>
<td  valign="bottom"><input type="checkbox" name="consent" value="Yes" ></td><td> I give my consent for New Financial Worlds Conference to share my CV with their sponsors for fast track opportunities.</td></tr></table>


</fieldset>

<input type="hidden" name="position" value="0">
By submitting this application I understand that my information will be stored in the NFW Conference database. I state that all details above are correct and will produce proof of student status if required.
<BR><BR>
CV MUST BE ATTACHED OR APPLICATION WILL BE INVALIDATED
<BR><BR>
<b>INTERNATIONAL STUDENT VISAS:</b> If you would require a visa to attend the conference, please include this in the 'Additional Information' box, and please also include your address.
<br><br>


            <input class="submit" type="submit" value="Submit Application"/><hr/>
			
			
			
			
			
        </form>
		
		