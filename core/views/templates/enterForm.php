<?php
echo <<<html
<div class="container">
    <div class="col-xs-12 col-md-4 col-lg-3 col-sm-3">
    <form action="\setAuth" method="post">
        <div class="form-group">
            <label for="Login">Login</label>
            <input required=""  id="Login" class="form-control" name="Login" type="text">
        </div>
        <div class="form-group">
            <label for="Pass">Password</label>
            <input id="Pass" required="" class="form-control"  name="Pass" type="password">
        </div>
        <div class="form-group">
           <input type="submit" class="btn btn-primary" value="Enter">
    </div>
    </form>
    </div>
</div>
html;
