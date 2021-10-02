<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?= $data["page"] = $this->lang->line("page"); ?></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/login.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="offset-4 col-4">
				<div class="jumbotron form-login">

					<h1 class="display-4"><?=$data['title'] = $this->lang->line('title')?></h1>
					<hr class="my-4">

						<form 
							action="<?=base_url('entrar')?>" 
							method="post"
						>
							<div class="form-group">
								<div class="row">
									<label for="email">
										<?=$data['lbl_Email'] = $this->lang->line('lbl_Email'); ?>
									</label>
									<input 
										type="email" 
										id="email" 
										name="email" 
										class="form-control" 
										placeholder="<?=$data['plh_Email'] = $this->lang->line('plh_Email');?>"
									>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label for="senha"><?=$data['lbl_Passwd'] = $this->lang->line('lbl_Passwd'); ?></label>
									<input type="password" id="senha" class="form-control" name="senha">
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<button class="btn btn-success btn-block" type="submit">
										<?=$data['bt_sigin'] = $this->lang->line('bt_sigin');?>
									</button>
								</div>
							</div>

						</form>

						<hr class="my-4">

						<div class="form-group">
							<div class="row">
								<a href="<?=base_url()?>cadastro" class="btn btn-primary btn-block">
									<?=$data['bt_sigup'] = $this->lang->line('bt_sigup');?>
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="display: flex; justify-content: center">
        <div class="row">
					<div class="jumbotron col-8">
							<h5 class="offset-3"><?=$data['ls_title'] = $this->lang->line('ls_title');?></h5>
							<br>
							<br>
							<a href="loginru" 
								role="button" 
								class="btn btn-lg btn-primary"
								><?=$data['ls_ru'] = $this->lang->line('ls_ru')?>
							</a>
							<br>
							<br>
							<a href="login" 
								role="button" 
								class="btn btn-lg btn-primary"
								><?=$data['ls_en'] = $this->lang->line('ls_en')?>
							</a>
							<br>
							<br>
							<a href="loginger" 
								role="button" 
								class="btn btn-lg btn-primary"
								><?=$data['ls_ger'] = $this->lang->line('ls_ger')?>
							</a>
					</div>
        </div>
    </div>
	</div>
</body>
</html>
