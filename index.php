<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Gerador de Currículo</h1>
        <form id="curriculoForm" action="includes/generate.php" method="post">
            <div class="step step-1 active">
                <h2>Dados Pessoais</h2>
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Telefone:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="address">Endereço:</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <button type="button" class="btn-next">Próximo</button>
            </div>
            
            <div class="step step-2">
                <h2>Experiência Profissional</h2>
                <div id="experience" class="form-group">
                    <label>Experiências:</label>
                    <div class="experience-field">
                        <input type="text" name="experience[]" placeholder="Empresa e Cargo" required>
                        <textarea name="description[]" placeholder="Descrição" required></textarea>
                    </div>
                </div>
                <button type="button" id="add-experience" class="btn-add"><i class="fas fa-plus"></i> Adicionar Experiência</button>
                <button type="button" class="btn-prev">Anterior</button>
                <button type="button" class="btn-next">Próximo</button>
            </div>

            <div class="step step-3">
                <h2>Formação Acadêmica</h2>
                <div id="education" class="form-group">
                    <label>Formação:</label>
                    <div class="education-field">
                        <input type="text" name="education[]" placeholder="Instituição e Curso" required>
                        <input type="text" name="year[]" placeholder="Ano de Conclusão" required>
                    </div>
                </div>
                <button type="button" id="add-education" class="btn-add"><i class="fas fa-plus"></i> Adicionar Formação</button>
                <button type="button" class="btn-prev">Anterior</button>
                <button type="button" class="btn-next">Próximo</button>
            </div>

            <div class="step step-4">
                <h2>Habilidades</h2>
                <div class="form-group">
                    <label for="skills">Habilidades:</label>
                    <textarea id="skills" name="skills" placeholder="Liste suas habilidades" required></textarea>
                </div>
                <button type="button" class="btn-prev">Anterior</button>
                <input type="submit" value="Gerar Currículo" class="btn-submit">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
