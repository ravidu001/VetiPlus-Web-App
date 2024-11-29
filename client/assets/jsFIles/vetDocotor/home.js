
document.addEventListener('DOMContentLoaded', function() {
    const replyButtons = document.querySelectorAll('.replyBtn');

    replyButtons.forEach(button => {
        button.addEventListener('click', function() {
            const td = this.parentElement;
            const tr = td.parentElement;

            // Create the text field
            const textField = document.createElement('input');
            textField.type = 'text';
            textField.placeholder = 'Type your reply...';
            textField.className = 'replyTextField';
            
            // <br /> tag here
            const br = document.createElement('br');
            td.appendChild(br);
            
            
            
            

            // Create the send button
            const sendButton = document.createElement('button');
            sendButton.textContent = 'Send';
            sendButton.className = 'button button1 sendBtn';

            // Create the cancel button
            const cancelButton = document.createElement('button');
            cancelButton.textContent = 'Cancel';
            cancelButton.className = 'button button1 cancelBtn';

            // Clear the td and append the new elements
            td.innerHTML = '';
            td.appendChild(textField);
            td.appendChild(sendButton);
            td.appendChild(cancelButton);

            // Handle the cancel button click
            cancelButton.addEventListener('click', function() {
                td.innerHTML = '';
                const replyButton = document.createElement('button');
                replyButton.textContent = 'Reply';
                replyButton.className = 'button button1 replyBtn';
                td.appendChild(replyButton);

                // Reattach the event listener to the new reply button
                replyButton.addEventListener('click', function() {
                    button.click();
                });
            });

            // Handle the send button click (you can add your own logic here)
            sendButton.addEventListener('click', function() {
                alert('Reply sent: ' + textField.value);
                // You can add your own logic to handle the reply submission
            });
        });
    });
});
