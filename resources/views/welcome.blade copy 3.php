<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Job Details & Applicants</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
    }

    .job-box {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }

    .job-title {
      font-size: 26px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .company-location {
      color: #666;
      font-size: 16px;
      margin-bottom: 20px;
    }

    .section-title {
      font-size: 20px;
      font-weight: 600;
      margin-top: 30px;
      margin-bottom: 15px;
      color: #333;
    }

    .description {
      line-height: 1.6;
      color: #444;
    }

    .applicant-list {
      background-color: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .applicant-item {
      border-bottom: 1px solid #eee;
      padding: 15px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .applicant-item:last-child {
      border-bottom: none;
    }

    .applicant-details {
      flex: 1;
    }

    .applicant-name {
      font-weight: bold;
      color: #007bff;
    }

    .applicant-email {
      color: #666;
    }

    .applicant-actions a {
      text-decoration: none;
      background-color: #28a745;
      color: white;
      padding: 8px 14px;
      border-radius: 5px;
      margin-left: 10px;
      font-size: 14px;
    }

    .applicant-actions a:hover {
      background-color: #218838;
    }

    .no-applicants {
      text-align: center;
      color: #999;
      padding: 20px;
    }
  </style>
</head>
<body>

  <div class="container">

    <!-- Job Description -->
    <div class="job-box">
      <div class="job-title">Frontend Developer</div>
      <div class="company-location">TechCorp Ltd. – Dhaka, Bangladesh</div>

      <div class="section-title">Job Description</div>
      <div class="description">
        We are looking for a talented Frontend Developer with experience in HTML, CSS, and Vue.js. The ideal candidate will be responsible for building modern, responsive web interfaces.
      </div>

      <div class="section-title">Requirements</div>
      <ul class="description">
        <li>2+ years of frontend experience</li>
        <li>Proficiency in HTML, CSS, and JavaScript</li>
        <li>Experience with Vue.js or React</li>
      </ul>
    </div>

    <!-- Candidate List -->
    <div class="applicant-list">
      <div class="section-title">Applicants</div>

      <!-- Example applicant -->
      <div class="applicant-item">
        <div class="applicant-details">
          <div class="applicant-name">Qayum Hasan</div>
          <div class="applicant-email">qayum@example.com</div>
        </div>
        <div class="applicant-actions">
          <a href="#">View Resume</a>
          <a href="#">Contact</a>
        </div>
      </div>

      <div class="applicant-item">
        <div class="applicant-details">
          <div class="applicant-name">Fatema Akter</div>
          <div class="applicant-email">fatema@example.com</div>
        </div>
        <div class="applicant-actions">
          <a href="#">View Resume</a>
          <a href="#">Contact</a>
        </div>
      </div>

      <!-- If no applicants -->
      <!-- <div class="no-applicants">No applications received yet.</div> -->

    </div>
  </div>

</body>
</html>
