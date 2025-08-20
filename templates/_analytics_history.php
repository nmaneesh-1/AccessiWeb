<?php include '../includes/_head.php' ?>
 <div class="analysis-history-container">
        <!-- Desktop Table View -->
        <div class="analysis-history-table-wrapper">
            <table class="analysis-history-table">
                <thead class="analysis-table-header">
                    <tr class="analysis-table-header-row">
                        <th class="url-header-cell">URL</th>
                        <th class="date-header-cell">Date</th>
                        <th class="summary-header-cell">Summary</th>
                        <th class="action-header-cell"></th>
                    </tr>
                </thead>
                <tbody class="analysis-table-body">
                    <tr class="analysis-data-row">
                        <td class="website-url-cell">
                            <span class="website-url">example.com</span>
                        </td>
                        <td class="scan-date-cell">
                            <span class="scan-date">2024-01-15</span>
                        </td>
                        <td class="issues-summary-cell">
                            <span class="issues-summary has-issues">12 issues found</span>
                        </td>
                        <td class="report-action-cell">
                            <a href="#" class="view-report-link">View Report</a>
                        </td>
                    </tr>
                    <tr class="analysis-data-row">
                        <td class="website-url-cell">
                            <span class="website-url">sample-site.org</span>
                        </td>
                        <td class="scan-date-cell">
                            <span class="scan-date">2024-02-20</span>
                        </td>
                        <td class="issues-summary-cell">
                            <span class="issues-summary has-issues">5 issues found</span>
                        </td>
                        <td class="report-action-cell">
                            <a href="#" class="view-report-link">View Report</a>
                        </td>
                    </tr>
                    <tr class="analysis-data-row">
                        <td class="website-url-cell">
                            <span class="website-url">test-page.net</span>
                        </td>
                        <td class="scan-date-cell">
                            <span class="scan-date">2024-03-05</span>
                        </td>
                        <td class="issues-summary-cell">
                            <span class="issues-summary no-issues">No issues found</span>
                        </td>
                        <td class="report-action-cell">
                            <a href="#" class="view-report-link">View Report</a>
                        </td>
                    </tr>
                    <tr class="analysis-data-row">
                        <td class="website-url-cell">
                            <span class="website-url">demo-website.com</span>
                        </td>
                        <td class="scan-date-cell">
                            <span class="scan-date">2024-04-10</span>
                        </td>
                        <td class="issues-summary-cell">
                            <span class="issues-summary has-issues">8 issues found</span>
                        </td>
                        <td class="report-action-cell">
                            <a href="#" class="view-report-link">View Report</a>
                        </td>
                    </tr>
                    <tr class="analysis-data-row">
                        <td class="website-url-cell">
                            <span class="website-url">another-site.org</span>
                        </td>
                        <td class="scan-date-cell">
                            <span class="scan-date">2024-05-18</span>
                        </td>
                        <td class="issues-summary-cell">
                            <span class="issues-summary has-issues">3 issues found</span>
                        </td>
                        <td class="report-action-cell">
                            <a href="#" class="view-report-link">View Report</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="analysis-history-cards">
            <div class="analysis-history-card">
                <div class="analysis-card-header">
                    <div class="card-website-url">example.com</div>
                    <div class="card-scan-date">2024-01-15</div>
                </div>
                <div class="card-issues-summary has-issues">12 issues found</div>
                <div class="card-view-report">
                    <a href="#" class="card-view-report-link">View Report</a>
                </div>
            </div>

            <div class="analysis-history-card">
                <div class="analysis-card-header">
                    <div class="card-website-url">sample-site.org</div>
                    <div class="card-scan-date">2024-02-20</div>
                </div>
                <div class="card-issues-summary has-issues">5 issues found</div>
                <div class="card-view-report">
                    <a href="#" class="card-view-report-link">View Report</a>
                </div>
            </div>

            <div class="analysis-history-card">
                <div class="analysis-card-header">
                    <div class="card-website-url">test-page.net</div>
                    <div class="card-scan-date">2024-03-05</div>
                </div>
                <div class="card-issues-summary no-issues">No issues found</div>
                <div class="card-view-report">
                    <a href="#" class="card-view-report-link">View Report</a>
                </div>
            </div>

            <div class="analysis-history-card">
                <div class="analysis-card-header">
                    <div class="card-website-url">demo-website.com</div>
                    <div class="card-scan-date">2024-04-10</div>
                </div>
                <div class="card-issues-summary has-issues">8 issues found</div>
                <div class="card-view-report">
                    <a href="#" class="card-view-report-link">View Report</a>
                </div>
            </div>

            <div class="analysis-history-card">
                <div class="analysis-card-header">
                    <div class="card-website-url">another-site.org</div>
                    <div class="card-scan-date">2024-05-18</div>
                </div>
                <div class="card-issues-summary has-issues">3 issues found</div>
                <div class="card-view-report">
                    <a href="#" class="card-view-report-link">View Report</a>
                </div>
            </div>
        </div>

       

        <!-- Empty State (hidden by default) -->
        <div class="analysis-history-empty" style="display: none;">
            <div class="empty-state-icon">📊</div>
            <div class="empty-state-title">No Analysis History</div>
            <div class="empty-state-description">
                Your accessibility analysis history will appear here once you start scanning websites.
            </div>
        </div>
    </div>
<?php include '../includes/_footer.php' ?>