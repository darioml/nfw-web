<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title></title>
        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="css/template.css" type="text/css"/>
        <script src="js/jquery-1.6.min.js" type="text/javascript">
        </script>
        <script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
        </script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
        </script>
        <script>
            jQuery(document).ready(function(){
                jQuery("#formID").validationEngine();
            });

 
function win1() {
    window.open("lookup.php","Lookup","menubar=no,width=800,height=360,toolbar=no,scrollbar=yes");
}
 
        </script>
    </head>
    <body>
<BR><BR>
            <br/>
        <form id="formID" class="formular" method="post" action="" style="width:600px" enctpye="multipart/form-data">
            <fieldset>
                <legend>
                    Contact Details
                </legend>
                <label>
                    <span>First Name</span>
                    <input value="" class="validate[required,custom[onlyLetterNumber],maxSize[20]] text-input" type="text" name="firstname" id="firstname" />
                </label>
                <label>
                    <span>Last Name</span>
 <input value="" class="validate[required,custom[onlyLetterNumber],maxSize[20]] text-input" type="text" name="lastname" id="lastname" />
                 </label>
           
              <label>
              <span>Email</span>
        <input value="" class="validate[required,custom[email],maxSize[30]] text-input" type="text" name="email" id="email" />
                                                    </label>
                                                    
            </fieldset>
            
                  <fieldset>
                          <legend>
Your experience
                                             </legend>
                                             

              <label>
                                  <span>Years of work expericnes</span>
<select name="yearsofworkexperience" id="yearsofworkexperience">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20+</option>
</select>

                                                    </label>


<label>
<span>Current Working Sector</span>
<select name=currentworkingsector>

<option>Sales &amp; Trading</option>
<option>Asset management</option>
<option>Audit</option>
<option>Finance</option>
<option>Human Resources</option>
<option>IB Risk</option>
<option>Investment Banking</option>
<option>Operations & Business Services</option>
<option>Private Bank</option>
<option>Research</option>
<option>Technology</option>
<option>Quantitative Research</option>
<option>Other</option>

</select></label>
        
 <label>
                     <span>Specific Desk/Division</span>
                    <input value="" class="validate[required,custom[onlyLetterNumber],maxSize[30]] text-input" type="text" name="currentdesk" id="currentdesk" />
                      </label>
                                                                 
 <label>
                                   <span>Years in current sector</span>
                                   <select name="yearsincurrentsector" id="yearsincurrentsector">
                                   <option>1</option>
                                   <option>2</option>
                                   <option>3</option>
                                   <option>4</option>
                                   <option>5</option>
                                   <option>6</option>
                                   <option>7</option>
                                   <option>8</option>
                                   <option>9</option>
                                   <option>10</option>
                                   <option>11</option>
                                   <option>12</option>
                                   <option>13</option>
                                   <option>14</option>
                                   <option>15</option>
                                   <option>16</option>
                                   <option>17</option>
                                   <option>18</option>
                                   <option>19</option>
                                   <option>20+</option>
</select></label>








<label>
<span>Previous Working Sector</span>
<select name=currentworkingsector>
<option>NOT APPLICABLE</option>
<option>Sales &amp; Trading</option>
<option>Asset management</option>
<option>Audit</option>
<option>Finance</option>
<option>Human Resources</option>
<option>IB Risk</option>
<option>Investment Banking</option>
<option>Operations & Business Services</option>
<option>Private Bank</option>
<option>Research</option>
<option>Technology</option>
<option>Quantitative Research</option>
<option>Other</option>

</select></label>

 <label>
      <span>Specific Desk/Division</span>
       <input value="" class="validate[custom[onlyLetterNumber],maxSize[30]] text-input" type="text" name="currentdesk" id="currentdesk" />
                                                                </label>
                                                                
                                                                 <label>
                                                                                                    <span>Years in previous sector</span>
                                                                          <select name="yearsincurrentsector" id="yearsincurrentsector">
                                                                                                                           <option>N/A</option>
                                                                                                                                        <option>1</option>
                                                                                                                                          <option>2</option>
                                                                                                                               <option>3</option>
                                                                                                                                        <option>4</option>
                                                                                                                                                                                                                                                                                                                      <option>5</option>
                                                                                                                                                                                                                                                                                                                                                         <option>6</option>
                                                                                                                                                                                                                                                                                                                                                                                            <option>7</option>
                                                                                                                                                                                                                                                                                                                                                                                                                               <option>8</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <option>9</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <option>10</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <option>11</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <option>12</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <option>13</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <option>14</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <option>15</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <option>16</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <option>17</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <option>18</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <option>19</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <option>20+</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   </select></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   

</fieldset>
<fieldset>
        <legend>About You</legend>
                                                    
  <label>
                                    <span>University from which you graduated</span>
                                    <select name="university" id="university">
<option>NOT APPLICABLE</option>
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
<option>EPFL - Ecole Polytechnique Fédérale de Lausan</option>ne
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
<option>The Careers Group University of London</option>
<option>The Chinese University of Hong Kong</option>
<option>The School of Oriental and African Studies (SOAS)</option>
<option>The University of Chicago</option>
<option>The University of Edinburgh</option>
<option>The University of Nottingham</option>
<option>The University of York</option>
<option>UC Berkely (University of California, Berkeley)</option>
<option>UCLA (University of California, Los Angeles)</option>
<option>Università Cattolica del Sacro Cuore</option>
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
<option>Yale University</option>                     
                                    
                                    </select>
                                    
                                                                                        </label>
                                                                                                   
   <label>
                                     <span>Education Level</span>
                                     <select name="educationallevel" id="educationallevel">
                                     <option>BA</option>
                                     <option>Bacc</option>
                                     <option>BAcc (Hons)</option>
                                     <option>BEd</option>
                                     <option>BEd (Hons)</option>
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
                                     <option>PGCE</option>
                                     <option>PgDip</option>
                                     <option>PhD</option>
           <option>O-Level</option>
           <option>GCE</option>
           <option>A-Level</option>
           <option>GCSE</option> 
                                     </select>
                                     
                                                                                         </label>
                                                                                                    

<label><span>Year of graduation</span>

<select name=yearofgraduation>
<option>1970</option>
<option>1971</option>
<option>1972</option>
<option>1973</option>
<option>1974</option>
<option>1975</option>
<option>1976</option>
<option>1977</option>
<option>1978</option>
<option>1979</option>
<option>1980</option>
<option>1981</option>
<option>1982</option>
<option>1983</option>
<option>1984</option>
<option>1985</option>
<option>1986</option>
<option>1987</option>
<option>1988</option>
<option>1989</option>
<option>1990</option>
<option>1991</option>
<option>1992</option>
<option>1993</option>
<option>1994</option>
<option>1995</option>
<option>1996</option>
<option>1997</option>
<option>1998</option>
<option>1999</option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>

</select>


</label>

           <label>
           <span>Degree Field</span>
           <select name="degreefield" id="degreefield">
           

<option>Aeronautical Engineering</option>
<option>Architecture</option>
<option>Art and Graphic Design</option>
<option>Biology, Anatomy & Human Sciences</option>
<option>Business & Management Studies</option>
<option>Chemical Engineering</option>
<option>Chemistry</option>
<option>Civil Engineering</option>
<option>Electronic and Electrical Engineering</option>
<option>English Language and Literature</option>
<option>Environmental Science</option>
<option>Film, Media & Cultural Studies</option>
<option>Geography, Geophysics and Geology</option>
<option>History</option>
<option>History of Art</option>
<option>Information & Communications Technology</option>
<option>Journalism</option>
<option>Land, Economy, Surveying and Property</option>
<option>Law</option>
<option>Leisure and Tourism</option>
<option>Manufacturing, Materials & Mechanical Engineering</option>
<option>Marketing, Communications, PR</option>
<option>Maths & Statistics</option>
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
       <span>Languages Spoken</span>
<select multiple="multiple" name="languages[]" id="languages">

<option>Acholi</option>
<option>Afrikaans</option>
<option>Akan</option>
<option>Albanian</option>
<option>American Sign Language</option>
<option>Amharic</option>
<option>Arabic</option>
<option>Armenian</option>
<option>Assyrian</option>
<option>Azerbaijani</option>
<option>Azeri</option>
<option>Bajuni</option>
<option>Bambara</option>
<option>Basque</option>
<option>Behdini</option>
<option>Belorussian</option>
<option>Bengali</option>
<option>Berber</option>
<option>Bosnian</option>
<option>Bravanese</option>
<option>Bulgarian</option>
<option>Burmese</option>
<option>Cantonese</option>
<option>Catalan</option>
<option>Chaldean</option>
<option>Chaochow</option>
<option>Chamorro</option>
<option>Chavacano</option>
<option>Cherokee</option>
<option>Chuukese</option>
<option>Croatian</option>
<option>Czech</option>
<option>Dakota</option>
<option>Danish</option>
<option>Dari</option>
<option>Dinka</option>
<option>Diula</option>
<option>Dutch</option>
<option>Ewe</option>
<option>Farsi</option>
<option>Fijian Hindi</option>
<option>Finnish</option>
<option>Flemish</option>
<option>French</option>
<option>French Canadian</option>
<option>Fukienese</option>
<option>Fula</option>
<option>Fulani</option>
<option>Fuzhou</option>
<option>Gaddang</option>
<option>Georgian</option>
<option>German</option>
<option>Gorani</option>
<option>Greek</option>
<option>Gujarati</option>
<option>Haitian Creole</option>
<option>Hakka</option>
<option>Hakka - China</option>
<option>Hausa</option>
<option>Hebrew</option>
<option>Hindi</option>
<option>Hmong</option>
<option>Hunanese</option>
<option>Hungarian</option>
<option>Ibanag</option>
<option>Ibo/Igbo</option>
<option>Icelandic</option>
<option>Ilocano</option>
<option>Indonesian</option>
<option>Italian</option>
<option>Jakartanese</option>
<option>Japanese</option>
<option>Javanese</option>
<option>Karen</option>
<option>Kashmiri</option>
<option>Kazakh</option>
<option>Khmer (Cambodian)</option>
<option>Kinyarwanda</option>
<option>Kirghiz</option>
<option>Kirundi</option>
<option>Korean</option>
<option>Kosovan</option>
<option>Krio</option>
<option>Kurdish</option>
<option>Kurmanji</option>
<option>Lakota</option>
<option>Laotian</option>
<option>Latvian</option>
<option>Lingala</option>
<option>Lithuanian</option>
<option>Luganda</option>
<option>Luxembourgeois</option>
<option>Maay</option>
<option>Macedonian</option>
<option>Malagasy</option>
<option>Malay</option>
<option>Malayalam</option>
<option>Maltese</option>
<option>Mandarin</option>
<option>Mandingo</option>
<option>Mandinka</option>
<option>Maninka</option>
<option>Mankon</option>
<option>Marathi</option>
<option>Marshallese</option>
<option>Mien</option>
<option>Mina</option>
<option>Mirpuri</option>
<option>Mixteco</option>
<option>Moldavan</option>
<option>Mongolian</option>
<option>Montenegrin</option>
<option>Navajo</option>
<option>Neapolitan</option>
<option>Nepali</option>
<option>Nigerian Pidgin English</option>
<option>Norwegia</option>
<option>Nuer</option>
<option>Oromo</option>
<option>Pahari</option>
<option>Pampangan</option>
<option>Pamgasinan</option>
<option>Pashto</option>
<option>Patois</option>
<option>Pidgin English</option>
<option>Polish</option>
<option>Portuguese</option>
<option>Portuguese Creole</option>
<option>Punjabi</option>
<option>Romanian</option>
<option>Russian</option>
<option>Samoan</option>
<option>Serbian</option>
<option>Shanghainese</option>
<option>Shona</option>
<option>Sicilian</option>
<option>Sinhalese</option>
<option>Sindhi</option>
<option>Slovak</option>
<option>Slovenian</option>
<option>Somali</option>
<option>Sorani</option>
<option>Spanish</option>
<option>Sudanese Arabic</option>
<option>Swahili</option>
<option>Swedish</option>
<option>Sylhetti</option>
<option>Tagalog</option>
<option>Taiwanese</option>
<option>Tajik</option>
<option>Tamil</option>
<option>Telugu</option>
<option>Thai</option>
<option>Tibetan</option>
<option>Tigre</option>
<option>Tigrinya</option>
<option>Toishanese</option>
<option>Tongan</option>
<option>Tshiluba</option>
<option>Turkish</option>
<option>Twi</option>
<option>Ukrainian</option>
<option>Urdu</option>
<option>Uzbek</option>
<option>Vietnamese</option>
<option>Visayan</option>
<option>Welsh</option>
<option>Wolof</option>
<option>Yiddish</option>
<option>Yoruba</option>
<option>Yupik</option>


</select>

    </label>
                                                         


<label>
<span>Additional Information</span>
<textarea name="additionalinformation" id=""additionalinformation">

</textarea>

</label>


           
      </fieldset>

  <input class="submit" type="submit" value="Submit"/><hr/>
  
        </form>
    </body>
</html>
