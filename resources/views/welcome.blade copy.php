<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Job Details</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f6f8;
    }

    .job-container {
      max-width: 800px;
      margin: 40px auto;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }

    .job-title {
      font-size: 28px;
      font-weight: bold;
      color: #333;
    }

    .company-location {
      font-size: 16px;
      color: #666;
      margin-bottom: 20px;
    }

    .section-title {
      font-size: 18px;
      font-weight: 600;
      margin-top: 25px;
      margin-bottom: 10px;
      color: #444;
    }

    .job-description,
    .job-skills {
      font-size: 15px;
      color: #555;
      line-height: 1.6;
    }

    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 10px;
    }

    .skill {
      background-color: #e1ecf4;
      color: #0366d6;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 14px;
    }

    .apply-button {
      margin-top: 30px;
      display: inline-block;
      background-color: #007bff;
      color: #fff;
      padding: 12px 25px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .apply-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="job-container">
    <div class="job-title">Frontend Web Developer</div>
    <div class="company-location">TechCorp Ltd. – Dhaka, Bangladesh</div>

    <div class="section-title">Job Description</div>
    <div class="job-description">
      We are looking for a skilled Frontend Web Developer to join our growing team. You will be responsible for building and maintaining responsive, user-friendly web applications.
    </div>

    <div class="section-title">Skills Required</div>
    <div class="skills-list">
      <div class="skill">HTML</div>
      <div class="skill">CSS</div>
      <div class="skill">JavaScript</div>
      <div class="skill">Vue.js</div>
      <div class="skill">REST APIs</div>
    </div>

    <div class="section-title">Additional Information</div>
    <div class="job-skills">
      <ul>
        <li>Minimum 2 years of experience</li>
        <li>Remote work flexibility</li>
        <li>Attractive salary and yearly bonuses</li>
      </ul>
    </div>

    <a href="#" class="apply-button">Apply Now</a>
  </div>
</body>
</html>
