<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Register : Reckon Civil Academy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.latest.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
                {
                    $("#login").click(function()
                    {
                        var data = $("#login").html();
                        if(data == "Login Here")
                        {
                            $("#login").html("Close Panel");
                        }
                        else if(data == "Close Panel")
                        {
                            $("#login").html("Login Here");
                        }

                        $("#slide_panel").slideToggle("slow");
                    });


                    $('.inner_slides').cycle({
                        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                    });
                });



            function validate()
            {
                var t =  document.getElementById("payment").value;
                if(t=="No")
                {
                    alert("Please Pay The Fees to Register ");
                    return false;
                }

                var a = document.getElementById("name").value;
                if(a=="")
                {
                    alert("Please Enter the Name ");
                    return false;
                }


                 var b = document.getElementById("email").value;
                if(b=="")
                {
                    alert("Please Enter the Email ");
                    return false;
                }


                 var c = document.getElementById("mobile").value;
                if(c=="")
                {
                    alert("Please Enter the Mobile ");
                    return false;
                }


                 var d = document.getElementById("passw").value;
                if(d=="")
                {
                    alert("Please Enter the Password ");
                    return false;
                }

                if(d.length<5)
                {
                    alert("Please Enter a Password More the 5 Characters, Strong Password May Consist of Numbers, Special Symbols, and Digits");
                    return false;
                }

                 var vf= document.getElementById("payment_details").value;
                if(vf=="")
                {
                    alert("Please Enter the Payment Details ");
                    return false;
                }




               var e = document.getElementById("fname").value;
                if(e=="")
                {
                    alert("Please Enter the Fathers Name");
                    return false;
                }

                var f = document.getElementById("cpassw").value;
                if(f=="")
                {
                    alert("Please Enter Confirm Password");
                    return false;
                }

                if(d!=f)
                {
                    alert("Password Should be same as Confirm Password");
                    return false;
                }

            }
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->




      <?php //include 'header.php'; ?>
              <br/><br/>
        <center>
        		<div class="wrapper" style="height:1000px">

                    <h1 class="headings">Register Here</h1>



                    <div class="contents" style="text-align:left;font-size:13px;">

                        <form action="register_handle.php" method="POST" onsubmit="return validate();" enctype="multipart/form-data">
                                        <?php
                                                if(isset($_REQUEST['choice'],$_REQUEST['value']))
                                                {
                                                        echo '<span style="font-weight:bold;color:green">'.$_REQUEST['value'].'</span>';
                                                }
                                        ?>
                            <table style="width:620px;">
                                <tr>
                                    <td style="text-align:left">
                                        <h4 style="text-align:left;font-weight:normal;font-family:georgia;font-size:30px;margin:0px">Contact From Here!!!</h4>
                                                <?php
                                                    if(isset($_REQUEST['chioce'], $_REQUEST['value']))
                                                    {
                                                        echo '<span style="color:green">'.$_REQUEST['value'].'</span>';
                                                    }
                                                ?>
                                              <br/>
                                        <label style="font-family:georgia">Name*</label><br/>
                                        <input type="text" name="name" id="name" placeholder="Your Name" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />

                                        <br/>
                                        <label style="font-family:georgia">Email*  (This will be your login id.) </label><br/>
                                        <input type="email" name="email" id="email" placeholder="Your Email" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />

                                        <br/>
                                        <label style="font-family:georgia">Mobile No.* </label><br/>
                                        <input type="number" name="mobile" id="mobile" placeholder="Your Mobile" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />

                                        <br/>
                                        <label style="font-family:georgia">Fathers Name *</label><br/>
                                        <input type="text" name="fname" id="fname" placeholder="Your Fathers Name" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />


                                            <br/>
                                        <label style="font-family:georgia">City*</label><br/>
                                        <input type="text" name="city" id="city" placeholder="Your City Name" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />


                                        <br/>
                                        <label style="font-family:georgia">College Name</label><br/>
                                        <input type="text" name="cname" id="cname" placeholder="Your College Name" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />

                                         <br/>
                                        <label style="font-family:georgia">Percentage in Engineering</label><br/>
                                        <input type="text" name="percent" id="percent" placeholder="Engineering Percent" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />

                                         <br/>
                                        <label style="font-family:georgia">Photo Upload</label><br/>
                                        <input type="file" name="file" id="file" placeholder="Engineering Percent" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />

                                        <br/>
                                        <label style="font-family:georgia"> Password*</label><br/>
                                        <input type="password" name="pass" id="passw" placeholder="Confirm Password" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />

                                         <br/>
                                        <label style="font-family:georgia">Confirm Password*</label><br/>
                                        <input type="password" name="cpass" id="cpassw" placeholder="Confirm Password" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" />


                                        <br/>
                                        <label style="font-family:georgia">Address </label><br/>
                                        <textarea name="Query" id="query" placeholder="Your Address" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc"></textarea>

                                          <br/>
                                        <label style="font-family:georgia">Payment Done </label><br/>
                                        <select  style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc" id="payment" >
                                            <option>No</option>
                                              <option>Yes</option>
                                        </select>



                                        <br/>
                                        <label style="font-family:georgia">Payment Details (Date, Bank, Reciept No., Amount) :  </label><br/>
                                        <textarea name="payment_details" id="payment_details" placeholder="Payment Details" style="margin-bottom:10px;padding:5px;width:500px;border:solid 1px #ccc"></textarea>
                                        <?php
                                        	$a = rand(0, 30);
                                        	$b = rand(1, 56);
                                        	$sum = $a+$b;
                                        ?>
                                         <br/>
                                         <input type="hidden" name="a" value="<?php echo $a;  ?>" />
                                         <input type="hidden" name="b" value="<?php echo $b;  ?>" />
                                         <input type="hidden" name="sum" value="<?php echo $sum;  ?>" />


                                        <label style="font-family:georgia">Enter The Sum Of : <?php echo $a;  ?> + <?php echo $b;  ?> =  </label><br/>
                                        <input type="text" name="sum_input" />


                                        <br/>
                                        <span style="color:red">Fields Marked with * are Mandatory.</span><br/>

                                        <input type="submit" value="Submit" id="submit" style="padding:10px;width:140px">

                                    </td>

                                </tr>
                              </table>
                        </form>

                    </div>
                    <?php //include 'sidebar.php'; ?>

        			<div class="clear"></div>
                   <br/><br/>

        		</div>
        </center>


       <?php //include 'footer.php'; ?>


        <script type="text/javascript">var switchTo2x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "b218ea0f-0018-4274-8800-b624125f98ed", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
