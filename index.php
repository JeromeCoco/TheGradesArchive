<?php include('header.php'); ?>

<div class="home-wrapper">
    <div class="login-form-wrapper show-entry-panel">
        <div class="login-form-title">The Grades Archive</div>
        <div class="login-form-subtitle">Log in to your channel.</div>
        <div class="login-field-wrapper">
            <div class="field-label">Username</div>
            <div class="field-input">
                <input type="text" name="username">
            </div>
        </div>
        <div class="login-field-wrapper">
            <div class="field-label">Password</div>
            <div class="field-input">
                <input type="password" name="password">
            </div>
        </div>
        <div class="login-field-wrapper">
            <div class="field-input login-submit-wrapper">
                <button type="button">Log In</button>
            </div>
        </div>
        <div class="sign-up-option-wrapper">
            <hr>
            <div class="sign-up-text">OR</div>
            <div class="sign-up-link">
                <a href="#" title="Create your channel now!">Create a New Channel!</a>
            </div>
        </div>
    </div>
    <div class="signup-form-wrapper">
        <div class="signup-form-title">
            Welcome to
            <div>The Grades Archive</div>
        </div>
        <div class="signup-form-subtitle">You can sign up from here...</div>
        <div class="signup-tab-control">
            <div class="signup-tab-item tab-item-user-level tab-active">
                <div class="signup-step-user-level">
                    <div class="signup-step-user-level-title">I am a...</div>
                    <div class="signup-step-user-level-option">
                        <div class="signup-step-user-level-option-item" data-next-step="signup-step-students">Student / Alumnus</div>
                        <div class="signup-step-user-level-option-item" data-next-step="signup-step-teachers">Teacher / Instructor</div>
                        <div class="signup-step-user-level-option-item" data-next-step="signup-step-school-admin">School Administrator</div>
                    </div>
                </div>
            </div>
            <div class="signup-tab-item tab-item-students" data-step-id="signup-step-students">
                <div class="signup-step-form">
                    <div class="signup-field">
                        <div class="signup-label">Student ID</div>
                        <div class="signup-control">
                            <input type="text" name="student-id">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Full Name</div>
                        <div class="signup-control">
                            <input type="text" name="student-full-name">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Preferred Username</div>
                        <div class="signup-control">
                            <input type="text" name="student-preferred-username">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Preferred Password</div>
                        <div class="signup-control">
                            <input type="password" name="student-preferred-passsword">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">School Channel ID</div>
                        <div class="signup-control">
                            <input type="text" name="student-school-channel-id">
                        </div>
                    </div>
                    <div class="signup-field signup-field-submit">
                        <button class="signup-back" type="button">Back</button>
                        <button class="signup-submit-student" type="button">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="signup-tab-item tab-item-teachers" data-step-id="signup-step-teachers">
                <div class="signup-step-teachers-form">
                    <div class="signup-field">
                        <div class="signup-label">Full Name</div>
                        <div class="signup-control">
                            <input type="text" name="teachers-full-name">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Title</div>
                        <div class="signup-control">
                            <input type="text" name="teachers-title">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Preferred Username</div>
                        <div class="signup-control">
                            <input type="text" name="teachers-preferred-username">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Preferred Password</div>
                        <div class="signup-control">
                            <input type="passsword" name="teachers-preferred-passsword">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">School Channel ID</div>
                        <div class="signup-control">
                            <input type="text" name="teachers-school-channel-id">
                        </div>
                    </div>
                    <div class="signup-field signup-field-submit">
                        <button class="signup-back" type="button">Back</button>
                        <button class="signup-submit-teacher" type="button">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="signup-tab-item tab-item-school-admin" data-step-id="signup-step-school-admin">
                <div class="signup-step-school-admin-form">
                    <div class="signup-field">
                        <div class="signup-label">Full Name</div>
                        <div class="signup-control">
                            <input type="text" name="school-admin-full-name">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Title</div>
                        <div class="signup-control">
                            <input type="text" name="school-admin-title">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Email Address</div>
                        <div class="signup-control">
                            <input type="text" name="school-admin-email-address">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Preferred Username</div>
                        <div class="signup-control">
                            <input type="text" name="school-admin-preferred-username">
                        </div>
                    </div>
                    <div class="signup-field">
                        <div class="signup-label">Preferred Password</div>
                        <div class="signup-control">
                            <input type="text" name="school-admin-preferred-passsword">
                        </div>
                    </div>
                    <div class="signup-field signup-field-submit">
                        <button class="signup-back" type="button">Back</button>
                        <button class="signup-submit-school-admin" type="button">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-wrapper">
        <nav>
            <ul>
                <li class="nav-hidden">
                    <a href="http://localhost/TheGradesArchive/">Already have an account?</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Support</a>
                </li>
                <li>
                    <a href="#">Get In Touch</a>
                </li>
                <li>
                    <a href="#">Privacy Policy</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<?php include('footer.php'); ?>