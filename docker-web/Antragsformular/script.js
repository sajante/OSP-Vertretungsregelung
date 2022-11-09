function createPDF() {
    var element = document.getElementById('element-to-print');
    html2pdf(element, {
        margin: 1,
        padding: 0,
        filename: 'myfile.pdf',
        image: {type: 'jpeg', quality: 1},
        html2canvas: {scale: 2, logging: true},
        jsPDF: {unit: 'in', format: 'A2', orientation: 'P'},
        class: createPDF
    });
};

function sendForm() {
    alert ("Formular senden")
}

function cancelForm() {
    alert ("Formular abbrechen")
}