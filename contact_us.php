<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
            <h1>Contact Us</h1>
            <p>Dear Customers,<br> If you have any queries or feedbacks, please feel free to contact us through the possible ways given below.<br>We are always ready to give a solution to all the problems regarding our page.<br>Also if you have any suggestions, please email us so that we could give you a better service.</p>
        </header>
        <div class="content">
            <div class="content-form">
                <br><br><br>
            
                    

                <section>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2>Phone</h2>
                    <p>123-456-8521479</p>
                </section>

                <section>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2>E-mail</h2>
                    <p>fruits@gmail.com</p>
                </section>
            </div>
        </div>

      <form action="contact.php" method="post">
        <div class="form">
            <div class="right">
              <div class="contact-form">
                  <input type="text" name="txtName" required>
                  <span>Full Name</span>
              </div>
  
              <div class="contact-form">
                  <input type="E-mail" name="txtEmail" required>
                  <span>E-mail Id</span>
              </div>
              <div class="contact-form">
                  <textarea name="txtMessage">
                    
                  </textarea>
                  <span> Type your Message....</span>
              </div>
  
              <div class="contact-form">
                  <input type="submit" name="submit" value="submit">
              </div>
              </div>
            </div>
          </div>
    </form>
        <div class="media">
            <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li>
        </div>
        <div class="empty">

        </div>
    </div>    
</body>
</html>