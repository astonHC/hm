<!DOCTYPE html>
<html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navbar')
        <div class="flex justify-center"><p class="text-6xl">Contact</p></div>
        

        <h4>
            <!-- contact details -->
            <section id="contact-details">
                <!-- heading sizes are not altering? -->
                <h1>Contact Us</h1>
                <h4>1223334444</h4>
                <h4>Email: hivemind.business@outlook.com</h4>
            </section>
            <br><br>
            <!-- contact us form -->
            <section id="contacts">
                <h2>Contact Form</h2>
                <br>
                <form id="contact-us-form">
                    <input type="text" name="name" placeholder="First name" required/>
                    <br>
                    <input type="text" name="name" placeholder="Last name" required/>
                    <br>
                    <input type="email" name="email" placeholder="Email" required/>
                    <br>
                    <input type="email" name="confirmEmail" placeholder="Confirm email" required/>
                    <br><br>
                    <label>Enquiry<br>
                        <textarea name="txtAr" rows="6" cols="60" placeholder="Start typing here..."></textarea>
                    </label>
                    <h5><i>Enquiries submitted will be sent to </i>hivemind.business@outlook.com.</h5>
                    <br><br>
                    <label>How would you like to be contacted?</label><br>
                    <label><input type="radio" name="rad" value="sms"/>SMS</label><br>
			        <label><input type="radio" name="rad" value= "emails"/>Email</label><br>
                    <label><input type="radio" name="rad" value= "all"/>SMS & Email</label><br>
                    <label for="number">Phone Number:</label><br>
                    <input type="tel" name="telNum" placeholder="e.g. 11111222223"/><br>
                    <br>
                    <a href="mailto:hivemind.business@outlook.com"><button type="submit">Submit</button></a>
                </form>
                
                <!-- pop-up when user submits an enquiry -->
                <div class="overlay" id="overlay"></div>
                <div class="popup" id="popup">
                    <p>Thank you for your enquiry! We'll get back to you as soon as possible. :)</p>
                    <button onclick="closePopup()">Close</button>
                </div>

            </section>

            <!-- javascript for the pop-up -->
            <script>
                const form = document.getElementById('contact-us-form');
                const popup = document.getElementById('popup');
                const overlay = document.getElementById('overlay');

                form.addEventListener('submit', function(event) {
                    event.preventDefault(); // prevent form from submitting normally
                    popup.display = 'block'; // show pop-up
                    overlay.display = 'block'; // show overlay

                    // simulate form submission process
                    setTimeout(() => {
                        console.log('Form data submitted');
                    }, 500);
                });

                function closePopup() {
                    popup.display = 'none'; // hide pop-up
                    overlay.display = 'none'; // hide overlay
                }
            </script>

        </main>


    </body>
</html>
