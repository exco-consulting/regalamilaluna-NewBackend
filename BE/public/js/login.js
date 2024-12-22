$(document).ready(function () {
  $('#loginForm').on('submit', function (event) {
	event.preventDefault(); // Prevent default form submission

	// Get form data
	const email = $('#email').val();
	const password = $('#password').val();

	// Clear previous messages
	$('#message').text('');

	// AJAX request
	$.ajax({
	  url: 'http://localhost:8888/regalamilaluna-NewBackend/login/auth',
	  type: 'POST',
	  data: JSON.stringify({ email: email, psw: password }),
	  contentType: 'application/json',
	  success: function (response) {
		if (response.success) {
		  $('#message').text('Login successful! Redirecting...');
		  // Redirect to myaccount page with the returned ID
		  const userId = response.id;
		  setTimeout(() => {
			window.location.href = `http://localhost:8888/regalamilaluna-NewBackend/myaccount/${userId}`;
		  }, 2000);
		} else {
		  $('#message').text(response.message || 'Login failed.');
		}
	  },
	  error: function (xhr, status, error) {
		console.error('Error:', error);
		$('#message').text('An error occurred. Please try again.');
	  }
	});
  });
});