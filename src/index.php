<?php include_once "partials/header.php"; ?>

<div class="container">

    <h1 class="py-2 text-center border-bottom">Contact Us</h1>

    <form name="contactform" method="post" id="formContact" class="my-5" action="sent-email.php">
        <div class="form-row my-3">
            <h3 class="text-secondary border-bottom w-100 py-2">Your Information <br>
            <h6 class="text-secondary font-italic font-weight-normal">Please provide as much information as possible.</h6></h3>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFirstName">First Name: </label>
                <input type="text" name="inputFirstName" class="form-control" id="inputFirstName" placeholder="Sanjeevan" required>
                <div class="invalid-feedback">Invalid</div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputLastName">Last Name: </label>
                <input type="text" name="inputLastName" class="form-control" id="inputLastName" placeholder="Premkumar" required>
                <div class="invalid-feedback">Invalid</div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmailAddress">Email Address: </label>
                <input type="email" name="inputEmailAddress" class="form-control" id="inputEmailAddress" placeholder="hello@uxfocus.ca" minlength="10" required>
                <div class="invalid-feedback">Invalid</div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPhoneNumber">Phone Number: </label>
                <input type="tel" name="inputPhoneNumber" class="form-control" id="inputPhoneNumber" placeholder="#" minlength="10" required>
                <div class="invalid-feedback">Invalid</div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCompanyName">Company Name: </label>
                <input type="text" name="inputCompanyName" class="form-control" id="inputCompanyName" placeholder="UXFocus">
            </div>
            <div class="form-group col-md-6">
                <label for="inputDomain">Website URL: </label>
                <input type="tel" name="inputDomain" class="form-control" id="inputDomain" placeholder="www.uxfocus.ca">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="selectEnquiry">I Will Like To: </label>
                <select class="custom-select" name="selectEnquiry" id="selectEnquiry" required>
                    <option value="" >Select One</option>
                    <option value="Consulting">To Chat</option>
                    <option value="Website">A New Website</option>
                    <option value="Other">Other</option>
                </select>
                <div class="invalid-feedback">Invalid</div>
            </div>
        </div>
        <div class="selectOption Consulting">
            <div class="form-row my-3">
                <h3 class="text-secondary border-bottom w-100 py-2">Lets Chat <br>
                <h6 class="text-secondary font-italic font-weight-normal">What time works for you?</h6></h3>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="selectEnquiry">Chat Through: </label>
                    <select class="custom-select" name="selectEnquiry" id="selectEnquiry" required>
                        <option value="" >Select One</option>
                        <option value="Call">Mobile</option>
                        <option value="Skype">Skype</option>
                        <option value="Meet">In Person</option>
                        <option value="Other">Other</option>
                        <option value="Email" disabled>Email (Anytime)</option>
                    </select>
                    <div class="invalid-feedback">Invalid</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputDate">Availability: </label>
                    <div class="input-group eventDate" data-provide="eventDate">
                        <input for="eventDate" type="date" name="eventDate" class="form-control" placeholder="DD/MM/YY" id="eventDate" min="2018-01-01">
                    </div>
                    <div class="invalid-feedback">Invalid</div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="textRegarding">Regarding: </label>
                    <textarea class="form-control" name="textRegarding" id="textRegarding" placeholder="Message" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="selectOption Website">
            <div class="form-row my-3">
                <h3 class="text-secondary border-bottom w-100 py-2">Your Project <br>
                <h6 class="text-secondary font-italic font-weight-normal">Our passion.</h6></h3>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="selectBudget">Budget: </label>
                    <select class="custom-select" name="selectBudget" id="selectBudget" required>
                        <option value="" >Select One</option>
                        <option value="$2,000 or less">$2,000 or less</option>
                        <option value="$2,000 - $5,000">$2,000 - $5,000</option>
                        <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                        <option value="$10,000 - $20,000">$10,000 - $20,000</option>
                        <option value="$20,000 or more">$20,000 or more</option>
                    </select>
                    <div class="invalid-feedback">Invalid</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="selectDeadline">Deadline: </label>
                    <select class="custom-select" name="selectDeadline" id="selectDeadline" required>
                        <option value="" >Select One</option>
                        <option value="1 Week">Within the next week</option>
                        <option value="1 Month">Within the next month</option>
                        <option value="1 - 4 Months">Within the next 1 - 4 months</option>
                        <option value="4 - 8 Months">Within the next 4 - 8 months</option>
                        <option value="8 Months or More">Within the next 8 months or more</option>
                        <option value="Unknown">Not Sure</option>
                    </select>
                    <div class="invalid-feedback">Invalid</div>
                </div>
            </div>
            <p class="lead pt-3 font-weight-bold">Interested In:</p>
            <div class="form-row pb-4">
				<div class="custom-control custom-checkbox col-md-4">
					<input class="custom-control-input" type="checkbox" id="service1" name="service[]" value="Custom Design" />
                    <label class="custom-control-label" for="service1">Custom Design</label>
                </div>
				<div class="custom-control custom-checkbox col-md-4">
					<input class="custom-control-input" type="checkbox" id="service2" name="service[]" value="SEO" />
                    <label class="custom-control-label" for="service2">Search Engine Optimization</label>
                </div>
				<div class="custom-control custom-checkbox col-md-4">
					<input class="custom-control-input" type="checkbox" id="service3" name="service[]" value="CMS" />
                    <label class="custom-control-label" for="service3">Content Management System</label>
                </div>
				<div class="custom-control custom-checkbox col-md-4">
					<input class="custom-control-input" type="checkbox" id="service5" name="service[]" value="Additional Features" />
                    <label class="custom-control-label" for="service5">Additional Features</label>
                </div>
				<div class="custom-control custom-checkbox col-md-4">
					<input class="custom-control-input" type="checkbox" id="service4" name="service[]" value="Hosting" />
                    <label class="custom-control-label" for="service4">Hosting Server</label>
                </div>
				<div class="custom-control custom-checkbox col-md-4">
					<input class="custom-control-input" type="checkbox" id="service5" name="service[]" value="Domain Name" />
                    <label class="custom-control-label" for="service5">Domain Name</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="textRegarding">Information: </label> <br>
                    <h6 class="text-secondary font-italic font-weight-normal">Relating websites, inspirations, features you will like added etc.</h6></h3>
                    <textarea class="form-control" name="textRegarding" id="textRegarding" placeholder="Website Information" rows="5" required></textarea>
                </div>
            </div>
        </div>
        <div class="selectOption Other">
            <div class="form-row my-3">
                <h3 class="text-secondary border-bottom w-100 py-2">Your Subject <br>
                <h6 class="text-secondary font-italic font-weight-normal">Feel free to email <a href="mailto:hello@uxfocus.ca">hello@uxfocus.ca</a> regarding any enquiries.</h6></h3>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputSubject">Subject: </label>
                    <input type="text" name="inputSubject" class="form-control" id="inputSubject" placeholder="My New Yaht" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputMessage">Message: </label>
                    <textarea class="form-control" name="inputMessage" id="inputMessage" placeholder="Your Message" rows="5" required></textarea>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <input id="formSubmit" type="submit" class="btn text-white btn-lg btn-block mt-3" value="Submit">
            </div>
        </div>

        <div id="msgSubmit" class="h3 text-center hidden"></div>
    </form>

</div>

<?php include_once "partials/footer.php"; ?>

