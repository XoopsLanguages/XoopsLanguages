<?php
// $Id: main.php,v 1.1 2007/02/10 18:56:03 dap997 Exp $
// $Id: main.php,v 1.1 2007/02/10 18:56:03 dap997 Exp $
//%%%%%%		Original Module Name 'MyLinks'		%%%%%
//%%%%%%		New Module Name 'Booklists' 	 	%%%%%
//%%%%%%		Module hacked by C. Sebastian Loh  	%%%%%
//%%%%%%		Modified date: Feb 18, 2004			%%%%%

define("_MD_THANKSFORINFO","Thanks for the information. We'll look into your request shortly.");
define("_MD_THANKSFORHELP","Thank you for helping to maintain this directory's integrity.");
define("_MD_FORSECURITY","For security reasons your user name and IP address will also be temporarily recorded.");

define("_MD_SEARCHFOR","Search for");
define("_MD_ANY","ANY");
define("_MD_SEARCH","Search");

define("_MD_MAIN"                ,"Strona g³ówna");
define("_MD_SUBMITLINK"          ,"Dodaj now± ksi±¿kê");
define("_MD_SUBMITLINKHEAD"      ,"Dodaj now± ksi±zkê - formularz");
define("_MD_POPULAR"             ,"Popularne");
define("_MD_TOPRATED"            ,"Najlepsze");

define("_MD_NEWTHISWEEK"         ,"Nowe w tym tygodniu");
define("_MD_UPTHISWEEK"          ,"Zmienione w tym tygodniu");

define("_MD_POPULARITYLTOM","Popularity (Least to Most Hits)");
define("_MD_POPULARITYMTOL","Popularity (Most to Least Hits)");
define("_MD_TITLEATOZ","Title (A to Z)");
define("_MD_TITLEZTOA","Title (Z to A)");
define("_MD_DATEOLD","Date (Old Submissions Listed First)");
define("_MD_DATENEW","Date (New Submissions Listed First)");
define("_MD_RATINGLTOH","Rating (Lowest Score to Highest Score)");
define("_MD_RATINGHTOL","Rating (Highest Score to Lowest Score)");

define("_MD_NOSHOTS","No Book Cover Image Available");
define("_MD_EDITTHISLINK","Edit This Link");

define("_MD_DESCRIPTIONC"        ,"Opis: ");
define("_MD_EMAILC"              ,"E-mail: ");
define("_MD_CATEGORYC"           ,"Kategoria: ");
define("_MD_LASTUPDATEC"         ,"Zmieniony: ");
define("_MD_HITSC"               ,"Odwiedzin: ");
define("_MD_RATINGC"             ,"Ocena: ");
define("_MD_ONEVOTE"             ,"1 g³os");
define("_MD_NUMVOTES"            ,"%s g³osów");
define("_MD_RATETHISSITE"        ,"Oceñ te ksi±¿kê");
define("_MD_MODIFY"              ,"Zmieñ");
define("_MD_REPORTBROKEN"        ,"Zg³o¶ b³êdny tytu³");
define("_MD_TELLAFRIEND"         ,"Poleæ tytu³");

define("_MD_THEREARE"            ,"Posiadamy obecnie <b>%s</b> tytu³ów na naszej stronie");
define("_MD_LATESTLIST"          ,"Najnowsze tytu³y ");

define("_MD_REQUESTMOD","Request Book Title Modification");
define("_MD_LINKID","Link ID: ");
define("_MD_SITETITLE","Book Title: ");
define("_MD_SITEURL","Website/Reseller URL: ");
define("_MD_OPTIONS","Options: ");
define("_MD_NOTIFYAPPROVE","Notify me when this submission is approved");
define("_MD_SHOTIMAGE","Screenshot Img: ");
define("_MD_SENDREQUEST","Send Request");

define("_MD_VOTEAPPRE","Your vote is appreciated.");
define("_MD_THANKURATE","Thank you for taking the time to rate a book here at %s.");
define("_MD_VOTEFROMYOU","Input from users such as yourself will help other visitors better decide which book to choose.");
define("_MD_VOTEONCE","Please do not vote for the same resource more than once.");
define("_MD_RATINGSCALE","The scale is 1 - 10, with 1 being poor and 10 being excellent.");
define("_MD_BEOBJECTIVE","Please be objective, if everyone receives a 1 or a 10, the ratings aren't very useful.");
define("_MD_DONOTVOTE","Do not vote for your own resource.");
define("_MD_RATEIT","Rate It!");

define("_MD_INTRESTLINK"         ,"Interesuj±ca ksi±zka na stronie %s");  // %s is your site name
define("_MD_INTLINKFOUND"        ,"Na tej stronie %s znalaz³em intersuj±c± ksi±¿kê, mo¿e Ciê zaciekawi?");  // %s is your site name

define("_MD_RECEIVED","We received your submission. Thanks!");
define("_MD_WHENAPPROVED","You'll receive an E-mail when it's approved.");
define("_MD_SUBMITONCE","Submit the book only once.");
define("_MD_ALLPENDING","All information are posted pending verification.");
define("_MD_DONTABUSE","Username and IP are recorded, so please don't abuse the system.");
define("_MD_TAKESHOT","We will find a cover shot of the book and it may take several days for your website link to be added to our database.");

define("_MD_RANK"                ,"Poziom");
define("_MD_CATEGORY"            ,"Kategoria");
define("_MD_HITS"                ,"Odwiedzin");
define("_MD_RATING"              ,"Ocena");
define("_MD_VOTE"                ,"G³osuj");
define("_MD_TOP10"               ,"Numer %s w pierwszej 10"); // %s is a link category title

define("_MD_SEARCHRESULTS","Search results for <b>%s</b>:"); // %s is search keywords
define("_MD_SORTBY","Sort by:");
define("_MD_TITLE","Title");
define("_MD_DATE","Date");
define("_MD_POPULARITY","Popularity");
define("_MD_CURSORTEDBY","Sites currently sorted by: %s");
define("_MD_PREVIOUS","Previous");
define("_MD_NEXT","Next");
define("_MD_NOMATCH","No matches found to your query");

define("_MD_SUBMIT"              ,"Wy¶lij");
define("_MD_CANCEL"              ,"Skasuj");

define("_MD_ALREADYREPORTED","You have already submitted a broken report for this resource.");
define("_MD_MUSTREGFIRST","Sorry, you don't have the permission to perform this action.<br />Please register or login first!");
define("_MD_NORATING","No rating selected.");
define("_MD_CANTVOTEOWN","You cannot vote on the resource you submitted.<br />All votes are logged and reviewed.");
define("_MD_VOTEONCE2","Vote for the selected resource only once.<br />All votes are logged and reviewed.");

//%%%%%%	Module Name 'booklists' (Admin)	  %%%%%

define("_MD_WEBLINKSCONF","Book Lists Configuration");
define("_MD_GENERALSET","My Book Lists General Settings");
define("_MD_ADDMODDELETE","Add, Modify, and Delete Categories/Titles");
define("_MD_LINKSWAITING","Books Titles Waiting for Validation");
define("_MD_BROKENREPORTS","Broken Book Title Reports");
define("_MD_MODREQUESTS","Book Title Modification Requests");
define("_MD_SUBMITTER","Submitter: ");
define("_MD_VISIT","Visit");
define("_MD_SHOTMUST","Bookcover shot must be a valid image file under %s directory (ex. shot.gif). Leave it blank if no image file.");
define("_MD_APPROVE","Approve");
define("_MD_DELETE","Delete");
define("_MD_NOSUBMITTED","No New Submitted Book.");
define("_MD_ADDMAIN","Add a MAIN Category");
define("_MD_TITLEC","Title: ");
define("_MD_IMGURL","Image URL (OPTIONAL Image height will be resized to 50): ");
define("_MD_ADD","Add");
define("_MD_ADDSUB","Add a SUB-Category");
define("_MD_IN","in");
define("_MD_ADDNEWLINK","Add a New Link");
define("_MD_MODCAT","Modify Category");
define("_MD_MODLINK","Modify Book Title");
define("_MD_TOTALVOTES","Link Votes (total votes: %s)");
define("_MD_USERTOTALVOTES","Registered User Votes (total votes: %s)");
define("_MD_ANONTOTALVOTES","Anonymous User Votes (total votes: %s)");
define("_MD_USER","User");
define("_MD_IP","IP Address");
define("_MD_USERAVG","User AVG Rating");
define("_MD_TOTALRATE","Total Ratings");
define("_MD_NOREGVOTES","No Registered User Votes");
define("_MD_NOUNREGVOTES","No Unregistered User Votes");
define("_MD_VOTEDELETED","Vote data deleted.");
define("_MD_NOBROKEN","No reported missing book title.");
define("_MD_IGNOREDESC","Ignore (Ignores the report and only deletes the <b>Missing Book Title Report</b>)");
define("_MD_DELETEDESC","Delete (Deletes <b>the reported book title </b> and <b>missing book reports</b> for the book.)");
define("_MD_REPORTER","Report Sender");
define("_MD_LINKSUBMITTER","Book Title Submitter");
define("_MD_IGNORE","Ignore");
define("_MD_LINKDELETED","Book Title Deleted.");
define("_MD_BROKENDELETED","Missing book titles deleted.");
define("_MD_USERMODREQ","User Book Title Modification Requests");
define("_MD_ORIGINAL","Original");
define("_MD_PROPOSED","Proposed");
define("_MD_OWNER","Owner: ");
define("_MD_NOMODREQ","No Book Modification Request.");
define("_MD_DBUPDATED","Database Updated Successfully!");
define("_MD_MODREQDELETED","Modification Request Deleted.");
define("_MD_IMGURLMAIN","Image URL (OPTIONAL and Only valid for main categories. Image height will be resized to 50): ");
define("_MD_PARENT","Parent Category:");
define("_MD_SAVE","Save Changes");
define("_MD_CATDELETED","Category Deleted.");
define("_MD_WARNING","WARNING: Are you sure you want to delete this Category and ALL of its Books and Comments?");
define("_MD_YES","Yes");
define("_MD_NO","No");
define("_MD_NEWCATADDED","New Category Added Successfully!");
define("_MD_ERROREXIST","ERROR: The book title you suggested is already in the database!");
define("_MD_ERRORTITLE","ERROR: You need to enter TITLE!");
define("_MD_ERRORDESC","ERROR: You need to enter DESCRIPTION!");
define("_MD_NEWLINKADDED","New Book added to the Database.");
define("_MD_YOURLINK","Your Website Link at %s");
define("_MD_YOUCANBROWSE","You can browse our Book Resource at %s");
define("_MD_HELLO","Hello %s");
define("_MD_WEAPPROVED","We approved your book title submission to our Book Resource database.");
define("_MD_THANKSSUBMIT","Thanks for your submission!");
define("_MD_ISAPPROVED","We approved your book title submission");
?>
