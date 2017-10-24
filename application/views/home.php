
<?php include 'partials/header.php '?>
    <div id="container">

        <div align="center"> <h2 style="background-color: white; padding: 20px;">Please Sign In</h2>
            <div class="container">
                <?php if($this->session->flashdata('msg')){
                    echo "<h3>".$this->session->flashdata('msg')."</h3>";
                }?>
                <div class="card card-container">
                    <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                    <img id="profile-img" class="profile-img-card" src="<?php echo base_url('images/user.png')?>" />
                    <p id="profile-name" class="profile-name-card"></p>
                    <dev class="container"><?php echo form_open('Register/reg')?>
                    <form class="form-signin">
                        <span id="reauth-email" class="reauth-email"></span>
                        <div>
                            <input style="width: 50%;" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        </div>

                        <div>
                            <input style="width: 50%;" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        </div>
                        <div id="remember" class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button style="width: 50%;" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>

                    </form><!-- /form -->
                    <?php echo form_close()?>
                    </dev>
                    <a href="#" class="forgot-password">
                        Forgot the password?
                    </a>
                </div><!-- /card-container -->
                <a href=<?php echo base_url("index.php/Home/register")?>><button  class="btn btn-lg btn-primary btn-block btn-signin" type="submit" style="width:50%;background-color: #3e8f3e">Register</button></a>
            </div><!-- /container -->
            <?php include 'partials/footer.php '?>


