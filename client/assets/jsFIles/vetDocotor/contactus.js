document.addEventListener('DOMContentLoaded', function() {
    const messageType = document.getElementById('messageType');
    const messageContainer = document.getElementById('messageContainer');
    const ratingContainer = document.getElementById('ratingContainer');
    const uploadContainer = document.getElementById('uploadContainer');

    function updateFormFields() {
        const selectedType = messageType.value;
        if (selectedType === 'Feedback') {
            messageContainer.style.display = 'block';
            ratingContainer.style.display = 'block';
            uploadContainer.style.display = 'none';
        } else if (selectedType === 'Inquiry') {
            messageContainer.style.display = 'block';
            ratingContainer.style.display = 'none';
            uploadContainer.style.display = 'block';
        }
    }

    // Initial call to set the correct fields on page load
    updateFormFields();

    // Add event listener to update fields when the type changes
    messageType.addEventListener('change', updateFormFields);
});