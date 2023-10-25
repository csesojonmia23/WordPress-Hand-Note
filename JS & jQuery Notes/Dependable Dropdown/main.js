// Get references to the dropdowns and submit button
const countryDropdown = document.getElementById('country');
const divisionDropdown = document.getElementById('division');
const valueDropdown = document.getElementById('value');
const submitButton = document.getElementById('submit-button');
const form = document.getElementById('dependent-form');

// Define the data
const divisions = {
    "Bangladesh": ["Dhaka", "Mymensingh", "Barishal", "Chattogram", "Khulna", "Rajshahi", "Rangpur", "Sylhet"]
};

const values = {
    "Dhaka": ["Dhaka", "Faridpur", "Gazipur", "Gopalganj", "Kishoreganj", "Madaripur", "Manikganj", "Narayanganj", "Narsingdi", "Rajbari", "Shariatpur", "Tangail"],
    "Mymensingh": ["Mymensingh", "Jamalpur", "Sherpur", "Netrokona"],
    "Barishal": ["Barishal", "Patuakhali", "Barguna", "Pirojpur", "Bhola", "Jhalokati"],
    "Chattogram": ["Chattogram", "Cox's Bazar", "Rangamati", "Bandarban", "Khagrachhari", "Feni", "Lakshmipur", "Comilla", "Noakhali", "Brahmanbaria", "Chandpur"],
    "Khulna": ["Khulna", "Bagherhat", "Sathkhira", "Jessore", "Magura", "Jhenaidah", "Narail", "Kushtia", "Chuadanga ", "Meherpur"],
    "Rajshahi": ["Rajshahi", "Joypurhat", "Naogaon", "Nawabganj", "Natore", "Pabna", "Bogra", "Sirajganj "],
    "Rangpur": ["Rangpur", "Gaibandha", "Nilphamari", "Kurigram", "Lalmonirhat", "Dinajpur", "Thakurgaon ", "Panchagarh"],
    "Sylhet": ["Sylhet", "Habiganj", "Moulvibazar", "Sunamganj", "Sylhet"]
};

// Function to populate a dropdown based on the selected value
function populateDropdown(dropdown, optionsArray) {
    dropdown.length = 1; // Clear existing options, leaving the default option
    if (optionsArray.length > 0) {
        dropdown.disabled = false;
        optionsArray.forEach(function (option) {
            const optionElement = document.createElement('option');
            optionElement.value = option;
            optionElement.text = option;
            dropdown.appendChild(optionElement);
        });
    } else {
        dropdown.disabled = true;
    }
}

// Add event listeners to the country and division dropdowns
countryDropdown.addEventListener('change', function () {
    const selectedCountry = countryDropdown.value;
    if (selectedCountry !== '') {
        const divisionOptions = divisions[selectedCountry];
        populateDropdown(divisionDropdown, divisionOptions);
    } else {
        populateDropdown(divisionDropdown, []);
        populateDropdown(valueDropdown, []);
        submitButton.disabled = true;
    }
});

divisionDropdown.addEventListener('change', function () {
    const selectedDivision = divisionDropdown.value;
    if (selectedDivision !== '') {
        const valueOptions = values[selectedDivision];
        populateDropdown(valueDropdown, valueOptions);
        submitButton.disabled = false;
    } else {
        populateDropdown(valueDropdown, []);
        submitButton.disabled = true;
    }
});

form.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission
    const selectedCountry = countryDropdown.value;
    const selectedDivision = divisionDropdown.value;
    const selectedValue = valueDropdown.value;

    // You can now use the selected values as needed, for example:
    alert(`Selected Country: ${selectedCountry}\nSelected Division: ${selectedDivision}\nSelected Value: ${selectedValue}`);
});