document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    const responseMessage = `Thank you, ${name}! Your message has been received.`;
    document.getElementById('formResponse').innerText = responseMessage;

    // Clear the form
    this.reset();
});
