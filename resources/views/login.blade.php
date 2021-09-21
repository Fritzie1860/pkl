@include('layout.app')



   <body>
        <div class="login_box">
            <div class="margin_input">
                <img src="/images/invest.png" alt="">
                <form action="#" method="post">
                
                    <div class="text_log email">
                        <h1>Email</h1>   
                        <input class="box_login" type="text" name="email" placeholder="Email" required autocomplete="off">
                    </div>
                    <div class="text_log pass">
                        <h1>Password</h1>
                        <input type="Password" name="password" placeholder="Password" required>
                    </div>
                    
                    <div class="text-log apa"> 
                        <input type="checkbox" name="cek">
                        <label for="cek">Remember Me</label>
                        <a href="#" style="float: right; margin-right: 25px; color: #141414; text-decoration: none;">Forget Password?</a>
                    </div>

                    <div class="button_login">
                        <input type="submit" name="submit" value="Sign In" style="margin-bottom: 80px;">
                    </div>
                     
                </form>
            </div>  
        </div>  
   </body>    
   