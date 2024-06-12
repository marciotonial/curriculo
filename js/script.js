$(document).ready(function() {
    $('.btn-next').click(function() {
        var currentStep = $(this).closest('.step');
        var nextStep = currentStep.next('.step');
        currentStep.removeClass('active');
        nextStep.addClass('active');
    });

    $('.btn-prev').click(function() {
        var currentStep = $(this).closest('.step');
        var prevStep = currentStep.prev('.step');
        currentStep.removeClass('active');
        prevStep.addClass('active');
    });

    $('#add-experience').click(function() {
        $('#experience').append(`
            <div class="experience-field">
                <input type="text" name="experience[]" placeholder="Empresa e Cargo" required>
                <textarea name="description[]" placeholder="Descrição" required></textarea>
            </div>
        `);
    });

    $('#add-education').click(function() {
        $('#education').append(`
            <div class="education-field">
                <input type="text" name="education[]" placeholder="Instituição e Curso" required>
                <input type="text" name="year[]" placeholder="Ano de Conclusão" required>
            </div>
        `);
    });
});
