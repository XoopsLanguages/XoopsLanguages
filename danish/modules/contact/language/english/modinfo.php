<?php
// $Id: modinfo.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
// Module Info

// The name of this module
define("_MI_CONTACT_NAME","Contact");
// A brief description of this module
define("_MI_CONTACT_DESC","Email contact page");

define('_MI_CONTACT_SETTINGS','Settings');
define('_MI_CONTACT_SETTINGS_DSC','Contact Us Collection settings');
define('_MI_CONTACT_GEN','General' );
define('_MI_CONTACT_GEN_DSC','General settings for intro and subject/email definitions' );

// Config stuff
define("_MI_CONTACT_GETICQ","Collect ICQ" );
define("_MI_CONTACT_GETICQDSC","Yes - ask for ICQ" );

define("_MI_CONTACT_ALLOWSENDCONFIRM","Allow Confirm Messages" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC","Yes - shows a check box for the sender to "
                                 ."have a confimation email sent to them." );

define("_MI_CONTACT_GETURL","Collect user URL" );
define("_MI_CONTACT_GETURLDSC","Yes - ask for the users URL" );

define("_MI_CONTACT_GETCOMPANY","Collect user Company Name" );
define("_MI_CONTACT_GETCOMPANYDSC","Yes - ask for the users company name" );

define("_MI_CONTACT_GETLOC","Collect user location" );
define("_MI_CONTACT_GETLOCDSC","Yes - ask for the users location, not the full address" );

define("_MI_CONTACT_ADDRESS","Collect user Address" );
define("_MI_CONTACT_ADDRESSDSC","Yes - ask for the users address" );

define("_MI_CONTACT_INTROHEAD","Introduction Heading" );
define("_MI_CONTACT_INTROHEAD_DESC","This is the heading applied to the <b>Introduction Text</b>");
define("_MI_CONTACT_INTRO_DEFAULT","Please fill in the form and submit, we will<br />respond as soon as possible!");

define("_MI_CONTACT_INTRO","Introduction Text" );
define("_MI_CONTACT_INTRO_DESC","Text that can be added to the beginning of the <b>Contact Us</b><br />"
                               ."dialog.  I.e. - Welcome text, snail mail address, phone numbers" );
							   
define("_MI_CONTACT_SECURITY","Security Check" );
define("_MI_CONTACT_SECURITYDSC","Yes - Activate <b>Security Check</b> to validate users sending contact mail.<br />"
	                             ."This may also help eliminate <b>Contact Us</b> SPAM!" );
								 
define("_MI_CONTACT_SITEKEY","Random Key" );
define("_MI_CONTACT_SITEKEYDSC","Create any random mixed characters or numbers to make <b>Security Check</b><br />"
                                ."more granular and random!" );
								
define("_MI_CONTACT_HEAD","Contact Heading" );
define("_MI_CONTACT_HEADDSC","Heading for Contact Form");
define("_MI_CONTACT_HEADDEFAULT","Contact Form");

define("_MI_CONTACT_THANKYOU","Thank You Message");
define("_MI_CONTACT_THANKYOUDSC","Message to sender thanking them for contacting you");
define("_MI_CONTACT_THANKYOUDEFAULT","Thank you for contacting me.  I will get back to you as soon as possible!");

define("_MI_CONTACT_TIMEOUT","Redirect Page Timeout");
define("_MI_CONTACT_TIMEOUTDSC","This is the amount of seconds to display the redirect page after sending a message");																						   

define("_MI_CONTACT_SHOWDEPT","Display \"Dept./Subject\" Section");
define("_MI_CONTACT_SHOWDEPTDSC","Yes - Shows a dropdown with defined depts/subjects<br />"
                                 ."If no departments are shown, all contact email is sent to the site email address" );

define("_MI_CONTACT_DEPTTITLE","\"Dept/Subject\" Title");
define("_MI_CONTACT_DEPTTITLEDSC","Title shown in \"Dept/Subject\" section of Contact form");
define("_MI_CONTACT_DEPTTITLEDEFAULT","Department");

define("_MI_CONTACT_DEPT","Departments" );
define("_MI_CONTACT_DEPTDSC","Departments allow you to define a department/email combination.  Users selecting<br />"
                             ."from a defined department will have their contact information sent to the corresponding<br />"
							 ."email address you define.<br /><br />"
							 ."Define each department/email as follows:<br /><br />"
							 ."dept1,email1|dept2,email2|dept3,email3 etc. - each department and email must be seperated<br />"
							 ."by a comma ',', and each department email combination bust be seperated by a pipe '|'" );
							 
define("_MI_CONTACT_VALIDATEDOMAIN","Validate Email Domain");
define("_MI_CONTACT_VALIDATEDOMAINDSC","Yes - Activate \"deep-check\" of domain.tld in email address provided.<br />"
                                       ."No - Does a simple check of email address entered.");
									   
define("_MI_CONTACT_SHOWMOREINFO","Display \"More Info\" Section" );
define("_MI_CONTACT_SHOWMOREINFODSC","Yes - Display a section with multi-checkbox choices of your defined \"More Info\"");									   							 

define("_MI_CONTACT_MOREINFOTITLE","\"More Info\" Title" );
define("_MI_CONTACT_MOREINFOTITLEDSC","Title shown in \"More Info\" section of Contact form" );
define("_MI_CONTACT_MOREINFOTITLEDEFAULT","Request More Information");

define("_MI_CONTACT_MOREINFO","\"More Info\" Items");
define("_MI_CONTACT_MOREINFODSC","\"More Info\" items allow you to display items that a user can check off<br />"
                                 ."as having more interst or needing more info.  It's a way of steering your customers<br />"
								 ."if that's what you desire.  As an example of a commercial application - a salesperson may<br />"
								 ."want to offer free info, provided the user contacts the salesperson first.  This is a way<br />"
								 ." of harvesting customers as well.<br /><br />"
								 ."Define each item as follows:<br /><br />"
								 ."item1|item2|item3 etc. - each item must be seperated by a pipe '|'");
								
?>