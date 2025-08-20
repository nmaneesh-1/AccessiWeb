<?php include '../includes/_head.php'?>
<div class="reports-dashboard">
        <div class="dashboard-header">
            <div class="search-container">
                <svg class="search-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
                <input type="text" class="search-input" placeholder="Search reports">
            </div>
            <div class="filter-controls">
                <select class="filter-dropdown date-filter">
                    <option>Date</option>
                    <option>Last 7 days</option>
                    <option>Last 30 days</option>
                    <option>Last 90 days</option>
                </select>
                <select class="filter-dropdown issue-type-filter">
                    <option>Issue Type</option>
                    <option>Security Issues</option>
                    <option>Performance Issues</option>
                    <option>Accessibility Issues</option>
                </select>
            </div>
        </div>

        <!-- Desktop Table View -->
        <div class="reports-table-container">
            <table class="reports-table">
                <thead class="table-header">
                    <tr>
                        <th class="table-header-cell">URL</th>
                        <th class="table-header-cell">Date</th>
                        <th class="table-header-cell">Summary</th>
                        <th class="table-header-cell">Export</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td class="table-cell site-url">example.com</td>
                        <td class="table-cell report-date">2024-01-15</td>
                        <td class="table-cell issues-summary has-issues">12 issues found</td>
                        <td class="table-cell">
                            <div class="export-options">
                                <a href="#" class="export-link">PDF</a>
                                <a href="#" class="export-link">JSON</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell site-url">sample-site.org</td>
                        <td class="table-cell report-date">2024-02-20</td>
                        <td class="table-cell issues-summary has-issues">5 issues found</td>
                        <td class="table-cell">
                            <div class="export-options">
                                <a href="#" class="export-link">PDF</a>
                                <a href="#" class="export-link">JSON</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell site-url">test-page.net</td>
                        <td class="table-cell report-date">2024-03-05</td>
                        <td class="table-cell issues-summary no-issues">No issues found</td>
                        <td class="table-cell">
                            <div class="export-options">
                                <a href="#" class="export-link">PDF</a>
                                <a href="#" class="export-link">JSON</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell site-url">demo-website.com</td>
                        <td class="table-cell report-date">2024-04-10</td>
                        <td class="table-cell issues-summary has-issues">8 issues found</td>
                        <td class="table-cell">
                            <div class="export-options">
                                <a href="#" class="export-link">PDF</a>
                                <a href="#" class="export-link">JSON</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell site-url">another-site.org</td>
                        <td class="table-cell report-date">2024-05-18</td>
                        <td class="table-cell issues-summary has-issues">3 issues found</td>
                        <td class="table-cell">
                            <div class="export-options">
                                <a href="#" class="export-link">PDF</a>
                                <a href="#" class="export-link">JSON</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="reports-cards">
            <div class="report-card">
                <div class="card-header">
                    <div class="card-site-url">example.com</div>
                    <div class="card-date">2024-01-15</div>
                </div>
                <div class="card-summary has-issues">12 issues found</div>
                <div class="card-export">
                    <span class="card-export-label">Export:</span>
                    <a href="#" class="export-link">PDF</a>
                    <a href="#" class="export-link">JSON</a>
                </div>
            </div>

            <div class="report-card">
                <div class="card-header">
                    <div class="card-site-url">sample-site.org</div>
                    <div class="card-date">2024-02-20</div>
                </div>
                <div class="card-summary has-issues">5 issues found</div>
                <div class="card-export">
                    <span class="card-export-label">Export:</span>
                    <a href="#" class="export-link">PDF</a>
                    <a href="#" class="export-link">JSON</a>
                </div>
            </div>

            <div class="report-card">
                <div class="card-header">
                    <div class="card-site-url">test-page.net</div>
                    <div class="card-date">2024-03-05</div>
                </div>
                <div class="card-summary no-issues">No issues found</div>
                <div class="card-export">
                    <span class="card-export-label">Export:</span>
                    <a href="#" class="export-link">PDF</a>
                    <a href="#" class="export-link">JSON</a>
                </div>
            </div>

            <div class="report-card">
                <div class="card-header">
                    <div class="card-site-url">demo-website.com</div>
                    <div class="card-date">2024-04-10</div>
                </div>
                <div class="card-summary has-issues">8 issues found</div>
                <div class="card-export">
                    <span class="card-export-label">Export:</span>
                    <a href="#" class="export-link">PDF</a>
                    <a href="#" class="export-link">JSON</a>
                </div>
            </div>

            <div class="report-card">
                <div class="card-header">
                    <div class="card-site-url">another-site.org</div>
                    <div class="card-date">2024-05-18</div>
                </div>
                <div class="card-summary has-issues">3 issues found</div>
                <div class="card-export">
                    <span class="card-export-label">Export:</span>
                    <a href="#" class="export-link">PDF</a>
                    <a href="#" class="export-link">JSON</a>
                </div>
            </div>
        </div>
    </div>
<?php include '../includes/_footer.php'?>