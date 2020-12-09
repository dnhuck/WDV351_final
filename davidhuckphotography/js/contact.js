$(document).ready(function(){

    $('#container').html(`
    
        <div class="form p-3 border col-10">
            <h2>CONTACT</h2>
            <form action="contact.php" method="post">

            <div class="form-group">
                <label for="fName">First Name</label>
                <input type="text" class="form-control" id="fName" name="fName" placeholder="Enter First Name">
            </div>

            <div class="form-group">
                <label for="lName">Last Name</label>
                <input type="text" class="form-control" id="lName" name="lName" placeholder="Enter Last Name">
            </div>

            <div class="form-group">
                <label for="email">First Name</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Valid Email">
            </div>

            <div class="form-group">
                <label for="message">First Name</label>
                <textarea class="form-control" id="message" name="message" placeholder="Write me a message! I would love to hear from you"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                
            </form>
        </div>

    `);

});