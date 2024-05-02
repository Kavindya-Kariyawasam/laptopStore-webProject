document.getElementById('emailForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var email = this.elements['email'].value;
    // Add AJAX call here to submit the email or any other logic
    console.log('Email submitted:', email);
    alert('Thank you for subscribing!');
  });
  
  // Social Media Icon Interaction
  var socialIcons = document.querySelectorAll('.social-media a');
  socialIcons.forEach(function(icon) {
    icon.addEventListener('mouseenter', function() {
      // Add any hover interaction logic here
      this.classList.add('hovered');
    });
    icon.addEventListener('mouseleave', function() {
      this.classList.remove('hovered');
    });
  });
  