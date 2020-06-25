<main>
  <form class="contact_form" action="index.php?page=contact" method="post">
    <input type="hidden" name="action" value="formSub" >
    <label class="form_label" for="fname">First Name</label>
    <input class="form_input" type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label class="form_label" for="lname">Last Name</label>
    <input class="form_input" type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label class="form_label" for="email">email</label>
    <input class="form_input" type="email" id="email" name="email" placeholder="Your email.." required>

    <label class="form_label" for="message">message</label>
    <textarea class="form_input" name="message" id="message" cols="30" rows="10"></textarea>
  
    <input class="form_submit" type="submit" value="Submit">
  </form> 
</main>
