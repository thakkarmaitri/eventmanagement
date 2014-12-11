<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
 Contact Detail
         <textarea cols="20" id="FCKeditor1" name="txtadd" rows="10"><?php echo $add?></textarea></p>
<script type="text/javascript">
    CKEDITOR.replace( 'FCKeditor1',{
        toolbar : 'Full',
		height: '100px',
  		width: '550px',
        skin:'kama'
    } );
</script>
</body>
</html>