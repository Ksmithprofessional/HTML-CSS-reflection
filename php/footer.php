<?php

?>

    <!-- Email sign up form -->

    <form action="#" method="post">
            <fieldset>
                <legend>Email Newsletter Sign-Up</legend>
                <span class="name">
                    <label for="name"><span class="asterisk">Your Name</span><br>
                        <input type="text" id="name" name="name" required>
                    </label>
                </span>

                <span class="email">
                    <label for="email"><span class="asterisk">Your Email</span><br>
                        <input type="text" id="email" name="email" required>
                    </label>
                </span>

                <br>
                <input type="checkbox" id="marketing" name="marketing">
                <label for="marketing">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data. </label>
                

                <br>
                <input type="submit" name= "submit" value="Subscribe">

            </fieldset>
            
        </form>

        

        <?php

            include 'php/insert.php';
        
        ?>
        

    </main>

    <!-- Footer with links and addresses/phone/ etc -->
    <footer>

    <!-- link lists in footer -->
        <div class="footer">
            <div class="footer-lists">

                <div class="about-netmatters">
                    <h3>About Netmatters </h3> 
                        
                        <p><a href="#">News</a></p>
                        <p><a href="#">Our Careers </a></p>
                        <p><a href="#">Our Team </a></p>
                        <p><a href="#">Our Office Tour </a></p>
                        <p><a href="#">Privacy Policy </a></p>
                        <p><a href="#">Cookie Policy </a></p>
                        <p><a href="#">Terms & Conditions </a></p>
                        <p><a href="#">Environmental Policy </a></p>
                    
                </div>

                <div class="our-services">
                    <h3>Our Services </h3>
                        
                        <p><a href="#">Bespoke Software </a></p>
                        <p><a href="#">IT Support  </a></p>
                        <p><a href="#">Digital Marketing  </a></p>
                        <p><a href="#">Telecoms Services  </a></p>
                        <p><a href="#">Web Design  </a></p>
                        <p><a href="#">Cyber Security  </a></p>
                        <p><a href="#">Developer Training  </a></p>
                        
                </div>

            </div>

                <!-- Addresses in footer -->

            <div class="footer-address">
                <div>
                    <h3>Cambridge Office </h3>
                        <address>      
                            Unit 1.28, <br>
                            St John's Innovation Centre, <br>
                            Cowley Road, Milton,<br>
                            Cambridge, <br>
                            CB4 0WS <br>
                            <br>
                            Tel:<a href="tel:#" class="tel"> 01223 37 57 72</a>
                        </address>
                </div>

                <div class="address-2">
                    <h3>Wymondham Office  </h3>
                    <address>      
                        Unit 15, <br>
                        Penfold Drive, <br>
                        Gateway 11 Business Park, <br>
                        Wymondham, Norfolk, <br>
                        NR18 0WZ <br>
                        <br>
                    Tel:<a href="tel:#" class="tel"> 01603 70 40 20</a>
                    </address>
                </div>

                <div>
                    <h3>Great Yarmouth Office </h3>
                    <address>      
                        Suite F23, <br>
                        Beacon Innovation Centre, <br>
                        Beacon Park, Gorleston, <br>
                        Great Yarmouth, Norfolk, <br>
                        NR31 7RA <br>
                        <br>
                    Tel:<a href="tel:#" class="tel"> 01493 60 32 04</a>
                    </address>
                </div>

                </div>

                <!-- <hr> -->
                <div class="footnote">
                    <p>&copy; Copyright Netmatters Ltd. 2022. All rights reserved.</p>
                    <p>- <a href="#">Sitemap</a></p>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
            </div>
        </div>

    

    </footer>

    <!-- Partners part 2 -->
    <div class="partner-background-fix">
        <aside class="partner-2">
        <img src="Images/silver-microsoft-partner.jpg" alt="Silver microsoft partner" class="silver-micro">
        <img src="Images/future-50.jpg" alt="Future 50 member" class="future-50">
        <img src="Images/qms.jpg" alt="QMS ISO registered" class="qms">
        <img src="Images/norfolk-carbon-charter.jpg" alt="Silver Norfolk carbon charter 2019" class="silver-norfolk">
        <img src="Images/investing-in-future-growth.jpg" alt="Investing in future growth winner" class="investing-future">
        <img src="Images/princess-royal-training.jpg" alt="Princess royal training award" class="princess-royal">
        <img src="Images/skills-of-tomorrow.jpg" alt="Skills of tomorrow winner" class="skills-of-tomorrow">
        <a href="#"><img src="Images/netmatters-joins-the-5H8P.jpg" alt="Netmatters joins prompt payment code" class="payment-code"></a>
        </aside>
    </div>
</div>