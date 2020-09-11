
<!-- Modal -->
	<div class="modal left fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 9999999">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>

				<div class="modal-body">
					<div class="head-call-back-sidebar-main">
					 <div class="head-call-back-box d-flex align-items-start">
						<img src="images/icons/android.svg" alt="abc">
						<div class="head-call-back-content">

						   <div class="head-call-back-content-title" style="font-weight: 900">Request a Call Back</div><hr>
						   <p style="font-family: emoji;text-align: justify;color: #000">Enter your contact details and  our team member will be in touch soon!.</p>
						</div>
					 </div>
					 <div class="head-call-form-section">
						<form action="includes/ajax/header_form" id="header-form" method="POST">
							<div class="row">
							   <div class="form-group col-sm-6" style="margin-bottom: 0px">
								  <label for="first_name"></label>
								  <input type="text" id="first_name" maxlength="30" name="first_name" class="form-control keyup-header" placeholder="First Name">
								  <span class="errormessage" id="first_name_error_header"></span>
							   </div>
							   <div class="form-group col-sm-6" style="margin-bottom: 0px">
								  <label for="last_name"></label>
								  <input type="text" id="last_name" maxlength="30" name="last_name" class="form-control keyup-header" placeholder="Last Name">
								  <span class="errormessage" id="last_name_error_header"></span>
							   </div>
							   <div class="form-group col-sm-6" style="margin-top: 0px">
								<label for="email"></label>
								  <input type="email" id="email" name="email" class="form-control keyup-header" placeholder="Email">
								  <span class="errormessage" id="email_error_header"></span>
							   </div>
							   <div class="form-group col-sm-6">
								<label for="phone"></label>
								  <input type="text" id="mobile_number" name="phone" class="form-control keyup-header" placeholder="Mobile No.">
								  <span class="errormessage" id="phone_error_header"></span>
							   </div>
								<div class="form-group col-sm-12">
								<select class="form-control keyup-header" id="interested" name="interested">
								  <option value="">-- Interested In --</option>
								  <option value="Website Design">Website Design</option>
								  <option value="ERP/Software">ERP/Software</option>
								  <option value="Mobile Application">Mobile Application</option>
								  <option value="Digital Marketing &amp; Promotion">Digital Marketing &amp; Promotion</option>
								  <option value="Others">Others</option>
								</select>
								<span class="errormessage" id="interested_error_header"></span>
							   </div>
								<div class="form-group col-sm-12">
								 <textarea class="form-control keyup-header" name="enquiry" placeholder="Message" rows="3"></textarea>
								 <span class="errormessage" id="enquiry_error_header"></span>
							   </div>
							   <div class="form-group col-sm-12">
								   <div class="g-recaptcha" data-sitekey="6LdpprMUAAAAAH-DyfhcHEy1nRxWE5YUjkjuUDcy"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LdpprMUAAAAAH-DyfhcHEy1nRxWE5YUjkjuUDcy&amp;co=aHR0cHM6Ly93d3cuYXJvYml0LmNvbTo0NDM.&amp;hl=en&amp;v=aUMtGvKgJZfNs4PdY842Qp03&amp;size=normal&amp;cb=kwue9ykzd3x0" width="304" height="78" role="presentation" name="a-xbh6mmmr8qsi" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 300px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
								   <span class="errormessage" id="captcha_error_header"></span>
								</div>
						   </div>
						   <div class="form-group col-md-12 col-12 m-0 text-center">
							  <button type="submit" class="btn-custome btn waves-effect waves-light contact-custome-btn">Request a Call Back</button>
						   </div>
						</form>
					 </div>
				   </div>
				</div>
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
		<!--Start Header -->
		  
		<div id="top" class="top-review-bar navbarhide">
      <div class="container">
         <div class="d-flex align-items-center justify-content-between">
           <div class="top-left-part">
             <a href="javascript:void(0);">
               <img src="images/google-logo.png" alt="#">
               <div class="star">
                <img src="images/footer-rating.png" alt="#">
               </div>
               <strong style="color: #fff">Excellent</strong> 
                <span style="color: #fff">4.9 out of 5</span>
             </a>
           </div>
           <div class="top-right-part d-flex align-items-center justify-content-between">
             <span> <a href="#"><strong style="color: #fff"></strong></a> Speak to our expert</span>
             <a href="tel:913346039689"><strong style="color: #fff">+91 8389807466</strong></a>
                             <span class="or">or</span>
               <a href="javascript:void(0);" class="head-requet-btn" style="color: #fff" data-toggle="modal" data-target="#myModal1"><img src="images/alessia.jpg" width="30" alt="#">Request a Call Back</a>
                         </div>
         </div>
      </div>
   </div>
		<header class="nav-bg-b main-header navfix fixed-top ">
			
				<div class="menu-header">
					<div class="dsk-logo"><a class="nav-brand" href="index.php">
						
						<img src="images/white-logo.png" alt="Logo" class=""/>
					</a></div>
					<div class="custom-nav" role="navigation">
						<ul class="nav-list">
							<li class="sbmenu"><a href="#" class="menu-links">IT Solutions </a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="col-md-12">
											<div class="sub-menu-center-block">
												<div class="sub-menu-column"  style="width:33.33%">
														<div class="menuheading">Graphic Designing</div>
														<ul class="link-hover">
															<li><a href="complete_branding.php"><img src="images/icons/branding%20(3).png" >&nbsp;  Complete Branding </a></li>
															<li><a href="logo-design.php"><img src="images/icons/logo-design.png" >&nbsp;   Logo Designing</a></li>
															<li><a href="graphic-design.php"><img src="images/icons/graphic-design.png" >&nbsp;  Graphic Designs</a></li>
															<li><a href="product-packet-design.php"><img src="images/icons/idea.png" >&nbsp;  Product Packaging Designs</a></li>
															<li><a href="business-presentation.php"><img src="images/icons/strategy.png" >&nbsp;  Business Explainer Videos</a></li>
															<li><a href="animation-video.php"><img src="images/icons/3d-movie.png" >&nbsp;  2D & 3D animated videos</a></li>
														</ul>
													
														<div class="menuheading"><br>Other Services</div>
														<ul class="link-hover">
															<li><a href="api-integration.php"><img src="images/icons/api.png" >&nbsp;  API Integration Services</a></li>
															<li><a href="customized-software-development.php"><img src="images/icons/custom-software.png" >&nbsp;  Custom Software Development Service</a></li>
															<li><a href="software-testing.php"><img src="images/icons/test.png" >&nbsp;  Software Testing Service</a></li>
															<li><a href="server-migration.php"><img src="images/icons/hosting.png" >&nbsp;  Hosting Migration Services</a></li>
															
														</ul>
												
													</div>
													<div class="sub-menu-column" style="width:33.33%">
														<div class="menuheading">Web Development</div>
														<ul class="link-hover">
															<li><a href="index.html"><img src="images/icons/custom-website.png" >&nbsp;  Custom Website Development </a></li>
															<li><a href="index0.html"><img src="images/icons/php-development.png" >&nbsp;  PHP based application Development</a></li>
															<li><a href="index1.html"><img src="images/icons/cms.png" >&nbsp;  CMS Web Development</a></li>
															<li><a href="index2.html"><img src="images/icons/php-framework.png" >&nbsp;  PHP Framework Based Development</a></li>
															<li><a href="index3.html"><img src="images/icons/psd.png" >&nbsp;  PSD to WORDPRESS Development</a></li>
															<li><a href="index3.html"><img src="images/icons/wordpress-logo.png" >&nbsp;  WORDPRESS Development</a></li>
															<li><a href="index3.html"><img src="images/icons/node.png" >&nbsp;  Node JS Development</a></li>
															<li><a href="index3.html"><img src="images/icons/angular.png" >&nbsp; Angular JS  Development</a></li>
															<li><a href="index3.html"><img src="images/icons/ecommerce.png" >&nbsp;  E-Commerce Development</a></li>
														</ul>
													</div>
													<div class="sub-menu-column" style="width:33.33%">
														<div class="menuheading">Mobile App Development</div>
														<ul class="link-hover">
															<li><a href="index-dark.html"><img src="images/icons/web.png" >&nbsp;  Web App</a></li>
															<li><a href="index0-dark.html"><img src="images/icons/hybrid.png" >&nbsp;  Hybrid App</a></li>
															<li><a href="index1-dark.html"><img src="images/icons/native.png" >&nbsp;  Native</a></li>
														</ul>
												
												
														<div class="menuheading"><br>Website Designing</div>
														<ul class="link-hover">
															<li><a href="index-dark.html"><img src="images/icons/ui.png" >&nbsp;  UI-UX Design</a></li>
															<li><a href="index0-dark.html"><img src="images/icons/web-design.png" >&nbsp;  Responsive Web Design</a></li>
															<li><a href="index1-dark.html"><img src="images/icons/landing.png" >&nbsp;  Multi-purpose landing page Designing</a></li>
															<li><a href="index-dark.html"><img src="images/icons/redesign.png" >&nbsp;  Website Redesigning</a></li>
															<li><a href="index-dark.html"><img src="images/icons/customise.png" >&nbsp;  Fully Customised Website Design</a></li>
															
														</ul>
													</div>
												
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="sbmenu"><a href="#" class="menu-links">Start-Up Box</a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="col-md-12">
											<div class="sub-menu-center-block">
												<div class="sub-menu-column" style="width:15%">
													<a href="#"><img src="images/digital_marketing.gif" alt="service" class="img-fluid"></a>
												</div>
												<div class="sub-menu-column" style="width:27%">
													<div class="menuheading">Enterprise Solutions</div>
													<ul class="link-hover">
														<li><a href="startup-mvp-development.php"><img src="images/icons/startup.png" >&nbsp;  Start-up MVP Development</a></li>
														<li><a href="erp-solution.php"><img src="images/icons/erp.png" >&nbsp;  ERP Solutions</a></li>
														<li><a href="crm-solution.php"><img src="images/icons/crm.png" >&nbsp;  CRM Solutions</a></li>
														<li><a href="accounting-development.php"><img src="images/icons/accounting.png" >&nbsp;  Complete Accounting Software</a></li>
														
													</ul>
												</div>
												<div class="sub-menu-column" style="width:28%">
													<div class="menuheading">Business Consultation</div>
													<ul class="link-hover">
														<li><a href="startup-consultion.php"><img src="images/icons/startup-tech.png" >&nbsp;  Start-Up Tech Consultation</a></li>
														<li><a href="business-planning.php"><img src="images/icons/busniess.png" >&nbsp;  Business Planning Consultation</a></li>
														<li><a href="launch-process-plan.php"><img src="images/icons/launch.png" >&nbsp;  Launch Process Plan </a> </li>
														<li><a href="future-growth.php" ><img src="images/icons/growth.png" >&nbsp;  Future Growth Plan</a></li>
														
													</ul>
												</div>
												<div class="sub-menu-column" style="width:32%">
													<div class="menuheading">Digital Marketing</div>
													<ul class="link-hover">
														<li><a href="portfolio.html"><img src="images/icons/boost.png" >&nbsp;  Website Speed Boost & Optimization</a> </li>
														<li><a href="brand-outreach.php"><img src="images/icons/outreach.png" >&nbsp;  Brand Outreach & Promotion</a> </li>
														<li><a href="lead-generation.php"><img src="images/icons/lead.png" >&nbsp;  Lead Generation</a> </li>
														<li><a href="get-quote.html"><img src="images/icons/target.png" >&nbsp;  Target Customer Database Acquisition </a> </li>
														<li><a href="social-media-marketing.php"><img src="images/icons/marketing.png" >&nbsp;  Social Media Marketing</a> </li>
														<li><a href="get-quote.html"><img src="images/icons/social.png" >&nbsp;  Social Media Handle</a> </li>
														<li><a href="seo.php"><img src="images/icons/social.png" >&nbsp;  SEO</a> </li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="contact-show sbmenu"><a href="#" class="menu-links">Company</a> 
							<div class="contact-inquiry " style="margin-top:16px">
								<div class="contact-info-"  style="background:navy;">
									<div class="inquiry-card-nn ">

										<ul class="link-hover">
										<li ><a href="website-how-we-work.php" style="color:#fff"><img src="images/icons/we-work.png" >&nbsp;  How we work</a></li>
										<li ><a href="why-trust-choose-us.php" style="color:#fff"><img src="images/icons/trust.png" >&nbsp;  Why Trust and Choose Us?</a></li >
										<li ><a href="technologies-we-use.php" style="color:#fff"><img src="images/icons/tech.png" >&nbsp;  Technology We Use</a></li>
										<li ><a href="our-acheivement.php" style="color:#fff"><img src="images/icons/quality.png" >&nbsp;  Our Achievements</a></li></ul>
									</div>
								</div>
							</div>
						</li>
						
						
						<li class="sbmenu"><a href="#" class="menu-links">Purchase</a>
						<div class="nx-dropdown">
							<div class="sub-menu-section">
								<div class="container">
									<div class="col-md-12">
										<div class="sub-menu-center-block">
											<div class="sub-menu-column" style="width:33.33%">
												<div class="menuheading">Domains</div>
												<ul class="link-hover">
													<li><a href="https://purchase.webingo.in/domain-registration/index.php" target="_blank"><img src="images/icons/domain.png" >&nbsp;  Register a Domain</a></li>
													<li><a href="https://purchase.webingo.in/login.php?show_bulkreg_blurb=yes" target="_blank" ><img src="images/icons/bulk-domain.png" >&nbsp;  Bulk Domain Registration</a></li>
													<li><a href="https://purchase.webingo.in/new-domain-extensions" target="_blank"><img src="images/icons/new-domain.png" >&nbsp;  New Domain Extensions</a></li>
													<li><a href="https://purchase.webingo.in/new-domain-extensions/sunrise"  target="_blank"><img src="images/icons/sunrise.png" >&nbsp;  Sunrise Domains</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/premium-domain.php"  target="_blank"><img src="images/icons/premium.png" >&nbsp;  Premium Domains</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/idn"  target="_blank"><img src="images/icons/ide.png" >&nbsp;  IDN Domain Registration</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/transfer/bulk-domain-transfer.php"  target="_blank"><img src="images/icons/bulk-domain-transfer.png" >&nbsp;  Bulk Domain Transfer</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/free-with-domain-registration.php"  target="_blank"><img src="images/icons/world-wide-web.png" >&nbsp;  Free with Every Domain</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/domain-name-suggestion-tool.php"  target="_blank"><img src="images/icons/suggestion.png" >&nbsp;  Name Suggestion Tool</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/domain-whois-lookup.php"  target="_blank"><img src="images/icons/whois.png" >&nbsp;  WHOIS LOOKUP</a></li>
												</ul>
											</div>
											<div class="sub-menu-column" style="width:33.33%">
												<div class="menuheading">Hosting </div>
												<ul class="link-hover">
													<li><a href="#"><img src="images/icons/shared-hosting.png" >&nbsp;  Shared Hosting</a> </li>
													<li><a href="https://purchase.webingo.in/web-hosting/windows-hosting.php" target="_blank" ><img src="images/icons/window.png" >&nbsp;  Windows Shared Hosting</a> </li>
													<li><a href="https://purchase.webingo.in/cloudhosting.php" target="_blank" ><img src="images/icons/cloud-hosting.png" >&nbsp;  Cloud Hosting</a> </li>
													<li><a href="#"  target="_blank"><img src="images/icons/mobile-app.png" >&nbsp;  Windows App Development</a> </li>
													<li><a href="https://purchase.webingo.in/windows-reseller-hosting.php" target="_blank" ><img src="images/icons/reseller.png" >&nbsp;  Windows Reseller Hosting</a> </li>
													<li><a href="https://purchase.webingo.in/optimized-wordpress-hosting.php" target="_blank" ><img src="images/icons/wordpress-hosting.png" >&nbsp;  Wordpress Hosting</a> </li>
													<li><a href="#" target="_blank" ><img src="images/icons/drupal.png" >&nbsp;  Drupal Hosting</a> </li>
													<li><a href="#" target="_blank" ><img src="images/icons/joomla-logo.png" >&nbsp;  Joomla Hosting</a> </li>
												</ul>
											</div>
											<div class="sub-menu-column" style="width:33.33%">
												<div class="menuheading">Server</div>
												<ul class="link-hover">
													<li><a href="service-details3.html"><img src="images/icons/vps.png" >&nbsp;  VPS Server</a> </li>
													<li><a href="#" ><img src="images/icons/vps-server.png" >&nbsp;  Plesk VPS Server</a> </li>
													<li><a href="#" ><img src="images/icons/bluehost.png" >&nbsp;  Bluehost VPS</a> </li>
													<li><a href="https://purchase.webingo.in/dedicated-servers.php" target="_blank" ><img src="images/icons/dedicated.png" >&nbsp;  Dedicated Server</a> </li>
													<li><a href="https://purchase.webingo.in/dedicated-servers-windows.php" target="_blank"><img src="images/icons/window-dedicated.png" >&nbsp;  Windows Dedicated Server</a> </li>
													<li><a href="https://purchase.webingo.in/managed-servers.php" target="_blank"><img src="images/icons/managed.png" >&nbsp;  Managed Server</a> </li>
												</ul>
										
											
												<div class="menuheading"><br>Professional Emails</div>
												<ul class="link-hover">
													<li><a href="https://purchase.webingo.in/business-email" target="_blank"><img src="images/icons/mail.png" >&nbsp;  Business Mails </a> </li>
													<li><a href="#" ><img src="images/icons/web-mail.png" >&nbsp;  Web Mail</a> </li>
													<li><a href="https://purchase.webingo.in/web-hosting/enterprise-email-hosting.php" target="_blank"><img src="images/icons/enterprise-email.png" >&nbsp;  Enterprise Mail</a> </li>
													<li><a href="https://purchase.webingo.in/google_apps.php"  target="_blank"><img src="images/icons/g-suite.png" >&nbsp;  G Suite</a> </li>
												</ul>
											</div>
											<div class="sub-menu-column">
												<div class="menuheading">And Many More </div>
												<ul class="link-hover">													
													<li><a href="#" ><img src="images/icons/backup.png" >&nbsp;  Website Backup</a> </li>
													<li><a href="https://purchase.webingo.in/digital-certificate" target="_blank" ><img src="images/icons/ssl-certificate.png" >&nbsp;  SSL Certificate </a> </li>
													<li><a href="#"  target="_blank" ><img src="images/icons/security.png" >&nbsp;  Website Security</a> </li>
													<li><a href="https://purchase.webingo.in/reseller.php?action=partnersite"  target="_blank" ><img src="images/icons/domain-reseller.png" >&nbsp;  Domain Reseller</a> </li>
													<li><a href="https://purchase.webingo.in/domain-registration/index.php" target="_blank"  style="font-size:14px;" ><img src="images/icons/domain-reg.png"  >&nbsp;  Domain Registration</a> </li>
													<li><a href="http://sms.webingo.in/login/" target="_blank" ><img src="images/icons/sms.png" >&nbsp;  Bulk SMS</a> </li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="sbmenu"><a href="#" class="menu-links">Portfolio</a>
					<div class="nx-dropdown">
						<div class="sub-menu-section">
							<div class="container">
								<div class="col-md-12">
									<div class="sub-menu-center-block">
										<div class="sub-menu-column"  style="width:33.33%">
											<div class="menuheading">Growth and Outreach</div>
											<ul class="link-hover">
												<li><a href="pricing.html"><img src="images/icons/popular.png" >&nbsp;  Purchase Popular Social Media Pages</a></li>
												<li><a href="service.html"><img src="images/icons/promotion.png" >&nbsp;  PR promotion</a></li>
												<li><a href="typography.html"><img src="images/icons/email-marketing.png" >&nbsp;  Email Marketing</a></li>
												<li><a href="button.html"><img src="images/icons/promote.png" >&nbsp;  Promote on renowned pages</a></li>
											</ul>
										</div>
										<div class="sub-menu-column">
											<div class="menuheading"> Built Applications</div>
											<ul class="link-hover">
												<li><a href="pricing.html"></a></li>
												<li><a href="service.html"></a></li>
												<li><a href="typography.html"></a></li>
												<li><a href="button.html"></a></li>
											
											</ul>
										</div>
										<div class="sub-menu-column" style="width:50%">
											<a href="#"><img src="images/banner2l.gif" alt="service" class="img-fluid" style="height: 255px;width: 1961px;"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="contact-show sbmenu"><a href="portfolio-block.html" class="menu-links "> Reach Us</a> 
				<div class="contact-inquiry" style="margin-top:16px">
					<div class="contact-info-"  style="background:navy;">
						<div class="inquiry-card-nn ">
							
							<ul class="link-hover">
							<li><a href="contact-us.php" style="color:#fff"><img src="images/icons/phone.png" >&nbsp;  Contact Us</a></li>
							<li><a href="hiring.php" style="color:#fff"><img src="images/icons/hire.png" >&nbsp;  Hiring</a></li>
							<li ><a href="partner-with-us.php" style="color:#fff"><img src="images/icons/partner.png" >&nbsp;  Partner with us</a></li>
							<li><a href="collaboration.php" style="color:#fff"><img src="images/icons/collb.png" >&nbsp;  Looking for Collaboration</a></li>
							<li><a href="quotation.php" style="color:#fff" ><img src="images/icons/quote.png" >&nbsp;  Ask for Quotations</a></li></ul>
						</div>
					</div>
				</div>
			</li>
				
				<li class="sbmenu">
					<div class="nx-dropdown">
						<div class="sub-menu-section">
							<div class="container">
								<div class="col-md-12">
									<div class="sub-menu-center-block">
										<div class="sub-menu-column">
											<a href="#"><img src="images/contact.gif" alt="service" class="img-fluid"></a>
										</div>
										
										
										<div class="sub-menu-column">
											<div class="menuheading">&nbsp;</div>
											<ul class="link-hover">
												<li><a href="contact-us.php"><img src="images/icons/phone.png" >&nbsp;  Contact Us</a></li>
												<li><a href="hiring.php"><img src="images/icons/hire.png" >&nbsp;  Hiring</a></li>
												<li><a href="partner-with-us.php"><img src="images/icons/partner.png" >&nbsp;  Partner with us</a></li>
												<li><a href="collaboration.php"><img src="images/icons/collb.png" >&nbsp;  Looking for Collaboration</a></li>
												<li><a href="quotation.php"><img src="images/icons/quote.png" >&nbsp;  Ask for Quotations</a></li>
											
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!--menu right border-->
				
				<li class="contact-show"><a href="#" class="btn-round- trngl btn-br bg-btn"><i class="fas fa-phone-alt"></i></a>
				<div class="contact-inquiry">
					<div class="contact-info-">
						<div class="contct-heading">Webingo Contacts</div>
						<div class="inquiry-card-nn hrbg">
							<div class="title-inq-c">FOR HR DEPARTMENT</div>
							<ul><li class="mb0"><img src="images/flags/in.svg" alt="us office" class="flags-size"> <a href="tel:(+91) 7001-300-600" >(+91) 7001-300-600</a></li></ul>
						</div>
						<div class="inquiry-card-nn">
							<div class="title-inq-c">FOR SALES DEPARTMENT</div>
							<ul>
							<li><i class="fab fa-skype"></i><a href="skype:niwax.company?call" >webingo.company</a></li>
							<li><i class="fas fa-envelope"></i><a href="mailto:info@webingo.in" >info@webingo.in</a></li></ul>
						</div>
					</div>
				</div>
			</li>
			<!--<li><a href="#" class="btn-br bg-btn3 btshad-b2 lnk" data-toggle="modal" data-target="#myModal1">Request A Quote <span class="circle"></span></a> </li>-->
		</ul>
	</div>
	<div class="mobile-menu2">
		<ul class="mob-nav2">
			
			<li><a  class="btn-round- trngl btn-br bg-btn btshad-b1"  data-toggle="modal" data-target="#myModal1"><i class="fas fa-book" style="color: #fff"></i></a></li>
			<li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
		</ul>
	</div>
</div>
<!--Mobile Menu-->
<nav id="main-nav">
	<ul class="first-nav">
		<li><a href="#" style="background: #0d0c40">IT Solutions</a>
		<ul>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Graphic Designing</a>
				<ul >
					<li class="grey"><a href="complete_branding.php">➣ Complete Branding </a></li>
					<li class="grey"><a href="logo-design.php">➣ Logo Designing</a></li>
					<li class="grey"><a href="graphic-design.php">➣ Graphic Designs</a></li>
					<li class="grey"><a href="product-packet-design.php">➣ Product Packaging Designs</a></li>
					<li class="grey"><a href="business-presentation.php">➣ Business Explainer Videos</a></li>
					<li class="grey"><a href="animation-video.php">➣ 2D & 3D animated videos</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Web Development</a>
				<ul>
					<li class="grey"><a href="#">➣ Custom Website Development </a></li>
					<li class="grey"><a href="#">➣ PHP based application Development</a></li>
					<li class="grey"><a href="##">➣ CMS Web Development</a></li>
					<li class="grey"><a href="#">➣ PHP Framework Based Development</a></li>
					<li class="grey"><a href="#">➣ PSD to WORDPRESS Development</a></li>
					<li class="grey"><a href="#">➣ WORDPRESS Development</a></li>
					<li class="grey"><a href="#">➣ Node JS Development</a></li>
					<li class="grey"><a href="#">➣ Angular JS Development</a></li>
					<li class="grey"><a href="#">➣ E-Commerce Development</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Mobile App Development</a>
				<ul>
					<li class="grey"><a href="#">➣ Web App</a></li>
					<li class="grey"><a href="#">➣ Hybrid App</a></li>
					<li class="grey"><a href="#">➣ Native</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Website Designing</a>
				<ul>
					<li class="grey"><a href="#">➣ UI-UX Design</a></li>
					<li class="grey"><a href="#">➣ Responsive Web Design</a></li>
					<li class="grey"><a href="#">➣ Multi-purpose landing page Designing</a></li>
					<li class="grey"><a href="#">➣ Website Redesigning</a></li>
					<li class="grey"><a href="#">➣ Fully Customised Website Design</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Other Services</a>
				<ul>
					<li class="grey"><a href="api-integration.php">➣ API Integration Services</a></li>
					<li class="grey"><a href="customized-software-development.php">➣ Custom Software Development Service</a></li>
					<li class="grey"><a href="software-testing.php">➣ Software Testing Service</a></li>
					<li class="grey"><a href="server-migration.php">➣ Hosting Migration Services</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#" style="background: #0d0c40">Start-Up Box</a>
		<ul>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Enterprise Solutions</a>
				<ul >
					<li class="grey"><a href="startup-mvp-development.php">➣ Start-up MVP Development</a></li>
					<li class="grey"><a href="erp-solution.php">➣ ERP Solutions</a></li>
					<li class="grey"><a href="crm-solution.php">➣ CRM Solutions</a></li>
					<li class="grey"><a href="accounting-development.php">➣ Complete Accounting Software</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Business Consultation</a>
				<ul>
					<li class="grey"><a href="startup-consultion.php">➣ Start-Up Tech Consultation</a></li>
					<li class="grey"><a href="business-planning.php">➣ Business Planning Consultation</a></li>
					<li class="grey"><a href="launch-process-plan.php">➣ Launch Process Plan </a> </li>
					<li class="grey"><a href="future-growth.php" >➣ Future Growth Plan</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Digital Marketing </a>
				<ul>
					<li class="grey"><a href="#">➣ Website Speed Boost & Optimization</a> </li>
					<li class="grey"><a href="brand-outreach.php">➣ Brand Outreach & Promotion</a> </li>
					<li class="grey"><a href="lead-generation.php">➣ Lead Generation</a> </li>
					<li class="grey"><a href="#">➣ Target Customer Database Acquisition </a> </li>
					<li class="grey"><a href="social-media-marketing.php">➣ Social Media Marketing</a> </li>
					<li class="grey"><a href="#">➣ Social Media Handle</a> </li>
					<li class="grey"><a href="seo.php">➣ SEO</a> </li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#" style="background: #0d0c40">IT Solutions</a>
		<ul>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Graphic Designing</a>
				<ul >
					<li class="grey"><a href="complete_branding.php">➣ Complete Branding </a></li>
					<li class="grey"><a href="logo-design.php">➣ Logo Designing</a></li>
					<li class="grey"><a href="graphic-design.php">➣ Graphic Designs</a></li>
					<li class="grey"><a href="product-packaging.php">➣ Product Packaging Designs</a></li>
					<li class="grey"><a href="#">➣ Business Explainer Videos</a></li>
					<li class="grey"><a href="animation-video.php">➣ 2D & 3D animated videos</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Web Development</a>
				<ul>
					<li class="grey"><a href="#">➣ Custom Website Development </a></li>
					<li class="grey"><a href="#">➣ PHP based application Development</a></li>
					<li class="grey"><a href="#">➣ CMS Web Development</a></li>
					<li class="grey"><a href="#">➣ PHP Framework Based Development</a></li>
					<li class="grey"><a href="#">➣ PSD to WORDPRESS Development</a></li>
					<li class="grey"><a href="#">➣ WORDPRESS Development</a></li>
					<li class="grey"><a href="#">➣ Node JS Development</a></li>
					<li class="grey"><a href="#">➣ Angular JS Development</a></li>
					<li class="grey"><a href="#">➣ E-Commerce Development</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Mobile App Development</a>
				<ul>
					<li class="grey"><a href="#">➣ Web App</a></li>
					<li class="grey"><a href="#">➣ Hybrid App</a></li>
					<li class="grey"><a href="#">➣ Native</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Website Designing</a>
				<ul>
					<li class="grey"><a href="#">➣ UI-UX Design</a></li>
					<li class="grey"><a href="#">➣ Responsive Web Design</a></li>
					<li class="grey"><a href="#">➣ Multi-purpose landing page Designing</a></li>
					<li class="grey"><a href="#">➣ Website Redesigning</a></li>
					<li class="grey"><a href="#">➣ Fully Customised Website Design</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Other Services</a>
				<ul>
					<li class="grey"><a href="api-integration.php">➣ API Integration Services</a></li>
					<li class="grey"><a href="customized-software-development.php">➣ Custom Software Development Service</a></li>
					<li class="grey"><a href="software-testing.php">➣ Software Testing Service</a></li>
					<li class="grey"><a href="#">➣ Hosting Migration Services</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#" style="background: #0d0c40">Company</a>
	<ul>
		<li class="grey"><a href="website-how-we-work.php">➣ How we work</a></li>
		<li class="grey"><a href="why-trust-choose-us.php">➣ Why Trust and Choose Us?</a></li>
		<li class="grey"><a href="technologies-we-use.php">➣ Technology We Use</a></li>
		<li class="grey"><a href="our-acheivement.php">➣ Our Achievements</a></li>
		
	</ul>
</li>
<li><a href="#">Built Applications</a> </li>
<li><a href="#" style="background: #0d0c40">Purchase</a>
<ul>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ Domains</a>
		<ul >
			<li class="grey"><a href="service-details.html">➣ Register a Domain</a></li>
			<li class="grey"><a href="#" >➣ Bulk Domain Registration</a></li>
			<li class="grey"><a href="#" >➣ New Domain Extensions</a></li>
			<li class="grey"><a href="#" >➣ Sunrise Domains</a></li>
			<li class="grey"><a href="#" >➣ Premium Domains</a></li>
			<li class="grey"><a href="#" >➣ IDN Domain Registration</a></li>
			<li class="grey"><a href="#" >➣ Bulk Domain Transfer</a></li>
			<li class="grey"><a href="#" >➣ Free with Every Domain</a></li>
			<li class="grey"><a href="#" >➣ Name Suggestion Tool</a></li>
			<li class="grey"><a href="#" >➣ WHOIS LOOKUP</a></li>
		</ul>
	</li>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ Hosting</a>
		<ul >
			<li class="grey"><a href="service-details2.html">➣ Shared Hosting</a> </li>
			<li class="grey"><a href="#" >➣ Windows Shared Hosting</a> </li>
			<li class="grey"><a href="#" >➣ Cloud Hosting</a> </li>
			<li class="grey"><a href="#" >➣ Windows App Developmen</a> </li>
			<li class="grey"><a href="#" >➣ Windows Reseller Hosting</a> </li>
			<li class="grey"><a href="#" >➣ Wordpress Hosting</a> </li>
			<li class="grey"><a href="#" >➣ Drupal Hosting</a> </li>
			<li class="grey"><a href="#" >➣ Joomla Hosting</a> </li>
		</ul>
	</li>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ Server</a>
		<ul >
			<li class="grey"><a href="service-details3.html">➣ VPS Server</a> </li>
			<li class="grey"><a href="#" >➣ Plesk VPS Server</a> </li>
			<li class="grey"><a href="#" >➣ Bluehost VPS</a> </li>
			<li class="grey"><a href="#" >➣ Dedicated Server</a> </li>
			<li class="grey"><a href="#" >➣ Windows Dedicated Server</a> </li>
			<li class="grey"><a href="#" >➣ Managed Server</a> </li>
		</ul>
	</li>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ Professional Emails</a>
		<ul >
			<li class="grey"><a href="service-details4.html">➣ Business Mails </a> </li>
			<li class="grey"><a href="#" >➣ Web Mail</a> </li>
			<li class="grey"><a href="#" >➣ Enterprise Mail</a> </li>
			<li class="grey"><a href="#" >➣ G Suite</a> </li>
		</ul>
	</li>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ And Many More</a>
		<ul >
			<li class="grey"><a href="#" >➣ Website Backup</a> </li>
			<li class="grey"><a href="service-details4.html">➣ SSL Certificate </a> </li>
			<li class="grey"><a href="#" >➣ Website Security</a> </li>
			<li class="grey"><a href="#" >➣ Domain Reseller</a> </li>
			<li class="grey"><a href="#" >➣ Domain Registration</a> </li><li><a href="#" >Bulk SMS</a> </li>
		</ul>
	</li>
</ul>
</li>
<li><a href="#" style="background: #0d0c40">Growth and Outreach</a>
	<ul>
		<li class="grey"><a href="pricing.html">➣ Purchase Popular Social Media Pages</a></li>
		<li class="grey"><a href="service.html">➣ PR promotion</a></li>
		<li class="grey"><a href="typography.html">➣ Email Marketing</a></li>
		<li class="grey"><a href="button.html">➣ Promote on renowned pages</a></li>
	</ul>
</li>
<li><a href="#">Hiring</a> </li>
<li><a href="#" style="background: #0d0c40">Reach Us</a>
	<ul>
		<li class="grey"><a href="contact-us.php">➣ Contact Us</a></li>
		<li class="grey"><a href="hiring.php">➣ Hiring</a></li>
		<li class="grey"><a href="partner-with-us.php">➣ Partner with us</a></li>
		<li class="grey"><a href="collaboration.php">➣ Looking for Collaboration</a></li>
		<li class="grey"><a href="quotation.php">➣ Ask for Quotation</a></li>
	</ul>
</li>


</ul>

</nav>
<!--Mobile contact-->

		  </header>
<!--End Header -->