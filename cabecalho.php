<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Oasis Imóveis</title>
	
	<meta name="keywords" content="Oasis Imóveis Itapoá" />
	<meta name="description" content="Oasis Imóveis Itapoá, imóveis comerciais, imóveis residenciais, locação" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<script language="javascript" type="text/javascript">
	function clearText(field){
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
	</script>
    
   	<style type="text/css">
	#gallery {
		background-color: #444;
		padding-top: 15px;
		padding-bottom: 0px;
		padding-left: 0px;
		padding-right: 15px;
		width: 240px;
		height: 200px;
	}
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 5px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 5px;
		color: #fff;
	}
	</style>


  <style type="text/css">
    .wrapper{
      position:relative;
      /*font-family:Arial, Helvetica, sans-serif;*/
      padding-top:90px;
      padding-left:50px;
      width:80%;
      margin:auto
    }
    .galleryCont{
      display:none;
    }
    .wrapper .text{
      /*font-family:Arial, Helvetica, sans-serif;*/
    }
    .wrapper h1{
      /*font-family:Arial, Helvetica, sans-serif;*/
      font-size:26px;
    }
    .longText{
      margin-top:20px;
      width:600px;
      /*font:18px/24px Arial, Helvetica, sans-serif;*/
      color:gray;
    }
    span.btn{
      padding:10px;
      display:inline-block;
      cursor:pointer;
      /*font:12px/14px Arial, Helvetica, sans-serif;*/
      color:#aaa;
      background-color:#eee;
      -moz-border-radius:10px;
      -webkit-border-radius:10px;
      -moz-box-shadow:#999 2px 0px 3px;
      -webkit-box-shadow:#999 2px 0px 3px;
    }
    span.btn:hover{
      background-color:#000;
    }
  </style>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <script type="text/javascript" src="inc/mbGallery.js"></script>
  <script type="text/javascript" src="inc/jquery.exif.js"></script>
  <script type="text/javascript">
    $(function(){
      if (self.location.href == top.location.href){
        $("body").css({ 
			/*font:"normal 13px/16px 'trebuchet MS', verdana, sans-serif"*/
		});
        /*var logo=$("<a href='http://pupunzi.com/#mb.components/mb.gallery/gallery.html' style='position:absolute;top:10px;left:10px;z-index:1000'><img id='logo' border='0' src='http://pupunzi.com/images/logo.png' alt='mb.ideas.repository'></a>");*/
        $("body").prepend(logo);
        $("#logo").fadeIn();
      }
    });
  </script>
	
</head>
<body>

<div id="sitehfs_top_wrapper">
	<div id="sitehfs_top">
		<!--
		<div id="sitehfs_header">
            <div id="site_title"><h1><a href="http://www.templatemo.com" target="_parent">Oasis Imóveis Itapoá</a></h1></div>
        </div>
		end of header -->
        <div id="sitehfs_middle">
        	<div id="sitehfs_menu">
                <ul>
                    <li><a href="index.php" class="_parent" >Home</a></li>
                    <li><a href="residencial.php" target="_parent">Residencial&nbsp;&nbsp;</a></li>
                    <li><a href="comercial.php"   target="_parent">&nbsp;Comercial</a></li>
                    <li><a href="locacao.php" 	  target="_parent">&nbsp;&nbsp;Locação</a></li>
					<li><a href="terrenos.php" 	  target="_parent">&nbsp;&nbsp;Terrenos</a></li>
                    <li><a href="contato.php" 	  target="_parent">Contato</a></li>
                </ul>
                <!--
                <div id="search_box">
                    <form action="#" method="post">
                        <input type="text" value="Procure o local de seu imóvel aqui..." name="q" size="30" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
                    </form>
                </div>
				-->
                <div class="cleaner"></div>
            </div> <!-- end of sitehfs_menu -->
			<!--
            <div id="mid_content">
            	<h2><font size="10">Oasis Imóveis</font></h2>
            	<p>Compre ou alugue seu imóvel residencial ou comercial pelo menor preço e aproveite todos os benefícios.</p>
            </div>
			-->
        </div> <!-- end of middle -->
	</div> <!-- end of top -->
</div> <!-- end of top wrapper -->