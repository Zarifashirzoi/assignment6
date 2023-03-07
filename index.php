<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
   <title>PAGE TITLE</title>
</head>
<body bgcolor="#FFFFFF">
<table width="100%" border="0" cellspacing="0" cellpadding="4">
   <tr>
       <td width="100%" bgcolor="#666666"><font color="#CCCCCC"><big><b>Welcome to my site!</b></big></font></td>
   </tr>
   <tr>
       <td bgcolor="#CCCCCC"> <table width="100%" border="0" cellspacing="1" cellpadding="2">
         <tr>
         <td align="center"><a href="index.php">Home</a></td>
         <td align="center"><a href="dateform.php">Date Form</a></td>
         <td align="center"><a href="calculator.php">Calculator</a></td>
         <td align="center"><a href="register.php">Register</a></td>
</tr>
      </table></td>
   </tr>
</table>
<br />
<!-- Script 3.2 header.inc -->
<title><?php echo $page_title; ?></title>
<!-- Script 3.3 footer.inc -->
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="2" bgcolor="#CCCCCC">
   <tr>
     <td> <div align="center">&copy; 2003 Larry E. Ullman and DMC Insights, Inc.</div></td>
   </tr>
</table>
</body>
</html>
<?php # Script 3.4 - index.php
$page_title = 'Welcome!';
include ('./header.inc');
?>
<table width="90%" border="0" cellspacing="2" cellpadding="4" align="center">
   <tr bgcolor="#333333">
      <td>
   <table width="100%" border="0" cellspacing="0" cellpadding="4">
         <tr>
            <td bgcolor="#FFFFFF">&nbsp;!&nbsp;</td>
            <td width="100%"> <font color="#CCCCCC"> <b>Content Title</b></font></td>
         </tr>
      </table></td>
   </tr>
</table>
<table width="90%" border="0" cellspacing="4" cellpadding="4" align="center">
   <tr>
      <td width="70%" valign="top"> <p><b>Content....</b></p>
         <hr />
         <p>Blah, blah, blah ... more content.</p>
      </td>
   </tr>
</table>
<?php
include ('./footer.inc');
?>
