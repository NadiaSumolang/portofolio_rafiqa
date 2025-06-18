
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>I'd love to hear from you</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p>Feel free to reach out to me for any questions, project collaborations, or just to say hello!</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <a href="mailto:rafiqaafaaf@gmail.com">rafiqaafaaf@gmail.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <a href="tel:+62895635349096">+62 8956-3534-9096</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p>Manado, Indonesia</p>
                        </div>
                    </div>
                </div>
                

                <div class="contact-form">
            <form id="contactForm" action="https://formspree.io/f/xjkrrwny" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject">
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Enter your message" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>

            <div id="notification" class="notification" style="display: none;">
                <i class="fas fa-check-circle"></i>
                <span></span>
            </div>
        </div>
    </div>
</section>

                     <!-- ALERT POPUP -->
    <!-- <div id="notification" class="notification success" style="display: none;">
        <i class="fas fa-check-circle"></i>
        <span>Your message has been sent successfully!</span>
    </div> -->
        <!-- ALERT POPUP -->
    <div id="notification" class="notification success" style="display: none;">
        <i class="fas fa-check-circle"></i>
        <span>Your message has been sent successfully!</span>
    </div>
                </div>
            </div>
        </div>
    </section>

