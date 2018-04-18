<?php get_header(); ?>

        	<div id="content">

                <div class="post">
                    <h1>Error 404: Page Not Found</h1>
                
                    <p>I&#8217;m sorry, but the page or file
                    <?php
                    #some variables for the script to use
                    #if you have some reason to change these, do.  but wordpress can handle it
                    $adminemail = get_bloginfo('admin_email'); #the administrator email address, according to wordpress
                    $website = get_bloginfo('url'); #gets your blog's url from wordpress
                    $websitename = get_bloginfo('name'); #sets the blog's name, according to wordpress
            
                          if (!isset($_SERVER['HTTP_REFERER'])) {
                            #politely blames the user for all the problems they caused
                                echo "you were looking for at "; #starts assembling an output paragraph
                            $casemessage = "could not be found.";
                          } elseif (isset($_SERVER['HTTP_REFERER'])) {
                            #this will help the user find what they want, and email me of a bad link
                            echo "you were looking for at"; #now the message says I'm sorry, but the page or file you were looking for at...
                                #setup a message to be sent to me
                            $failuremess = "Someone, probably a legitimate user, tried to go to $website"
                                .$_SERVER['REQUEST_URI']." and received a 404 (file not found) error. ";
                            $failuremess .= "It likely wasn't the visitor's fault, so please try to fix this as soon as possible.  
                                They came from ".$_SERVER['HTTP_REFERER'];
                            mail($adminemail, "404 Error Notice For ".$_SERVER['REQUEST_URI'],
                                $failuremess, "From: $websitename <noreply@".(str_replace("www.", "", str_replace("http://", "", $website))).">"); #email you about problem
                            $casemessage = "The site administrator has been emailed about this problem and will try to fix it as soon as possible."; #set a friendly message
                          }
                          echo " ".$website.$_SERVER['REQUEST_URI']; ?> 
                    <?php echo $casemessage; ?>
                        </p>
                        <h2>You may not be able to find the page or file because of:</h2>
                        <ol>
                            <li>An <strong>out-of-date bookmark/favorite.</strong></li>
                            <li>A search engine that has an <strong>out-of-date listing for this site.</strong></li>
                            <li>A <strong>mis-typed address</strong>.</li>
                        </ol>
                        <h2>You can search for what you&#8217;re looking for</h2>
                        <?php include(TEMPLATEPATH . "/searchform.php"); ?>
                    </div>

            </div><!--content-->		
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>