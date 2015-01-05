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
Login
                </legend>
              <label>
              <span>Email</span>
        <input value="" class="validate[required,custom[email],maxSize[30]] text-input" type="text" name="email" id="email" />
                                                    </label>
                                                    
 <label>
               <span>Password</span>
                       <input value="" type="password" name="password" id="password" />
                                                                           </label>
                                                                           
            </fieldset>
            
            <input class="submit" type="submit" name="Submit" value="Log in and continue..."/><hr/>
        </form>
    </body>
</html>
