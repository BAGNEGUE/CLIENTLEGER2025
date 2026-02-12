<div class="login-container">
	<h3>Connexion au Site Auto Ecole Castellane</h3>
	<img src="images/logor.png" height="100" width="100" alt="Logo Auto Ecole Castellane">

	<form method="post" class="login-form">
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>
		</div>
		
		<div class="form-group">
			<label for="mdp">Mot de passe</label>
			<input type="password" id="mdp" name="mdp" required>
		</div>
		
		<div class="form-buttons">
			<input type="reset" value="Annuler" class="btn btn-secondary">
			<input type="submit" name="Connexion" value="Connexion" class="btn btn-primary">
		</div>
	</form>
</div>

<style>
.login-container {
	max-width: 400px;
	margin: 50px auto;
	padding: 20px;
	background-color: #fff;
	border-radius: 8px;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	text-align: center;
}

.login-form {
	margin-top: 20px;
}

.form-group {
	margin-bottom: 15px;
	text-align: left;
}

.form-group label {
	display: block;
	margin-bottom: 5px;
	font-weight: bold;
}

.form-group input {
	width: 100%;
	padding: 8px;
	border: 1px solid #ddd;
	border-radius: 4px;
	font-size: 16px;
}

.form-buttons {
	margin-top: 20px;
	display: flex;
	justify-content: space-between;
}

.btn {
	padding: 10px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	font-size: 16px;
}

.btn-primary {
	background-color: #007bff;
	color: white;
}

.btn-secondary {
	background-color: #6c757d;
	color: white;
}

.btn:hover {
	opacity: 0.9;
}
</style>