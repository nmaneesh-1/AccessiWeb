<?php include '../includes/_head.php'?>
<div class="profile-settings-container">
        <div class="settings-header">
            <h1 class="profile-title">Profile Settings</h1>
        </div>
        
        <form class="profile-form-section">
            <div class="email-field-group">
                <label class="email-label" for="email">Email</label>
                <input type="email" id="email" class="email-input" placeholder="Enter your email">
            </div>
            
            <div class="password-field-group">
                <label class="password-label" for="password">Password</label>
                <input type="password" id="password" class="password-input" placeholder="Enter your password">
            </div>
            
            <button type="submit" class="profile-update-button">Update Profile</button>
        </form>
        
        <div class="notification-preferences-section">
            <h2 class="notification-preferences-title">Notification Preferences</h2>
            
            <div class="accessibility-notification-group">
                <label class="accessibility-issues-checkbox">
                    <input type="checkbox" checked>
                    <span class="accessibility-checkbox-custom"></span>
                </label>
                <label class="accessibility-notification-text" for="accessibility-issues">
                    Receive email notifications for new accessibility issues found in your analyses.
                </label>
            </div>
            
            <div class="updates-notification-group">
                <label class="updates-announcements-checkbox">
                    <input type="checkbox">
                    <span class="updates-checkbox-custom"></span>
                </label>
                <label class="updates-notification-text" for="updates-announcements">
                    Receive email notifications for updates and announcements from AccessiCheck.
                </label>
            </div>
        </div>
    </div>
<?php include '../includes/_footer.php'?>