    <?php include '../includes/_head.php'?>
<div class="container">
        <div class="header">
            <h1 class="title">Accessibility Report for example.com</h1>
        </div>
        
        <div class="last-scanned">Last scanned on January 15, 2024</div>

        <div class="metrics-grid">
            <div class="metric-card">
                <div class="metric-label">Accessibility Score</div>
                <div class="metric-value">85/100</div>
            </div>
            <div class="metric-card">
                <div class="metric-label">Issues Found</div>
                <div class="metric-value">42</div>
            </div>
            <div class="metric-card">
                <div class="metric-label">Pages Scanned</div>
                <div class="metric-value">1</div>
            </div>
        </div>

        <h2 class="section-title">Issues by Severity</h2>
        <div class="severity-list">
            <div class="severity-item">
                <div class="severity-icon critical">!</div>
                <div class="severity-content">
                    <div class="severity-title">Critical (5)</div>
                    <div class="severity-description">Requires immediate attention to ensure basic accessibility standards are met.</div>
                </div>
            </div>
            <div class="severity-item">
                <div class="severity-icon serious">!</div>
                <div class="severity-content">
                    <div class="severity-title">Serious (12)</div>
                    <div class="severity-description">Significantly impacts accessibility and should be addressed promptly.</div>
                </div>
            </div>
            <div class="severity-item">
                <div class="severity-icon moderate">!</div>
                <div class="severity-content">
                    <div class="severity-title">Moderate (18)</div>
                    <div class="severity-description">Affects accessibility for some users; should be fixed as part of ongoing improvements.</div>
                </div>
            </div>
            <div class="severity-item">
                <div class="severity-icon minor">!</div>
                <div class="severity-content">
                    <div class="severity-title">Minor (7)</div>
                    <div class="severity-description">Minor issues that may affect a small number of users or have minimal impact.</div>
                </div>
            </div>
        </div>

        <h2 class="section-title">Issue Details</h2>
        <div class="issues-list">
            <div class="issue-item">
                <div class="issue-header" onclick="toggleIssue(this)">
                    <div class="issue-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V5H19V19ZM17 12H7V10H17V12Z"/>
                        </svg>
                    </div>
                    <div class="issue-content">
                        <div class="issue-title">Missing alt attribute on image</div>
                        <div class="issue-location">Line 26, Column 10</div>
                        <div class="issue-description">The image does not have an alt attribute, making it inaccessible to screen readers.</div>
                    </div>
                    <div class="expand-icon">▼</div>
                </div>
                <div class="issue-details">
                    <div class="issue-details-content">
                        <p>This issue affects screen reader users who rely on alternative text to understand image content. Add a descriptive alt attribute that conveys the purpose and meaning of the image.</p>
                    </div>
                </div>
            </div>

            <div class="issue-item">
                <div class="issue-header" onclick="toggleIssue(this)">
                    <div class="issue-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V5H19V19Z"/>
                        </svg>
                    </div>
                    <div class="issue-content">
                        <div class="issue-title">Unlabeled form field</div>
                        <div class="issue-location">Line 42, Column 5</div>
                        <div class="issue-description">The form field does not have a corresponding label, making it difficult for users to understand its purpose.</div>
                    </div>
                    <div class="expand-icon">▼</div>
                </div>
                <div class="issue-details">
                    <div class="issue-details-content">
                        <p>Form fields without labels create barriers for screen reader users and those with cognitive disabilities. Associate each form field with a proper label element or aria-label attribute.</p>
                    </div>
                </div>
            </div>

            <div class="issue-item">
                <div class="issue-header" onclick="toggleIssue(this)">
                    <div class="issue-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2L2 7L12 12L22 7L12 2ZM12 17.5L6.5 15L2 17L12 22L22 17L17.5 15L12 17.5Z"/>
                        </svg>
                    </div>
                    <div class="issue-content">
                        <div class="issue-title">Insufficient text contrast</div>
                        <div class="issue-location">Line 68, Column 20</div>
                        <div class="issue-description">The contrast between the text and background is insufficient, making it hard to read.</div>
                    </div>
                    <div class="expand-icon">▼</div>
                </div>
                <div class="issue-details">
                    <div class="issue-details-content">
                        <p>Text with poor contrast ratios can be difficult to read for users with visual impairments or in bright lighting conditions. Ensure a minimum contrast ratio of 4.5:1 for normal text and 3:1 for large text.</p>
                    </div>
                </div>
            </div>

            <div class="issue-item">
                <div class="issue-header" onclick="toggleIssue(this)">
                    <div class="issue-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M3.9 12C3.9 10.29 5.29 8.9 7 8.9H11V7H7C4.24 7 2 9.24 2 12S4.24 17 7 17H11V15.1H7C5.29 15.1 3.9 13.71 3.9 12ZM8 13H16V11H8V13ZM17 7H13V8.9H17C18.71 8.9 20.1 10.29 20.1 12S18.71 15.1 17 15.1H13V17H17C19.76 17 22 14.76 22 12S19.76 7 17 7Z"/>
                        </svg>
                    </div>
                    <div class="issue-content">
                        <div class="issue-title">Non-descriptive link text</div>
                        <div class="issue-location">Line 85, Column 15</div>
                        <div class="issue-description">The link text is not descriptive enough, making it difficult for users to understand where it leads.</div>
                    </div>
                    <div class="expand-icon">▼</div>
                </div>
                <div class="issue-details">
                    <div class="issue-details-content">
                        <p>Generic link text like "click here" or "read more" doesn't provide context about the link destination. Use descriptive text that clearly indicates where the link will take the user.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../includes/_footer.php'?>