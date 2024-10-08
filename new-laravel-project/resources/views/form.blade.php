<!DOCTYPE html>
<html>
<head>
    <title>Afsprakenformulier</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Afsprakenformulier</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/form-submit" method="POST">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <div class="input-field">
                        <label for="voornaam">Voornaam:</label>
                        <input type="text" class="form-control" id="voornaam" name="voornaam" required>
                    </div>
                    <div class="input-field">
                        <label for="achternaam">Achternaam:</label>
                        <input type="text" class="form-control" id="achternaam" name="achternaam" required>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <label for="email">E-mail adres:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="input-field">
                        <label for="telefoon">Telefoonnummer:</label>
                        <input type="text" class="form-control" id="telefoon" name="telefoon" required>
                    </div>
                </div>        
                </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>