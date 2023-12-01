let intervalId;

function startGeneration() {
    const interval = document.getElementById('interval').value;
    if (!interval) {
        alert('Please enter the interval');
        return;
    }

    intervalId = setInterval(generateRow, interval);
}

function generateRow() {
    const tableBody = document.querySelector('#dataTable tbody');
    const newRow = document.createElement('tr');

    for (let i = 0; i < 3; i++) {
        const cell = document.createElement('td');
        cell.textContent = Math.random().toString(36).substring(2, 15);
        newRow.appendChild(cell);
    }

    tableBody.appendChild(newRow);

    updateRowStyles();
}

function updateRowStyles() {
    const tableRows = document.querySelectorAll('#dataTable tbody tr');
    tableRows.forEach((row, index) => {
        if (index === 0) {
            row.style.backgroundColor = '#dff0d8';
        } else if (index % 2 === 1) {
            row.style.backgroundColor = '#f9f9f9';
        } else {
            row.style.backgroundColor = '#ffffff';
        }
    });
}

function stopGeneration() {
    clearInterval(intervalId);
}