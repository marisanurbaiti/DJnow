<!DOCTYPE html>
<!-- saved from url=(0031)http://localhost/DJnow/home.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Home | DJNow</title>
	<style type="text/css">
	
			#orange_bar{

			height: 50px;
			background-color: #F2994A;
			color: #FFE5B4;
			}
			#search_box{
				width: 690px;
				height: 23px;
				border-radius: 15px; 
				border:none;
				padding: 4px;
				font-size: 14px;
				text-align: center; 
				background-image: url(res/cari.png);
				background-repeat: no-repeat;
				background-position: right;
				background-size: 15px;
			} 

			#rata{
				margin-top: 10px;
				margin-bottom: -10px;
			}
		
			#rata1{
				margin-top: 15px;
				margin-bottom: -10px;
				margin-left: 10px;
				color: red;
			}

			#status{
				border-radius: 15px; 
				border:none;
				padding: 4px;
			}

			#profile_pic{
				width: 50px;
				height: 50px;
				border-radius: 50%;
				margin-left: 30px;
				margin-top: 60px;
				margin-bottom: -30px;
				border:none;
				padding: 4px;
			}

			#upload_img{
				width: 550px;
				height: 150px;
				margin-bottom: 10px;
				margin-top: 10px;
				text-align: center;
				background-color: #E0DFD5;
				border:none;
				padding: 4px;
			}

			#option{
				width: 200px;
				height: 40px;
				background-color: #F2994A;
				float: right;
				margin-top: 40px;
				margin-right: 20px;
			}

			#button1{
				width: 200px;
				height: 40px;
				background-color: #C13301 ;
				float: right;
				margin-top: -85px;
				margin-right: 20px;
			}

			#story{
				border-radius: 15px; 
				border:none;
				padding: 4px;
			}

			#img_story{
				width: 40px;
				height: 40px;
				border-radius: 50% ;
				margin-left: 10px;
				margin-top: 5px;
				margin-bottom: -30px;
				border:none;
				padding: 4px;
			}
			#nametag{
				margin-left:  60px;
				margin-top: -10px;
				font-size: 16px;
			}

			#img_feed{
				width: 435px;
				height: 435px;
				margin-top: 15px;
			}

			#icon{
				margin-top: 3px;
				margin-bottom: -3px;
				margin-left: 10px;
				lighting-color: #C13301;
				height:25px ; 
				width: 25px ;
			}

			#icon1{
				float: right;
				margin-top: 3px;
				margin-bottom: -3px;
				margin-right: 20px;
				lighting-color: #C13301;
				height:25px ; 
				width: 25px ;
			}

			#komentar{
				width: 400px;
				height: 26px;
				margin-left: 10px ; 
				background-color: #E0DFD5;
				border:none;
				padding: 4px;
				border-radius: 9px;
				background-image: url(res/send1.png);
				background-repeat: no-repeat;
				background-position: right;
				background-size: 25px;
			}

			#persegi {
   				height: 35px;
   				width: 100px;  			
   				background: #FFD300;
				float: right;
				margin-top: -30px;
			}		
			
			#segitiga{
				height:0px;
				width:0px;
				border-left:solid 17.5px #FFD300;
				border-top:solid 17.5px transparent;
				border-bottom:solid 17.5px transparent;
				float: right;
				margin-top: -30px;
				margin-right: 20px;
			}

			#persegi1 {
	   			height: 35px;
	   			width: 100px;  			
   				background: #EFDB82;
				float: right;
				margin-top: -30px;
			}		
			
			#segitiga1{
				height:0px;
				width:0px;
				border-left:solid 17.5px #EFDB82;
				border-top:solid 17.5px transparent;
				border-bottom:solid 17.5px transparent;
				float: right;
				margin-top: -30px;
				margin-right: 20px;
			}
			
	</style></head>
	
	<body style="font-family: calibri; background-color: #FFE5B4;">
		<!-- top bar-->
		<div id="orange_bar">
			<div style="width: 900px; margin:auto;font-size: 30px">
				<img id="rata" src="<?= base_url('assets'); ?>/res/logo.png" width="60" height="30">
        &nbsp;<input type="text" id="search_box" placeholder="Cari di DJNow">
        <a href="<?= base_url('auth/logout'); ?>">
        <img id="rata1" src="res/logout2.png" style="width:20px ; height:20px; float:right;">
        <a>		
        <a href="<?= base_url('user/profile '); ?>">
        <img id="rata1" src="res/profile/<?= $user['foto']?>" style="width:20px ; height:20px; float:right;">	
        <a>			
				<img id="rata1" src="res/notifikasi1.png" style="width:20px ; height:20px; float:right;">				
				<img id="rata1" src="res/home4.png" style="width:20px ; height:20px; float:right;">
				
				<!--box status-->
				<div id="status" style="width:900px; margin: auto; margin-top:20px;background-color: white; min-height: 125px;">
						<img id="profile_pic" src="res/profile/<?= $user['foto']?>">
						&nbsp; <input type="img/text" id="upload_img" placeholder="upload desain anda disini">						
							<select id="option">
								<option>Pilih Kategori</option>
							</select>	
							<button id="button1"> Ajukan verifikasi upload </button>
				</div>

				<!--timeline story desain-->
				<div style="display: flex;">
					<div id="story" style="width:460px;height: 600px; margin: left; margin-left: 0px; margin-top:20px;background-color: white; min-height: 400px;">
						<div>
							<img id="img_story" src="res/me.jpg">	
						</div>

						<div id="nametag" style="font-weight: bold;color: #C13301;">
							Ronsu
						</div>

						<!-- box ujung segitiga -->
						<div id="segitiga"></div>
						<div id="persegi">
							<p style="text-align: center;margin-top: 9px; font-size: 14px; font-weight: bold; color: black;"> Grafis
							</p>
						</div>
						<img id="img_feed" src="res/rumah.png">
						<a> 
							<img id="icon" src="res/like.png">
						</a>
						<a>
							<img id="icon1" src="res/share.png">
						</a>
						<a>
							<img id="icon1" src="res/download.png">
						</a>
						<input type="text" id="komentar" placeholder="	tambah komentar">
					</div>

					<div id="story" style="width:460px;height: 600px; margin:right; margin-top:20px; margin-left: 20px; background-color: white; min-height: 400px;">
						<div>
							<img id="img_story" src="res/aku.jpg">	
						</div>
						<div id="nametag" style="font-weight: bold;color: #C13301;">
							Roni
						</div>

						<!-- box ujung segitiga -->
						<div id="segitiga1"></div>
						<div id="persegi1">
							<p style="text-align: center;margin-top: 9px; font-size: 14px; font-weight: bold; color: black;"> Busana
							</p>
						</div>
						<img id="img_feed" src="res/busana.jpg">
						<a> 
							<img id="icon" src="res/like.png">
						</a>
						<a>
							<img id="icon1" src="res/share.png">
						</a>
						<a>
							<img id="icon1" src="res/download.png">
						</a>
						<input type="text" id="komentar" placeholder="	tambah komentar"> 
					</div>					
				</div>				
			</div>
		</div>
	</body>
</html>