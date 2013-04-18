<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap - From Validation Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-validate.css" rel="stylesheet" media="screen">
  </head>
  <body>
  
    <div class="container">
    
      <h1>Form Validation Example</h1>
    
      <form data-validate="yes">
      
        <fieldset class="control-group">
          <label class="control-label">User Name</label>
          <div class="controls">
            <input type="text" name="username" data-validatename="User name" data-minlength="5" maxlength="10" pattern="[a-z\.]+" required>
            <span class="help-inline"></span>
          </div>
        </fieldset>
      
        <fieldset class="control-group">
          <label class="control-label">Email</label>
          <div class="controls">
            <input type="email" name="email" data-validatename="Email" data-minlength="5" maxlength="100" pattern="[a-z\.]+@[a-z\.]+" required>
            <span class="help-inline"></span>
          </div>
        </fieldset>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </form>    
      
      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap.validate.js"></script>
    
    </div>
    
  </body>
</html>