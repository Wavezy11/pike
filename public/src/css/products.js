// Zoek alle td-elementen binnen de tabel met de class "size-buttons"
const sizeCells = document.querySelectorAll('.size-buttons table td');

// Voeg een click-eventlistener toe aan elk td-element
sizeCells.forEach(cell => {
    cell.addEventListener('click', function() {
        // Verwijder eerst de "highlight" klasse van alle td-elementen
        sizeCells.forEach(cell => {
            cell.classList.remove('highlight');
        });

        // Voeg de "highlight" klasse toe aan het geklikte td-element
        this.classList.add('highlight');
    });
});
