<div class="reset-container">
    <h3>Réinitialisation du mot de passe</h3>
    <p>Pour des raisons de sécurité, veuillez définir un nouveau mot de passe.</p>

    <form method="post" class="reset-form">
        <div class="form-group">
            <label for="current_password">Mot de passe actuel</label>
            <input type="password" id="current_password" name="current_password" required>
        </div>
        
        <div class="form-group">
            <label for="new_password">Nouveau mot de passe</label>
            <input type="password" id="new_password" name="new_password" required 
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                   title="Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre">
        </div>
        
        <div class="form-group">
            <label for="confirm_password">Confirmer le nouveau mot de passe</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        
        <div class="form-buttons">
            <input type="submit" name="reset_password" value="Réinitialiser" class="btn btn-primary">
        </div>
    </form>
</div>

<style>
.reset-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.reset-form {
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
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}

.btn-primary {
    background-color: #007bff;
    color: white;
}

.btn:hover {
    opacity: 0.9;
}
</style>

<script>
document.querySelector('.reset-form').addEventListener('submit', function(e) {
    var newPassword = document.getElementById('new_password').value;
    var confirmPassword = document.getElementById('confirm_password').value;
    
    if (newPassword !== confirmPassword) {
        e.preventDefault();
        alert('Les mots de passe ne correspondent pas.');
    }
});
</script> 