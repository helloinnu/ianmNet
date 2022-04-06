<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	
	<!-- mobile specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	
	<!-- CSS Offline -->
    <link rel="stylesheet" href="site.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>
<body class="bg-light">
    <div class="container">
		<div class="row">
            <div class="col-sm-8 col-md-8 col-md-offset-8">
                <img class="login-img" src="img/login-wifi2.jpg" />
            </div>
            <div class="col-sm-4 col-md-4 col-md-offset-4">
                				<!-- Logo -->
				<img class="logo-title" src="img/IANMNet.svg" />
				<!-- Form -->
				<div class="account-wall">
				

				<form action="{{ route('register') }}" method="post">
                    @csrf
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-user fa-2x"></i></span>
							<input type="name" class="form-control form-input bg-light" name="name" placeholder="Masukkan Nama Lengkap Anda">
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-user fa-2x"></i></span>
							<input type="email" class="form-control form-input bg-light" name="email" placeholder="Masukkan Email">
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-key fa-lg"></i></span>
							<input type="password" class="form-control form-input bg-light" name="password" placeholder="Masukkan password">
						</div>
						
						
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-lock fa-2x"></i></span>
							<input type="password" class="form-control form-input bg-light" name="password_confirmation" placeholder="Ulangi password">
						</div>
						
						<div class="text-center mt-3">
                            <button type="submit" class="btn btn-md btn-primary btn-block" name="signup">Daftar</button>
                        </div>
						
					</form>
				</div>
				<p class="text-center w">Pernah jadi anggota? <a href="login">Masuk</a></p>
			</div>


					{{-- <form action="?status=resetuser" method="post">
						<div class="form-group input-group groups">
							<span class="input-group-text icons bg-secondary"><i class="fa fa-user fa-2x"></i></span>
							<input type="text" class="form-control form-input" name="user" placeholder="Masukkan Username">
						</div>
						<div class="text-center mt-3">
                            <button type="submit" class="btn btn-md btn-primary btn-block" name="reset">Reset</button> 
                        </div>
						
					</form>
				</div>
				<p class="text-center new-account">Pernah jadi anggota? <a href="login">Masuk</a></p>
				<p class="text-center new-account">Sudahkah Anda mendaftar belum? <a href="?status=sighup">Buat akun baru</a></p>
			</div>

		</div>
	</div> --}}

	
</body>
</html>