<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organ Donation System</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Montserrat&family=Montserrat+Alternates&family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <!--Navigation bar-->
  <div id="nav-placeholder"></div>
  <script>
      $.get("navbar.html", function(data){
          $("#nav-placeholder").replaceWith(data);
      });
  </script> 
    <!-- Home page -->
      <div id="home" class="home_page">
        <h1 class="slogan">DONATE AN ORGAN, SAVE A LIFE</h1>
      </div>
    <!-- Motivation page -->
    <div class="motivation">
      <h3>Be a Hero, Donate an Organ</h3>
      <p>Every day, people die waiting for a life-saving organ transplant. But you can change that. By becoming an organ donor, you have the power to save someone's life and make a positive impact on the world.</p>
      <p>Organ donation is a selfless act of kindness that can help others live a longer, healthier life. By choosing to donate, you can give hope to those in need and make a difference in their lives.</p>
      <p>It only takes a few minutes to sign up as an organ donor and become part of a community of people who care about making a positive impact. Your donation can provide someone with a second chance at life, and it's a decision you'll never regret.</p>
      <p>Take the first step and sign up to become an organ donor today. You have the power to be someone's hero and change their life forever.</p>
    </div>    
    <!-- Awareness page -->
    <div class="aware">
      <h2>Know more About Organ Donation</h2>
      <div class="aware-row">
        <img class="img-set1" src="https://cdn-icons-png.flaticon.com/512/9453/9453526.png" alt="img-1">
        <h3>What is Organ Donation?</h3>
        <p>Organ Donation is the entire practice of retrieving a human organ from a living
           or deceased person, who is referred to as a Donor, and transplanting it into a recipient. The recipient
           will be a patient who is suffering from organ failure.
        </p>
      </div>
      <div class="aware-row">
        <img class="img-set2" src="https://cdn-icons-png.flaticon.com/512/7997/7997463.png" alt="img-2">
        <h3>Who can donate Organs?</h3>
        <p>
          <strong>Living Donor: </strong>Any person not less than 18 years of age, who voluntarily authorizes the removal of any of his organ and/or tissue, during his or her lifetime, as per prevalent medical practices for therapeutic purposes.
          <strong>Deceased Donor: </strong>Anyone, regardless of age, race or gender can become an organ and tissue donor after his or her Death (Brainstem/Cardiac).
        </p>
      </div>
      <div class="aware-row">
        <img class="img-set1" src="https://cdn-icons-png.flaticon.com/512/7744/7744978.png" alt="img-3">
        <h3>When and what can I donate?</h3>
        <p>While you are alive, you can donate one of your kidneys,lungs, a part of the liver, pancreas and intestine.
           <br>When you are dead, you can donate kidneys, liver, lungs, heart, pancreas, intestines, hands and face
        </p>
      </div>
      <div class="aware-row">
        <img class="img-set2" src="https://cdn-icons-png.flaticon.com/512/4924/4924433.png" alt="img-4">
        <h3>Pledging for Organ Donation</h3>
        <p>It is a simple procedure. Just fill out the online pledge form and we will send you a donor card 
           with your unique government registration number. All pledges are registered with the National Organ and Tissue Transplant Organisation (NOTTO).
        </p>
      </div>
      <br />
    </div>
    <!-- Boostrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
