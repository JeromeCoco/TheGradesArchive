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
            <div class="signup-tab-item tab-item-1">
                <div class="signup-step-1">
                    <div class="signup-step-1-title">I am a...</div>
                    <div class="signup-step-1-user-level-option">
                        <div class="signup-step-1-user-level-option-item">Student / Alumnus</div>
                        <div class="signup-step-1-user-level-option-item">Teacher / Instructor</div>
                        <div class="signup-step-1-user-level-option-item">School Administrator</div>
                    </div>
                </div>
            </div>
            <div class="signup-tab-item tab-item-2">
                <div class="signup-step-2"></div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>